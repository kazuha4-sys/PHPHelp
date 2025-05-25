<?php 

namespace PHPHelp\Model;

class User {
    public $username;
    public $email;
    public $password;
    public $code;
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->code = rand(1000000, 999999);        
    }
}

?>