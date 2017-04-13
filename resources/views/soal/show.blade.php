@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Soal {{ $soal->id }}</div>
                <div class="panel-body">

                    <a href="{{ url('/soal') }}" title="Back"><button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/soal/' . $soal->id . '/edit') }}" title="Edit Soal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['soal', $soal->id],
                    'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array('type' => 'submit','class' => 'btn btn-danger btn-sm','title' => 'Delete Soal','onclick'=>'return confirm("Confirm delete?")'))!!}
                    {!! Form::close() !!}
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <div class="col-lg-12">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $soal->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Kategori Soal Id </th>
                                        <td> {{ $soal->kategoriSoal->nama }} </td>
                                    </tr>
                                    <tr>
                                        <th> Soal </th>
                                        <td> {{ $soal->soal }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <h3>Opsi Jawaban</h3>
                            @foreach($soal->opsiSoal as $row)
                            <p>{{$row->opsi}}. {{$row->jawaban}} (<b>Nilai : {{$row->nilai}}</b>)</p>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
