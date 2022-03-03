<?php 
namespace Dima\Myfirstplugin\Models;
//use RainLab\Blog\Models\Post as BackendUser;

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
	 
    public $table      = 'dima_myfirstplugin_images';
	public $primaryKey = 'img_id'; //Mega Fix; If you have different DB primary key than the standard id,

    /**
     * @var array Validation rules
     */
	 
    public $rules = [
    ];
	
	
	//public $attachOne = [ 'fileupload1' => 'System\Models\File']; 
	public $attachOne = ['avatar' => 'System\Models\File']; //avatar is a column in fields.yaml
   
   /*
    public $belongsToMany = [
	
        'posts' => ['RainLab\Blog\Models\Post',
            'table' => 'rainlab_blog_posts_categories',
            'order' => 'published_at desc',
            'scope' => 'isPublished'
        ],
        'posts_count' => ['RainLab\Blog\Models\Post',
            'table' => 'rainlab_blog_posts_categories',
            'scope' => 'isPublished',
            'count' => true
        ]
		
    ]; */
	

	
	
	
	/*
     * My Relations
     */
    public $belongsTo = [
        'channelZ'  => ['\RainLab\Blog\Models\Post', 'key' => 'img_blog_id',  'otherKey' => 'id'], //Model, this model ID, that model ID (i.e RainLab\Blog\Models\Post)
    ];
	
	public $hasMany = [
	];

	/*
    public $belongsToMany = [
        'categories' => [
            Category::class,
            'table' => 'rainlab_blog_posts_categories',
            'order' => 'name'
        ]
    ]; 
	*/
	
	
	
	//for relations used in update/edit form(creates dropdown). Relation, db with posts {rainlab_blog_posts}.
    //used for column {img_blog_id}	in \plugins\dima\myfirstplugin\models\myfirstplugin_images\field.yaml
	public function getImgBlogIdOptions()  //format get{ColumnName}Options
    {
        //return Post::lists('title', 'id');
		$teams = \RainLab\Blog\Models\Post::all(['id', 'title']); //columns from {rainlab_blog_posts}
        $teamsOptions = [];

        $teams->each(function($team) use (&$teamsOptions) {
            $teamsOptions[$team->id] = $team->title;
        });

        return $teamsOptions;
    }
}
