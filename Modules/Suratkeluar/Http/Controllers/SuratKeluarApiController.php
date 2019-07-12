<?php

namespace Modules\Suratkeluar\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Suratkeluar\Entities\SuratKeluarModel;
class SuratKeluarApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $datasuratkelluar  = DB::table('tbl_surat_keluar')->get();
        return $datasuratkelluar;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('suratkeluar::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $filesurat = $request->file('filesurat');
        $suratkeluarObject = new SuratKeluarModel();
        $suratkeluarObject->no_agenda = $request->no_agenda;
        $suratkeluarObject->tujuan = $request->tujuan;
        $suratkeluarObject->no_surat = $request->no_surat;
        $suratkeluarObject->isi = $request->isi;
        $suratkeluarObject->kode = $request->kode;
        $suratkeluarObject->tgl_surat = $request->tgl_surat;
        $suratkeluarObject->tgl_catat = $request->tgl_catat;
        $suratkeluarObject->file = 'filesuratkeluar/'.$filesurat->getClientOriginalName();
        $suratkeluarObject->keterangan = $request->keterangan;
        $suratkeluarObject->id_user = '1';
        $path = $request->filesurat->storeAs('filesuratkeluar', $filesurat->getClientOriginalName());
        $suratkeluarObject->save();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $suratkeluarObject = SuratKeluarModel::find($id);
        return $suratkeluarObject;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('suratkeluar::edit');
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
            $suratkeluarObject = SuratKeluarModel::find($id);
            $suratkeluarObject->no_agenda = $request->no_agenda;
            $suratkeluarObject->tujuan = $request->tujuan;
            $suratkeluarObject->no_surat = $request->no_surat;
            $suratkeluarObject->isi = $request->isi;
            $suratkeluarObject->kode = $request->kode;
            $suratkeluarObject->tgl_surat = $request->tgl_surat;
            $suratkeluarObject->tgl_catat = $request->tgl_catat;
            $suratkeluarObject->file = 'filesuratkeluar/'.$filesurat->getClientOriginalName();
            $suratkeluarObject->keterangan = $request->keterangan;
            $suratkeluarObject->id_user = '1';
            $path = $request->filesurat->storeAs('filesuratkeluar', $filesurat->getClientOriginalName());
            $suratkeluarObject->save();
        }else{
            $suratkeluarObject = SuratKeluarModel::find($id);
            $suratkeluarObject->no_agenda = $request->no_agenda;
            $suratkeluarObject->tujuan = $request->tujuan;
            $suratkeluarObject->no_surat = $request->no_surat;
            $suratkeluarObject->isi = $request->isi;
            $suratkeluarObject->kode = $request->kode;
            $suratkeluarObject->tgl_surat = $request->tgl_surat;
            $suratkeluarObject->tgl_catat = $request->tgl_catat;
            $suratkeluarObject->keterangan = $request->keterangan;
            $suratkeluarObject->id_user = '1';
            $suratkeluarObject->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $suratkeluarObject = SuratKeluarModel::find($id);
        $suratkeluarObject->delete();
    }
}
