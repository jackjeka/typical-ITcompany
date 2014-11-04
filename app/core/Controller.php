<?php
/**
 * Created by PhpStorm.
 * User: santa
 * Date: 02.11.14
 * Time: 22:54
 */

class Controller{

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

}