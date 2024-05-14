<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "type"          => 'product',
            "id"            => $this->id,
            "attributes"    => [
                "name"  => $this->name,
                "parent_category" => $this->category->name,
                "price" => $this->price
            ]
        ];
    }
}
