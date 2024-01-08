<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\Response;
use App\Models\Recenzia;

class ProductController extends AControllerBase
{

    public function index(): Response
    {
        return $this->html();
    }

    public function add(): Response
    {
        return $this->html();
    }

    public function edit(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $product = Recenzia::getOne($id);

        if (is_null($product)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'product' => $product
            ]
        );
    }

    public function save(): Response
    {

    }

    public function delete(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $product = Recenzia::getOne($id);
        $product->delete();

        return $this->redirect($this->url('admin.index'));
    }

    private function formError(): array
    {
        $errors = [];
        if ($this->request()->getValue('name') == "") {
            $errors[] = "Pole Text príspevku je povinné!";
        }
        return $errors;
    }
}