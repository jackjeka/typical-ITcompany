<?php
/**
 * Created by PhpStorm.
 * User: santa
 * Date: 02.11.14
 * Time: 23:00
 */

class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
        $user->$name = $name;

        $this->view('home/index', ['name' => $user->name]);
    }

}