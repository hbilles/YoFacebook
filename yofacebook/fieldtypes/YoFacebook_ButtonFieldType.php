<?php
namespace Craft;

class YoFacebook_ButtonFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Yo Facebook! Button');
	}

	public function getInputHtml($name, $value)
	{
		$element  = $this->element;
		$entryUrl = false;

		if (isset($element) && $element->elementType == 'Entry')
		{
			$entryUrl   = $element->url;
			craft()->templates->includeJsResource('yofacebook/js/app.js');
		}

		return craft()->templates->render('yofacebook/_fields/button', array(
			'name'     => $name,
			'value'    => $value,
			'entryUrl' => $entryUrl
		));
	}
}