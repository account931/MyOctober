<?php namespace Dima\Myfirstplugin\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class MyFirstPlugin extends Controller
{

    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';  //List behavior is a controller modifier used for easily adding a record list to a page
    public $formConfig = 'config_form.yaml'; //Form Behavior is a controller modifier used for easily adding form functionality to a back-end page

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dima.Myfirstplugin', 'main-menu-item', 'side-menu-item');
    }
	
	//Sometimes you may wish to use your own logic along with the list. You can use your own index() action method in the controller, then call the List behavior index() method.
	/*
	public function index()
    {
        // Do any custom code here
        //......

        // Call the ListController behavior index() method
        $this->getClassExtension('Backend.Behaviors.ListController')->index();
    } */
	
}
