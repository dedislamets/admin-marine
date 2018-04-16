@extends('home')
@section('content')

<div id="page-title">
    <h2>List Pengajuan</h2>
    <p>Halaman ini untuk merubah halaman profil pada front end.</p>
    @csrf
</div>

<div class="panel">
    <div class="panel-body">
        
        <div class="example-box-wrapper">
            <ul class="nav-responsive nav nav-tabs">                
                <li><a href="{{ url('/pengajuan') }}">Pending</a></li>
                <li class="active"><a href="#tab3" data-toggle="tab">Sign Author</a></li>                
                <li><a href="{{ url('/pengajuan/sign/2') }}">Sign Client</a></li>
                <li><a href="{{ url('/pengajuan/meetup') }}">Meetup</a></li>
                <li><a href="{{ url('/pengajuan/deal') }}">Deal</a></li>                 
            </ul>
            <div class="tab-content">
                
                <div class="tab-pane" id="tab2">
                    
                </div>
                <div class="tab-pane active" id="tab3">
                    <div class="example-box-wrapper">
                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kode Pengajuan</th>
                                    <th>Judul</th>
                                    <th>Type</th>
                                    <th>Buyer</th>
                                    <th>Author</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script type="text/javascript">
     $(document).ready(function() {        
        var table = $('#datatable-tabletools').DataTable({
            processing      : true,
            serverSide      : true,
            ajax            : '{{ URL::asset('dtsign1') }}',
            columns         : [
                { data: 'tgl_pengajuan', name: 'tgl_pengajuan' },
                { data: 'kode_pengajuan', name: 'kode_pengajuan' },
                { data: 'title_pengajuan', name: 'title_pengajuan' },
                { data: 'jenis_pengajuan', name: 'jenis_pengajuan' },
                { data: 'nama_buyer', name: 'nama_buyer' },
                { data: 'nama_seller', name: 'nama_seller' },
                { data: 'nilai_pengajuan', name: 'nilai_pengajuan', render: $.fn.dataTable.render.number('.', ',', 0) },
                { data: 'action', name: 'action', searchable: false, sortable: false },
            ],     
            aoColumnDefs: [
                { sWidth: "10%", aTargets: [7] },
            ]                 
      });

         var tt = new $.fn.dataTable.TableTools(table);
        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });
</script>
@endsection
