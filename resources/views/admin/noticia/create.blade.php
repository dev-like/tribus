@extends('admin.main')

@section('page-caminho')
Notícias
@endsection

@section('page-title')
Cadastro
@endsection

@section('script-bottom')
<link href="{{ asset('template/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="col-12">
  <div class="card-box">
      {{ Form::open(['route' => 'noticias.store', 'files' => true]) }}
      <div class="row">
        <div class="form-group col-md-8">
            {{ Form::label('titulo', 'Título da Notícia') }}
            {{ Form::text('titulo', null, array('class' => 'form-control', 'autofocus','maxlength' => '100', 'required')) }}
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('datapublicacao', 'Data de publicação:') !!}
            {!! Form::date('datapublicacao', null, array('class' => 'form-control','required')) !!}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('descricao', 'Descrição') }}
            {{ Form::text('descricao', null, array('class' => 'form-control', 'autofocus','maxlength' => '2000', 'required')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
            {!! Form::label('conteudo', 'Conteúdo') !!}
            {!! Form::textarea('conteudo', null, array('class' => 'form-control')) !!}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          {{ Form::label('tags', 'Tags') }}
          {{ Form::text('tags', null, array('class' => 'palavraschave form-control','maxlength' => '255', 'data-role' => 'tagsinput')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          {!! Form::label('imagem', 'Imagem') !!}
          <input type="file" name="imagem" class="filestyle" data-placeholder="Enviar imagem" data-btnClass="btn-light">
        </div>
      </div>
        <div class="row" style="margin-top: 20px">
          <div class="form-group col-12">
            <div class="text-center">
              <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Salvar</button>
              <a href="{{ route('noticias.index') }}" class="btn btn-danger"><i class="fa fa-window-close m-r-5"></i> Cancelar</a>
            </div>
          </div>
        </div>
      {{ Form::close() }}
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/plugins/tinymce/tinymce.min.js') }}"></script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea#conteudo",
    height:300,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }
      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };
  tinymce.init(editor_config);
</script>
@endsection
