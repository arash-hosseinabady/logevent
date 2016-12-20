<?php
namespace Arash\Logevent\Middleware;
/**
 * Created by PhpStorm.
 * User: hoseinabadi
 * Date: 12/20/16
 * Time: 11:55 AM
 */

use Arash\Logevent\Loggerevent;
use Closure;

class Logevent
{
    public function handle($request, Closure $next)
    {
        new Loggerevent();

        return $next($request);
    }
}