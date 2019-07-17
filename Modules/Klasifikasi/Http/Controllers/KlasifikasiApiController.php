<?php

namespace Modules\Klasifikasi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Klasifikasi\Entities\KlasifikasiModel;
class KlasifikasiApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $dataklasifikasi = DB::table('tbl_klasifikasi')->get();
        return $dataklasifikasi;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('klasifikasi::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $klasifikasiObject = new KlasifikasiModel();
        $klasifikasiObject->nama = $request->nama;
        $klasifikasiObject->kode = $request->kode;
        $klasifikasiObject->uraian = $request->uraian;
        $klasifikasiObject->id_user = '1';
        $klasifikasiObject->save();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $klasifikasi = KlasifikasiModel::find($id);
        return $klasifikasi;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('klasifikasi::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $klasifikasiObject = KlasifikasiModel::find($id);
        $klasifikasiObject->nama = $request->nama;
        $klasifikasiObject->kode = $request->kode;
        $klasifikasiObject->uraian = $request->uraian;
        $klasifikasiObject->id_user = '1';
        $klasifikasiObject->save();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $klasifikasiObject = KlasifikasiModel::find($id);
        $klasifikasiObject->delete();
    }
}
