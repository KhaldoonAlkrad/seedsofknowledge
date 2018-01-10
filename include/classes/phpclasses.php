<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//////////////////////user
class user {

    public $id = null;
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
        $this->name = $name;
    }

    public function getemail() {
        return $this->email;
    }

    public function setemail($email) {
        $this->email = $email;
    }

    public function getpassword() {
        return $this->password;
    }

    public function setpassword($password) {
        $this->password = $password;
    }

    public function getrole() {
        return $this->role;
    }

    public function setrole($role) {
        $this->role = $role;
    }

    public function checkaccountinput() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["name"])) {

                $this->setname(test_input($_POST["name"]));

                if ($this->name == "") {
                    return "name can not be empty <br>";
                }
            }


            if (isset($_POST["email"])) {
                $this->setemail(test_input($_POST["email"]));
                if ($this->email == "") {
                    return "email can not be empty";
                }
            }

            if (isset($_POST["pwd"])) {
                $this->setpassword(test_input($_POST["pwd"]));
                if ($this->password == "") {
                    return "password can not be empty";
                }
            }
            if (isset($_POST["cpwd"])) {
                $this->setpassword(test_input($_POST["cpwd"]));
                if ($this->password == "") {
                    return "password can not be empty";
                }
            }

            if ($_POST['pwd'] != $_POST['cpwd']) {
                return "passwords do not match";
            }
            if (isset($_POST["role"])) {
                $this->setrole(test_input($_POST["role"]));
            }


            if ($this->checkifaccountexist() == false) {
                return $this->addaccount();
            } else {
                return "the username or the email that you have enterd is al ready exist! Please choose another one";
            }
        }
    }

    public function checkifaccountexist() {
        $sql = "SELECT * FROM `user` WHERE `email`='.$this->email.'";
        $connection = new Database();
        $result = $connection->conn->query($sql);
        if ($result->num_rows >= 1) {
            $connection->conn->close();
            return true;
        } else {
            return false;
        }
    }

    public function addaccount() {

        $sql = "INSERT INTO `user`(`name`, `email`, `password`, `role`) VALUES";
        $sql .= " ('$this->name','$this->email','$this->password','$this->role')";
        $connection = new Database();
        $result = $connection->conn->query($sql);
        session_start();
        $_SESSION["name"] = $this->name;
        $connection->conn->close();
        header("location: login.php");
    }

    public function signin() {

        $sql = "SELECT * FROM `user` WHERE `email`= '$this->email' AND `password`= '$this->password'";
        $connection = new Database();
        $result = $connection->conn->query($sql);
        if (isset($result)) {
            if ($result->num_rows <= 0) {
                return "username or password does not match";
            } else {
                session_start();
                $row = $result->fetch_assoc();
                $_SESSION["name"] = $row['name'];
                $connection->conn->close();
                header("location: index.php");
            }
        }
    }

    public function checksignin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["email"])) {
                $this->setemail(test_input($_POST["email"]));
                if ($this->email == "") {
                    return "email can not be empty <br>";
                }
            }
            if (isset($_POST["psw"])) {
                $this->setpassword(test_input($_POST["psw"]));
                if ($this->password == "") {
                    return "password can not be empty";
                }
            }
            if ($this->email != "" && $this->password != "") {
                return $this->signin();
            }
        }
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
        $this->name = $name;
    }

    public function getdesc() {
        return $this->desc;
    }

    public function setdesc($desc) {
        $this->desc = $desc;
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
        $this->name = $name;
    }

    public function getdesc() {
        return $this->email;
    }

    public function setdesc($email) {
        $this->email = $email;
    }

    public function getcourseID() {
        return $this->courseID;
    }

    public function setcourseID($courseID) {
        $this->courseID = $courseID;
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
        $this->name = $name;
    }

    public function getdesc() {
        return $this->desc;
    }

    public function setdesc($desc) {
        $this->desc = $desc;
    }

    public function getsubcourseID() {
        return $this->subcourseID;
    }

    public function setsubcourseID($subcourseID) {
        $this->subcourseID = $subcourseID;
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
        $this->name = $name;
    }

    public function getletter() {
        return $this->letter;
    }

    public function setletter($letter) {
        $this->letter = $letter;
    }

    public function getcontent() {
        return $this->content;
    }

    public function setcontent($content) {
        $this->content = $content;
    }

    public function getlessonID() {
        return $this->lessonID;
    }

    public function lessonID($lessonID) {
        $this->lessonID = $lessonID;
    }

}

?>