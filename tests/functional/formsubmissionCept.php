<?php
  use Page\Login as LoginPage;
  $I = new FunctionalTester($scenario);
  // $I->wantTo('ensure that blank form submission results in errors');
  // $I->amOnPage('/just-another-sample/');
  // $I->see('Just Another Sample');
  // $I-> click('Submit');
  // #$I-> see('At least one field must be filled out');

  $I-> wantTo('ensure that form is succesfully submitted');
  $I-> amOnPage('/login');
 # $I->see('PCS Admin');
  $I-> fillField(LoginPage::$usernameField, 'sys_admin');
  $I-> fillField(LoginPage::$passwordField, 'p@ssw0rd1');
  // $I-> fillField('Last' , 'ra');
  $I-> click('Sign in');
  // $I-> see('Patients' , 'span');
  $I-> seeInCurrentUrl('/patients');
  $I-> seeLink('Register New Patient');
  $I-> click('Register New Patient');
  $I-> canSeeInCurrentUrl("patients/new");
  $I-> see('Patient Pre-Registration Form' , 'span#pre-registration-header');
  $I-> selectOption( '#patient_form_organizations' , 'Health Care at Home');
  $I-> selectOption('#patient_form_backoffice' , 'Delhi/NCR');
  $I-> selectOption('#patient_form_title' , 'Mr');
  $I-> fillField('First Name' , 'Rishi');
  $I-> fillField('Surname' , 'Kumar');
  $I-> selectOption('.gender', 'Male');
  #$I-> scrollTo(['css' => 'div.controls input#patient_form_date_of_birth']);
  #$I-> fillField('input#patient_form_date_of_birth.hasDatepicker','01-03-2017');
  $I-> click('input#patient_form_date_of_birth.hasDatepicker');
  $I-> fillField('input#patient_form_date_of_birth.hasDatepicker','01-03-2017');
  $I-> selectOption('.domestic' , 'true');
  $I-> fillField('Mobile No.' , '+91-9999999999');
  $I-> selectOption('#patient_form_source' , 'Nurse');
  $I-> fillField('#patient_form_home_address_address' , 'Preet Vihar');
  $I-> fillField('#patient_form_home_address_area' , 'New Delhi');
  $I-> fillField('#patient_form_home_address_pincode' , '121001');
  $I-> fillField('#patient_form_next_of_kin_name' , 'Shishir');
  $I-> fillField('#patient_form_next_of_kin_mobile_no' , '+91-1111111111' );
  $I-> selectOption('#patient_form_relation' , 'Son');
  $I-> click('Create');


