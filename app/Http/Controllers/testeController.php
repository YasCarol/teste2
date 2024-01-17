<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\testeNotification;
use Illuminate\Http\Request;

class testeController extends Controller
{
    public function teste()
    {
        dd(User::first()->notify(new testeNotification()));
    }
}
