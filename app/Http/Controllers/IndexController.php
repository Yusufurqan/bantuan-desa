<?php

namespace App\Http\Controllers;

use App\Coa;
use Illuminate\Http\Request;
use App\Index;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Index::first()->paginate(5);
        // dd($data);   
        return view('content.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Coa::all();
        // $user = User::all();
        // dd($data);
        return view('pages.tambah_index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'desa_id' => 'required|integer',
            'tanggal' => 'required',
            'coa_id' => 'required',
            'keterangan' => 'required',
            'debet' => 'required',
            'kredit' => 'required',
            'saldo' => 'required|integer',
        ]);
        $index = $request->all();
        // dd($index);
        Index::create($index);
        return redirect()->route('index.index')->with('success','Product created successfully.');

        
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
    public function edit(Index $index)
    {
        $data = Coa::all();
        return view('pages.edit_index',compact('index','data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Index $index)
    {   
        $request->validate([
            // 'desa_id' => 'required|integer',
            'tanggal' => 'required',
            'coa_id' => 'required',
            'keterangan' => 'required',
            'debet' => 'required',
            'kredit' => 'required',
            'saldo' => 'required|integer',
        ]);
        $index->update($request->all());
        return redirect()->route('index.index');
        
    }

    public function destroy(Index $index)
    {
        $index->delete();
        //  if ($Berita) {
        //     Session::flash('success','Success Hapus Data');
        //     return redirect()->route('admin.berita');
        // } else {
        //     Session::flash('success','Failed Hapus Data');
        //     return redirect()->route('admin.berita');
        // }
        return redirect()->route('index.index');
    }
}
