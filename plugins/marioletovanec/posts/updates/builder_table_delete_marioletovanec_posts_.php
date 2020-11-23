<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMarioletovanecPosts extends Migration
{
    public function up()
    {
        Schema::dropIfExists('marioletovanec_posts_');
    }
    
    public function down()
    {
        Schema::create('marioletovanec_posts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username');
            $table->string('title');
            $table->text('discription')->nullable();
        });
    }
}
