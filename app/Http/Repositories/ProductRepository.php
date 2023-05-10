<?php
namespace App\Repositories;

use App\Models\Product;

 
class ProductRepository implements IRepository {
    protected $product;

    public function __construct(Product $product)
    {
    $this->product = $product;
    }
    public function getAll(){
        return $this->product->getAll();
    }
	
	// public function findById($id){
    //     $product = Product::find($id);
    //     return $product;
    // }
	
    public function find($name){
        
    }

    public function add($product){
        Product::created($product);
    }

    public function delete($product){
        $product->delete();
    }
}