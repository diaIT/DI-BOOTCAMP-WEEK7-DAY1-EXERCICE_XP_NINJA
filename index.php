<?php

class User {
  public $firstName;

  public function hello() {
    echo "hello, " . $this->firstName;
      return $this;
  }
  public function register() {
    echo " >> registered";
      return $this;
  }
      
  public function mail() {
    echo " >> email sent";
      return $this;
  }
}
      
$user1 = new User();
$user1->firstName = "DIAL";
      
function test($user) {
  $user->hello()->register()->mail();
}
      
test($user1);
      