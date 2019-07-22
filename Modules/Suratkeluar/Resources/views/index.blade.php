@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
        <h1>
          Surat Keluar
          <small>List Surat Keluar</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-database"></i> Transaksi</a></li>
          <li class="active">Surat Keluar</li>
        </ol>
      </section>
@endsection
@section('content')
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
                    <h4 class="modal-title">Form Input Surat Keluar</h4>
                    </div>
                    <form id="formsuratkeluar">
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
                                        <label>Tujuan </label>
                                        <input class="form-control" name="tujuan" id="tujuan">
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
                                        <label>Tanggal Catat </label>
                                        <input class="form-control" name="tgl_catat" id="tgl_catat" type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Surat </label>
                                        <input class="form-control" name="tgl_surat" id="tgl_surat" type="date">
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
                                        <input type="hidden" id="idsurat">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Surat </label>
                                        <input class="form-control" name="no_suratedit" id="no_suratedit">
                                    </div>
                                    <div class="form-group">
                                        <label>Tujuan </label>
                                        <input class="form-control" name="tujuanedit" id="tujuanedit">
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
                                        <label>Tanggal Catat </label>
                                        <input class="form-control" name="tgl_catatedit" id="tgl_catatedit" type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Surat </label>
                                        <input class="form-control" name="tgl_suratedit" id="tgl_suratedit" type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>File </label>
                                        <input class="form-control" name="filesurat" id="filesurat" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan </label>
                                        <textarea class="form-control" name="keteranganedit" id="keteranganedit"></textarea>
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
            <table class="table" id="myTable">
                <thead>
                    <th>Nomor Agenda</th>
                    <th>Nomor Surat</th>
                    <th>Asal Surat</th>
                    <th>Isi</th>
                    <th>Kode</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Catat</th>
                    <th>File</th>
                    <th>Action</th>
                </thead>
            </table>
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
                            url:'/api/suratkeluar/'+id,
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
        function editfunc(id){
            $.ajax({
                url:'/api/suratkeluar/'+id,
                type:'GET',
                success:function(data){
                    console.log(data);
                    $( '#no_agendaedit' ).val(data.no_agenda);
                    $( '#no_suratedit' ).val(data.no_surat);
                    $( '#tujuanedit' ).val(data.tujuan);
                    $( '#isiedit' ).val(data.isi);
                    $( '#kodeedit' ).val(data.kode);
                    $( '#tgl_catatedit' ).val(data.tgl_catat);
                    $( '#tgl_suratedit' ).val(data.tgl_surat);
                    $( '#keteranganedit' ).val(data.keterangan);
                    $( '#idsurat' ).val(data.id_surat);
                }
            })
        }
        var table =  $('#myTable').DataTable({
                        deferRender: true,
                        ajax: {
                            url: "/api/suratkeluar",
                            type: "GET",
                            dataSrc: function (d) {
                                return d
                            }
                        },
                        columns: [
                            { data: 'no_agenda' },
                            { data: 'no_surat' },
                            { data: 'tujuan' },
                            { data: 'isi' },
                            { data: 'kode' },
                            { data: 'tgl_surat' },
                            { data: 'tgl_catat' },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<a class='btn btn-primary' href='suratkeluar/download/"+data.id_surat+"'>Download</a>";
                                }
                            },
                            {
                                data: null,
                                render: function ( data, type, row ) {
                                    return "<button class='btn btn-primary' data-toggle='modal' data-target='#modals2'onclick='editfunc("+data.id_surat+")'>Edit</button> <button class='btn btn-danger' onclick='myfunc("+data.id_surat+")'>Delete</button>";
                                }
                            }
                        ]
                    });
$('document').ready(function(){

        $('form[id="formsuratkeluar"]').validate({
            rules: {
                no_agenda: 'required',
                no_surat: 'required',
                tujuan: 'required',
                isi: 'required',
                kode: 'required',
                tgl_catat: 'required',
                tgl_surat: 'required',
                filesurat: 'required',
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
                data.append( 'tujuan', $( '#tujuan' ).val());
                data.append( 'isi', $( '#isi' ).val());
                data.append( 'kode', $( '#kode' ).val());
                data.append( 'tgl_catat', $( '#tgl_catat' ).val());
                data.append( 'tgl_surat', $( '#tgl_surat' ).val());
                data.append( 'tgl_diterima', $( '#tgl_diterima' ).val());
                data.append( 'keterangan', $( '#keterangan' ).val());
                data.append( 'filesurat', $( '#filesurat' )[0].files[0]);
                $.ajax({
                    url:'/api/suratkeluar',
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
        $('form[id="formsuratedit"]').validate({
            rules: {
                no_agendaedit: 'required',
                no_suratedit: 'required',
                tujuanedit: 'required',
                isiedit: 'required',
                kodeedit: 'required',
                tgl_catatedit: 'required',
                tgl_suratedit: 'required',
                filesuratedit: 'required',
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
                var id = $('#idsurat').val();
                data.append('_method', 'PUT');
                data.append( 'no_agenda', $( '#no_agendaedit' ).val());
                data.append( 'no_surat', $( '#no_suratedit' ).val());
                data.append( 'tujuan', $( '#tujuanedit' ).val());
                data.append( 'isi', $( '#isiedit' ).val());
                data.append( 'kode', $( '#kodeedit' ).val());
                data.append( 'tgl_catat', $( '#tgl_catatedit' ).val());
                data.append( 'tgl_surat', $( '#tgl_suratedit' ).val());
                data.append( 'keterangan', $( '#keteranganedit' ).val());
                data.append( 'filesurat', $( '#filesuratedit' )[0].files[0]);
                $.ajax({
                    url:'/api/suratkeluar/'+id,
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
                                $( '#tujuanedit' ).val('');
                                $( '#isiedit' ).val('');
                                $( '#kodeedit' ).val('');
                                $( '#tgl_catatedit' ).val('');
                                $( '#tgl_suratedit' ).val('');
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
