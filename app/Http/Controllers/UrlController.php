<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlRequest;
use App\Models\Url;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(UrlRequest $request)
    {

        $shortCode = Str::random(6);

        // Save to the database
        Url::create([
            'original_url' => $request->original_url,
            'short_url' => $shortCode,
        ]);

        return back()->with('shortened_url', url($shortCode));
    }

    /**
     * Redirect to the original URL.
     */
    public function redirect($shortCode)
    {
        // Find the URL by the short code
        $url = Url::where('short_url', $shortCode)->firstOrFail();

        return redirect($url->original_url);
    }
}
