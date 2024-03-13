<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait ApiResponser
{
    public function successResponse($data, $code = 200)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
        ], $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json([
            'success' => false,
            'error' => $message,
        ], $code);
    }
    protected function showAll(Collection $collection,$code =200){
        return $this->successResponse(['data'=>$collection],$code);
    }
    protected function showOne(Model $collection,$code =200){
        return $this->successResponse(['data'=>$collection],$code);
    }
}
