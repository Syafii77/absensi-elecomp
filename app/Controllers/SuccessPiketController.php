<?php

namespace App\Controllers;

use App\Models\UserModel;

class SuccessPiketController extends BaseController
{
    public function index()
    {
        return view('piket-form');
    }
}
