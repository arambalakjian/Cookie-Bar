<?php

class CookiePageExtension extends DataExtension 
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
						
					jQuery('#cookieBar a.more').click(function(e){
						e.preventDefault();
						
						if(jQuery(this).hasClass('open'))
						{
							jQuery(this).html('Show more').removeClass('open');
							jQuery('.content').slideUp();
						}
						else 
						{
							jQuery(this).html('Show less').addClass('open');
							jQuery('.content').slideDown();
						}

						return false;
					});
					
					jQuery('#acceptCookies').click(function(e){

						var ua = navigator.userAgent;
						//Check not BB (BB just uses standard non AJAX link)
					    if (!(ua.indexOf('BlackBerry') >= 0))
					    {
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
						}					
						

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