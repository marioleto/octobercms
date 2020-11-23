<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarioletovanecPosts2 extends Migration
{
    public function up()
    {
        Schema::create('marioletovanec_posts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('username');
            $table->string('title');
            $table->text('discription')->nullable();
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marioletovanec_posts_');
    }
}
