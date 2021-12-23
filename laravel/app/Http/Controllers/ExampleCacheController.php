<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class ExampleCacheController
{
    public function index()
    {
        Cache::add('key', 'test');

        if (Cache::has('key')) {
            var_dump('key');
            die();
        }

        die(var_dump('cache is empty'));
    }
}
