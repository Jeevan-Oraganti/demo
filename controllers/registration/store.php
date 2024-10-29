<?php


use Core\App;
use Core\Database;
use Core\Validator;


$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

// Validate email
if (!Validator::email($email)) {
    $errors['email'] = 'Please enter a valid email';
}

// Validate password length
if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please enter a valid password';
}

// If there are errors, return to the view with errors
if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

// Check if the user already exists
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

// If the user exists, return an error
if ($user) {
    return view('registration/create.view.php', [
        'errors' => ['email' => 'Email already in use.']
    ]);
} else {
    // Insert new user into the database
    $db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    // Log in the new user by fetching the user data again
    $newUser = $db->query('SELECT * FROM users WHERE email = :email', [
        'email' => $email
    ])->find();

    // Log in the user
    login($newUser);

    // Redirect to home page
    header('Location: /');
    exit();
}
