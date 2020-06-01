@extends('layouts.app')

@section('title', 'trainer')

@section('content')

    <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}" alt="">
    <div class="text-center">
        <h5 class="card-title">{{ $trainer->name }}</h5>
        <p>{{ $trainer->description }}</p>
        <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>

        {!! Form::open(['route'=>['trainers.destroy',$trainer->slug], 'method'=>'DELETE']) !!}
            {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
        {!! Form::close()!!}
        
    </div>

    

@endsection