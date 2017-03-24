<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{

  public function fillFormField($name, $password){
    $I = $this->getModule('WebDriver');
    $I->fillField('Username',$name);
    $I->fillField('Password', $password);
    $I->click('Sign in');
  }
}
