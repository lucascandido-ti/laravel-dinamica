<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/insert_user/*',
        'insert_user/*',
        'insert_user',

        '/insert_permission/*',
        'insert_permission/*',
        'insert_permission',

        '/insert_product/*',
        'insert_product/*',
        'insert_product',

        '/insert_categorie/*',
        'insert_categorie/*',
        'insert_categorie',
        
        '/insert_brand/*',
        'insert_brand/*',
        'insert_brand',
        
        '/get_product/*',
        'get_product/*',
        'get_product',

        '/get_categorie/*',
        'get_categorie/*',
        'get_categorie',

        '/get_brand/*',
        'get_brand/*',
        'get_brand',
        
        '/get_user/*',
        'get_user/*',
        'get_user',

        '/delete_permission/*',
        'delete_permission/*',
        'delete_permission',

        '/delete_product/*',
        'delete_product/*',
        'delete_product',

        '/delete_categorie/*',
        'delete_categorie/*',
        'delete_categorie',

        '/delete_brand/*',
        'delete_brand/*',
        'delete_brand',
        
        '/delete_user/*',
        'delete_user/*',
        'delete_user'
    ];
}
