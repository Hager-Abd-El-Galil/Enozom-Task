<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Http;

class PostService
{
    private PostRepository $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }
    // Http::get(env('API_COUNTRIES'))->json()['data'];


}