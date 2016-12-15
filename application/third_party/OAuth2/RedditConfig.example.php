<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OAuth2;

/**
 * Description of RedditConfig
 *
 * @author Germano "germanosk" Assis <germanobioinfo@gmail.com>
 */
class RedditConfig
{
     static $AUTHORIZE_URL = 'https://ssl.reddit.com/api/v1/authorize';
     static $ACCESS_TOKEN_URL = 'https://ssl.reddit.com/api/v1/access_token';
     static $CLIENT_ID = 'CLIENT_ID';
     static $CLIENT_SECRET = 'CLIENT_SECRET';
     static $USER_AGENT = 'ChangeMeClient/0.1 by YourUsername';

     static $REDIRECT_URL = "REDIRECT_URI";

}
