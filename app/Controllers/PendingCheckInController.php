<?php

namespace App\Controllers;

use App\Models\UserModel;

class PendingCheckInController extends BaseController
{
    public function index()
    {
        return view('PendingCheckIn');
    }
}
