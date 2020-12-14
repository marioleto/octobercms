<?php namespace MarioLetovanec\Posts;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'MarioLetovanec\Posts\Components\Posts' => 'posts',
            'MarioLetovanec\Posts\Components\PostForm' => 'postform'
        ];
    }

    public function registerSettings()
    {
    }
}
