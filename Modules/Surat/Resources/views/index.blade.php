@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
        <h1>
          Surat Masuk
          <small>List Surat Masuk</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-database"></i> Transaksi</a></li>
          <li class="active">Surat Masuk</li>
        </ol>
      </section>
@endsection
@section('content')
<div>
    <div class="box box-primary">
        <div class="box-header">
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        <div class="box-body">
            <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Form Input Surat Masuk</h4>
                        </div>
                        <form id="formsuratmasuk">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor Agenda </label>
                                            <input class="form-control" name="no_agenda" id="no_agenda">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Surat </label>
                                            <input class="form-control" name="no_surat" id="no_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Surat </label>
                                            <input class="form-control" name="asal_surat" id="asal_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi </label>
                                            <textarea class="form-control" name="isi" id="isi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode </label>
                                            <input class="form-control" name="kode" id="kode">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>indeks </label>
                                            <input class="form-control" name="indeks" id="indeks">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Surat </label>
                                            <input class="form-control" name="tgl_surat" id="tgl_surat" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Diterima </label>
                                            <input class="form-control" name="tgl_diterima" id="tgl_diterima" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>File </label>
                                            <input class="form-control" name="filesurat" id="filesurat" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan </label>
                                            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-send"></i> Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div id="modals3" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Form Input Disposisi</h4>
                        </div>
                        <form action="#" method="post" id="formdisposisi">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tujuan</label>
                                    <input class="form-control" name="tujuan" id="tujuan">
                                    <input type="hidden" id="idsurat">
                                </div>
                                <div class="form-group">
                                    <label>Isi Disposisi</label>
                                    <textarea class="form-control" name="isi_disposisi" id="isi_disposisi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Sifat </label>
                                    <input class="form-control" name="sifat" id="sifat">
                                </div>
                                <div class="form-group">
                                    <label>Batas Waktu </label>
                                    <input class="form-control" name="batas_waktu" id="batas_waktu" type="date">
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea class="form-control" name="catatan" id="catatan"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-send"></i> Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div id="modals2" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Form Ubah Surat Masuk</h4>
                        </div>
                        <form id="formsuratedit">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor Agenda </label>
                                            <input class="form-control" name="no_agendaedit" id="no_agendaedit">
                                            <input type="hidden" id="idsuratedit">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Surat </label>
                                            <input class="form-control" name="no_suratedit" id="no_suratedit">
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Surat </label>
                                            <input class="form-control" name="asal_suratedit" id="asal_suratedit">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi </label>
                                            <textarea class="form-control" name="isiedit" id="isiedit"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode </label>
                                            <input class="form-control" name="kodeedit" id="kodeedit">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>indeks </label>
                                            <input class="form-control" name="indeksedit" id="indeksedit">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Surat </label>
                                            <input class="form-control" name="tgl_suratedit" id="tgl_suratedit" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Diterima </label>
                                            <input class="form-control" name="tgl_diterimaedit" id="tgl_diterimaedit" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label>File </label>
                                            <input class="form-control" name="filesuratedit" id="filesuratedit" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan </label>
                                            <textarea class="form-control" name="keteranganedit" id="keteranganedit"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit" ><i class="fa fa-send"></i> Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            <div class="table-responsive text-nowrap">
                <table class="table" id="myTable" style="width:100%">
                    <thead>
                        <th>Nomor Agenda</th>
                        <th>Nomor Surat</th>
                        <th>Asal Surat</th>
                        <th>Isi</th>
                        <th>Kode</th>
                        <th>tgl_surat</th>
                        <th>tgl_diterima</th>
                        <th>File</th>
                        <th>Action</th>
                    </thead>
                </table>
                <div class="divider"></div>
                <br>
                <br>
                <h1>Disposisi</h1>
                <table class="table" id="myTable2" style="width:100%;">
                    <thead>
                        <th>Asal Surat</th>
                        <th>Tujuan</th>
                        <th>Sifat</th>
                        <th>Batas Waktu</th>
                        <th>Catatan</th>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
