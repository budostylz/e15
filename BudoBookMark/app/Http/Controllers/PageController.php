<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * GET /
     */
    public function welcome(Request $request)
    {
        # Using the global `session` helper, we can extract our data that was
        # passed from `BookController@search` as part of the redirect
        $searchTerms = session('searchTerms', null);
        $searchType = session('searchType', null);
        $searchResults = session('searchResults', null);

        //$user = Auth::user();
        $user = $request->user();

        # Return the view, making the above data available for use in the video
        return view('pages.welcome')->with([
            'userName' => $user->name ?? null,
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }

    /**
     * GET /support
     */
    public function support()
    {
        return view('pages.support');
    }
}
