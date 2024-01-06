<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Core\Responses\ViewResponse;

/**
 * Class AuthController
 * Controller for authentication actions
 * @package App\Controllers
 */
class AuthController extends AControllerBase
{
    /**
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->redirect(Configuration::LOGIN_URL);
    }

    /**
     * Login a user
     * @return Response
     */
    public function login(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        $logged = null;
        if (isset($formData['submit'])) {
            $login = $formData['login'];
            $password = $formData['password'];
            $selected_role = $formData['role'];
            /*$hashed_password = password_hash($password, PASSWORD_BCRYPT);*/
            $logged = $this->app->getAuth()->login($login, $password, $selected_role);
            if ($logged /*&& password_verify($password, $password)*/) {
                if ($selected_role == "admin") {
                    return $this->redirect($this->url("admin.index"));
                } else {
                    return $this->redirect($this->url("customer.index"));
                }

            }
        }

        $data = ($logged === false ? ['message' => 'Zlý login alebo heslo!'] : []);
        return $this->html($data);
    }

    /**
     * Logout a user
     * @return ViewResponse
     */
    public function logout(): Response
    {
        $this->app->getAuth()->logout();
        return $this->html();
    }
}
