<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Photo;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
 {
//     $blogs = Blog::with('photo')->get();

//     return view('blogs.index', compact('blogs'));
         $blogs = Blog::all();
        return view('blogs.index')->with('blogs', $blogs);

}
public function create()
{
    return view('blogs.create');
}


public function show($id)
{
    $blog = Blog::with('photo')->find($id);

    return view('blogs.show', compact('blog'));
}

public function store(Request $request)
{
//   return $request;
    // $validatedData = $request->validate([
    //     'title' => 'required',
    //     'content' => 'required',
    //     'image' => 'required|image',
    // ]);

    // $photoPath = $request->file('image')->store('public/photos');
    // $photoUrl = url('storage/' . substr($photoPath, 7));
    $filename = time()."blog.".$request->file('image')->getClientOriginalExtension();
    echo $request->file('image')->storeAs('public/blog',$filename);

    $photo = new Photo([
        'title' => $request->get('title'),
      
        'image' => $filename,
    ]);
    $photo->save();

    $blog = new Blog([
        'title' => $request->get('title'),
        'content' => $request->get('content'),
        'description'=> $request->get('description'),
        'photo_id' => $photo->id,
    ]);
    $blog->save();

    return redirect()->route('blogs.index')->with('success', 'Blog post created successfully.');
}
}
