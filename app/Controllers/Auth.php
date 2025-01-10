<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        if ($this->request->is('post')) {
            // Handle login form submission
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // In your login method, add this condition
            if ($email === 'demo@test.com' && $password === 'demo123') {
                $userData = [
                    'id' => 1,
                    'email' => 'demo@test.com',
                    'name' => 'Demo User',
                    'logged_in' => true
                ];
                
                session()->set($userData);
                return redirect()->to('/expenses');
            }

            return redirect()->to('/expenses');
        }
        return view('auth/login');
    }

    public function register()
    {
        if ($this->request->is('post')) {
            // Handle registration form submission
            return redirect()->to('/login');
        }
        return view('auth/register');
    }

    public function logout()
    {
        // Handle logout
        return redirect()->to('/');
    }
}
