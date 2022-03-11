<?php namespace RainLab\Blog\Controllers;

use BackendMenu;
use Flash;
use Lang;
use Backend\Classes\Controller;
use RainLab\Blog\Models\Post;

class Posts extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\ImportExportController::class,
		//\Backend\Behaviors\RelationController::class,         // Add this! Relation widget  //mine
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';
	//public $relationConfig = 'config_relation.yaml'; // Add this! Relation widget  //mine

    public $requiredPermissions = ['rainlab.blog.access_other_posts', 'rainlab.blog.access_posts'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'posts');
    }

	
	
    public function index()
    {
        $this->vars['postsTotal']     = Post::count();
        $this->vars['postsPublished'] = Post::isPublished()->count();
        $this->vars['postsDrafts']    = $this->vars['postsTotal'] - $this->vars['postsPublished'];
		$this->vars['myVarX'] = "passed from controll";

        $this->asExtension('ListController')->index();
    }

    public function create()
    {
        BackendMenu::setContextSideMenu('new_post');

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/rainlab/blog/assets/js/post-form.js');

        return $this->asExtension('FormController')->create();
    }
    
	//create form to update (built-in)
    public function update($recordId = null)
    {
		//dd($recordId);
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/rainlab/blog/assets/js/post-form.js');

        return $this->asExtension('FormController')->update($recordId);
    }
	

	
	
	//mine. Override build-in Form Controller function On update. Build-in UPDATE won't be used/engaged/fired at all
	public function update_onSave ($recordId){
		 
		//Variant 1 (update the form by CMS parent::update_onSave($recordId) + save manually FK hasOne to table "dima_myfirstplugin_image"). Working!!!!
		//dd(post('Post')['getimgZ']);
		parent::update_onSave($recordId); //call the parent method update_onSave($recordId), which do all the update process by default (by CMS) if the function is not overridden in controller
		
		//update FK hasOne column 'img_blog_id' from other table "dima_myfirstplugin_image"
		$dima_myfirstplugin = \Dima\Myfirstplugin\Models\Myfirstplugin_images::findOrFail(post('Post')['getimgZ']);//findOrFail(post('Post')['img_blog_id']);//findOrFail($teamModel->getimgZ->img_id);
		$dima_myfirstplugin->img_blog_id = $recordId;//post('Post')['img_blog_id'];
		$dima_myfirstplugin->save();
		
		
		\Flash::success("You performed overridden update with hasOne FK successfully");
		
		return false;
		//End Variant 1 
		
		
		
		//Variant 2
		//dd($recordId);
		$teamModel = \RainLab\Blog\Models\Post::findOrFail($recordId);
		//dd($teamModel->title);//title
		
		//if($teamModel->getimgZ != null){
			//dd($teamModel->getimgZ->img_name);
		//} else {
			//dd("No hasOne connection");
		//} 
		
		//dd($teamModel->getimgZ->img_name); //"Spring is here" //working hasOne relation, related column from table "dima_myfirstplugin_image"
		//dd(post('Post')['img_blog_id']); //works, gets the form input filed 'img_blog_id'
		//dd($teamModel->getimgZ->img_id);
		
		
        $teamModel->title     = post('Post')['title'];  //"First blog Lala";
		$teamModel->slug      = post('Post')['slug'];
		$teamModel->content   = post('Post')['content'];
		$teamModel->myCustomX = post('Post')['myCustomX'];
		
        $teamModel->save();
		
		//update FK hasOne column 'img_blog_id' from other table "dima_myfirstplugin_image"
		$dima_myfirstplugin = \Dima\Myfirstplugin\Models\Myfirstplugin_images::findOrFail(post('Post')['img_blog_id']);//findOrFail($teamModel->getimgZ->img_id);
		$dima_myfirstplugin->img_blog_id = $recordId;//post('Post')['img_blog_id'];
		$dima_myfirstplugin->save();
		
		
		\Flash::success("You performed overrided update successfully");
	}
	
	
	
	// Override CREATE, if u defined an overrided function (even empty), build-in CREATE won't fire any more, only this overrided 
    //public function create_onSave(){}
	
	//override DELETE
	//public function update_onDelete($recordId){}
	
	

    public function export()
    {
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-export.css');

        return $this->asExtension('ImportExportController')->export();
    }

    public function listExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['rainlab.blog.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['rainlab.blog.access_other_posts'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendFieldsBefore($widget)
    {
        if (!$model = $widget->model) {
            return;
        }

        if ($model instanceof Post && $model->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')) {
            $widget->secondaryTabs['fields']['content']['type'] = 'RainLab\Blog\FormWidgets\MLBlogMarkdown';
        }
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Post::find($postId)) || !$post->canEdit($this->user)) {
                    continue;
                }

                $post->delete();
            }

            Flash::success(Lang::get('rainlab.blog::lang.post.delete_success'));
        }

        return $this->listRefresh();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->published) {
            return 'safe disabled';
        }
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function onRefreshPreview()
    {
        $data = post('Post');

        $previewHtml = Post::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }
}
