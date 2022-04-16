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
                <h3 class="card-title">Editar venda</h3>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Detalhes da venda</h3>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xs-2">
                                <div class="form-group">
                                <label for="unidadeVolume">Código de barra</label>
                                <input type="text" class="form-control" name="volumeBolsa" data-mask="00000.00000.00000.000000.00000.000000.0.00000000000000" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4">
                                <div class="form-group">
                                <label for="volumeBolsa">Produto</label>
                                <input type="text" class="form-control" name="volumeBolsa" placeholder="Digite no nome do produto" required>
                                </div>
                            </div>
                            <div class="col-md-1 col-xs-4">
                                <div class="form-group">
                                <label for="unidadeVolume">Quantidade</label>
                                <input type="text" class="form-control" name="volumeBolsa" data-mask="000" placeholder="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-1 mx-auto">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Adicionar</button></a>
                                <!-- <a><button type="reset" class="btn btn-block btn-outline-info btn-sm" onclick="history.go(-1)">Voltar</button></a> -->
                                <a><button type="reset" class="btn btn-block btn-outline-info btn-sm" onclick="history.go(-1)">Voltar</button></a> 
                            </div>
                        </div><br><br>
                    </div>
              <!-- /.card-body -->
                </div>
                <div class="card">
                    
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Produto</th>
                      <th>Quantidade</th>
                      <th>Ações</th>
                      <th>Sub-total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>R$ 0,00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="" data-target="#modal-lgi" data-toggle="modal"><button type="button" class="btn btn-block btn-outline-info btn-sm">faturar</button></a>
            </div>
            @include('menu.venda.modal')
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