<?php

namespace App\Http\Controllers;
use App\Models\blog;
use App\Models\faq;



use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(4);
    $faqs = Faq::orderBy('created_at', 'desc')->paginate(5); // Ensure 'Faq' model is imported

    return view('index', compact('blogs', 'faqs')); // Include both variables here
    }
    public function faq()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(4);
        return view('mainpages.faq', compact('blogs','faqs'));
    }
    public function privacy()
    {
    return view('mainpages.privacyPolicy'); 
    }
    public function career()
    {
    return view('mainpages.career'); 
    }

}
