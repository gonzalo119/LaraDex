@extends('layouts.app')

@section('title', 'trainers Edit')

@section('content')

    {!! Form::model($trainer, ['route'=>['trainers.update', $trainer], 'method'=>'PUT', 'files'=>true]) !!}

    @include('trainers.form')

    {!! Form::submit('Actuallizar', ['class'=>'btn btn-primary']) !!}

    </div>


<!--<form action="/trainers/{{$trainer->slug}}" class="form-group" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">

        <div class="form-group">
            <label for="">nombre</label>
            <input type="text" class="form-control" value="{{$trainer->name}}" name="name">
        </div>

        <div class="form-group">
            <label for="">descripción</label>
            <input type="text" class="form-control" value="{{$trainer->description}}" name="description">
        </div>

        <div class="form-group">
            <label for="">avatar</label>
            <input type="file"  name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">actualizar</button>
    </div>
</form>-->

@endsection
