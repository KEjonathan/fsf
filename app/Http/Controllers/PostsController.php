<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')
                ->get());
    }


    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'introduction' => 'required',
            'paragraph' => 'required',
            'qoute' => 'required',
            'description' => 'required',
            'heading1' => 'required',
            'description2' => 'required',
            'heading2' => 'required',
            'description3' => 'required',
            'conclusion' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

             if($request->file('image')){
                 $file = $request->file('image');
                 $filename = date('YmdHi').$file->getClientOriginalName();
                 $file->move(public_path('DisplayImages'),$filename);
                 //$data['image']=$filename;
             }
            
      
        Post::create([
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'introduction' => $request->input('introduction'),
            'paragraph' => $request->input('paragraph'),
            'qoute' => $request->input('qoute'),
            'description' => $request->input('description'),
            'heading1' => $request->input('heading1'),
            'description2' => $request->input('description2'),
            'heading2' => $request->input('heading2'),
            'description3' => $request->input('description3'),
            'conclusion' => $request->input('conclusion'),
            'image_path' => $filename,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('Your post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    // public function show($slug)
    // {
    //     return view('blog.more')
    //         ->with('post', Post::where('slug', $slug));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post',Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([

            'title' => 'required',
            'introduction' => 'required',
            'paragraph' => 'required',
            'qoute' => 'required',
            'description' => 'required',
            'heading1' => 'required',
            'description2' => 'required',
            'heading2' => 'required',
            'description3' => 'required',
            'conclusion' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

             if($request->file('image')){
                 $file = $request->file('image');
                 $filename = date('YmdHi').$file->getClientOriginalName();
                 $file->move(public_path('DisplayImages'),$filename);
                 //$data['image']=$filename;
             }

        Post::where('slug',$slug)
        ->update([
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'title' => $request->input('title'),
            'introduction' => $request->input('introduction'),
            'paragraph' => $request->input('paragraph'),
            'qoute' => $request->input('qoute'),
            'description' => $request->input('description'),
            'heading1' => $request->input('heading1'),
            'description2' => $request->input('description2'),
            'heading2' => $request->input('heading2'),
            'description3' => $request->input('description3'),
            'conclusion' => $request->input('conclusion'),
            'image_path' => $filename,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog')->with('message', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')->with('message', 'Post Deleted');
    }
}
