<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Making Reddit SDK available to Code Igniter
 * Using Reddit PHP SDK 
 * Available at https://github.com/jcleblanc/reddit-php-sdk
 *
 * @author Germano "germanosk" Assis <germanobioinfo@gmail.com>
 */
class Reddit_sdk
{
      public function __construct()
    {
        require_once APPPATH.'third_party/reddit-php-sdk/reddit.php';
    }
}
