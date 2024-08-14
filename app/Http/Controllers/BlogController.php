<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource in reverse order.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs.blogs')->with('blogs', $blogs);

    }

    function addNewBlog(){
        return view('admin.blogs.addblog');
    }

    function editBlog(Request $request){
        $blog = Blog::find($request->id);
        return view('admin.blogs.editblog')->with('blog', $blog);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'small_description' => 'required|string',
            'author' => 'required|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
            'long_text' => 'required|string',
            'tags' => 'required|string',
        ]);

        $data = $request->except('hero_image');

        // Handle file upload
        if ($request->hasFile('hero_image')) {
            $path = $request->file('hero_image')->store('hero_images', 'public');
            $data['hero_image'] = $path;
        }

        $data['slug'] = Str::slug($data['title']);

        $blog = Blog::create($data);

        return redirect()->route('admin_blog');
    }

    /**
     * Display the specified resource by slug.
     */
    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return response()->json($blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'small_description' => 'sometimes|required|string',
            'author' => 'sometimes|required|string|max:255',
            'hero_title' => 'sometimes|required|string|max:255',
            'long_text' => 'sometimes|required|string',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required|string',
        ]);

        $data = $request->except('hero_image');

        if ($request->has('hero_image')) {
             // Handle file upload
        if ($request->hasFile('hero_image')) {
            // Delete old image if it exists
            if ($blog->hero_image) {
                Storage::disk('public')->delete($blog->hero_image);
            }

            $path = $request->file('hero_image')->store('hero_images', 'public');
            $data['hero_image'] = $path;
        }
        }

        if ($request->has('title')) {
            // $data['slug'] = Str::slug($request->title);
        }

        $blog->update($data);


        return redirect()->route('admin_blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        // Delete associated image
        if ($blog->hero_image) {
            Storage::disk('public')->delete($blog->hero_image);
        }

        $blog->delete();

        return redirect()->route('admin_blog');
    }

    function blogs()  {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        return view('website.blogs')->with('blogs', $blogs);
    }

    function blogsDetails(Request $request) {
        $slug = $request->slug;
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('website.blogDetails', compact('blog'));
    }

}
