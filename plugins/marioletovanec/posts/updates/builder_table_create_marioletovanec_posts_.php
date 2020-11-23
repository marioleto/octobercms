<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarioletovanecPosts extends Migration
{
    public function up()
    {
        Schema::create('marioletovanec_posts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marioletovanec_posts_');
    }
}
