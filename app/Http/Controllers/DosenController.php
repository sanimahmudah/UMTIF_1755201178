<?php

namespace App\Http\Controllers;

use App\Dosen;
use DataTables;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dosen.index');
    }
    public function dosen_list()

   {
     $dosen = Dosen::all();
     return Datatables::of($dosen)
             ->addIndexColumn()
             ->addColumn('action', function ($dosen) {
                 $action = '<a class="text-primary"href="/dosen/edit/'.$dosen->kode_dosen.'">Edit</a>';
                 $action .= ' | <a class="text-danger"href="/dosen/delete/'.$dosen->kode_dosen.'">Hapus</a>';
                 return $action;
            })
             ->make();

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_dosen' => 'required|digits:10',
            'nama_dosen' => 'required',
            'nidn' => 'required',
            'email' => 'required',
            'handphone' => 'required',
            'alamat' => 'required',
       ]);
       Dosen::create($request->all());
       return redirect()->route('dosen.index')
                       ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen, $id)
    {
       $dosen = Dosen::find($id);
       return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'nidn' => 'required',
            'email' => 'required',
            'handphone' => 'required',
            'alamat' => 'required',
       ]);
        $dosen->update($request->all());
        return redirect()->route('dosen.index')
                        ->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
 
        return redirect()->route('dosen.index')
        ->with
 ('success'
 ,'Data Berhasil Dihapus');
    }
}
