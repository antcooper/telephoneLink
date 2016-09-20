<?php

namespace Craft;


class TelephoneLinkPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Telephone Link';
    }

    public function getVersion()
    {
        return '1.0';
    }

	public function getDeveloper()
	{
		return 'Ant Cooper';
	}

	public function getDeveloperUrl()
	{
		return 'http://antcooper.com';
	}

	public function getPluginUrl()
	{
		return 'https://github.com/antcooper/telephonelink';
	}

    public function getDocumentationUrl()
    {
        return 'https://github.com/antcooper/telephonelink/blob/master/README.md';
    }
	
	public function addTwigExtension()
    {
        Craft::import('plugins.telephonelink.twigextensions.TelephoneLinkTwigExtension');
        return new TelephoneLinkTwigExtension();
    }
}