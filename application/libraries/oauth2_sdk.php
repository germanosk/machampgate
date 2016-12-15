<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Making Reddit SDK available to Code Igniter
 * Using Reddit PHP SDK 
 * Available at https://github.com/jcleblanc/reddit-php-sdk
 * 
 * may should switch to:
 * https://github.com/tkijewski/reddit-php-sdk
 *
 * @author Germano "germanosk" Assis <germanobioinfo@gmail.com>
 */
class Oauth2_sdk
{
      public function __construct()
    {
        require_once APPPATH.'third_party/OAuth2/Client.php';
        require_once APPPATH.'third_party/OAuth2/GrantType/IGrantType.php';
        require_once APPPATH.'third_party/OAuth2/GrantType/AuthorizationCode.php';
    }
}
