<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SetResource extends JsonResource
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
            'id' => $this->id,
            'player1' => $this->player1,
            'player2' => $this->player2,
            'date' => $this->date,
            'table_tupe' => $this->table_tupe,
            'tournament' => $this->tournament,
            'table_type' => $this->table_type,
            'venue' => $this->venue,
            'created_at' => $this->created_at,
            'updated_at' => $this->created_at,
            
        ];
    }
}
