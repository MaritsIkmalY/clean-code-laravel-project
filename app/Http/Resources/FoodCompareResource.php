<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodCompareResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'food' => [
                $this->foodToArray($this->getFood1()),
                $this->foodToArray($this->getFood2()),
            ],
        ];
    }
}
