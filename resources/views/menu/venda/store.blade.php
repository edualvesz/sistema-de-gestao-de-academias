@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Vendas</h3>
            </div>
                <div class="modal fade modal-slide-in-right" id="modal-lg" aria-hidden="true" aria-modal="true" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                        </div>
                    </div>
                </div>
            </div>              
              <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Cadastro de venda</h3>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xs-2">
                                <div class="form-group">
                                <label for="unidadeVolume">Data de venda</label>
                                <input type="date" class="form-control" name="volumeBolsa" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="form-group">
                                <label for="volumeBolsa">Cliente*</label>
                                <input type="text" class="form-control" name="volumeBolsa" placeholder="ao digitar vai ser formada uma lista com os nomes" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="form-group">
                                <label for="unidadeVolume">Vendedor*</label>
                                <input type="text" class="form-control" name="volumeBolsa" placeholder="ao digitar vai ser formada uma lista com os vendedores" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 mx-auto">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="store/edit"><button type="button" class="btn btn-block btn-outline-success btn-sm">Editar</button></a>
                            <a><button type="reset" class="btn btn-block btn-outline-success btn-sm" onclick="history.go(-1)">Voltar</button></a>
                        </div>
                    </div><br><br>
              <!-- /.card-body -->
                </div>
            </div>
        </div>
    <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- jQuery 3.6.0 -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script>
@stop