<?php

namespace App\Models;

use Database\Config\conection;
use PDO;

class Authentication
{
    private $connection;

    public function __construct()
    {
        $this->connection = conection::getPDO();
    }

    public function login($email, $password)
    {
        // Start session at the beginning
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

    
            $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute(['email' => $email]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password_hash'])) {
                $_SESSION['auth'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                return true;
            }

            return false;
      
    }

    public function register($username, $email, $password)
    {
    
            $sql = "SELECT id FROM users WHERE email = :email OR username = :username LIMIT 1";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                'email' => $email,
                'username' => $username
            ]);

            if ($stmt->fetch()) {
                return "Username or email already exists";
            }

            // Proceed with registration
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (username, email, password_hash, role) 
                   VALUES (:username, :email, :password_hash, :role)";
            
            $stmt = $this->connection->prepare($sql);
            $success = $stmt->execute([
                'username' => $username,
                'email' => $email,
                'password_hash' => $passwordHash,
                'role' => 'user' // Default role
            ]);

            return $success ? true : false;
    
    }

    public function isLoggedIn()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['auth']) && $_SESSION['auth'] === true;
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION = array();

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }

        session_destroy();
    }

    public function getUserInfo()
    {
        if (!$this->isLoggedIn()) {
            return null;
        }

        try {
            $sql = "SELECT id, username, email, role, bio, profile_picture_url 
                   FROM users WHERE id = :id LIMIT 1";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute(['id' => $_SESSION['user_id']]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error fetching user info: " . $e->getMessage());
            return null;
        }
    }
}