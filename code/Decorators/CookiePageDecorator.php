<?php

class CookiePageDecorator extends DataObjectDecorator 
{
	/**
	 * Check whether the user has accepted the cookie complience message 
	 * 
	 * @return Boolean
	 */
	public function ShowCookieBar()
	{
		if(SiteConfig::current_site_config()->CookieBarEnable && (!Cookie::get('cookiesAccepted') || Cookie::get('cookiesAccepted') != 'true'))
		{
			//include the cookiebar css
			Requirements::css(MOD_CB_DIR . '/css/CookieBar.css');
			//add ajax to the accept button
			Requirements::customScript("
				jQuery(document).ready(function(){
					jQuery('#acceptCookies').click(function(e){
						e.preventDefault();

						jQuery.ajax({

							url: '" . $this->getAcceptCookiesLink() . "',
            				success: function(data, textStatus)
            				{
            					if(data === 'success')
            					{ 
            						jQuery('#cookieBar').slideUp(500);
            					}
							}
						});
					});
				});
			");
			
			return TRUE;
		}
	}

	/**
	 * Generate link to accept cookies 
	 * 
	 * @return String
	 */
	public function getAcceptCookiesLink()
	{
		return Director::baseURL() . CookieBarController::URLSegment . '/accept';
	}
}