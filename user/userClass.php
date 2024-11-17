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
    //12 characters - 1 uppercase - 1 lower case -1 special character-validate_email

   public static function check_password($password) {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{12,}$/', $password);
    }

    public static function validate_email1($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public static function validate_email2($email) {
    $pattern = '/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email) === 1;
}

      public function copy_with($params = []) {
        $newUsername = $params['username'] ?? $this->username;
        $newEmail = $params['email'] ?? $this->email;
        $newPassword = $params['password'] ?? $this->password;

        return new User($newUsername, $newEmail, $newPassword);
    
}
 public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}

?>