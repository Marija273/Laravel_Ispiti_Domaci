<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfesorResource extends JsonResource
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
            'Ime i prezime ' => $this->resource->ime_prezime,
            'Tip ' => $this->resource->tip,
            'Email ' => $this->resource->email,
            'Katedra ' => new KatedraResource($this->resource->katedra),
        ];
    }
}
