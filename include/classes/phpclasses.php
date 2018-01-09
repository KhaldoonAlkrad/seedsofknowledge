<?php

//////////////////////user
class user {

    public $id;
    public $name;
    public $email;
    public $password;
    public $role;

    public function __construct($name, $email, $password, $role) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getid() {
        return $this->id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getname() {
        return $this->name;
    }

    public function setname($name) {
        $this->id = $name;
    }

    public function getemail() {
        return $this->email;
    }

    public function setemail($email) {
        $this->id = $email;
    }

    public function getpassword() {
        return $this->password;
    }

    public function setpassword($password) {
        $this->id = $password;
    }
    
    public function getrole() {
        return $this->role;
    }

    public function setrole($role) {
        $this->id = $role;
    }

}

//////////////////////course
class course {

    public $id;
    public $name;
    public $desc;

    public function __construct($name, $desc) {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function getid() {
        return $this->id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getname() {
        return $this->name;
    }

    public function setname($name) {
        $this->id = $name;
    }

    public function getdesc() {
        return $this->desc;
    }

    public function setdesc($desc) {
        $this->id = $desc;
    }

}

//////////////////////subcourse
class subcourse {

    public $id;
    public $name;
    public $desc;
    public $courseID;

    public function __construct($name, $desc) {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function getid() {
        return $this->id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getname() {
        return $this->name;
    }

    public function setname($name) {
        $this->id = $name;
    }

    public function getdesc() {
        return $this->email;
    }

    public function setdesc($email) {
        $this->id = $email;
    }

    public function getcourseID() {
        return $this->courseID;
    }

    public function setcourseID($courseID) {
        $this->id = $courseID;
    }
}

//////////////////////lesson
class lesson {

    public $id;
    public $name;
    public $desc;
    public $subcourseID;

    public function __construct($name, $desc) {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function getid() {
        return $this->id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getname() {
        return $this->name;
    }

    public function setname($name) {
        $this->id = $name;
    }

    public function getdesc() {
        return $this->desc;
    }

    public function setdesc($desc) {
        $this->id = $desc;
    }

    public function getsubcourseID() {
        return $this->subcourseID;
    }

    public function setsubcourseID($subcourseID) {
        $this->id = $subcourseID;
    }

}

//////////////////////section
class section {

    public $id;
    public $name;
    public $letter;
    public $content;
    public $lessonID;

    public function __construct($name, $letter, $content) {
        $this->name = $name;
        $this->desc = $letter;
        $this->name = $content;
    }

    public function getid() {
        return $this->id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getname() {
        return $this->name;
    }

    public function setname($name) {
        $this->id = $name;
    }

    public function getletter() {
        return $this->letter;
    }

    public function setletter($letter) {
        $this->id = $letter;
    }

    public function getcontent() {
        return $this->content;
    }

    public function setcontent($content) {
        $this->id = $content;
    }

    public function getlessonID() {
        return $this->lessonID;
    }

    public function lessonID($lessonID) {
        $this->id = $lessonID;
    }

}

?>
