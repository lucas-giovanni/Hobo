<?php

// require_once 'DbConfig.php';

    class registrations{



        public function create($data){
            try{
                if($data['password'] != $data['conf-password']){
                    throw new Exception("Wachtwoorden zijn niet gelijk");
                }
                $passwordEncr = password_hash($data['password'], PASSWORD_BCRYPT, ['cost =>12']);
                $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->bindParam(":username", $data['username']);
                $stmt->bindParam(":password", $passwordEncr);
                if($stmt->execute()){
                    header("Location: login.php");
                }
            }catch(Exception $e) {
                echo $e->getMessage();
            }
        }

    public function getUsers(){
        $sql = "SELECT id, username FROM user";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function getUser ($username){
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function login($data){
        try{
            $user = $this->getUser($data['username']);
            if(!$user){
                throw new Exception("gebruiker bestaat niet. ");
            }
            if(!password_verify($data['password'], $user->password)){
                throw new Exception("wachtwoord is incorrect. ");
            }
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user->username;
            header("location: backend/admin.php");
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }


    }

    ?>
