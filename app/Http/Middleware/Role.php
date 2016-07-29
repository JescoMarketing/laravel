<?php

namespace App\Http\Middleware;

use Closure;
use App\AccessHandler;
use Illuminate\Contracts\Auth\Guard;

class Role
{
    private $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->guest())
        {
            return redirect('/');
        }
        else
        {
            $user = auth()->user();

            if (!AccessHandler::check($user->role, $role))
            {
                return redirect('home');
            }
        }


        /**if ($this->auth->guest())
        {
            return redirect('/');
        }
        
        if ($this->auth->user()->role != 'admin')
        {
            return redirect('home');

            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->to(route('login'));
            }
        }**/

        return $next($request);
    }
}
