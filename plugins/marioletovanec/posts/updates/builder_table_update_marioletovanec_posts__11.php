<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarioletovanecPosts11 extends Migration
{
    public function up()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->string('image', 255)->nullable();
        });
    }
}
