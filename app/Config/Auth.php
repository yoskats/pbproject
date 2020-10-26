<?php namespace Config;

use Myth\Auth\Config\Auth as MythAuth;

class Auth extends MythAuth {
    public $views = [
        'login'           => 'Myth\Auth\Views\login',
        'register'        => 'Myth\Auth\Views\register',
        'forgot'          => 'Myth\Auth\Views\forgot',
        'reset'           => 'Myth\Auth\Views\reset',
        'emailForgot'     => 'Myth\Auth\Views\emails\forgot',
        'emailActivation' => 'Myth\Auth\Views\emails\activation',
    ];
}