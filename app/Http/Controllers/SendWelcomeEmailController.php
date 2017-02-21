<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class SendWelcomeEmailController extends Controller
{
    public function index()
    {
        $data = [];
        return view('sendWelcomeEmail', $data);
    }

    public function send()
    {
        dump('Sending Email');
    }
}