<?php

class ProductCategoryManager extends AbstractManager
{
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM product_categories');
        $parameters = [

        ];
        $query->execute($parameters);

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $products = [];

        foreach ($results as $result)
        {
            $category = new ProductCategory($result['name'], $result['description'], $result['id']);
            $categories[] = $category;
        }

        return $categories;
    }

    public function findById(int $id) : ? ProductCategory
    {
        $query = $this->db->prepare('SELECT * FROM product_categories WHERE category.id = :id');
        $parameters = [
            "id" => $id
        ];
        $query->execute($parameters);

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $category = new ProductCategory($result['name'], $result['description'], $result['id']);

            return $category;
        }

        return null;
    }
}