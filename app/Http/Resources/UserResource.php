<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'profile' => [
                'avatar' => $this->profile->avatar,
                'whatsapp' => $this->profile->whatsapp,
                'twitter' => $this->profile->twitter,
                'facebook' => $this->profile->facebook,
                'instagram' => $this->profile->instagram,
                'youtube' => $this->profile->youtube,
                'about_me' => $this->profile->about_me,
            ],
            'roles' => $this->roles->map(function ($role) {
                return [
                    'id' => $role->id,
                    'name' => $role->name,
                    'guard' => $role->guard
                ];
            }),
        ];
    }
}
