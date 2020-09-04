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
                        Records
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
            <div class="col-md-12">
                <div class="card-columns">
                    @foreach ($files as $f)
                    @php
                    $extension = pathinfo($f)['extension'];
                    @endphp
                    <div class="card p-3">
                        @switch($extension)

                        @case("mp4")
                            <video src="{{ asset($f) }}" controls poster="posterimage.jpg" style="width: 100%;">
                                Tu navegador no admite el elemento <code>video</code>.
                            </video>
                            @break

                        @case('png')
                        @case('jpg')
                            <img src="{{ asset($f) }}" class=" img-fluid" alt="{{$f}}" srcset="">
                            @break

                        @case("docx")
                        @case("pdf")
                            <img src="{{ asset('dist/img/document.png') }}" class="img-fluid" alt="{{$f}}" srcset="">
                            @break

                            @default

                        @endswitch
                        <div class="card-body">
                            <h5 class="card-title">{{ ucfirst(str_replace("storage/","",$f)) }}</h5>

                            {{-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> --}}
                            <p class="card-text"><small class="text-muted">Fecha de ingreso</small></p>
                            <a href="{{route('download',base64_encode($f))}}" class="btn btn-outline-primary btn-block" >Download</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        
    });
</script>
@endsection
