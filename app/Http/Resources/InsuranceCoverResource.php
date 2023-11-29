<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InsuranceCoverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"                   => $this->id,
            "cover"                => $this->name,
            "description"          => $this->description,
            'insurance_policy'     => [
                "insurance"            => $this->insurancePolicy->name,
                "default_premium"      => $this->insurancePolicy->default_premium,
                "description"          => $this->insurancePolicy->description
            ]
        ];
    }
}
