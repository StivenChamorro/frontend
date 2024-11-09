<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('URL_SERVER_API');
    }

    public function getData($endpoint)
    {
        return Http::get("{$this->apiUrl}{$endpoint}")->json();
    }
}