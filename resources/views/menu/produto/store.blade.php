@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
<div class="col-8"> <!-- div que da a largura para e objeto -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Cadastro de produto</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Descrição*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Unidade*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" maxlength="50">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Preço de compra*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" maxlength="6" data-mask="000,00" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Porcentagem*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Preço de venda*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" data-mask="000,00">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Estoque*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Estoque mínimo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" maxlength="6" required>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Adicionar</button>
                <button type="reset" class="btn btn-default float-left">Limpar</button>
                <button type="reset" class="btn btn-default float-left" onclick='history.go(-1)'>Cancelar</button>
            </div>
            <!-- /.card-footer -->
        </form>
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