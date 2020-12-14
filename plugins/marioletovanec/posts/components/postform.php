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
        
        $post = new Post();
        $post->title = $_POST['title'];
        $post->description = $_POST['description'];
        $post->image = $_POST['image'];
        $post->save();

    }
}
