October CMS
Tutorial https://octobercms.ru/blog/post/videokurs-october-cms-9

Content:
1.Install
2.Edit pages
3.How to build blog, user management, forum, etc using plugins.
4.Admin section
5.Menu links
6.Blog -> View one blog post
7.Add new db column to some plugin (for example to Rainlab Blog)
8.Create plugin via Artisan
9.Create plugin via Builder
10.Relations
11.Component
12.File upload
13.Pagination 
14.Shopaholic
15.Override default Form Cotroller CRUD actions

33.Image
34.CLI Commands



999.Miscellaneous

--------------
1.Install
Install via installer, use version 1, as version 2 is paid and requires license code.
Github code contains all October Cms code except for /vendor folder (by .gitignore)





--------------
2.Edit pages
Go -> themes -> your active theme -> pages






---------------
3.How to build blog, user management, forum, etc using plugins.

#How to build blog
1.First load plugin "Blog" via -> Settings-> Updates & Plugins -> Install Plugins
2.Now can create, edit blogs via "Blog" in top menu</li>
3.To add Blog to your page, go -> CMS -> Pages -> select your page -> click Components & select Blog-> select and drag item to the left markdown
4.In order to modify,for example, Blog appearance (add/change BS classes, add your text), go to ->  \localhost\myoctober\MyOctoberX\plugins\rainlab\blog\components\posts
5.The same way can add plugins "User", "Forum", etc


#Documentation
User    https://octobercms.com/plugin/rainlab-user
Blog    https://octobercms.com/plugin/rainlab-blog
Forum   https://octobercms.com/plugin/rainlab-forum
Builder https://octobercms.com/plugin/rainlab-builder





---------------
4.Admin section

Admin section is at /backend




---------------
5.Menu links
located at =>  localhost\myoctober\MyOctoberX\themes\demo\partials\site\header




---------------
6.Blog -> View one blog post
  #Create new page to display one blog entry
  #go -> CMS -> Pages -> select your page -> click Components & select Blog-> select and drag "Post" to the left markdown
  # set {Url input (top right)} to -> /onePost/:slug,  and set  in options{Post slug} to -> >_:slug
  # Go to page with youl Post list, set {Post Page} to {onePost}






------------------------------------------------------------------
7.Add new db column to some plugin (for example to Rainlab Blog)

