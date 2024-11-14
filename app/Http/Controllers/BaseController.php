<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $postService;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }
}
