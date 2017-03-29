<?php
  use Codeception\Util\Fixtures;
  use tests\fixtures\userfixtures;

  $I = new AcceptanceTester($scenario);
  $I-> wantTo('ensure that user is sucessfully logged in');
  $I-> amOnPage('/login');
  $I-> fillField('Username', Fixtures::get('user1'));
  $I-> fillField('Password',  Fixtures::get('password'));
  // $I-> fillField('Password',  'p@ssw0rd1');
  $I-> click('Sign in');
  $I-> see('Patients' , 'span');
  $I-> seeInCurrentUrl('/patients');
  $I-> seeLink('Register New Patient');
  $I-> click('Register New Patient');
  $I->makeScreenshot('edit_page');
  $I-> canSeeInCurrentUrl("patients/new");
  $I-> see('Patient Pre-Registration Form' , 'span#pre-registration-header');
  