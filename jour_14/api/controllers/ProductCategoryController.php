<?php

class ProductCategoryController extends AbstractController
{
    public function list() : void
    {
        $manager = new ProductCategoryManager();

        $productsCategory = $manager->findAll();
        $arrayproductsCategory = [];

        foreach($productsCategory as $productCategory)
        {
            $arrayproductsCategory[] = $productCategory->toArray();
        }

        $this->render([
            "code" => 200,
            "productCategory" => $arrayproductsCategory
        ]);
    }

    public function details(int $id) : void
    {
        $manager = new ProductCategoryManager();

        $productCategory = $manager->findById($id);

        $this->render([
            "code" => 200,
            "productCategory" => $productCategory->toArray()
        ]);
    }
}