<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; 
use App\Models\SubContent;

class BlogController extends Controller
{

    public function addblogPage()
    {
       
        return view('dashboard.addblog');
    }
    public function storeContent(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'main_heading' => 'required|string|max:255',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subheading.*' => 'required|string|max:255',
            'description.*' => 'required|string',
            'sub_image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $mainImagePath = $request->file('assets/blog_images')->store('images');
        $blog = new Blog();  // Use Blog model instead of Content
        $blog->main_heading = $request->input('main_heading');
        $blog->main_image = $mainImagePath;
        $blog->save();

        foreach ($request->subheading as $index => $subheading) {
            $subImagePath = null;
            if ($request->hasFile('sub_image.' . $index)) {
                $subImagePath = $request->file('sub_image.' . $index)->store('images');
            }

            $subContent = new SubContent();
            $subContent->content_id = $blog->id;  // Reference Blog's id
            $subContent->subheading = $subheading;
            $subContent->description = $request->description[$index];
            $subContent->sub_image = $subImagePath;
            $subContent->save();
        }

        return redirect()->back()->with('success', 'Content saved successfully!');
    }
    public function showBlogs()
{
    $blogs = Blog::with('subContents')->get();

    return view('dashboard.showBlog', ['blogs' => $blog]);

}
}
