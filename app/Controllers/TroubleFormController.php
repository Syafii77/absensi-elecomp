<?php

namespace App\Controllers;

use App\Models\UserModel;

class TroubleFormController extends BaseController
{
    public function index()
    {
        return view('trouble_form');
    }
}
