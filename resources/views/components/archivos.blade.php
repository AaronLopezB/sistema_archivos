@extends('layouts.main')
@section('navegacion')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    Cargar Archivos
                </h1>
            </div>
            {{-- ubicacion --}}
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Dashboard v3
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <ul class="nav nav-pills p-2">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab_1">
                                    Cargar archivo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_2">
                                    Carpetas
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_3">
                                    Respuesta del banco
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane active" id="tab_1">
                                {{--
                                <form action="{{ route('cobranza.excel') }}" enctype="multipart/form-data"
                                id="subir_archivo2" method="POST" role="form">
                                --}}
                                <form action="javascript:;" enctype="multipart/form-data" id="subir_archivo"
                                    method="POST" role="form">
                                    <input id="token" name="_token" type="hidden" value="{{ csrf_token() }}" />
                                    <legend>
                                        Subir archivo
                                    </legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input accept="application/vnd.ms-excel" class="form-control" id="file"
                                                    name="file" placeholder="Archivo" type="file">

                                                <br />
                                                @error('file')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">
                                        Enviar archivo
                                    </button>
                                </form>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_2">

                                <div class="row text-center">
                                    @foreach ($files as $f)
                                    {{-- {{ substr($f, 13,8) }} --}}
                                    <div class="card" style="width: 18rem; text-align: center; align-items: center; margin-left: 10px;">
                                        <div class="card-body">
                                            <a href="{{route('carpeta',str_replace("storage/","",$f))}}"><img src="{{ asset('dist/img/Folder-icon.png') }}" class="img-fluid"
                                                alt="{{$f}}" srcset=""></a>
                                            <h5 class="card-title">
                                                {{ ucfirst(str_replace("storage/","",$f)) }}
                                            </h5>
                                            <br />

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        $("#subir_archivo").bind("submit",function(event){
            event.preventDefault();
            var token = $("#token").val();

            // var formData= new FormData;
            // formData.append("file", $("input[name=file]")[0].files[0]);
            var form = $("#subir_archivo");
            var data = new FormData(form[0]);
            // console.log(formData);
            $.ajax({
                url: '',
                type:"POST",
                data:data,
                processData:false,
                contentType:false,
                cache:false,
                headers: {'X-CSRF-TOKEN': token},
                beforeSend:function(){
                    Swal.fire({
                        title: 'Cargando Archivo',
                        html: 'Se esta cargando el archivo...',
                        timerProgressBar: true,
                        allowOutsideClick:false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        }
                    });
                },
                success:function(res){
                    if (res.estatus == true) {
                        Swal.DismissReason.close;
                        Swal.fire(
                            'Alerta',
                            'Se han cargado: '+res.registros+' registros',
                            'success'
                        );
                    }else{
                        Swal.DismissReason.close;
                    }
                }
            });
            

        });
    });
</script>
@endsection
