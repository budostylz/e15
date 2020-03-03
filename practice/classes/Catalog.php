<?php
class Catalog
{
    # Properties. e.g.:
    public $products = [];

    # Methods. e.g.:
    public function getAll()
    {
        return $this->products;
    }

    public function getById(int $id)
    {
        return 'This method should return details about a specific product';
    }
}