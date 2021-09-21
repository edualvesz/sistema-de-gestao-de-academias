@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Welcome to this beautiful admin panel.</p>-->
<div class="col-8"> <!-- div que da a largura para e objeto -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Cadastro de aluno</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nome" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Data de Nascimento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" data-mask="00/00/0000" placeholder="Data de Nascimento">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">email*</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputPassword3" placeholder="email" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Celular*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" data-mask="(00) 00000-0000" placeholder="Celular" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tel. Recado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" data-mask="(00) 0000-0000" placeholder="Tel. recado">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Rua*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Rua" maxlength="50" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Número*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Número" maxlength="6" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Bairro*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Bairro" maxlength="30" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Cidade*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Cidade" maxlength="30" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Estado*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Estado" maxlength="30" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">CEP*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" data-mask="00000-000" placeholder="CEP">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Receber atualizações</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Salvar</button>
                <button type="reset" class="btn btn-default float-left">Limpar</button>
                <button type="reset" class="btn btn-default float-left" onclick='history.go(-1)'>Voltar</button>
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
