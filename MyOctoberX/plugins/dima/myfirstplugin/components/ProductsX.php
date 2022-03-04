<?php 
//Component
namespace Dima\Myfirstplugin\Components;
use Dima\Myfirstplugin\Models\Myfirstplugin_images;

use Cms\Classes\ComponentBase;

class ProductsX extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ProductsX Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
	
	public function getProductsX()
    {
		$data = Myfirstplugin_images::orderBy('img_id', 'asc')->paginate(2); //'desc'  //Myfirstplugin_images::orderBy('img_id', 'asc')->get()  == withou pagination
        return $data; // Myfirstplugin_images::orderBy('img_id', 'desc')->get();
    }
}

