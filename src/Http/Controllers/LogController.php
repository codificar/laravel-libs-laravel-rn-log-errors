<?php

namespace Codificar\ReactNativeLogErrors\Http\Controllers;

use App\Http\Controllers\Controller;
use Codificar\ReactNativeLogErrors\Http\Requests\LogRequest;

class LogController extends Controller 
{
    /**
     * Salva o error para ser visualizado no log viewer
     * 
     * @param Request $request
     */
    public function store(LogRequest $request)
    {
        try {
            
            $origin = "";
            
            if(isset($request->origin)) $origin = $request->origin ;
            
            $line = "$request->app $request->version_code $request->version_os $origin $request->error" . PHP_EOL;
            
            \Log::error($line);
        } catch (\Throwable $th) {
            \Log::error($th->getMessage());
        }
    }
}