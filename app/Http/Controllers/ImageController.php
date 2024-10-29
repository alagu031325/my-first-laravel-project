<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        // dd($request->file('image')); 
        // dd($request->all()); -> includes csrf token also 

        //File validation
        $request->validate(
            [
                // multiple rules are enclosed in array - cant upload image whose size > 500kb - extensions specified in 'mimes' type can only be uploaded - we can add 'image' rule which only allows image to be uploaded
                'image' => ['required','min:100','max:1000','mimes:png,jpg,gif'],
            ]
        );

        // access the input field 'image' and store it by mentioning the path where the file to be stored as its parameter - Here it is stored in root path (storage/app/public)
        // $request->image->store('/');
        // we can use storeAs to customise the image name stored
        $request->image->storeAs('/','wp_logo.png');

        //success is the route name but we can also use redirect method to redirect to the URL 
        //return redirect('/success');
        return redirect()->route('success');
        // return redirect()->back() -> return back to the same page 
    }

    public function download()
    {
        //return a download response
        return response()->download(public_path('/storage/wp_logo.png'));
    }
}
