<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email,
                ]);
                return true;
            } else {
                Session::flash('errors', ['password' => 'Incorrect password.']);
            }
        } else {
            Session::flash('errors', ['email' => 'No user found with that email.']);
        }
        return false;
    }


    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email'],
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {

        Session::destroy();
    }
}
