<?php
use Page\Login as LoginPage;
use Step\Functional\Login as UserRoleLogin;


class loginCest
{
    public function _before(FunctionalTester $I)
    {
        // $I->amOnPage('/');
        // or
        // $I->amOnPage(LoginPage::$URL); if declared variable public static in page/login.php
        $I->amOnPage(LoginPage::URL); // if declared variable constant in page/login.php
    }
  




   // public function _after(FunctionalTester $I)
    // {
    // }

    // tests
    // public function tryToTest(FunctionalTester $I)
    // {
    // }
   public function LoginWithValidCredentials($I)
    {
        $I->fillFormField('sys_admin', 'p@ssw0rd1');
        $I->see('Patients' , 'span');
        $I->seeInCurrentUrl('/patients');
        $I->seeLink('Register New Patient');
    }

    // test #2
    public function LoginWithInvalidCredentials($I)
    {
        // $I->fillFormField('sys_admin', 'password');
        $I-> fillField(LoginPage::$usernameField, 'sys_admin');
        $I-> fillField(LoginPage::$passwordField, 'password');
        $I->click(LoginPage::$formSubmitButton);
        $I->see('Please enter a valid username and password');
    }

    public function LoginWithSystemAdmin(UserRoleLogin $I)
    {
      // $I = new UserRoleLogin($scenario);
      $I->LoginasSysAdmin();
      $I->see('Patients' , 'span');
      $I->seeInCurrentUrl('/patients');
      $I->seeLink('Register New Patient');
    }
    
     public function LoginWithBackofficeUser(UserRoleLogin $I)
    { 
      // $I = new UserRoleLogin(;
      $I->LoginasBackofficeUser();
      $I->see('Service Packages' , 'span');
      $I->seeInCurrentUrl('/cet');
    }


    // common method used by both tests
    // protected function fillForm($I, $username, $password)
    // {
      
    //     $I->fillField('Username', $username);
    //     $I->fillField('Password', $password);
    //     $I->click('Sign in');
    // }

}
