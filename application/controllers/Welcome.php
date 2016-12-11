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
		$this->load->view('welcome_message');
	}
        
        public function test()
        {
            $this->load->library('reddit_sdk');
            $reddit =  new reddit();
            
            print_r($reddit->getUser());
            $title = "[7th] Shocking Pikachu Giveaway!";
            $link = "[g] Hi everyone, I started Pokemon Sun today and got hold of some Pikachus to share!";
            $subreddit = "machampgate";
            $response = $reddit->createStory($title, $link, $subreddit);
            print_r($response);
        }
        public function refresh(){
            $this->load->library('reddit_sdk');
            $reddit =  new reddit();
            $reddit =  $reddit->refreshToken();
        }
        public function user()
        {
            $this->load->library('reddit_sdk');
            $reddit =  new reddit();
            $response = $reddit->getUser();
            var_dump($response);
            
        }
}
