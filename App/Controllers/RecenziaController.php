<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\DB\Connection;
use App\Core\HTTPException;
use App\Core\Model;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Helpers\FileStorage;
use App\Models\Post;
use App\Models\Recenzia;
use http\Exception;
use PDO;

class RecenziaController extends AControllerBase
{
    /**
     * @inheritDoc
     */
    public function index(): Response
    {
    }

    public function add(): Response
    {
        return $this->html();
    }

    public function edit(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $recenzia = Recenzia::getOne($id);

        if (is_null($recenzia)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'recenzie' => $recenzia
            ]
        );
    }

    public function save()
    {
        $id = (int)$this->request()->getValue('id');
        $oldFileName = "";

        if ($id > 0) {
            $recenzia = Recenzia::getOne($id);
            $oldFileName = $recenzia->getObrazok();
        } else {
            $recenzia = new Recenzia();
        }
        $recenzia->getPrihlasenyUsername($this->request()->getValue('prihlaseny_username'));
        $recenzia->getText($this->request()->getValue('text'));
        $recenzia->setObrazok($this->request()->getFiles()['picture']['name']);

        $formErrors = $this->formErrors();
        if (count($formErrors) > 0) {
            return $this->html(
                [
                    'recenzie' => $recenzia,
                    'errors' => $formErrors
                ], 'add'
            );
        } else {
            if ($oldFileName != "") {
                FileStorage::deleteFile($oldFileName);
            }
            $newFileName = FileStorage::saveFile($this->request()->getFiles()['picture']);
            $recenzia->setObrazok($newFileName);
            $recenzia->save();
            return new RedirectResponse($this->url("home.index"));
        }
    }

    public function delete()
    {
        $id = (int) $this->request()->getValue('id');
        $recenzia = Recenzia::getOne($id);

        if (is_null($recenzia)) {
            throw new HTTPException(404);
        } else {
            FileStorage::deleteFile($recenzia->getObrazok());
            $recenzia->delete();
            return new RedirectResponse($this->url("home.index"));
        }
    }

    private function formErrors(): array
    {
        $errors = [];
        if ($this->request()->getFiles()['picture']['name'] == "") {
            $errors[] = "Pole Obrázok obdržaného produktu musí byť vyplnené!";
        }
        if ($this->request()->getValue('text') == "") {
            $errors[] = "Pole Text príspevku musí byť vyplnené!";
        }
        if ($this->request()->getValue('prihlaseny_username') == "") {
            $errors[] = "Pole Užívateľské meno musí byť vyplnené!";
        }
        if ($this->request()->getFiles()['picture']['name'] != "" && !in_array($this->request()->getFiles()['picture']['type'], ['image/jpeg', 'image/png'])) {
            $errors[] = "Obrázok musí byť typu JPG alebo PNG!";
        }
        if ($this->request()->getValue('text') != "" && strlen($this->request()->getValue('text') < 5)) {
            $errors[] = "Počet znakov v text príspevku musí byť viac ako 5!";
        }
        return $errors;
    }
}