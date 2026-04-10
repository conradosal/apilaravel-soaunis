<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function status()
    {
        return response()->json(['status' => 'ok']);
    }

    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'titulo' => $request['titulo'],
            'conteudo' => $request['conteudo'],
        ]);
        return response()->json($post);
    }
}
