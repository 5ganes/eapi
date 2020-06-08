<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        // return parent::toArray($request);
        
        $products = [];
        foreach ($this->resource as $product) {
            $products[] = array(
                'productName' => $product->name,
                'description' => $product->detail,
                'price' => $product->price,
                'stock' => $product->stock,
                'discount' => $product->discount
            );
        }
        return $products;
   
    }
}
