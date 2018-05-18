<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\AreaServizi;

class AreaServiziController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areaServizi = AreaServizi::orderBy('denominazione', 'asc')->get();
        return view('areaServizi.index')->with('areaServizi', $areaServizi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areaServizi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
               'denominazione' =>'required',
            ]
        );

        $uff = AreaServizi::create($request->only('denominazione', 'note'));
        $uff->save();
        return redirect()->route('areaServizi.index')
            ->with('flash_message', 'Area Servizi, <b>'. $uff->denominazione.'</b> CREATA');
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
        $areaServizi = AreaServizi::findOrFail($id);

        return view('areaServizi.edit', compact('areaServizi'));
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
        $this->validate($request, [
            'denominazione'=>'required',
            'note' => 'nullable'
        ]);

        $areaServizi = AreaServizi::findOrFail($id);
        $areaServizi->denominazione = $request->input('denominazione');
        $areaServizi->note = $request->input('note');
        $areaServizi->save();

        return redirect()->route('areaServizi.index',
            $areaServizi->id)->with('flash_message',
            'Area Servizi, <b>'. $areaServizi->denominazione.'</b> AGGIORNATA.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $areaServizi = AreaServizi::findOrFail($id);

        $name = $areaServizi->denominazione;
        $areaServizi->delete();
        return redirect()->route('areaServizi.index')
            ->with('flash_message', 'Area Servizi: '.$name.' ELIMINATA.' );
    }

    public  function usersInArea(Request $req)
    {
        $users = User::where('areaServizi_id', '=', $req['id'])->get();
        return view('areaServizi.officeUsers')->with('users', $users)->with('office', $req['office']);
    }
}
