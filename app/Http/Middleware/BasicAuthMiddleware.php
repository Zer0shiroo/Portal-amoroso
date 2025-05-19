<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $username = 'alex';
        $password = 'teamomucho2006%%';

        if (
            $request->getUser() !== $username ||
            $request->getPassword() !== $password
        ) {
            return response('No autorizado 🛑', 401, [
                'WWW-Authenticate' => 'Basic realm="Portal del amor 💖"',
            ]);
        }

        return $next($request);
    }
}
