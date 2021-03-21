<?php

namespace App\Http\Resources\Products;

use App\Http\Resources\Categories\CategoryResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;

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

        return [
            'message' => 'Success',
            'code' => Response::HTTP_OK,
            'type' => 'Product',
            'data' => $this->collection,
            'links' => [
                'self' => route('products')
            ]
        ];
    }
}
