@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Welcome to this beautiful admin panel.</p>-->
    <div class="col-12 col-sm-12">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Resumo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Objetivo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">PAR-Q e Anamnese</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="true">Antropometria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="true">Ficha Treinamento</a>
                    </li>
                </ul>
            </div>
                <div class="card-body">
                    <!-- Aba 1 -->
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <h5>Objetivo principal:</h5><br><br>
                            <h5>Meta de peso ideal:</h5><br><br>
                            <h5>Evolução:</h5><br><br>
                            <h5>PAR-Q:</h5><br><br>
                            <h5>Última avaliação física:</h5><br><br>
                            <h5>Avaliação da composição corporal: Protocolo Pollok (Sete dobras cutâneas):</h5><br><br>
                            <div class="card">
                            <div class="card-body">
                                <p>O IMC é apenas uma refência de peso recomendado para cada indivíduo, indicado para sedentários ou iniciantes de atividade física.
                                    Não recomendado para atletas ou praticantes avançados, por não distinguir massa magra de massa gorda. 
                                </p>
                            </div> 
                        </div>
                    </div>
                    <!-- Aba 2 -->
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="col-md-6" data-select2-id="29">
                            <div class="form-group">
                                <label>Qual o seu objetivo principal</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="3"></option>
                                    <option data-select2-id="31">Aumento de massa muscular</option>
                                    <option data-select2-id="32">Perder peso (diminuição da gordura corporal)</option>
                                    <option data-select2-id="33">Aumento da flexibilidade óssea com alongamentos</option>
                                    <option data-select2-id="34">Qualidade de vida e diminuição do estresse</option>
                                    <option data-select2-id="35">Aumento da performance esportiva</option>
                                    <option data-select2-id="35">Recuperação de lesão</option>
                                </select><br><br>
                                <label>Qual o seu objetivo secundário</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="3"></option>
                                    <option data-select2-id="31">Aumento de massa muscular</option>
                                    <option data-select2-id="32">Perder peso (diminuição da gordura corporal)</option>
                                    <option data-select2-id="33">Aumento da flexibilidade óssea com alongamentos</option>
                                    <option data-select2-id="34">Qualidade de vida e diminuição do estresse</option>
                                    <option data-select2-id="35">Aumento da performance esportiva</option>
                                    <option data-select2-id="35">Recuperação de lesão</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><br><br>  
                                <label>Meta de peso ideal (deixar em branco caso o objetivo do aluno não seja ganhar ou perder peso)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""><br><br>
                                <label>Pretende alcançar o objetivo em quantos meses?</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""><br><br>
                                <button type="button" class="btn btn-sm btn-outline-danger">Salvar alterações</button>
                            </div>                          
                    <!-- /.form-group -->
                        </div>
                            </div>
                                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                    <div class="bootstrap-duallistbox-container row moveonselect moveondoubleclick"> 
                                        <div class="box1 col-md-4">   
                                            <label for="bootstrap-duallistbox-nonselected-list_" style="display: none;"></label>   
                                                <span class="info-container">       
                                                    <span class="info">Telefone em caso de emergência</span>     
                                                </span>   
                                            <input class="form-control filter" type="text" maxlength="12" data-mask="(00)00000-0000">
                                        </div> 
                                        <div class="box2 col-md-4">   
                                            <label for="bootstrap-duallistbox-selected-list_" style="display: none;"></label>   
                                                <span class="info-container">     
                                                    <span class="info">Responsável em caso de emergência</span>     
                                                </span>   
                                            <input class="form-control filter" type="text" maxlength="50">         
                                        </div>
                                        <div class="box2 col-md-4">   
                                            <label for="bootstrap-duallistbox-selected-list_" style="display: none;"></label>   
                                                <span class="info-container">     
                                                    <span class="info">Telefone extra de emergência</span>     
                                                </span>   
                                            <input class="form-control filter" type="text" maxlength="12" data-mask="(00)00000-0000">         
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                    
                                </div> 
                                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                    
                                </div>    
                            </div>
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