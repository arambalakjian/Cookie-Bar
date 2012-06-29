<?php
/****************
 * 
 * Add cookie config options to site config
 *
 * Aab Web
 * www.aabweb.co.uk
 * 
 * author: Craig Ballantyne
 * date: 27.06.2012
 * version: 1.0.0
 */
class CookieSiteConfig extends DataObjectDecorator 
{
	function extraStatics() {
		return array(
			'db' => array(
				'CookieBarContent' => 'HTMLText',
				'CookieCloseText'  => 'Varchar(100)',
				'CookieMoreText'   => 'Varchar(150)',
				'CookieBarEnable' => 'Boolean'
			),
			'has_one' => array(
				'CookiePage' => 'Page',
				'CookieImage' => 'Image'
			)
		);
	}
	
	public function updateCMSFields(FieldSet &$fields) 
	{
		$fields->addFieldToTab('Root.CookieBar', new CheckboxField('CookieBarEnable', 'Enable Cookie Bar'));
		
		$fields->addFieldToTab('Root.CookieBar', new TreeDropdownField('CookiePageID', 'Cookie Information Page', 'SiteTree'));
		$fields->addFieldToTab('Root.CookieBar', new TextField('CookieCloseText', 'Accept/Close Link Text'));
		$fields->addFieldToTab('Root.CookieBar', new TextField('CookieMoreText', 'More Information Link Text'));
		$fields->addFieldToTab('Root.CookieBar', new ImageField('CookieImage', 'Image', null, null, 'uploads/cookie-bar'));
		$fields->addFieldToTab('Root.CookieBar', new HTMLEditorField('CookieBarContent', 'Content'));
   	}
}