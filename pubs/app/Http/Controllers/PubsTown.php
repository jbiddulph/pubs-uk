<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PubsTown extends Controller
{
    //
    public function index($town) {
        $pubs=\App\Pub::all();
        $pubs=\App\Pub::where('rsTown', '=', $town)
               ->orderBy('rsTown', 'desc')
               ->paginate(50);
        return view('pub2index',compact('pubs'));
    }
    public function pubslist(){
    //
        $pubs=\App\Pub::distinct()
                ->orderBy('rsTown', 'asc')
                ->get(['rsTown']);
        return view('publist',compact('pubs'));
    }
    public function gmaps($town)
    {
    	$locations=\App\Pub::all();
        $locations=\App\Pub::where('rsTown', '=', $town)
               ->orderBy('rsTown', 'desc')
               ->get();
    	return view('gmaps',compact('locations'));
    }
}
