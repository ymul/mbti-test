@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Test - {{$kategoriSoal->nama}}</div>
                <div class="panel-body">
                    <a href="{{ url('/kategori-soal') }}" title="Back">
                        <button class="btn btn-info btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    <br />
                    <br />

                    <div class="col-md-12">
                        <h4 class="text-uppercase">ADMINISTRASI TEST</h4>
                        <ol class="notice">
                            <li>Model tes : tes dapat disajikan secara klasikal maupun secara individual.</li>
                            <li>Instruksi tes : <b>“Perhatikan pasangan kata dibawah ini, pilih salah satu diantara kedua kata tersebut. Perhatikan makna dan arti kata, bukan atau ritmenya. Ikutilah apa yang terpikir sesaat”</b>.</li>
                            <li>Waktu tes : kurang lebih 8 menit untuk orang normal.</li>
                        </ol>
                        <hr/>
                    </div>

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {!! Form::open(['url' => '/soal-test/form/'.$kategoriSoal->id, 'class' => 'form-horizontal', 'files' => true]) !!}
                    @foreach($kategoriSoal->soal as $row)
                    <div class="col-lg-12">
                        <div class="question">
                            {{$counterSoal++ . '. ' . $row->soal}}
                        </div>
                        @foreach($row->opsiSoal as $os)
                        <div class="choice">
                            {!! Form::radio('soal'.$row->id, $os->id, null, ['class' => 'form-control', 'required' => 'required']) !!}
                            {{$os->opsi}}. 
                            {{$os->jawaban}}
                        </div>
                        @endforeach
                        <hr />
                    </div>
                    @endforeach
                    <div class='col-lg-12'>
                        {!! Form::submit('Proses', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
