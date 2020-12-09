<?php namespace MarioLetovanec\Todo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarioletovanecTodo extends Migration
{
    public function up()
    {
        Schema::create('marioletovanec_todo_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marioletovanec_todo_');
    }
}
