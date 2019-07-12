<?php

namespace Modules\Surat\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Surat\Entities\SuratModel;
class SuratApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $datasurat = DB::table('tbl_surat_masuk')->get();
        return $datasurat;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('surat::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $filesurat = $request->file('filesurat');
        $suratObject = new SuratModel();
        $suratObject->no_agenda = $request->no_agenda;
        $suratObject->no_surat = $request->no_surat;
        $suratObject->asal_surat = $request->asal_surat;
        $suratObject->isi = $request->isi;
        $suratObject->kode = $request->kode;
        $suratObject->indeks = $request->indeks;
        $suratObject->tgl_surat = $request->tgl_surat;
        $suratObject->tgl_diterima = $request->tgl_diterima;
        $suratObject->file = 'filesurat/';
        $suratObject->keterangan = $request->keterangan;
        $suratObject->id_user = '1';
        $path = $request->filesurat->storeAs('filesurat', $filesurat->getClientOriginalName());
        $suratObject->save();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $suratObject = SuratModel::find($id);
        return $suratObject;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('surat::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('filesurat')) {
            $filesurat = $request->file('filesurat');
            $suratObject = new SuratModel();
            $suratObject->no_agenda = $request->no_agenda;
            $suratObject->no_surat = $request->no_surat;
            $suratObject->asal_surat = $request->asal_surat;
            $suratObject->isi = $request->isi;
            $suratObject->kode = $request->kode;
            $suratObject->indeks = $request->indeks;
            $suratObject->tgl_surat = $request->tgl_surat;
            $suratObject->tgl_diterima = $request->tgl_diterima;
            $suratObject->file = 'filesurat/';
            $suratObject->keterangan = $request->keterangan;
            $suratObject->id_user = '1';
            $path = $request->filesurat->storeAs('filesurat', $filesurat->getClientOriginalName());
            $suratObject->save();
        }else{
            $filesurat = $request->file('filesurat');
            $suratObject = new SuratModel();
            $suratObject->no_agenda = $request->no_agenda;
            $suratObject->no_surat = $request->no_surat;
            $suratObject->asal_surat = $request->asal_surat;
            $suratObject->isi = $request->isi;
            $suratObject->kode = $request->kode;
            $suratObject->indeks = $request->indeks;
            $suratObject->tgl_surat = $request->tgl_surat;
            $suratObject->tgl_diterima = $request->tgl_diterima;
            $suratObject->keterangan = $request->keterangan;
            $suratObject->id_user = '1';
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $suratObject = SuratModel::find($id);
        $suratObject->delete();
    }
}
