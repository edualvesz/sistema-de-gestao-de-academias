@extends('adminlte::page')

@section('title', 'Gestão de academia')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
<div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header p-0">
                
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Resumo</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Objetivo</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Antropometria</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">PAR-Q e Anamnese</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Ficha de Treinamento</a></li>

                  <!-- Abaixo está um menu dropdown -->

                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      Dropdown <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" style="">
                      <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                    </div>
                  </li> -->
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    A wonderful serenity has taken possession of my entire soul,
                    like these sweet mornings of spring which I enjoy with my whole heart.
                    I am alone, and feel the charm of existence in this spot,
                    which was created for the bliss of souls like mine. I am so happy,
                    my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                    that I neglect my talents. I should be incapable of drawing a single stroke
                    at the present moment; and yet I feel that I never was a greater artist than now.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                    new common language would be desirable: one could refuse to pay expensive translators. To
                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                    words. If several languages coalesce, the grammar of the resulting language is more simple
                    and regular than that of the individual languages.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                  Proin dictum blandit ullamcorper. Vestibulum est augue, luctus nec euismod eu, ultricies in lacus. 
                  Cras dignissim malesuada ipsum, vel accumsan tellus venenatis at. Fusce leo lectus, euismod non sem quis, tincidunt molestie neque. 
                  Ut maximus sollicitudin ipsum, et tincidunt lectus auctor at. Duis sapien quam, malesuada a metus id, interdum vulputate lorem. 
                  Sed sit amet justo ut lectus interdum feugiat. Integer venenatis elit nec efficitur dictum. Mauris vel accumsan purus. 
                  Phasellus arcu quam, viverra non cursus nec, interdum quis massa. Sed pellentesque volutpat consectetur. 
                  Mauris venenatis massa metus, a blandit erat feugiat sit amet.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec tincidunt diam. Cras dapibus dignissim turpis. 
                    Aliquam interdum imperdiet diam, vel facilisis eros. Sed vel diam sodales, sagittis est ut, facilisis mi.
                    Fusce elit quam, molestie nec sodales at, laoreet eget lectus. Phasellus viverra sapien sed molestie fringilla. 
                    Donec tincidunt non erat at lobortis. Cras eu turpis ac purus condimentum rutrum. Donec in tellus sagittis, tristique mi eu, fringilla augue. 
                    Aenean consequat at orci at aliquam. Sed suscipit rhoncus massa, ut placerat orci. Phasellus vel commodo risus.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
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