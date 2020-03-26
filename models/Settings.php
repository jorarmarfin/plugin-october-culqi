<?php namespace LuisMayta\Culqi\Models;

use October\Rain\Database\Model;

/**
 * Builder settings model
 *
 * @package luismayta\Culqi
 * @author Luis Mayta
 *
 */
class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'luismayta_culqi_settings';

    public $settingsFields = 'fields.yaml';

}
