<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KatedraResource extends JsonResource
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
            'Naziv ' => $this->resource->naziv,
            'Broj članova ' => $this->resource->broj_clanova,
            'Šef ' => $this->resource->sef,
        ];
    }
}