https://site21.ru/blog/octobercms-extend-plugins/
Вариант 2. С помощью добавления колонок в существующую таблицу

    1. Create and apply migration =>
        1.1.Create file(migration) add_column_to_postX.php in \localhost\myoctober\MyOctoberX\plugins\rainlab\blog\updates     => https://github.com/account931/MyOctober/blob/main/MyOctoberX/plugins/rainlab/blog/updates/add_column_to_postX.php
        1.2.Add to version.yaml in \localhost\myoctober\MyOctoberX\plugins\rainlab\blog\updates
          1.8.1: 
            - Add column myCustomX to post
            - add_column_to_postX.php
		
        1.3.Run migration => php artisan october:up
		
    ==
    2. Add this column to admin panel view (Read) => go \MyOctoberX\plugins\rainlab\blog\models\post\column.yaml    => see example  => https://github.com/account931/MyOctober/blob/main/MyOctoberX/plugins/rainlab/blog/models/post/columns.yaml
      columns.yaml – Содержит параметры и информацию столбцов, которые нужно выводить при просмотре списка предметов в панели администратора.
      fields.yaml – Содержит параметры и информацию полей формы, которые нужно выводить при редактировании или создание предмета в панели администратора.
       
	    myCustomX:
            label: rainlab.blog::lang.post.myCustomX
			type: textarea  #type: richeditor #стандартный wysiwyg редактор
			
	==		
	3. Add the column lable name at => \myoctober\MyOctoberX\plugins\rainlab\blog\lang\en     => see axample => https://github.com/account931/MyOctober/blob/main/MyOctoberX/plugins/rainlab/blog/lang/en/lang.php
	    'post' => [
		     //.....
			 'myCustomX'           => 'myCustomZ'
			 'customX_placeholder' => 'Give your new customX value'
			 
	==
    4. Add this column to admin panel Edit form (Update) => 
	    go to => \MyOctoberX\plugins\rainlab\blog\models\post\fields.yaml and add =>     see example => https://github.com/account931/MyOctober/blob/main/MyOctoberX/plugins/rainlab/blog/models/post/fields.yaml
		    myCustomX:
                label: rainlab.blog::lang.post.myCustomX
                span: left
                placeholder: rainlab.blog::lang.post.customX_placeholder
				
    ==
    5. Can add validation rules, $translatable, $allowedSortingOptions at => \MyOctoberX\plugins\rainlab\blog\models\Post.php  => https://github.com/account931/MyOctober/blob/main/MyOctoberX/plugins/rainlab/blog/models/Post.php
	No need to add anything additional in order this field to appear in CREATE form
     
    Can display this column in view => {{ post.myCustomX }}
 



 
 
 



----------------------------
8.Create plugin via Artisan
Создание плагина через Artisan. Инструкция для новичков. Часть 2
https://octoclub.ru/d/38-%D1%81%D0%BE%D0%B7%D0%B4%D0%B0%D0%BD%D0%B8%D0%B5-%D0%BF%D0%BB%D0%B0%D0%B3%D0%B8%D0%BD%D0%B0-%D1%87%D0%B5%D1%80%D0%B5%D0%B7-artisan-%D0%B8%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F-%D0%B4%D0%BB%D1%8F-%D0%BD%D0%BE%D0%B2%D0%B8%D1%87%D0%BA%D0%BE%D0%B2-%D1%87%D0%B0%D1%81%D1%82%D1%8C-2







--------------------------
9.Create plugin via Builder
https://mraak.ru/octobercms/october-cms-builder-plugin-osnovy.html
https://cms-dev.ru/blog/octobercms/sozdanie-plagina-chast-2.-frontend.html

#Backend
  Create plugin-> Add Database  -> Add Models (add form or list) -> Backend Menu (Crud url) ->
   -> Add Controllers -> Вводим название контроллера, Связываем его с моделью и только что созданным пунктом меню. Не забываем отметить галочки List controller behavior и Form controller behavior.
   -> back to Backend Menu -> add Controller url

# Frontend =>
    Create one page to view all records (CMS->Pages->Add) ->
	  -> Components -> Builder -> add Record List 
	  -> add Model class, Display column (just one column is possible to display)
      -> Если нужно вывести другие поля из таблицы, обернуть в тэги, то ставим курсор на слово component в коде и в правом нижнем углу экрана щёлкаем по значку слева от лупы (Fork icon). 
 
    Create second page to view one record (CMS->Pages->Add) ->
	   -> Components -> Builder -> add Record Details 
	   -> if slug DB column is not used(not present in DB), set {Url input (top right)} to -> /my-plugin-front-end-view-one/:id
	   -> in Box option set Model class, Identifier value (:id), Key column(db column by which to search), Display column (just one column is possible to display)
	   -> Если нужно вывести другие поля из таблицы, обернуть в тэги, то ставим курсор на слово component в коде и в правом нижнем углу экрана щёлкаем по значку слева от лупы (Fork icon). 

	
	#NB: for some bizzare reason, url from Record List page to Record Details was not created vis CMS, have to create manually and extended code with Fork icon to display more than 1 column
	


	
	
	
	
-------------------------
10.Relations
#Backend => 
In model =>
   public $belongsTo = [
        'channelZ'  => ['\RainLab\Blog\Models\Post', 'key' => 'img_blog_id',  'otherKey' => 'id'], //Model to connect, this model ID, that model ID (i.e RainLab\Blog\Models\Post)
    ];

In column.yaml =>
     img_idAnyName:
        label: BlogName    //any name
        type: number #type: textarea  #type: richeditor #стандартный wysiwyg редактор
        relation: channelZ //realtion 
        valueFrom: title  //column from connected model
	
	
#Frontend => 	
To display in view => {{  record.channelZ.title }}	
	

===
10.1 How use Relation in update form with dropdown. Applicable only for $belongsTo. Works

1.In fields.yaml => https://github.com/account931/MyOctober/blob/main/MyOctoberX/plugins/dima/myfirstplugin/models/myfirstplugin_images/fields.yaml
#belongsTo relation, Display Column "title" from DB "rainlab_blog_posts"  by "img_blog_id" from DB "dima_myfirstplugin_images". belongsTo relation
    #must define public function getImgIdcOptions(){} in model => Dima\Myfirstplugin\Models\Myfirstplugin
    img_blog_id:
        label: BlogNamM(FK)
        type: dropdown	
	
	
2.In model add function => see example => https://github.com/account931/MyOctober/blob/main/MyOctoberX/plugins/dima/myfirstplugin/models/Myfirstplugin_images.php	
	//for relation update form(create dropdown). Relation, db with posts {rainlab_blog_posts}.
    //used for column {img_blog_id}	in field_yaml
	public function getImgBlogIdOptions()  //format get{ColumnName}Options
    {
		$teams = \RainLab\Blog\Models\Post::all(['id', 'title']); //columns from {rainlab_blog_posts}
        $teamsOptions = [];
        $teams->each(function($team) use (&$teamsOptions) {
            $teamsOptions[$team->id] = $team->title;
        });
        return $teamsOptions;
    }	
	
	
====================
10.2 How use $hasOne Relation to update/edit form with dropdown. Not working 100%(in edit form dropdown field does not select relevant value), lame fix 
#In model =>
    public $hasOne = [
	    'getimgZ'  => ['\Dima\Myfirstplugin\Models\Myfirstplugin_images', 'key' => 'img_blog_id',  'otherKey' => 'id'], //Model, that model ID (i.e Myfirstplugin_images), this model ID
    ];
	
	
    /to use relations in update/edit form(makes dropdown list). Relation, db with images {dima_myfirstplugin_images}.
    //used for column {id} {getimgZ} in \plugins\rainlab\blog\models\post\fields.yaml. getimgZ is a column and hasOne relation specified in this model
	public function getGetImgZOptions()  //format get{ColumnName}Options
    {
        //return Post::lists('title', 'id');
		$teams = \Dima\Myfirstplugin\Models\Myfirstplugin_images::all(['img_id', 'img_name']); //columns from {dima_myfirstplugin_images}
        $teamsOptions = [];

        $teams->each(function($team) use (&$teamsOptions) {
            $teamsOptions[$team->img_id] = $team->img_name;
        });

        return $teamsOptions;
    }
	
	
	
# In In fields.yaml =>
           
    #img_blog_id: Dropdown with relations. Images from table {dima_myfirstplugin_images}
    getimgZ: #img_blog_id: #getimgZ: #img_id: #id:  #getimgZ:  #img_id:  #getimgZ is a hasOne relation in model
        label: dima_myfirstplugin_images(FK)
        relation: getimgZ #getimgnnn #relation method
        type: dropdown
        valueFrom: img_blog_id #img_blog_id
        emptyOption: 'Not found any connected'
        #placeholder: -- select a status --
		
		
# In relevant controller (\MyOctoberX\plugins\rainlab\blog\controllers\Posts.php) override the parrent public function update_onSave($recordId) to include your logic after the dedault updating => 

    //mine. Override build-in Form Controller function On update. Build-in UPDATE won't be used/engaged/fired at all
	//Parent update_onSave() is in => \MyOctoberX\modules\backend\behaviors\FormController.php
	public function update_onSave($recordId){
		 
		//Variant 1 (update the form by CMS parent::update_onSave($recordId) + save manually FK hasOne to table "dima_myfirstplugin_image"). Working!!!!
		//dd(post('Post')['getimgZ']);
		parent::update_onSave($recordId); //call the parent method update_onSave($recordId), which do all the update process by default (by CMS) if the function is not overridden in controller
		
		//update FK hasOne column 'img_blog_id' from other table "dima_myfirstplugin_image"
		if(post('Post')['getimgZ'] != null){ //if user selected any value from dropdown <select><option>  // post('Post')['getimgZ'] == post('ModelName')['InputField']
			
			//reset value, if prev any record in "dima_myfirstplugin_images" has already "img_blog_id" with value $recordId; Logic: only one item can be connected to blog
			$oldRecord = \Dima\Myfirstplugin\Models\Myfirstplugin_images::where('img_blog_id', $recordId)->firstOrFail();
			$oldRecord->img_blog_id = null;
			$oldRecord->save();
			
			//assign new selected value in "dima_myfirstplugin_images"
		    $dima_myfirstplugin = \Dima\Myfirstplugin\Models\Myfirstplugin_images::findOrFail(post('Post')['getimgZ']);//findOrFail(post('Post')['img_blog_id']);//findOrFail($teamModel->getimgZ->img_id);
		    $dima_myfirstplugin->img_blog_id = $recordId;//post('Post')['img_blog_id'];
		    $dima_myfirstplugin->save();
		} 
		
		//\Flash::success("You performed overridden update with hasOne FK successfully");
		\Flash::info("You performed overridden update with hasOne FK successfully"); //if use \Flash::success(""), my message will hideen by flash from parrent method. Now parrent is hidden by mine
		
		return false;
		//End Variant 1 
		
	}
	
	
	
	
	
	
------------------------------

11.Component
https://docs.octobercms.com/2.x/plugin/components.html#component-class-definition
https://habr.com/ru/post/250415/

1. Create component => php artisan create:component dima.myfirstplugin ProductsX
2. In \MyOctoberX\plugins\dima\myfirstplugin\components\ProductsX =>  
    use Dima\Myfirstplugin\Models\Myfirstplugin_images;
    public function getProductsX(){
		$data = Myfirstplugin_images::orderBy('img_id', 'desc')->get();
        return $data; // Myfirstplugin_images::orderBy('img_id', 'desc')->get();
    }
3. Register component in => \MyOctoberX\plugins\dima\myfirstplugin\Plugin.php
    public function registerComponents(){
		return ['Dima\Myfirstplugin\Components\ProductsX' => 'ProductsXComponent']; //component that returns SQL query
    }

4. Use it in pages =>  \MyOctoberX\themes\demo\pages\somePage.htm =>
    [ProductsXComponent] #here we specify that we need to use my custom component
    ==
    {% for productMy in ProductsXComponent.getProductsX %} <!-- Call method getProductsX in my component ProductsXComponent and loop it -->
        <p> ID:      {{ productMy.img_id }}</p>      <!-- display id   -->
        <p> Name:    {{ productMy.img_name|raw }}</p> <!--display name -->
		<a href="{{ 'my-plugin-front-end-view-one/'}}{{productMy.img_id }}">  View id: {{productMy.img_id}} </a> <!-- Link to view one -->
    {% endfor %}


	
	
	
	
	
	
	
	
	
	
	
--------------------------
12.File upload
NB: if you want to uplad images, you don't have to create DB table for them, it already exists. Image is loaded to SQL DB (system_files} and contains column {attachment_type} for polymorphic relations
 
 In fields.yaml =>
    #File Upload   
       avatar:
        label: Avatar
        type: fileupload
        mode: image
        #imageHeight: 260
        #imageWidth: 260
		
  In model => 
     //Relation for images. Images are stored in build-in table (system_files} via polymorphic relation;
      public $attachOne = ['avatar' => 'System\Models\File' ]; //avatar is fields.yaml column,  'System\Models\File' is CMS build-in model

 



   #Uploaded Images goes to => \MyOctoberX\storage\app\uploads\public, to get full path use method {getPath}
   
   # Display images in Views, (i.e in Pages), if u specifiead in model polymorphic relation as  public $attachOne =[];  => 
   

        <!-- Image from SQL table (system_files}, polymorph relation public $attachOne =[] avatar

		is specified in fields.yaml  -->
	    <div class="col-sm-12 col-xs-12">
	    {% if record.avatar.count %} 
		    <!-- Only used if u specifiead in model polymorphic relation as  public $attachOne =[]--> 
		    <p><i class="fa fa-clone" style="font-size:18px"></i> Image was loaded as : {{ record.avatar.filename }}, path (DB {system_files}): <b> {{ record.avatar.getPath }} </b> </p> <!-- avata is $attachOne relation in model -->
		
		    <img  data-src="{{ record.avatar.getPath}}" src="{{ record.avatar.getPath }}" alt="{{ record.avatar.content-type }}" style="max-width: 30%" />
		    <!-- End Only used if in model specifiead as public $attachOne --> 

		{% else %}
		    <!-- No connected image in SQL table (system_files},  polymorph relation. Show default image -->
		    <img  data-src="{{ url('/') }}/storage/app/media/My_images/no-image.jpg" src="{{ url('/') }}/storage/app/media/My_images/no-image.jpg" alt="no-image" style="max-width: 30%" />
		{% endif %}
        </div>
	    <!-- End Image from SQL table (system_files}, polymorph relation public $attachOne =[]  --> 
		
		

		
	# Display images in Views, (i.e in Pages), if u specifiead in model polymorphic relation as  public $attachMany =[]; NOT TESTED => 
   	
		<!-- Only used if in model specifiead as public $attachMany --> 
		{% if record.avatar.count %} 
		    <p> found {{ record.avatar.count }} </p>
            <div class="featured-images text-center">
            {% for image in record.avatar %}
            <p> 
                <img  data-src="{{ image.getPath }}" src="{{ image.getPath }}" alt="{{ image.description }}" style="max-width: 100%" />
            </p>
            {% endfor %}
            </div>
	    {% else %}
		    <p> No imagess</p>
        {% endif %}
        <!-- End Only used if in model specifiead as public $attachMany --> 
		
		



		
		
		
		
		
-------------------------
13.Pagination 
  1.Specify pagination in Active record =>  \MyOctoberX\plugins\dima\myfirstplugin\components\ProductsX.php
    public function getProductsX() {
		$data = Myfirstplugin_images::orderBy('img_id', 'asc')->paginate(5); //'desc'  //Myfirstplugin_images::orderBy('img_id', 'asc')->get()  == withou pagination
        return $data; // Myfirstplugin_images::orderBy('img_id', 'desc')->get();
    }
	
  2. Use in View => \MyOctoberX\themes\demo\pages\my-plugin-front-end.htm =>
     <!-- Display all paginated records -->
     {% for productMy in ProductsXComponent.getProductsX %} <!-- Call method getProductsX in my component ProductsXComponent and loop it -->
	    <div class="col-sm-12 col-xs-12 list-group-item alert alert-success">
	        <p class="list-group-item"> ID:      {{ productMy.img_id }}</p>       <!--display id ---->
		    <! -- ..........-->
		</div>
	{% else %}
        <div> No records were found. Make good use of it</div>
    {% endfor %}
	
	
    <!-- My Pagination ------>
    <div> {{ ProductsXComponent.getProductsX.render|raw }} </div>

  
  
  
  
-------------------------
 
14.Shopaholic
(does not work 100%, tested in other copy of CMS)
If while installing plugin u encounter error "In Currency.php line 42: Trait 'Kharanenka\Scope\ActiveField' not found" => 
    try running composer i in the plugins/lovata/toolbox folder.



	
	
	
-------------------------
15.Override default Form Cotroller CRUD actions
You can override default Cotroller CRUD actions (create, update, delete) by placing you function, e.g for update use "public function update_onSave ($recordId)". See example at => \MyOctoberX\plugins\rainlab\blog\controllers\Post.php

	//mine. Override build-in On update
	public function update_onSave ($recordId){
		//dd($recordId);
		$teamModel = \RainLab\Blog\Models\Post::findOrFail($recordId);
		//dd($teamModel->getimgZ->img_name); //"Spring is here" //working hasOne relation, related column from table "dima_myfirstplugin_image"
		//dd(post('Post')['img_blog_id']); //works, gets the form input filed 'img_blog_id'
		
        $teamModel->title = "First blog Lala";
        $teamModel->save();
		\Flash::success("You performed overrided update successfully");
	}

    // Override CREATE, if u defined an overrided function (even empty), build-in CREATE won't fire any more, only this overrided 
    //public function create_onSave(){}
	
	//override DELETE
	//public function update_onDelete($recordId){}




		
---------------------------
33.Image
![technics_sl_1200g_3.jpg](http://localhost/myoctober/MyOctoberX/storage/app/uploads/public/620/b91/2ba/62.jpg){.classX}
<img  data-src="{{ url('/') }}/storage/app/media/My_images/no-image.jpg" src="{{ url('/') }}/storage/app/media/My_images/no-image.jpg" alt="no-image" style="max-width: 30%" />






 
 
 
 
---------------------------
34.CLI Commands

php artisan october:install
php artisan october:update
php artisan october:up     #run migrations
php artisan cache:clear    #clear cache
php artisan october:fresh  #delete demo theme












---------------------------

999.Miscellaneous

 #Plugins: User, Blog
 #URL link     => <li> <a href="{{ 'user-management'|page }}"> User </a></li>  //page is an option to make sure
 #Link with id => <a href="{{ 'my-plugin-front-end-view-one/'}}{{productMy.img_id }}">  View id: {{productMy.img_id}} </a> 
 #Image Url =>  <img  data-src="{{ url('/') }}/storage/app/media/My_images/no-image.jpg" src="{{ url('/') }}/storage/app/media/My_images/no-image.jpg" alt="no-image" style="max-width: 30%" />

------------------
 #If else => 
     {% if user %}
        <li><a href="#" data-request="onLogout"><button class="btn">Logout</button></a></li>
    {% endif %}

------------------
# If user logged => 
    {% if not user %}
        {% partial __SELF__ ~ '::signin' %}
    {% else %}
	    Hello, {{ user.name }} {{ user.email }}
        {% partial __SELF__ ~ '::update' %}
    {% endif %}

---------------
# For loop =>
    {% for post in posts %}
        {{ post.summary|raw }}
    {% else %}
        <li class="no-data">{{ __SELF__.noPostsMessage }}</li>
    {% endfor %}


	{% for post in posts %}
        {{ post.summary|raw }}
    {% endfor %}
	
---------------
Comment in views => {# Comment format #}
Comment in yaml  => #


--------------
Displaying the list => https://octobercms.ru/docs/backend-lists.md
<?= $this->listRender() ?>
Sometimes you may wish to use your own logic along with the list. You can use your own index() action method in the controller, then call the List behavior index() method.





-------------
Issue fix with Builder plugin (primary key issue, October makes SQL query by 'id', while DB column is 'img_id' )
If you have different DB primary key than the standard id, you have to change 3 files => The model The config_form.yaml The config_list.yaml
   In model =>
       public $table = 'dima_myfirstplugin_images';
       public $primaryKey = 'img_id'; //Mega Fix
  

----------------
Builder Create, Delete buttons => \plugins\dima\myfirstplugin\controllers\myfirstplugin\_list_toolbar.htm
You can edit CRUD html in the same folder

---------------



--------------
If after save/update, script redirect to wrong url, like "http://localhost/myoctober/MyOctoberX/backend/dima/myfirstplugin/myfirstplugin/preview/:id",
then change {:id} to your relevant db primary column, i.e {:img_id} at => \\MyOctoberX\plugins\dima\myfirstplugin\controllers\myfirstplugin\config_form.yaml

-------------

Css => \myoctober\MyOctoberX\themes\demo\assets\css\theme.css


---------------
If you encounter issue, while you drag the component item to CMS page, the item is draggeed by component is not added to MarkUp=> inseart manually => 
    [ProductsXComponent]
     ==
	<div class="col-sm-12 col-xs-12">
        {% component 'account' %}
	</div>