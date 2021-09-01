@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Welcome to this beautiful admin panel.</p>-->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Dados do aluno</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Transações</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Orçamentos</a></li>
                </ul>
            </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <div class="post">
                                <div class="user-block">
                                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Expandable Table Tree</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body p-0">
                <table class="table table-hover">
                  <tbody>
                    
                    <tr data-widget="expandable-table" aria-expanded="true">
                      <td>
                        <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                        219
                      </td>
                    </tr>
                    <tr class="expandable-body">
                      <td>
                        <div class="p-0" >
                          <table class="table table-hover">
                            <tbody>
                              <tr data-widget="expandable-table" aria-expanded="false">
                                <td>
                                  <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                  219-1
                                </td>
                              </tr>
                              <tr class="expandable-body d-none">
                                <td>
                                  <div class="p-0" style="display: none;">
                                    <table class="table table-hover">
                                      <tbody>
                                        <tr>
                                          <td>219-1-1</td>
                                        </tr>
                                        <tr>
                                          <td>219-1-2</td>
                                        </tr>
                                        <tr>
                                          <td>219-1-3</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                              <tr data-widget="expandable-table" aria-expanded="true">
                                <td>
                                  <button type="button" class="btn btn-primary p-0">
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                  </button>
                                  219-2
                                </td>
                              </tr>
                              <tr class="expandable-body">
                                <td>
                                  <div class="p-0" style="height: 146px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                    <table class="table table-hover">
                                      <tbody>
                                        <tr>
                                          <td>219-2-1</td>
                                        </tr>
                                        <tr>
                                          <td>219-2-2</td>
                                        </tr>
                                        <tr>
                                          <td>219-2-3</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
                            <!-- /.user-block -->
                            <div class="row mb-3">
                            <!-- /.col -->
                            <div class="col-sm-6">
                        </div>
                        <!-- /.col -->
                    </div>
                      <!-- /.row -->
                </div>
            <!-- /.post -->
        </div>
                  <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
            <!-- The timeline -->
            <div class="timeline timeline-inverse">
                <div>
                    <div class="timeline-item">
                    
                    </div>
                </div>
            </div>
            <div>
                
            </div>  
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