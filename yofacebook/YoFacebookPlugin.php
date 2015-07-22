<?php
namespace Craft;

class YoFacebookPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Yo Facebook!');
	}

	function getVersion()
	{
		return '0.1.0';
	}

	function getDeveloper()
	{
		return 'Hite Billes';
	}

	function getDeveloperUrl()
	{
		return 'http://hitebilles.com';
	}
}
