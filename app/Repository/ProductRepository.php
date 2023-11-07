<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function getAllProducts()
    {
        return Product::all();
    }

    public function createProduct(array $data)
    {
        Product::insert([
            'name' => $data['name'],
            'qty' => $data['qty'],
            'price' => $data['price'],
            'description' => $data['description'],
            'picture' => $data['picture']
        ]);
    }

    public function editProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
        Product::find($id)->update([
            'name' => $data['name'],
            'qty' => $data['qty'],
            'price' => $data['price'],
            'description' => $data['description'],
            'picture' => $data['picture']
        ]);
    }
}
