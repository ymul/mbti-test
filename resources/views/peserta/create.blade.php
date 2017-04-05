@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (Session::has('flash_message'))
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">{{ Session::get('flash_message') }}</div> 
        </div>
        @endif
        @if(Auth::check())
        @include('admin.sidebar')
        @endif
        <div class="{{(Auth::check()) ? 'col-md-9' : 'col-md-12'}}">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Peserta</div>
                <div class="panel-body">
                    <a href="{{ url('/peserta') }}" title="Back"><button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {!! Form::open(['url' => '/peserta', 'class' => '', 'files' => true]) !!}

                    @include ('peserta.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
