<?php

class CookieBarController extends Page_Controller
{
	const URLSegment = "cookiebar";

	static $allowed_actions = array(
		"accept"
	);

	public function accept()
	{
		if(!$cookie = Cookie::get('cookiesAccepted'))
		{
			$cookie = new Cookie();	
		}

		$cookie->set('cookiesAccepted', 'true', 1000);

		if(Director::is_ajax())
		{	
			echo 'success';
			return;
		}
		else 
		{
			return $this->redirect();
		}
	}
}
