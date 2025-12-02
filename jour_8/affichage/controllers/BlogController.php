<?php

class BlogController extends AbstractController {
    public function index() : void
    {
        require "data/data-articles.php";
        $this->render("blog", $articles);
    }

    public function article(ind $id) : void
    {
        require "data/data-articles.php";
        $this->render("article", $articles[$id]);
    }

    public function notFound() : void
    {
        $this->render("notFound", []);
    }
}
