<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bar;
use App\Actions\BarDetails\GetBarDetails;



class BarDetailsController extends Controller
{
    public function index(Request $request)
    {   
        //dump(Auth::user()->id);

        //validate
        $request->validate([
            'bar' => 'required',
            
        ]);


        $action = new GetBarDetails((object) $request->all());

        /*dump($action->barArr['barDetails']);
        dump($action->barArr['barDetails']['title']);
        dump($action->barArr['barDetails']['description']);
        dump($action->barArr['barDetails']['image_path']);*/

        return view('customer.bardetails')->with([
            'barID' => $action->barArr['barDetails']['id'],
            'barTitle' => $action->barArr['barDetails']['title'],
            'barDescription' => $action->barArr['barDetails']['description'],
            'barImage' => $action->barArr['barDetails']['image_path']
        ]);


    }

    

}
