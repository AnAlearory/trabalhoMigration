<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmprestimoResource extends JsonResource
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
            'dataDeInicio' => $this->dataDeInicio,
            'dataDeTermino' => $this->dataDeTermino,
            'status' => $this->status,
        ];
    }
}
