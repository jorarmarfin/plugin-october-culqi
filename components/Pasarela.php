<?php namespace LuisMayta\Culqi\Components;

use Auth;
use Culqi\Culqi;
use Cms\Classes\ComponentBase;
use LuisMayta\Culqi\Models\Settings;
use LuisMayta\Intranet\Models\UserCurso;

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
        $this->page['public_Key'] = $settings->public_Key;
    }
    public function onCrearCargo()
    {
        $user = Auth::getUser();
        $settings = Settings::instance();
        $culqi = new Culqi(['api_key'=>$settings->secret_Key]);
        $charge = $culqi->Charges->create([
            "amount"        => post('precio').'00',
            "currency_code" => post('moneda'),
            "email"         => post('email'),
            "source_id"     => post('token')
        ]);
        $this->page['result'] = 'Compra realizada ';

    }


}
