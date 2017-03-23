<?php

class loginCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

   
   public function LoginWithValidCredentials($I)
    {
        $I->fillForm('sys_admin', 'p@ssw0rd1');
        $I-> see('Patients' , 'span');
        $I-> seeInCurrentUrl('/patients');
        $I-> seeLink('Register New Patient');
    }

   //  // test #2
   //  public function LoginWithInvalidCredentials($I)
   //  {
   //      $this->fillForm($I, 'sys_admin', 'password');
   //      $I->see('Please enter a valid username and password');
   //  }

   //  // common method used by both tests
   //  protected function fillForm($I, $username, $password)
   //  {
   //      $I->amOnPage('/');
   //      $I->fillField('Username', $username);
   //      $I->fillField('Password', $password);
   //      $I->click('Sign in');
   //  }

}
