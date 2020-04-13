<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Homepages;
use App\Model\Category;

class AdminHomepageController extends Controller
{
    public function editMainContent() {
        $homepages = Homepages::whereContentType('MAIN_CONTENT')->first();
        return view('adminHomepage.editMainContent', ['homepages' => $homepages]);
    }

    public function saveMainContent(request $request, $id)
    {
        if ($request->hasFile('image')){

        }
        $homepages = $request->validate([
            'title' => 'required|min:3|max:225',
            'subtitle' => 'required',
            'description' => 'required',
            'button_text' => 'required'
        ]);
    	$homepages = Homepages::findOrFail($id);
    	$homepages->title = $request->title;
    	$homepages->subtitle = $request->sub_heading;
    	$homepages->description = $request->description;
    	$homepages->button_text = $request->button_text;
    	$homepages->saveOrFail();
        return redirect(route('homepage.editMainContent'))->with('success', 'Main Content Updated');
    }

    public function category()
    {
        $ListCategory = Category::
        return view('adminHomepage.indexCategory', compact());
    }
}
