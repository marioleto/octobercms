<?php

use MarioLetovanec\Todo\Models\Todo;
 
Route::get('api/to-do-list', function(){

    $todos = Todo::all();

    return $todos;
});

