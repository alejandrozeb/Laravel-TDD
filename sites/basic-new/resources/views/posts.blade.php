@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p class="card-text">
                        {{$post->get_excerpt}}
                        <a href="{{route('post', $post)}}">Leer mas</a>
                    </p>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
@endsection
