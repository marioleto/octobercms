<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarioletovanecPosts10 extends Migration
{
    public function up()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->renameColumn('image_path', 'image');
        });
    }
    
    public function down()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->renameColumn('image', 'image_path');
        });
    }
}
