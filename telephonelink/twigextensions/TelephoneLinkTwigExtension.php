<?php

namespace Craft;

class TelephoneLinkTwigExtension extends \Twig_Extension
{
    protected $env;

    public function getName()
    {
        return 'Telephone Link';
    }

    public function getFilters()
    {
        return array('telephoneLink' => new \Twig_Filter_Method($this, 'telephoneLink'));
    }

    public function initRuntime(\Twig_Environment $env)
    {
        $this->env = $env;
    }

    public function telephoneLink($phone)
    {
        $phone = preg_replace('/[^0-9+]/','',$phone);
        if (substr($phone,0,1) == '0') {
            $phone = substr_replace($phone,'+44',0,1);
        }
        return "tel:$phone";
    }
}