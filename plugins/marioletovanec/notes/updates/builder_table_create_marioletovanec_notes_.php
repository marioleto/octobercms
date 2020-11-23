<?php namespace MarioLetovanec\Notes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarioletovanecNotes extends Migration
{
    public function up()
    {
        Schema::create('marioletovanec_notes_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marioletovanec_notes_');
    }
}
