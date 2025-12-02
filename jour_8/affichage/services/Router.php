<?php

class Router
{
    public function handleRequest(array $get): void
    {
        $crtl = new BlogController();
        if (!isset($get['path']) || $get['path']=== '') {
            $crtl->index();
        }
        elseif (isset($get['path']) && str_contains($get['path'], 'articles'))
        {
            $url = explode("/", $get['path']);
            $article = $url[1];
            $crtl = new BlogController();
            $crtl->article($article);
            
            
        }
        else {
            $crtl = new BlogController();
            $crtl->notFound();
        }
    }
}


?>