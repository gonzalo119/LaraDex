@extends('layouts.app')

@section('title', 'trainers Create')

@section('content')
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li> 
                @endforeach
            </ul> 
        </div>
        @endif

    {!! Form::open(['route'=>'trainers.store','method'=>'POST','files'=>true]) !!}

        @include('trainers.form')
    
    {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}

    </div>
{!! Form::close() !!}

<!-- <form action="/trainers" class="form-group" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

        <div class="form-group">
            <label for="">nombre</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="">descripción</label>
            <input type="text" class="form-control" name="description">
        </div>

        <div class="form-group">
            <label for="">avatar</label>
            <input type="file"  name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>-->

@endsection
