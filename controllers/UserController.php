<?php

class UserController
{
    public function index() {
        $users = App::get('database')->all('users');

        return view('users', [
            'users' => $users
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store() {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => hash('md5',$_POST['password'])
        ]);

        return redirect('users');
    }
}