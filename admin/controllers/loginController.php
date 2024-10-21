<?php

class LoginController
{
    public static function selectAllLogin()
    {
        $respuesta = loginModel::selectAllLogin();
        return $respuesta;
    }
}