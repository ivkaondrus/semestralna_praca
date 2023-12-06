<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\DB\Connection;
use App\Core\HTTPException;
use App\Core\Model;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
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
                'recenzia' => $recenzia
            ]
        );
    }

    public function save()
    {
        $errors = $this->formError();
        if (count($errors) > 0) {
            return $this->html(
                [
                    'errors' => $errors
                ], 'edit'
            );
        }

        $id = $this->request()->getValue('id');
        if ($id > 0) {
            $recenzia = Recenzia::getOne($id);
        } else {
            $recenzia = new Recenzia();
        }
        $recenzia->setRating($this->request()->getValue('rating'));
        $recenzia->setText($this->request()->getValue('text_r'));



        $recenzia->save();

        return $this->redirect($this->url('home.recenzie'));
    }

    public function delete()
    {
        $id = (int) $this->request()->getValue('id');
        $recenzia = Recenzia::getOne($id);
        $recenzia->delete();

        return $this->redirect($this->url('home.recenzie'));
    }

    private function formError(): array
    {
        $errors = [];
        if ($this->request()->getValue('text_r') == "") {
            $errors[] = "Pole Text príspevku je povinné!";
        }
        return $errors;
    }
}