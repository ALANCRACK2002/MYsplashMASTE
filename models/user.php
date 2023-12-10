<?php

namespace Models;

class user extends activeRecord{
    public static $table = 'user';
    public static $columnsDB = ['id','name','lastname','email','username','password','token','confirm'];
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $username;
    public $password;
    public $token;
    public $confirm;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? "";
        $this->lastname = $args['lastname'] ?? "";
        $this->email = $args['email'] ?? "";
        $this->username = $args['username'] ?? "";
        $this->password = $args['password'] ?? "";
        $this->password_current= $args['password_'] ?? "";
        $this->password_new = $args['password_new'] ?? "";
        $this->token = $args['token'] ?? "";
        $this->confirm = $args['confirm'] ?? "";
    }
}