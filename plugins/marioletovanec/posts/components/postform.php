<?php namespace MarioLetovanec\Posts\Components;

use Cms\Classes\ComponentBase;
use MarioLetovanec\Posts\Models\Post;

class PostForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Post Form',
            'description' => 'Create New Posts',
        ];
    }

    public function onSave(){
        
        $title = Input::get('title');
        $post->description = Input::get('description');
        $post->image = Input::get('image');
        $post->save();

    }
}
