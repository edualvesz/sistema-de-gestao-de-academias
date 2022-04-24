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
                                <a class="btn btn-success" onclick="adicionarAluno()">Adicionar Aluno</a> <!-- href=" academia/aluno" -->
                                <a href="#" class="btn btn-danger">Alunos desativados</a>
                                <!-- <label><input type="search" class="form-control form-control-sm" placeholder="Pesquisar" aria-controls="example1"></label> -->
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

<!-- ==========================================MODAL DE CADASTRO DO ALUNO================================================== -->

            
<!-- <div id="cadastroAluno" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="col-8"> --> <!-- div que da a largura para e objeto -->
    <div class="modal fade bd-example-modal-lg" id="cadastroAluno" tabindex="-1" role="dialog" aria-labelledby="MyIncritosModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Preencha os campos abaixo</h5> 
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- form start -->
                    <form method="POST" class="form-horizontal">
                            <div class="form-group row">
                                <input type="hidden" class="form-control" id="id">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="nome" placeholder="Nome" maxlength="50" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="nascimento" data-mask="00/00/0000" placeholder="Data de Nascimento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="email" placeholder="email" maxlength="50" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="celular" data-mask="(00) 00000-0000" placeholder="Celular" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="telRecado" data-mask="(00) 0000-0000" placeholder="Tel. recado">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="endereco" placeholder="Rua" maxlength="50" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="numeroCasa" placeholder="Número" maxlength="6" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="bairro" placeholder="Bairro" maxlength="30" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="cidade" placeholder="Cidade" maxlength="30" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="estado" placeholder="Estado" maxlength="30" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-60">
                                    <input type="text" class="form-control" id="cep" data-mask="00000-000" placeholder="CEP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="atualizacoes">
                                        <label class="form-check-label" for="exampleCheck2">Receber atualizações</label>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info" id="salvar" onclick="salvaAluno()">Salvar</button>
                            <button type="reset" class="btn btn-default float-left" id="limpaCampos">Limpar</button>
                            <button type="reset" class="btn btn-default float-left" onclick='history.go(-1)'>Voltar</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>  
        </div>
    </div>
</div>

<!-- ==========================================FIM DO MODAL DE CADASTRO DO ALUNO================================================== -->

</div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <!-- jQuery 3.6.0 -->
    <!-- <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script> -->
    <script src="{{asset('js/jquery.mask.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>

    // FUNCAO DE ABRIR O MODAL DE CADASTRO DE ALUNO

    function adicionarAluno(id, nome, nascimento, email, celular, recado, endereco, casa, bairro, cidade, estado, cep, atualizacoes){
        $('#cadastroAluno').modal('show')

        document.getElementById('id').value = id
        document.getElementById('nome').value = nome
        document.getElementById('nascimento').value = nascimento
        document.getElementById('email').value = email
        document.getElementById('celular').value = celular
        document.getElementById('telRecado').value = recado
        document.getElementById('endereco').value = endereco
        document.getElementById('numeroCasa').value = casa
        document.getElementById('bairro').value = bairro
        document.getElementById('cidade').value = cidade
        document.getElementById('estado').value = estado
        document.getElementById('cep').value = cep
        document.getElementById('atualizacoes').checked = atualizacoes
    }

    //FUNCAO DE SALVAR NOVO ALUNO

    function salvaAluno(){
        let data = new FormData();
        let id = document.getElementById('id').value
        let nome = document.getElementById('nome').value
        let nascimento = document.getElementById('nascimento').value
        let email = document.getElementById('email').value
        let celular = document.getElementById('celular').value
        let recado = document.getElementById('telRecado').value
        let endereco = document.getElementById('endereco').value
        let casa = document.getElementById('numeroCasa').value
        let bairro = document.getElementById('bairro').value
        let cidade = document.getElementById('cidade').value
        let estado = document.getElementById('estado').value
        let cep = document.getElementById('cep').value
        let atualizacoes = document.getElementById('atualizacoes').value

        data.append('id', id)
        data.append('nome', nome)
        data.append('nascimento', nascimento)
        data.append('email', email)
        data.append('celular', celular)
        data.append('telRecado', recado)
        data.append('endereco', endereco)
        data.append('numeroCasa', casa)
        data.append('bairro', bairro)
        data.append('cidade', cidade)
        data.append('estado', estado)
        data.append('cep', cep)
        data.append('atualizacoes', atualizacoes)

        console.log(id, nome, nascimento, email, celular, recado, endereco, casa, bairro, cidade, estado, cep, atualizacoes)
    
        $.ajax({
            type: 'POST',
            url: 'Home/salvaAluno',
            processData: false,
            processType: false,
            success: function(html){
                if(html != "true"){
                    alert('O aluno foi cadastrado no sistema com sucesso!')
                }
            }
        })
    }

    </script>
@stop