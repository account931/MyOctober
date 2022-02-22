<?php namespace Dima\Myfirstplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDimaMyfirstpluginImages extends Migration
{
    public function up()
    {
        Schema::create('dima_myfirstplugin_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('img_id')->unsigned();
            $table->text('img_name')->nullable();
            //Fk
            $table->integer('img_blog_id')->nullable()->unsigned();
            $table->foreign('img_blog_id')->references('id')->on('rainlab_blog_posts')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dima_myfirstplugin_images');
    }
}
