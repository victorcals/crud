@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>usuarios </h1>

                    @foreach( $user as $users)
                    <form action="{{route('usuarios-delete', ['id' => $users -> id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">deletar</button>

                        <a href="{{route('usuarios-info', ['id' => $users->id ])}}">
                            {{$users->id}}-- {{$users->name}}--{{$users->email}}<br>
                        </a>
                    </form>



                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection