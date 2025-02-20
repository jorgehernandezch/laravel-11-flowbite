<?php

namespace App\Http\Responses;

class ApiResponse
{
   public static function success($message = '', $statusCode = 200, $data = [])
   {
      return response()->json([
         'message' => $message,
         'statusCode' => $statusCode,
         'error' => false,
         'data' => $data
      ], $statusCode);
   }

   public static function error($message = '', $statusCode, $errors = [])
   {
      return response()->json([
         'message' => $message,
         'statusCode' => $statusCode,
         'error' => true,
         'data' => [
            'errors' => $errors
         ]
      ], $statusCode);
   }
}
