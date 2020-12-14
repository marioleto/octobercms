<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarioletovanecPosts9 extends Migration
{
    public function up()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->string('image_path')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->dropColumn('image_path');
        });
    }
}
