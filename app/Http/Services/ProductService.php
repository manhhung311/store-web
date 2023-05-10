<?php
namespace App\Service;
use App\Repositories\ProductRepository;


class ProductService {

	protected $productRepository;

    // public function __construct(ProductRepository $productRepository)
    // {
    //     $this->productRepository = $productRepository;
    // }

    public function __construct()
    {
        $this->productRepository = "hel;lo";
    }

    public function getAll()
    {
        return "hello"; //$this->productRepository->getAll();
    }

}
?>
