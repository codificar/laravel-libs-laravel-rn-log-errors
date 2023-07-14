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
            $info = [];
            if(isset($request->origin)) {
                $origin = $request->origin;
            } 

            if(isset($request->info))  {
                $info = json_decode($request->info, true);
            }

            $log = [
                "app" => $request->app,
                "versionCode" => $request->version_code,
                "versionOS" => $request->version_os,
                "origin" => $origin,
                "info" => $info
            ];
            
            $line = "$origin : " . json_encode($log) . PHP_EOL;
            
            \Log::error($line . json_encode($request->error));
        } catch (\Throwable $th) {
            \Log::error($th->getMessage());
        }
    }
}