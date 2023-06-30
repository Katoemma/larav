<?php

namespace App\Http\Controllers;


use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter
            (request(['tag','search']))->paginate(4)
        ]);
    }

    //Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form
    public function create(){
        return view('listings.create');
    }

    //storing the created list
    public function store(Request $request){
        $formFields = $request->validate([
            'title'=> 'required',
            'company'=>['required', Rule::unique('listings', 'company')],
            'location'=> 'required',
            'website'=> 'required',
            'email'=>['required', 'email'],
            'tags'=> 'required',
            'description'=> 'required'

        ]);
        if ($request -> hasFile('logo')) {
            $formFields['logo']= $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);



        return redirect('/')->with('message', 'Jersey successfully added');
    }
    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=> $listing]);
    }
    //updating the listing
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title'=> 'required',
            'company'=>'required',
            'location'=> 'required',
            'website'=> 'required',
            'email'=>['required', 'email'],
            'tags'=> 'required',
            'description'=> 'required'

        ]);
        if($request -> hasFile('logo')) {
            $formFields['logo']= $request->file('logo')->store('logos', 'public');
        }

        $listing ->update($formFields);



        return back()->with('message', 'Jersey successfully edited');
    }
    //delete listing
    public function delete(Listing $listing){
        $listing-> delete();
        
        return redirect('/')->with('message', 'Jersey deleted successfully');
    }
    
}
