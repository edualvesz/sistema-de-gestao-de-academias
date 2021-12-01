@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Welcome to this beautiful admin panel.</p>-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Alunos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                            <div class="card-body">
                            <!--Start creating your amazing application!-->
                            <div class="card">
            </div>
                <div class="row">
                    <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <div class="card">
                            <div class="card-body">
                                <a href=" academia/aluno" class="btn btn-success">Adicionar Aluno</a>
                                <a href="#" class="btn btn-danger">Alunos desativados</a>
                                <label><input type="search" class="form-control form-control-sm" placeholder="Pesquisar" aria-controls="example1"></label>
                            </div> 
                        </div>
                  <thead>
                  <tr role="row">
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">ID do aluno</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Telefone</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Atualizações</th>
                      <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="opcoes: activate to sort column ascending">Opções</th></tr>
                  </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.7</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a title="Detalhe" href="academia/aluno/detalhe" class="btn btn-light"><i class="fas fa-eye"></i></a>
                                    <a title="Editar" href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a title="Excluir" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr><tr class="even">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a title="Visualizar" href="#" class="btn btn-light"><i class="fas fa-eye"></i></a>
                                    <a title="Editar" href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a title="Excluir" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr><tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a title="Visualizar" href="#" class="btn btn-light"><i class="fas fa-eye"></i></a>
                                    <a title="Editar" href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a title="Excluir" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                 <!--  <tfoot>
                  <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                  </tfoot> -->
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Mostrando 1 a 10 de 57 registros</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Próximo</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
                    </div>
                            </div>
                            <!-- /.card-body -->
                            <!--<div class="card-footer">
                            Footer
                            </div>-->
                    <!-- /.card-footer-->
                    </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
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