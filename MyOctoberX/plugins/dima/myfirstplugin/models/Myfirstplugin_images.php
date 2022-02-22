<?php namespace Dima\Myfirstplugin\Models;

use Model;

/**
 * Model
 */
class Myfirstplugin_images extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dima_myfirstplugin_images';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
	
	/*
	public $attachOne = [
        'fileupload1' => 'System\Models\File'
   ]; */
}
