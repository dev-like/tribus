@extends('admin.main')

@section('styles')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Sweet Alert css -->
  <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-caminho')
Evento
@endsection

@section('page-title')
Cadastro
@endsection

@section('script-bottom')
@endsection

@section('content')
<div class="col-12">
  <div class="card-box">
      @if(!isset($evento->id))
        <p id="req-cad">
          As informações da evento ainda não foram cadastradas,
          <a id="cad" class="text-success" href="#"> Cadastre agora.</a>
        </p>
        <div id="form-cad" class="col-sm-12 col-xs-12" style="display:none">
          {{ Form::open(['route' => 'evento.store']) }}
      @else
          <div id="form-cad" class="col-sm-12 col-xs-12">
          {{ Form::model($evento, ['route' => ['evento.update', $evento->id], 'method' => 'PUT']) }}
      @endif

      <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('textoevento', 'Texto do Evento') }}
            {{ Form::textarea('textoevento', null, array('class' => 'form-control', 'autofocus','required')) }}
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
            {{ Form::label('visao', 'Visão') }}
            {{ Form::textarea('visao', null, array('class' => 'form-control','maxlength' => '500')) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('missao', 'Missão') }}
            {{ Form::textarea('missao', null, array('class' => 'form-control','maxlength' => '500')) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('valores', 'Valores') }}
            {{ Form::textarea('valores', null, array('class' => 'form-control','maxlength' => '500')) }}
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-3">
            {{ Form::label('instagram', 'Instagram') }}
            {{ Form::url('instagram', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('youtube', 'YouTube') }}
            {{ Form::url('youtube', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('whatsapp', 'WhatsApp') }}
            {{ Form::url('whatsapp', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('facebook', 'Facebook') }}
            {{ Form::url('facebook', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-12">
          <div class="text-center">
            <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Atualizar</button>
            <a href="{{ route('evento.index') }}" class="btn btn-danger"><i class="dripicons-cross"></i> Cancelar</a>
          </div>
        </div>
      </div>
  </div>
</div>

{{ Form::close() }}
  </div>
</div>
@endsection

@section('scripts')
<script>
jQuery(function($){
  $("#telefone").mask("(99) 99999-9999");
});
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#cad").click(function(event){
      event.preventDefault();
      $("#req-cad").slideUp();
      $("#form-cad").slideDown();
    });
});
</script>

@endsection
