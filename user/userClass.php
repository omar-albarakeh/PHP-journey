<?php
class user{
    public $username;
    public $password;
    public $email;

    public function __condtructor($username,$email,$password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}
?>