<?php namespace Dima\Myfirstplugin;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	//register your custrom components here..
    public function registerComponents()
    {
		return ['Dima\Myfirstplugin\Components\ProductsX' => 'ProductsXComponent']; //component that returns SQL query
    }

    public function registerSettings()
    {
    }
}
