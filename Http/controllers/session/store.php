<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }

    $form->errors()['email'] = 'No user found with this email and password combination.';
}

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $_POST['email']
]);

return redirect('/login');
