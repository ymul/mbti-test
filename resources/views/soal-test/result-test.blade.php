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
                <div class="panel-heading">Hasil Test - {{$kategoriSoal->nama}}</div>
                <div class="panel-body">
                    <h4 class="result">{!! $result->hasil !!}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
