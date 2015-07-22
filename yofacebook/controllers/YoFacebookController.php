<?php
namespace Craft;

class YoFacebookController extends BaseController
{
	public function actionClearFacebookData()
	{
		$this->requireAjaxRequest();
		$entryUrl = craft()->request->getRequiredPost('entryUrl');

		$url       = "https://graph.facebook.com/?id=" . $entryUrl . "&scrape=true&method=post";
		$userAgent = "Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.10.229 Version/11.60";
		$response  = array();

		if ($ch = curl_init($url))
		{
			curl_setopt($ch, CURLOPT_HEADER, 0 );
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt($ch, CURLOPT_USERAGENT, $userAgent );
			$chResponse = curl_exec($ch);

			if (curl_errno($ch) != 0)
			{
				$response['success'] = false;
			}
			else
			{
				$response['success'] = true;
			}

			curl_close($ch);
		}
		else
		{
			$response['success'] = false;
		}

		$this->returnJson($response);
	}
}