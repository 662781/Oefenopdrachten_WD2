<?php

namespace Controllers;

use Exception;
use Services\ProductService;

class ProductController extends Controller
{
    private $service;

    // initialize services
    function __construct()
    {
        $this->service = new ProductService();
    }

    public function getAll()
    {
        $productsJSON = $this->service->getAll();

        $this->respond($productsJSON);
    }

    public function getOne($id)
    {
        $product = $this->service->getOne($id);

        if(!$product){
            $this->respondWithError('404', "Product not found");
        }
        else{
            $this->respond($product);
        }

    }

    public function create()
    {
        try {
            $product = $this->createObjectFromPostedJson("Models\\Product");

            $this->service->insert($product);

        } catch (Exception $e) {
            $this->respondWithError(500, $e->getMessage());
        }

        $this->respond($product);
    }

    public function update($id)
    {
        try {
            $product = $this->createObjectFromPostedJson("Models\\Product");

            $this->service->update($product, $id);

        } catch (Exception $e) {
            $this->respondWithError(500, $e->getMessage());
        }

        $this->respond($product);
    } 

    // public function delete($id)
    // {
    //     try {
    //         $product = $this->createObjectFromPostedJson("Models\\Product");

    //         $this->service->delete($product, $id);

    //     } catch (Exception $e) {
    //         $this->respondWithError(500, $e->getMessage());
    //     }

    //     $this->respond($product);
    // }
}
