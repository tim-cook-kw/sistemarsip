<?php

namespace Modules\Surat\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Surat\Entities\SuratModel;
use Modules\Surat\Entities\DisposisiModel;
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

    public function getdisposisi(){
        $datadisposisi = DB::table('tbl_disposisi')->get();
        return $datadisposisi;
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
            $suratObject = SuratModel::find($id);
            $suratObject->no_agenda = $request->no_agenda;
            $suratObject->no_surat = $request->no_surat;
            $suratObject->asal_surat = $request->asal_surat;
            $suratObject->isi = $request->isi;
            $suratObject->kode = $request->kode;
            $suratObject->indeks = $request->indeks;
            $suratObject->tgl_surat = $request->tgl_surat;
            $suratObject->tgl_diterima = $request->tgl_diterima;
            $suratObject->file = 'filesurat/'.$filesurat->getClientOriginalName();
            $suratObject->keterangan = $request->keterangan;
            $suratObject->id_user = '1';
            $path = $request->filesurat->storeAs('filesurat', $filesurat->getClientOriginalName());
            $suratObject->save();
            return "oke";
        }else{
            $suratObject = SuratModel::find($id);
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
            $suratObject->save();
            return "oce";
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
    public function disposisi(Request $request){
        $diposisiObject = new DisposisiModel();
        $diposisiObject->tujuan = $request->tujuan;
        $diposisiObject->isi_disposisi = $request->isi_disposisi;
        $diposisiObject->sifat = $request->sifat;
        $diposisiObject->batas_waktu = $request->batas_waktu;
        $diposisiObject->catatan = $request->catatan;
        $diposisiObject->id_surat = $request->id_surat;
        $diposisiObject->id_user = '1';
        $diposisiObject->save();
        
    }
    public function showdisposisi(){
        $datadisposisi = DB::table('tbl_disposisi')
        ->join('tbl_surat_masuk', 'tbl_surat_masuk.id_surat', '=', 'tbl_disposisi.id_surat')
        ->select('tbl_disposisi.*', 'tbl_surat_masuk.asal_surat')
        ->get();
        return $datadisposisi;
    }
    public function download($id){
        $suratObject = SuratModel::find($id);
         //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). '/'.$suratObject->file;

        // $headers = array(
        //         'Content-Type: application/pdf',
        //         );
        return response()->download($file);
        
    }
}