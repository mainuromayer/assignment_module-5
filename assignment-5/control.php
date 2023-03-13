<?php

class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}

require_once("index.php");

$person = new Person;
$person->setName($_POST["user_name"]);
$person->setEmail($_POST["user_email"]);

echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail();

?>
