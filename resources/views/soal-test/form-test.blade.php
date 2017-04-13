@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Test - {{$kategoriSoal->nama}}</div>
                <div class="panel-body">
                    <a href="{{ url('/soal-test') }}" title="Back">
                        <button class="btn btn-info btn-sm">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {!! Form::open(['url' => '/soal-test/form/'.$kategoriSoal->id, 'class' => 'form-horizontal', 'files' => true]) !!}
                    @foreach($kategoriSoal->soal as $row)
                    <div class="col-lg-12" style="margin-bottom:20px;">
                        <div class="col-md-12 question">
                            {{$counterSoal++ . '. ' . $row->soal}}
                        </div>
                        @foreach($row->opsiSoal as $os)
                        <div class="col-md-3 choice">
                            {!! Form::radio('soal'.$row->id, $os->id, null, ['class' => 'form-control', 'required' => 'required']) !!}
                            {{$os->opsi}}. 
                            {{$os->jawaban}}
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                    <div class='col-lg-12'>
                        {!! Form::submit('Proses', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
