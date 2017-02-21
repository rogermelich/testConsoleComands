<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Console\Commands\SendWelcomeEmail;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class SendWelcomeEmailController extends Controller
{

    /**
    * @var SendWelcomeEmail
    */
    public $email;

    /**
     * SendWelcomeEmailController constructor.
     * @param SendWelcomeEmail $email
     */
    public function __construct(SendWelcomeEmail $email)
    {
        $this->email = $email;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->email->send();
    }
}