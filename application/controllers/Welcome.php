<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->library('oauth2_sdk');
            $client = new OAuth2\Client(OAuth2\RedditConfig::$CLIENT_ID, OAuth2\RedditConfig::$CLIENT_SECRET, OAuth2\Client::AUTH_TYPE_AUTHORIZATION_BASIC);
            $client->setCurlOption(CURLOPT_USERAGENT,OAuth2\RedditConfig::$USER_AGENT);

            if (!isset($_GET["code"]))
            {
                $authUrl = $client->getAuthenticationUrl(OAuth2\RedditConfig::$AUTHORIZE_URL, OAuth2\RedditConfig::$REDIRECT_URL, array("scope" => "identity", "state" => "SomeUnguessableValue"));
                header("Location: ".$authUrl);
                die("Redirect");
            }
            else
            {
                $params = array("code" => $_GET["code"], "redirect_uri" => OAuth2\RedditConfig::$REDIRECT_URL);
                $response = $client->getAccessToken(OAuth2\RedditConfig::$ACCESS_TOKEN_URL, "authorization_code", $params);

                $accessTokenResult = $response["result"];
                $client->setAccessToken($accessTokenResult["access_token"]);
                $client->setAccessTokenType(OAuth2\Client::ACCESS_TOKEN_BEARER);

                $response = $client->fetch("https://oauth.reddit.com/api/v1/me.json");

                echo('<strong>Response for fetch me.json:</strong><pre>');
                print_r($response);
                echo('</pre>');
            }

	}
        
        public function user()
        {
            $this->load->library('oauth2_sdk');
            
            $client = new OAuth2\Client(OAuth2\RedditConfig::$CLIENT_ID, OAuth2\RedditConfig::$CLIENT_SECRET, OAuth2\Client::AUTH_TYPE_AUTHORIZATION_BASIC);
            $client->setCurlOption(CURLOPT_USERAGENT,OAuth2\RedditConfig::$USER_AGENT);

            
            $params = array("code" => $_GET["code"], "redirect_uri" => OAuth2\RedditConfig::$REDIRECT_URL);
            $response = $client->getAccessToken(OAuth2\RedditConfig::$ACCESS_TOKEN_URL, "authorization_code", $params);

            $accessTokenResult = $response["result"];
            $client->setAccessToken($accessTokenResult["access_token"]);
            $client->setAccessTokenType(OAuth2\Client::ACCESS_TOKEN_BEARER);

            $response = $client->fetch("https://oauth.reddit.com/api/v1/me.json");

            echo('<strong>Response for fetch me.json:</strong><pre>');
            print_r($response);
            echo('</pre>');
            
            
        }
        
        public function newHistory(){
            $this->load->library('reddit_sdk');
            $reddit = new reddit();
            
            var_dump($reddit);
            
            var_dump($reddit->getUser());
            $title = "[7th] Shocking Pikachu Giveaway!";
            $link = "[g] Hi everyone, I started Pokemon Sun today and got hold of some Pikachus to share!";
            $subreddit = "machampgate";
            $response = $reddit->createStory($title, $link, $subreddit);
            print_r($response);
        }
}
