<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penilaian Ujian</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- MetisMenu CSS -->
    <link href="assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="styleshe et">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('includes.header')

            @include ('includes.sidebar')
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Nilai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Penilaian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <a href="#" class="alert-link">{{ Session::get('message') }}</a>
                                    {!! Form::open(array('url' => 'save-nilai')) !!}
                                        	<div class="form-group">
                                        		<label for="">Nomor</label>
                                        		<input type="number" class="form-control" name="no_urut" placeholder="Nomor Peserta">
                                        	</div>
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" name="nama"  placeholder="Nama Peserta">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tempat Tanggal Lahir</label>
                                                <input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Ranting</label>
                                                <input type="text" class="form-control" name="ranting" placeholder="Ranting">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kyu Lama</label>
                                                <input type="number" class="form-control" name="kyu_lama"  placeholder="Kyu Lama">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kyu Baru</label>
                                                <input type="number" class="form-control" name="kyu_baru" placeholder="Kyu Baru">
                                            </div>


                                        <button type="submit" class="btn btn-info">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    {!! Form::open() !!}
                                </div>
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
