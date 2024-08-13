<?php

namespace App\Http\Controllers;

use App\Models\Faq; // Import the Faq model
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq()
    {
        $faq = faq::orderBy('created_at', 'desc')->get();
    return view('mainpages.faq', ['faqs' => $faq]);
    }

    public function addfaq()
    {
        return view('dashboard.addfaq');
    }

        public function store(Request $request)
        {
    
            $request->validate([
                'quetion' => 'required|string|max:255',
                'answer' => 'required|string',
                'category' => 'required|string',
            ]);
    

            Faq::create([
                'quetion' => $request->input('quetion'),
                'answer' => $request->input('answer'),
                'category' => $request->input('category'),
            ]);

            return redirect()->route('addfaq')->with('success', 'FAQ added successfully!');
        }
   
}   