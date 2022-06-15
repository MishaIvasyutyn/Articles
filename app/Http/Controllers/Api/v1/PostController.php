<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['posts' => Post::orderByDesc('created_at')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:posts',
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()])->setStatusCode(400);
        }
        $post=Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return response()->json(['post' => $post])->setStatusCode(201);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $post=Post::find($id);
        if(!$post){
            return response()->json(['error' => 'Post not found','status'=>false])->setStatusCode(404);
        }
        return response()->json(['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destroy post
        $post=Post::find($id);
        if(!$post){
            return response()->json(['error' => 'Post not found','status'=>false])->setStatusCode(404);
        }
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully','status'=>true]);
    }
}
