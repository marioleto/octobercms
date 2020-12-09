<?php namespace MarioLetovanec\Todo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarioletovanecTodo extends Migration
{
    public function up()
    {
        Schema::table('marioletovanec_todo_', function($table)
        {
            $table->dropColumn('description');
        });
    }
    
    public function down()
    {
        Schema::table('marioletovanec_todo_', function($table)
        {
            $table->text('description');
        });
    }
}
