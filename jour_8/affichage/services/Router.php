<?php

class Router
{
    public function handleRequest(array $get): void
    {
        $crtl = new BlogController();
        if (!isset($get['path']) || $get['path']=== '') {
            $crtl->index();
        }
        elseif (isset($get['path']) && $get['path'] === 'articles')
        {
            $crtl = new BlogController();
            $crtl->article();
            $url = explode("/", $get['path']);
            $article = $url[2];
            
        }
        else {
            $crtl = new BlogController();
            $crtl->notFound();
        }
    }
}

