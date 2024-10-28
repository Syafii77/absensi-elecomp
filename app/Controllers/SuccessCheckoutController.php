<?php

namespace App\Controllers;

use App\Models\UserModel;

class SuccessCheckoutController extends BaseController
{
    public function index()
    {
        return view('SuccessCheckOut');
    }
}
