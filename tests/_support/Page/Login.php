<?php
namespace Page;

class Login
{
    // include url of current page
    // public static $URL = '/login';
       // or
    const URL = '/login';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
      */
    public static $usernameField = '#username';
    public static $passwordField = '#password';
    public static $formSubmitButton = "commit";
    

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
