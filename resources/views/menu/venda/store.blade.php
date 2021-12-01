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
                        <form>
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Data da venda</label>
                                <input type="date" class="form-control">
                                    </div>
                                </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-group clearfix">
                                                <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1">
                                                <label for="checkboxPrimary2"></label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <label for="checkboxPrimary3">
                                                Cliente cadastrado
                                                </label>                
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Cliente" disabled="">
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-group clearfix">
                                                <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary2">
                                                <label for="checkboxPrimary2"></label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <label for="checkboxPrimary3">
                                                Vendedor
                                                </label>                
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Vendedor" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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