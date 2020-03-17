<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * GET /
     */
    public function welcome()
    {
        $searchTerms = session('searchTerms', null);
        $searchType = session('searchType', null);
        $searchResults = session('searchResults', null);

        return view('pages.welcome')->with([
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
