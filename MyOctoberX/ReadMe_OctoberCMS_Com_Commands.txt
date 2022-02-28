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
        type: number
        relation: channelZ //realtion 
        valueFrom: title  //column from connected model
	
	
#Frontend => 	
To display in view => {{  record.channelZ.title }}	
	

===
10.1 How use Relation if update form with dropdown

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
	
------------------------------

11.Component
https://docs.octobercms.com/2.x/plugin/components.html#component-class-definition


	
---------------------------
33.Image
![technics_sl_1200g_3.jpg](http://localhost/myoctober/MyOctoberX/storage/app/uploads/public/620/b91/2ba/62.jpg){.classX}





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
 #URL link => <li> <a href="{{ 'user-management'|page }}"> User </a></li>  //page is an option to make sure
 
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
  

