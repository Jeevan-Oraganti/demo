<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = trim($_POST['email']);
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please enter a valid email';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please enter a valid password';
}

if (!empty($errors)) {
    return view('session/login.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email,
        ]);
        header('Location: /');
        exit();
    } else {
        $errors['password'] = 'Incorrect password.';
    }
} else {
    $errors['email'] = 'No user found with that email.';
}

return view('session/login.view.php', [
    'errors' => $errors
]);
