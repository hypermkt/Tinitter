<?php

namespace Tinitter\Controller;
class TimeLine
{
    public function show()
    {
        $app = \Slim\Slim::getInstance();
        $app->render('index.twig',
            ['display_text' => "Howdy, World"]
        );

        $post = new \Tinitter\Model\Post;
        $post->nickname = 'ニックネーム';
        $post->body = '本文';
        $post->save();
        $same_post = \Tinitter\Model\Post::find(1);
    }
}
