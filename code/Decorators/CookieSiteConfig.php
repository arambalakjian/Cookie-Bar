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
				'CookieBarTitle' => 'Text',
				'CookieBarContent' => 'HTMLText',
				'CookieCloseText'  => 'Varchar(100)',
				'CookieMoreText'   => 'Varchar(150)',
				'CookieBarEnable' => 'Boolean'
			),
			'has_one' => array(
				'CookiePage' => 'Page',
				'CookieImage' => 'Image'
			),
			'defaults' => array(
				'CookieCloseText' => 'Accept',
				'CookieMoreText' => 'Read more about Cookies',
				'CookieBarContent' => '<p><strong>Like most websites we uses cookies</strong>. In order to deliver a personalised, responsive service and to improve the site, we remember and store information about how you use it. This is done using simple text files called cookies which sit on your computer. These cookies are completely safe and secure and will never contain any sensitive information. They are used only by us.</p>',
			)
		);
	}
	
	public function updateCMSFields(FieldSet &$fields) 
	{
		$fields->addFieldToTab('Root.CookieBar', new CheckboxField('CookieBarEnable', 'Enable Cookie Bar'));
		
		$fields->addFieldToTab('Root.CookieBar', new TreeDropdownField('CookiePageID', 'Cookie Information Page', 'SiteTree'));
		$fields->addFieldToTab('Root.CookieBar', new TextField('CookieCloseText', 'Accept/Close Link Text'));
		$fields->addFieldToTab('Root.CookieBar', new TextField('CookieMoreText', 'More Information Link Text'));
		$fields->addFieldToTab('Root.CookieBar', new ImageField('CookieImage', 'Image (optional)', null, null, null, 'uploads/cookie-bar'));
		$fields->addFieldToTab('Root.CookieBar', new TextField('CookieBarTitle', 'Cookie Bar Title'));
		$fields->addFieldToTab('Root.CookieBar', new HTMLEditorField('CookieBarContent', 'Cookie bar Content (hidden on mobile)'));
   	}
}