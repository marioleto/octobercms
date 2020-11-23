<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarioletovanecPosts4 extends Migration
{
    public function up()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->string('image', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->string('image', 255)->nullable(false)->change();
        });
    }
}
