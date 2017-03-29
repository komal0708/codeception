<?php
// Here you can initialize variables that will be available to your tests
use Codeception\Util\Fixtures;
// use tests\fixtures\userfixtures;
// require_once _DIR_.'/../fixtures/userfixtures';

require_once __DIR__.'/../fixtures/userfixtures.php' ;

Fixtures::add('user1', ['username' => 'sys_admin']);
