<?php
namespace Step\Functional;

class Login extends \FunctionalTester
{

    public function LoginasSysAdmin()
    {
        $I = $this;
        $I->amOnPage('/login');
        $I->fillField('username', 'sys_admin');
        $I->fillField('password', 'p@ssw0rd1');
        $I->click('Sign in');
    }

    public function LoginasBackofficeUser()
    {
        $I = $this;
        $I->amOnPage('/login');
        $I->fillField('username', 'komal');
        $I->fillField('password', 'komal@123');
        $I->click('Sign in');

    }

}