<script>
    function myfunc(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'/api/suratmasuk/'+id,
                            type:'DELETE',
                            success:function(){
                                Swal.fire(
                                            'Sukses!',
                                            'Data Sukses di hapus!',
                                            'success'
                                        )
                                        table.ajax.reload();
                            }
                        })
                    }
                })
          
        }
        function disposisi(id){
           $('#idsurat').val(id);
        }
        function editfunc(id){
            $.ajax({
                url:'/api/suratmasuk/'+id,
                type:'GET',
                success:function(data){
                    console.log(data);
                    $( '#no_agendaedit' ).val(data.no_agenda);
                    $( '#no_suratedit' ).val(data.no_surat);
                    $( '#asal_suratedit' ).val(data.asal_surat);
                    $( '#isiedit' ).val(data.isi);
                    $( '#kodeedit' ).val(data.kode);
                    $( '#indeksedit' ).val(data.indeks);
                    $( '#tgl_suratedit' ).val(data.tgl_surat);
                    $( '#tgl_diterimaedit' ).val(data.tgl_diterima);
                    $( '#keteranganedit' ).val(data.keterangan);
                    $( '#idsuratedit' ).val(data.id_surat);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/api/suratmasuk",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'no_agenda' },
                            { data: 'no_surat' },
                            { data: 'asal_surat' },
                            { data: 'isi' },
                            { data: 'kode' },
                            { data: 'tgl_surat' },
                            { data: 'tgl_diterima' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<a class='btn btn-primary' href='suratmasuk/download/"+data.id_surat+"'>Download</a>";
                                }
                            },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-warning' data-toggle='modal' data-target='#modals3'onclick='disposisi("+data.id_surat+")'>Disposisi</button> <button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id_surat+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id_surat+")'>Delete</button>";
                                }
                            }
                        ]
                    });
                    var table2 =  $('#myTable2').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/api/tampildisposisi",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'asal_surat' },
                            { data: 'tujuan' },
                            { data: 'sifat' },
                            { data: 'batas_waktu' },
                            { data: 'catatan' }
                        ]
                    });
