<?php

namespace App\Http\Resources;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function __construct(Book $resource)
    {
        parent::__construct($resource);
    }

    public function toArray(Request $request): array
    {
        return [
            'title' => $this->resource->title,
            'author' => $this->resource->author,
            'description' => $this->resource->description,
            'price' => $this->resource->price
        ];

    }
}
