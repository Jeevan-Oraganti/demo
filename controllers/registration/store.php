<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(! Validator::email($email)) {
    $errors['email'] = 'Please enter a valid email';
}


if (! Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please enter a valid password';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$result = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();