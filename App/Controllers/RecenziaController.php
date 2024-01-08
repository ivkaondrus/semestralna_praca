<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\DB\Connection;
use App\Core\HTTPException;
use App\Core\Model;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\Recenzia;
use App\Helpers\FileStorage;
use http\Exception;
use PDO;

class RecenziaController extends AControllerBase
{
    /**
     * @inheritDoc
     */
    public function index(): Response
    {
        return $this->html();
    }

    public function authorize($action): bool
    {
        switch ($action) {
            case 'edit' :
            case 'delete' :
                // get id of recenzia to check
                $id = (int)$this->request()->getValue("id");
                // get recenzia from db
                $recenziaToCheck = Recenzia::getOne($id);
                // check if the logged login is the same as the recenzia author
                // if yes, he can edit and delete post
                return $recenziaToCheck->getAuthor() == $this->app->getAuth()->getLoggedUserName();
            case 'save':
                // get id of post to check
                $id = (int)$this->request()->getValue("id");
                if ($id > 0 ) {
                    // only author can save the edited recenzia
                    $recenziaToCheck = Recenzia::getOne($id);
                    return $recenziaToCheck->getAuthor()() == $this->app->getAuth()->getLoggedUserName();
                } else {
                    // anyone can add a new recenzia
                    return $this->app->getAuth()->isLogged();
                }
            default:
                return $this->app->getAuth()->isLogged();
        }
    }

    public function add(): Response
    {
        return $this->html();
    }

    public function edit(): Response
    {
        $id = (int)$this->request()->getValue('id');
        $recenzia = Recenzia::getOne($id);

        if (is_null($recenzia)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'recenzia' => $recenzia
            ]
        );
    }

    public function save()
    {
        $id = (int)$this->request()->getValue('id');
        $oldFileName = "";

        if ($id > 0) {
            $recenzia = Recenzia::getOne($id);
            $oldFileName = $recenzia->getPicture();
        } else {
            $recenzia = new Recenzia();
            $recenzia->setAuthor($this->app->getAuth()->getLoggedUserName());
        }
        $recenzia->setRating($this->request()->getValue('rating'));
        $recenzia->setText($this->request()->getValue('text_r'));
        $recenzia->setPicture($this->request()->getFiles()['picture']['name']);

        $formErrors = $this->formErrors();
        if (count($formErrors) > 0) {
            return $this->html(
                [
                    'recenzia' => $recenzia,
                    'errors' => $formErrors
                ], 'add'
            );
        } else {
            if ($oldFileName != "") {
                FileStorage::deleteFile($oldFileName);
            }
            $newFileName = FileStorage::saveFile($this->request()->getFiles()['picture']);
            $recenzia->setPicture($newFileName);
            $recenzia->save();
            return new RedirectResponse($this->url("home.index"));
        }
    }

    public function delete()
    {
        $id = (int)$this->request()->getValue('id');
        $recenzia = Recenzia::getOne($id);

        if (is_null($recenzia)) {
            throw new HTTPException(404);
        } else {
            FileStorage::deleteFile($recenzia->getPicture());
            $recenzia->delete();
            return new RedirectResponse($this->url("home.index"));
        }
    }

    private function formErrors(): array
    {
        $errors = [];
        if ($this->request()->getFiles()['picture']['name'] == "") {
            $errors[] = "Pole Obrázok zakúpeného produktu musí byť vyplnené!";
        }
        if ($this->request()->getValue('text_r') == "") {
            $errors[] = "Pole Text príspevku musí byť vyplnené!";
        }
        if ($this->request()->getFiles()['picture']['name'] != "" && !in_array($this->request()->getFiles()['picture']['type'], ['image/jpeg', 'image/png'])) {
            $errors[] = "Obrázok musí byť typu JPG alebo PNG!";
        }
        return $errors;
    }
}