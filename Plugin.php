<?php namespace LuisMayta\Culqi;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'LuisMayta\Culqi\Components\Pasarela' => 'Pasarela',
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
            'label'       => 'luismayta.culqi::lang.plugin_settings.name',
            'description' => 'luismayta.culqi::lang.plugin_settings.description',
            'icon'        => 'icon-dollar',
            'class'       => 'LuisMayta\Culqi\Models\Settings',
            'order'       => 600
            ]
         ];
    }

}
