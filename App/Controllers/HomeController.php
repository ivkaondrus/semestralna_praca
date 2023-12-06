<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Recenzia;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }

    public function eshop(): Response
    {
        return $this->html();
    }

    public function uctovnictvo(): Response
    {
        return $this->html();
    }

    public function balikovo(): Response
    {
        return $this->html();
    }

    public function recenzie(): Response
    {
        $recenzie = Recenzia::getAll();
        return $this->html(
            [
                'recenzie' => $recenzie
            ]
        );
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */

}