$('document').ready(function(){
        $('form[id="formsuratmasuk"]').validate({
            rules: {
                no_agenda: 'required',
                no_surat: 'required',
                asal_surat: 'required',
                isi: 'required',
                kode: 'required',
                indeks: 'required',
                tgl_surat: 'required',
                filesurat: 'required',
                tgl_diterima: 'required',
                tgl_diterima: 'required',
                keterangan: 'required',

            },
            messages: {
                judul: 'This field is required',

            },
            submitHandler: function(form) {
                var data;
                data = new FormData();
                data.append( 'no_agenda', $( '#no_agenda' ).val());
                data.append( 'no_surat', $( '#no_surat' ).val());
                data.append( 'asal_surat', $( '#asal_surat' ).val());
                data.append( 'isi', $( '#isi' ).val());
                data.append( 'kode', $( '#kode' ).val());
                data.append( 'indeks', $( '#indeks' ).val());
                data.append( 'tgl_surat', $( '#tgl_surat' ).val());
                data.append( 'tgl_diterima', $( '#tgl_diterima' ).val());
                data.append( 'keterangan', $( '#keterangan' ).val());
                data.append( 'filesurat', $( '#filesurat' )[0].files[0]);
                $.ajax({
                    url:'/api/suratmasuk',
                    method:'POST',
                    data:data,
                    contentType: false,
                    processData:false,
                    success:function(){
                        Swal.fire(
                                'Sukses!',
                                'Data Sukses di simpan!',
                                'success'
                            ).then(function(){
                                $( '#no_agenda' ).val('');
                                $( '#no_surat' ).val('');
                                $( '#asal_surat' ).val('');
                                $( '#isi' ).val('');
                                $( '#kode' ).val('');
                                $( '#indeks' ).val('');
                                $( '#tgl_surat' ).val('');
                                $( '#tgl_diterima' ).val('');
                                $( '#keterangan' ).val('');
                                $('#myModal').modal('toggle');
                            })
                            table.ajax.reload();
                    }
                })
            }
        });
        $('form[id="formdisposisi"]').validate({
            rules: {
                tujuan: 'required',
                isi_disposisi: 'required',
                sifat: 'required',
                catatan:'required',
                batas_waktu: 'required',

            },
            messages: {
                judul: 'This field is required',

            },
            submitHandler: function(form) {
                var data;
                data = new FormData();
                data.append( 'tujuan', $( '#tujuan' ).val());
                data.append( 'isi_disposisi', $( '#isi_disposisi' ).val());
                data.append( 'sifat', $( '#sifat' ).val());
                data.append( 'batas_waktu', $( '#batas_waktu' ).val());
                data.append( 'catatan', $( '#catatan' ).val());
                data.append( 'id_surat', $( '#idsurat' ).val());
                $.ajax({
                    url:'/api/suratmasuk/changedisposisi',
                    method:'POST',
                    data:data,
                    contentType: false,
                    processData:false,
                    success:function(){
                        Swal.fire(
                                'Sukses!',
                                'Data Sukses di simpan!',
                                'success'
                            ).then(function(){
                                $( '#tujuan' ).val('');
                                $( '#isi_disposisi' ).val('');
                                $( '#sifat' ).val('');
                                $( '#batas_waktu' ).val('');
                                $( '#catatan' ).val('');
                                $('#modals3').modal('toggle');
                            })
                            table2.ajax.reload();
                    }
                })
            }
        })
        $('form[id="formsuratedit"]').validate({
            rules: {
                no_agendaedit: 'required',
                no_suratedit: 'required',
                asal_suratedit: 'required',
                isiedit: 'required',
                kodeedit: 'required',
                indeksedit: 'required',
                tgl_suratedit: 'required',
                tgl_diterimaedit: 'required',
                tgl_diterimaedit: 'required',
                keteranganedit: 'required',

            },
            messages: {
                judul: 'This field is required',

            },
            submitHandler: function(form) {
                var data;
                data = new FormData();
                var id = $('#idsuratedit').val();
                data.append('_method', 'PUT');
                data.append( 'no_agenda', $( '#no_agendaedit' ).val());
                data.append( 'no_surat', $( '#no_suratedit' ).val());
                data.append( 'asal_surat', $( '#asal_suratedit' ).val());
                data.append( 'isi', $( '#isiedit' ).val());
                data.append( 'kode', $( '#kodeedit' ).val());
                data.append( 'indeks', $( '#indeksedit' ).val());
                data.append( 'tgl_surat', $( '#tgl_suratedit' ).val());
                data.append( 'tgl_diterima', $( '#tgl_diterimaedit' ).val());
                data.append( 'keterangan', $( '#keteranganedit' ).val());
                data.append( 'filesurat', $( '#filesuratedit' )[0].files[0]);
                $.ajax({
                    url:'/api/suratmasuk/'+id,
                    method:'POST',
                    data:data,
                    contentType: false,
                    processData:false,
                    success:function(){
                        Swal.fire(
                                'Sukses!',
                                'Data Sukses di simpan!',
                                'success'
                            ).then(function(){
                                $( '#no_agendaedit' ).val('');
                                $( '#no_suratedit' ).val('');
                                $( '#asal_suratedit' ).val('');
                                $( '#isiedit' ).val('');
                                $( '#kodeedit' ).val('');
                                $( '#indeksedit' ).val('');
                                $( '#tgl_suratedit' ).val('');
                                $( '#tgl_diterimaedit' ).val('');
                                $( '#keteranganedit' ).val('');
                                $('#modals2').modal('toggle');
                            })
                            table.ajax.reload();
                    }
                })
            }
        });

})
</script>
@endsection
