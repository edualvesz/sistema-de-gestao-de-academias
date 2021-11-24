@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Descrição</th>
                      <th>Unidade</th>
                      <th>Preço de compra</th>
                      <th>Preço de venda</th>
                      <th>Estoque</th>
                      <th>Estoque mínimo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>Whey Protein</td>
                      <td>Unidade</td>
                      <td>Preço de compra</td>
                      <td>Preço de venda</td>
                      <td>Bacon ipsum dolor sit amet</td>
                      <td>Bacon ipsum dolor sit amet</td>
                      <td>Bacon ipsum dolor sit amet</td>
                    </tr>
                  </tbody>
                </table><br>
                    <div class="col-1 mx-auto">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="produto/edit"><button type="button" class="btn btn-block btn-outline-primary btn-sm">Editar</button></a>
                        </div>
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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