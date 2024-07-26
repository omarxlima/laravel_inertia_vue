<?php

use App\Http\Middleware\AdminMidleware;
use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\redirectAdminMidleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => AdminMidleware::class,
            'redirectAdminMiddleware' => redirectAdminMidleware::class,
        ]);
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ]);
        
        $middleware->web(append: [
            HandleInertiaRequests::class,
        ]);
    })
      
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
