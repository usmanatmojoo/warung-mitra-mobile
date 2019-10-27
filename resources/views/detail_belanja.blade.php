<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Top Navigation</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{ url('/') }}" class="navbar-brand">Warung Mitra</a>
                            <button type="button" class="navbar-toggle collapsed">
                                DETAIL BELANJA
                            </button>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <form class="form-horizontal" action="{{ route('order.store') }}" method="POST">
                                @csrf
                                <div class="box box-solid">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama"laceholder="Nama Lengkap" value="{{ Auth::user()->nama }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_hp" class="col-sm-2 control-label">Nomor HP</label>
                        
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Nomor HP" value="{{ Auth::user()->nomor_hp }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ Auth::user()->alamat }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="desa" class="col-sm-2 control-label">Kelurahan/Desa</label>
                        
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="desa" name="desa" placeholder="Desa">
                                            </div>
                                        </div>
                                        <div class="text-error">
                                            @if ($errors->has('desa'))
                                                {{ $errors->first('desa') }}
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="rt" class="col-sm-2 control-label">RT</label>
                        
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="rt" name="rt" placeholder="RT">
                                            </div>
                                        </div>
                                        <div class="text-error">
                                            @if ($errors->has('rt'))
                                                {{ $errors->first('rt') }}
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="rw" class="col-sm-2 control-label">RW</label>
                        
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="rw" name="rw" placeholder="RW">
                                            </div>
                                        </div>
                                        <div class="text-error">
                                            @if ($errors->has('rw'))
                                                {{ $errors->first('rw') }}
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="kecamatan" class="col-sm-2 control-label">Kecamatan</label>
                        
                                            <div class="col-sm-10">
                                                <select name="kecamatan" id="kecamatan" class="form-control kecamatan" name="kecamatan">
                                                    <option value="">--Pilih Kecamatan--</option>
                                                    <option value="Cilacap Utara">Cilacap Utara</option>
                                                    <option value="Cilacap Tengah">Cilacap Tengah</option>
                                                    <option value="Cilacap Selatan">Cilacap Selatan</option>
                                                    <option value="4">Lainnya...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="text-error">
                                            @if ($errors->has('kecamatan'))
                                                {{ $errors->first('kecamatan') }}
                                            @endif

                                            @if ($errors->has('kecamatan2'))
                                                {{ $errors->first('kecamatan2') }}
                                            @endif
                                            
                                            @if ($errors->has('kabupaten'))
                                                {{ $errors->first('kabupaten') }}
                                            @endif

                                            @if ($errors->has('kode_pos'))
                                                {{ $errors->first('kode_pos') }}
                                            @endif
                                        </div>
                                        <div class="form-kabupaten-kodepos">
                                            <p style="font-size: 0.8em;"><i>Note: untuk kecamatan lainnya ada tambahan ongkir</i></p>
                                            <div class="form-group">
                                                <label for="kecamatan" class="col-sm-2 control-label">Kecamatan</label>
                            
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kecamatan" name="kecamatan2" placeholder="Kecamatan">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="kabupaten" class="col-sm-2 control-label">Kabupaten</label>
                            
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="kode_pos" class="col-sm-2 control-label">Kode Pos</label>
                            
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="dropshipper" class="dropshipper" id="dropshipper" value="1"> Dropshipper
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-dropshipper">
                                            <div class="form-group">
                                                <label for="dropshipper_nama" class="col-sm-2 control-label">Nama Penerima</label>
                            
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="dropshipper_nama" name="dopshipper_nama" placeholder="Nama Penerima">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dropshipper_detail" class="col-sm-2 control-label">Alamat Lengkap</label>
                            
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="dropshipper_detail" name="dropshipper_detail" placeholder="Alamat Lengkap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <div class="box box-solid">
                                    @foreach ($orders as $key => $order)
                                    <div class="box-body">
                                        <div class="col-xs-6">
                                            <img src="http://warung-mitra-admin.test/img/{{ $order->data_produk->gambar1 }}" style="max-width: 100%;" alt="image">
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="lead">
                                                {{ $order->nama }}
                                            </p>
                                            <p class="lead">
                                                Jumlah: {{ $order->qty }}
                                            </p>
                                            <p class="lead">
                                                Rp. {{ rupiah($order->harga) }}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <table class="table-bayar" style="width: 100%;">
                                            <tr>
                                                <td>Total Harga</td>
                                                <td class="nominal" style="text-align: right;">Rp. <span>{{ rupiah($total_harga->sumHarga) }}</span></td>
                                                <input type="hidden" name="total_harga" class="total_harga" value="{{ $total_harga->sumHarga }}">
                                            </tr>
                                            <tr>
                                                <td>Tas Plastik</td>
                                                <td class="nominal" style="text-align: right;">Rp. <span class="plastik">{{ rupiah(100) }}</span></td>
                                                <input type="hidden" name="plastik" class="plastik_hidden" value="100">
                                            </tr>
                                        </table>
                                        <hr>
                                        <table class="table-bayar" style="width: 100%;">
                                            <tr>
                                                <td><strong> Total Bayar: </strong></td>
                                                <td class="nominal" style="text-align: right;"><strong> Rp. <span class="total_bayar">{{ rupiah($total_harga->sumHarga + 100) }}</span> </strong></td>
                                                <input type="hidden" name="total_bayar" class="total_bayar_hidden" value="{{ $total_harga->sumHarga + 100 }}">
                                            </tr>
                                        </table>
                                        <br>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn bg-orange btn-block">Pilih Metode Pembayaran</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.content-wrapper -->
            
            {{-- <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights reserved. --}}
                
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>

        <script>
            $('document').ready(function() {
                function rupiah(bilangan) {
                    var bilangan = bilangan;
                        
                    var	number_string = bilangan.toString(),
                        sisa 	= number_string.length % 3,
                        rupiah 	= number_string.substr(0, sisa),
                        ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                            
                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }

                    return rupiah;
                }
                $('.kecamatan').on('change', function() {
                    var kecamatanValue = $(this).val();

                    if(kecamatanValue == "Cilacap Utara") {
                        $('.form-kabupaten-kodepos').hide();
                        $('.label-kecamatan').show();
                    } else if(kecamatanValue == "Cilacap Tengah") {
                        $('.form-kabupaten-kodepos').hide();
                        $('.label-kecamatan').show();
                    } else if(kecamatanValue == "Cilacap Selatan") {
                        $('.form-kabupaten-kodepos').hide();
                        $('.label-kecamatan').show();
                    } else if(kecamatanValue == 4) {
                        $('.label-kecamatan').hide();
                        $('.form-kabupaten-kodepos').show();
                    } else {
                        $('.ongkir').append(0);
                    }                    
                });
                $('.form-kabupaten-kodepos').hide();
                $('.form-dropshipper').hide();

                $('#dropshipper').on('change', function() {
                    if(this.checked) {
                        $('.form-dropshipper').show();
                    } else {
                        $('.form-dropshipper').hide();
                    }
                });
            });
        </script>
    </body>
</html>