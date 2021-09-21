@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
<div class="card">
    <div class="card-header p-2">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Resumo</a></li>
            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Objetivo</a></li>
            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Antropometria</a></li>
            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">PAR-Q e Anamnese</a></li>
            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ficha de Treinamento</a></li>
        </ul>
    </div><!-- /.card-header -->

    <div class="card-body">
        <div class="tab-content">
            <!-- espaço para o conteudo -->
            <div class="tab-pane" id="timeline">
                

                
                
                
                <!-- The timeline -->
                <div class="timeline timeline-inverse">
                    <!-- espaço para o conteudo -->
                    
                    
                </div>
            </div>





                <!-- /.tab-pane -->
                <div class="tab-pane active" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group row">
                        <!-- espaço para o conteudo -->
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div><!-- /.card-body -->
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