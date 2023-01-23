<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function storePhotos(Request $request)
    {
        $path = $request->photo->storeAs('public', 'file.jpg');
        return view('welcome');
    }

    public function storeImages(Request $request)
    {
        $path = $request->image1->storeAs('public/images', 'file1.jpg');
        $path2 = $request->image2->storeAs('public/images', 'file2.jpg');
        return view('welcome');

    }

    public function storeDocuments(Request $request)
    {
        $fileName = $request->file->getClientOriginalName();
        $path = $request->file->storeAs(
            'public/documents'
            , $fileName);
        return view('welcome');
    }
}
