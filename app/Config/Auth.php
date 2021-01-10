<?php namespace Config;

use Myth\Auth\Config\Auth as MythAuth;

class Auth extends MythAuth {
    public $views = [
        'login'           => 'Views\login_page',
        'register'        => 'Views\register_page',
        'forgot'          => 'Views\forgot_pass',
        'reset'           => 'Myth\Auth\Views\reset',
        'emailForgot'     => 'Myth\Auth\Views\emails\forgot',
        'emailActivation' => 'Myth\Auth\Views\emails\activation',
    ];
}