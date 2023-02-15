<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function getBlogs()
    {
        try {
            $posts = Post::all();
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message'=>$e->getMessage(),
                'codigo'=> 'HTTP: 404 - Not found'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $posts,
            'message' => 'Succeed',
            'codigo'=> 'HTTP: 200 - OK'
        ], JsonResponse::HTTP_OK);
    }

    public function getBlog($id)
    {
        try {
            $post = Post::find($id);
            $postEncontrado = [];

            array_push($postEncontrado,$post);
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message'=>$e->getMessage(),
                'codigo'=> 'HTTP: 404 - Not found'
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $postEncontrado,
            'message' => 'Succeed',
            'codigo'=> 'HTTP: 200 - OK'
        ], JsonResponse::HTTP_OK);
    }
}
