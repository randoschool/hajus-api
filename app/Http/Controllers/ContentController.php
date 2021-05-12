<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function create()
    {
        return view('content.create');
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
            'img' => 'required|file'
        ]);

        Content::create([
            'name' => $data['name'],
            'inventor' => $data['author'],
            'year' => $data['year'],
            'img' => Storage::putFile('content', $data['img'])
        ]);

        return redirect()->route('dashboard');
    }
}
