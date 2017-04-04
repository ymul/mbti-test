@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (Session::has('flash_message'))
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">{{ Session::get('flash_message') }}</div> 
        </div>
        @endif
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Edit KategoriSoal #{{ $kategorisoal->id }}</div>
                <div class="panel-body">
                    <a href="{{ url('/kategori-soal') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {!! Form::model($kategorisoal, [
                    'method' => 'PATCH',
                    'url' => ['/kategori-soal', $kategorisoal->id],
                    'class' => 'form-horizontal',
                    'files' => true
                    ]) !!}

                    @include ('kategori-soal.form', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}

                    {!! Form::open(['url' => '/kategori-soal/'.$kategorisoal->id.'/add/result', 'class' => 'form-horizontal']) !!}

                    <div class="form-group {{ $errors->has('range_awal') ? 'has-error' : ''}}">
                        {!! Form::label('range_awal', 'Range Awal', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::number('range_awal', 0, ['class' => 'form-control']) !!}
                            {!! $errors->first('range_awal', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('range_akhir') ? 'has-error' : ''}}">
                        {!! Form::label('range_akhir', 'Range Akhir', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::number('range_akhir', 0, ['class' => 'form-control']) !!}
                            {!! $errors->first('range_akhir', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('range_akhir') ? 'has-error' : ''}}">
                        {!! Form::label('hasil', 'Hasil', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::textarea('hasil', '', ['class' => 'form-control']) !!}
                            {!! $errors->first('hasil', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-4">
                            {!! Form::submit('Add Hasil', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                    <h2>Result :</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Range Awal</th>
                            <th>Range Akhir</th>
                            <th>Hasil</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        @foreach($kategorisoal->kategoriSoalPenilaian as $row)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$row->range_awal}}</td>
                            <td>{{$row->range_akhir}}</td>
                            <td>{{$row->hasil}}</td>
                            <td>
                                {!! Form::open([
                                'method'=>'DELETE',
                                'url' => ['/kategori-soal/result/delete', $row->id],
                                'style' => 'display:inline'
                                ]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Result',
                                'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
