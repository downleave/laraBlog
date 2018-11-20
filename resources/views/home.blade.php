@extends('layouts.app')

@section('content')
    <div id="content" class="col-md-10 col-md-offset-1">
        @foreach ($articles as $article)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('article/'.$article->id) }}">
                        <h4>{{ $article->title }}</h4>
                    </a>
                </div>
                <div class="panel-body">
                    {!! $article->body !!}
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center">
        {{ $articles->links() }}
    </div>
@endsection