<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        'price' =>  number_format(number:$this->price /100, decimals:2),
    'category_id' => $this->category_id,
'image' => $this->image,
];
        return parent::toArray($request);
    }
}
