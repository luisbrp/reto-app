<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\RegistroPagina; // Asegúrate de importar el modelo

class DespuesHome extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function handle($request, Closure $next)
     {
        $response = $next($request);

        $content = $response->getContent();

        $content .= '<div style="text-align: center; margin-top: 20px; background-color: black;"><p style="color: white;">La pagina ha cargado correctamente</p></div>';

        $registro = new RegistroPagina();
        $registro->url = $request->url();
        $registro->direccion_ip = $request->ip();
        $registro->save();

        $response->setContent($content);

        return $response;
     }
}
