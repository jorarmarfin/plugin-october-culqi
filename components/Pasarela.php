<?php namespace LuisMayta\Culqi\Components;

use Cms\Classes\ComponentBase;
use LuisMayta\Culqi\Models\Settings;

class Pasarela extends ComponentBase
{
     public function componentDetails()
    {
        return [
            'name' => 'luismayta.culqi::lang.pasarela.name',
            'description' => 'luismayta.culqi::lang.pasarela.description'
        ];
    }
    public function onRun()
    {
        $this->addJs('https://checkout.culqi.com/js/v3');
        $this->addJs('assets/js/culqi.js');
        $settings = Settings::instance();
        $this->page['publicKey'] = $settings->publicKey;
    }


}
