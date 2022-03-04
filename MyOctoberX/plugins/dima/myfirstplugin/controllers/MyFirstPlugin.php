<?php namespace Dima\Myfirstplugin\Controllers;

use Backend\Classes\Controller;
use Illuminate\Support\Facades\Input;
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
	
	

    // ...
	//ovveride defauld create function (when create new form))
    public function create_onSave() //update_onSave($recordId)
    {
		//CAN overide saving process here, but it was attempted to save separate image, no we know, it is not needed as images saved automatically to table (system_files}, polymorph relation public $attachOne =[]
		
		
		
		//dd("v"); //works
		
		$inputs = post('Myfirstplugin_images'); //Gets all form input, {Myfirstplugin_images} is model name//$_POST; works as well
		//dd($_POST); // works as well);
		//dd($inputs); //works, 
		//dd($inputs['Myfirstplugin_images']['img_name']); //works
		//dd(Input::get('img_name')); //does not work
		//dd(Input::file('file_input'));
		
		//$file = new System\Models\File;
        //$file->data = Input::file('file_input');


		/*
        $inputs = post('Team');

        // update team
        $teamModel = \Rafie\SitepointDemo\Models\Team::findOrFail($recordId);
        $teamModel->name = $inputs['name'];
        $teamModel->save();

        \Backend\Models\User::where('team_id', $teamModel->id)
                            ->update(['team_id' => 0]);

        // update users team_id
        \Backend\Models\User::whereIn('id', $inputs['users'])
                            ->update(['team_id' => $teamModel->id]);

        \Flash::success("Team updated successfully");
		*/
		
		\Flash::success("TeamXXX updated successfully");
    }

	
}
