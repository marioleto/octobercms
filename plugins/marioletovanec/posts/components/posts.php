<?php namespace MarioLetovanec\Posts\Components;

use Cms\Classes\ComponentBase;
use MarioLetovanec\Posts\Models\Post;

class Posts extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Post List',
            'description' => 'List of posts',
        ];
    }

    public function onRun(){
        $this->posts = $this->loadPosts();
    }



    protected function loadPosts(){
        return Post::all();
    }

    public $posts;
}
