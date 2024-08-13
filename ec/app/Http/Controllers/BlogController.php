<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; 
use App\Models\SubContent;

class BlogController extends Controller
{

    public function addblogPage()
    {
    $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('dashboard.addblog', ['blogs' => $blogs]);
    }
    public function storeContent(Request $request)
{

    $request->validate([
        'main_heading' => 'required|string|max:255',
        'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'category' => 'required|string',
        'subheading.*' => 'required|string|max:255',
        'description.*' => 'required|string',
        'sub_image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);

    // Store the main image
    $mainImageName = time() . '_' . $request->file('main_image')->getClientOriginalName();
    $mainImagePath = $request->file('main_image')->move(public_path('assets/main_image'), $mainImageName);

    // Create the blog entry
    $blog = Blog::create([
        'main_heading' => $request->input('main_heading'),
        'main_image' => 'assets/main_image/' . $mainImageName,
    ]);

    // Loop through each subheading and save the corresponding subcontent
    foreach ($request->subheading as $index => $subheading) {
        $subImagePath = null;
        if ($request->hasFile('sub_image.' . $index)) {
            $subImageName = time() . '_' . $request->file('sub_image.' . $index)->getClientOriginalName();
            $subImagePath = $request->file('sub_image.' . $index)->move(public_path('assets/main_image'), $subImageName);
        }

        $subContent = new SubContent();
        $subContent->blog_id = $blog->id; // Set the blog_id here
        $subContent->subheading = $subheading;
        $subContent->description = $request->description[$index];
        $subContent->sub_image = $subImagePath;
        $subContent->save();
    }

    return redirect()->back()->with('success', 'Content saved successfully!');
}
public function showBlog()
{
    $blogs = Blog::orderBy('created_at', 'desc')->get();
    return view('mainpages.blog', ['blogs' => $blogs]);
}
public function blog_detail($id)
{
    $blog = Blog::find($id);

    if (!$blog) {
        // Handle the case where the blog is not found
        abort(404, 'Blog not found');
    }

    return view('mainpages.blog-detail', ['blog' => $blog]);
}
}
