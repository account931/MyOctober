October CMS
Tutorial https://octobercms.ru/blog/post/videokurs-october-cms-9

Content:
1.Install
2.Edit pages
3.How to build blog, user management, forum, etc 
4.Admin section
5.Menu links
6.Blog -> View one blog post
7.Add new db column (for example to Blog)
8.Image
9.CLI Commands
10.Miscellaneous

--------------
1.Install
Install via installer, use version 1, as version 2 is paid and requires license code.
Github code contains all October Cms code except for /vendor folder (by .gitignore)





--------------
2.Edit pages
Go -> themes -> your active theme -> pages






---------------
3.How to build blog, user management, forum, etc 

#How to build blog
1.First load plugin "Blog" via -> Settings-> Updates & Plugins -> Install Plugins
2.Now can create, edit blogs via "Blog" in top menu</li>
3.To add Blog to your page, go -> CMS -> Pages -> select your page -> click Components & select Blog-> select and drag item to the left markdown
4.In order to modify,for example, Blog appearance (add/change BS classes, add your text), go to ->  \localhost\myoctober\MyOctoberX\plugins\rainlab\blog\components\posts
5.The same way can add plugins "User", "Forum", etc



---------------
4.Admin section

Admin section is at /backend




---------------
5.Menu links

localhost\myoctober\MyOctoberX\themes\demo\partials\site\header




---------------
6.Blog -> View one blog post
  #Create new page to display one blog entry
  #go -> CMS -> Pages -> select your page -> click Components & select Blog-> select and drag "Post" to the left markdown
  # set {Url} to -> /onePost/:slug, set {Post slug} to -> >_:slug
  # Go to page with youl Post list, set {Post Page} to {onePost}






-----------------
7.Add new db column (for example to Blog)

https://site21.ru/blog/octobercms-extend-plugins/
Вариант 2. С помощью добавления колонок в существующую таблицу

  #Create file(migration) add_column_to_postX.php in \localhost\myoctober\MyOctoberX\plugins\rainlab\blog\updates
  # Add to version.yaml in \localhost\myoctober\MyOctoberX\plugins\rainlab\blog\updates
      1.8.1: 
  
        - Add column myCustomX to post
  
        - add_column_to_postX.php
  #php artisan october:up

{{ post.myCustomX }}








---------------------------
8.Image

![technics_sl_1200g_3.jpg](http://localhost/myoctober/MyOctoberX/storage/app/uploads/public/620/b91/2ba/62.jpg){.classX}





---------------------------
9.CLI Commands

php artisan october:install
php artisan october:update
php artisan october:up     #run migrations
php artisan cache:clear    #clear cache
php artisan october:fresh  #delete demo theme






---------------------------

10.Miscellaneous

 #URL link => <li> <a href="{{ 'user-management'|page }}"> User </a></li>  //page is an option to make sure











