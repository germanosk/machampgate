<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Making Reddit SDK available to Code Igniter
 * Following Reddit PHP example
 * https://github.com/reddit/reddit/wiki/OAuth2-PHP-Example
 * using https://github.com/adoy/PHP-OAuth2
 *
 * @author Germano "germanosk" Assis <germanobioinfo@gmail.com>
 */
class Oauth2_sdk
{
      public function __construct()
    {
        require_once APPPATH.'third_party/OAuth2/RedditConfig.php';
        require_once APPPATH.'third_party/OAuth2/Client.php';
        require_once APPPATH.'third_party/OAuth2/GrantType/IGrantType.php';
        require_once APPPATH.'third_party/OAuth2/GrantType/AuthorizationCode.php';
    }
}
