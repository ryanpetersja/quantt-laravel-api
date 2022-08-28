<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BallResource extends JsonResource
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
            "id" => $this->id,
            "point_id" => $this->point_id,
            "winner" => $this->winner,
            "spin" => $this->spin,
            "from" => $this->from,
            "to" => $this->to,
            "stroke_type" => $this->stroke_type,
            "is_service" => $this->is_service,
            "player_id" => $this->player_id,
            "loser" => $this->loser,
            "updated_at" => $this->updated_at,
            "created_at" => $this->created_at,
        ];
    }
}
