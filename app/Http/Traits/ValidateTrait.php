<?php

namespace App\Http\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

trait ValidateTrait
{
   private $messages = [
      'name.required' => 'Name is required',
      'name.max' => 'Name must be a maximum of 50 characters',
      'name.min' => 'Name must be a minimum of 10 characters',
      'email.required' => 'Email is required',
      'email.email' => 'Email is invalid',
      'email.min' => 'Email must be a minimum of 5 characters',
      'email.max' => 'Email must be a maximum of 50 characters',
      'email.unique' => 'Email already registered',
      'password.required' => 'Password is required',
      'password.confirmed' => 'Password confirmation does not match',
      'password.min' => 'Password must be a minimum of 8 characters',
      'password.max' => 'Password must be a maximum of 16 characters',
      'password_reset.token.required' => 'Token is required',
      'password_reset.email.required' => 'Email is required',
      'password_reset.email.email' => 'Email is invalid',
      'password_reset.email.min' => 'Email must be a minimum of 5 characters',
      'password_reset.email.max' => 'Email must be a maximum of 50 characters',
      'password_reset.email.unique' => 'Email already registered',
      'password_reset.password.required' => 'Password is required',
      'password_reset.password.confirmed' => 'Password confirmation does not match',
      'password_reset.password.min' => 'Password must be a minimum of 8 characters',
      'password_reset.password.max' => 'Password must be a maximum of 16 characters',
      'password_reset.code.required' => 'Code is required',
   ];

   public function loginValidate($request)
   {
      return Validator::make($request, [
         'email' => 'email'
      ], $this->messages);
   }

   public function dataValidate($request)
   {
      return Validator::make($request, [
         'name' => ['required', 'max:50', 'min:10'],
         'email' => ['required', 'email', 'min:5', 'max:50', 'unique:' . User::class],
         'password' => ['required', 'confirmed', Rules\Password::defaults()],
      ], $this->messages);
   }

   public function dataValidateUpdate($request, $user)
   {
      return Validator::make($request, [
         'name' => ['required', 'max:50', 'min:10'],
         'email' => ['required', 'email', 'min:5', 'max:50', Rule::unique('users')->ignore($user)],
      ], $this->messages);
   }

   public function passwordValidateUpdate($request)
   {
      return Validator::make($request, [
         'password' => ['required', 'confirmed', Rules\Password::defaults()],
      ], $this->messages);
   }
   public function passwordResetValidate($request)
   {
      return Validator::make($request, [
         'token' => ['required'],
         'email' => ['required', 'email'],
         'password' => ['required', 'confirmed'],
         'code' => 'required'
      ], $this->messages);
   }
}
