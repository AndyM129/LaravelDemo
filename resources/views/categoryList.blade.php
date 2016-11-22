@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">当前分类: {{ $currentCategory->name }}</div>
                    <div class="panel-body">
                        @foreach($books as $book)
                            <h3>
                                {{ $book->title }}<br/>
                                <small>{{ $book->description }}</small>
                            </h3>

                            <small>{{ $book->author }} 著</small><br/>
                            <small>¥ {{ $book->price }}</small><br/>

                            <hr/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
