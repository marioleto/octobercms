<?php namespace MarioLetovanec\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarioletovanecPosts8 extends Migration
{
    public function up()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->text('description')->nullable(false)->default('null')->change();
            $table->string('title', 255)->nullable(false)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('marioletovanec_posts_', function($table)
        {
            $table->text('description')->nullable()->default(null)->change();
            $table->string('title', 255)->nullable()->default(null)->change();
        });
    }
}
