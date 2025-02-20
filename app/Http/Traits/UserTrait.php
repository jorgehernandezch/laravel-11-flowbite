<?php

namespace App\Http\Traits;

use App\Models\Cliente;
use App\Models\Coverage;
use App\Models\Process;
use App\Models\Profile;
use App\Models\Timeline;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

trait  UserTrait
{
   private function createUser($request)
   {
      return User::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make('12345678'),
      ]);
   }

   private function updateUser($request, $id)
   {
      return User::find($id)->update([
         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make('12345678'),
      ]);
   }

   private function createUserProfile($userId, $request)
   {
      Profile::create([
         'user_id' => $userId,
         'avatar' => $request->avatar,
         'whatsapp' => $request->whatsapp,
         'twitter' => $request->twitter,
         'facebook' => $request->facebook,
         'instagram' => $request->instagram,
         'youtube' => $request->youtube,
         'about_me' => $request->about_me,
      ]);
   }

   private function updateUserProfile($userId, $request)
   {
      return Profile::find($userId)->update([
         'avatar' => $request->avatar,
         'whatsapp' => $request->whatsapp,
         'twitter' => $request->twitter,
         'facebook' => $request->facebook,
         'instagram' => $request->instagram,
         'youtube' => $request->youtube,
         'about_me' => $request->about_me,
      ]);
   }
}
