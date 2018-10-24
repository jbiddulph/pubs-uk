<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($town)
    {
        //
        $pubs=\App\Pub::all();
        $pubs=\App\Pub::where('rsTown', '=', $town)
               ->orderBy('id', 'desc')
               ->paginate(50);
        return view('master',compact('pubs'));
    }
    // public function index($town = null)
    // {
    //     //
    //     $pubs=\App\Pub::all();
    //     $pubs=\App\Pub::where('rsTown', '=', $town)
    //            ->orderBy('id', 'desc')
    //            ->paginate(50);
    //     return view('pub2index',compact('pubs'));
    // }

    // public function getTown($town = null)
    // {
    //         $pubs=\App\Pub::all();
    //         $pubs=\App\Pub::where('rsTown', '=', $town)
    //         ->orderBy('id', 'desc')
    //            ->paginate(50);
    //     return view('pub2index',compact('pubs'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createpub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->hasfile('img1'))
         {
            $file = $request->file('img1');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        $pub= new \App\Pub;
        $pub->rsPubName=$request->get('rsPubName');
        $pub->rsAddress=$request->get('rsAddress');
        $pub->Add2=$request->get('Add2');
        $pub->Add3=$request->get('Add3');
        $pub->rsTown=$request->get('rsTown');
        $pub->rsCounty=$request->get('rsCounty');
        $pub->rsPostCode=$request->get('rsPostCode');
        $pub->Region=$request->get('Region');
        $pub->PremisesType=$request->get('PremisesType');
        $pub->NumberEmployees=$request->get('NumberEmployees');
        $pub->Industry=$request->get('Industry');
        $pub->SIC=$request->get('SIC');
        $pub->Turnover=$request->get('Turnover');
        $pub->rsTel=$request->get('rsTel');
        $pub->rsFax=$request->get('rsFax');
        $pub->rsWebsite=$request->get('rsWebsite');
        $pub->Title=$request->get('Title');
        $pub->Forename=$request->get('Forename');
        $pub->Surname=$request->get('Surname');
        $pub->Position=$request->get('Position');
        $pub->rsPubName=$request->get('rsPubName');
        $pub->Email=$request->get('Email');
        $pub->EmailStatus=$request->get('EmailStatus');
        $pub->DateEmailValidated=$request->get('DateEmailValidated');
        $pub->PostalSearch=$request->get('PostalSearch');
        $pub->rsLat=$request->get('rsLat');
        $pub->rsLong=$request->get('rsLong');
        $pub->rsAboutpub=$request->get('rsAboutpub');
        $pub->rsUser1=$request->get('rsUser1');
        $pub->rsPass1=$request->get('rsPass1');
        $pub->icon=$request->get('icon');
        $pub->img2=$request->get('img2');
        $pub->img3=$request->get('img3');
        $pub->offer1=$request->get('offer1');
        $pub->img1=$name;
        $pub->save();
        
        return redirect('pubs')->with('success', 'Pub has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pub = \App\Pub::find($id);
        return view('editpub',compact('pub','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasfile('img1'))
         {
            $file = $request->file('img1');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
        //
        $pub= \App\Pub::find($id);
        $pub->rsPubName=$request->get('rsPubName');
        $pub->rsAddress=$request->get('rsAddress');
        //$pub->Email=$request->get('Email');
        $pub->rsTel=$request->get('rsTel');
        $pub->img1=$name;
        $pub->save();
        return redirect('pubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
