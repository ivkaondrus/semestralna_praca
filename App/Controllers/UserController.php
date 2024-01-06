<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Model;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\User;
use http\Exception;
use PDO;

class UserController extends AControllerBase
{

    public function index(): Response
    {
        // TODO: Implement index() method.
    }
}