@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">评论</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr class="text-left">
                                <td><h4><strong>内容</strong></h4></td>
                                <td><h4><strong>用户</strong></h4></td>
                                <td><h4><strong>所属文章</strong></h4></td>
                                <td><h4><strong>操作</strong></h4></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                            <tr>
                                <td>{{$comment->content}}</td>
                                <td>
                                    <h4>{{$comment->nickname}}</h4>
                                    {{$comment->email}}
                                </td>
                                <td>
                                    <a href="{{ url('article/'.$comment->getArticle->id) }}">
                                        {{$comment->getArticle->title}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/comments/'.$comment->id.'/edit') }}" class="btn btn-success">编辑</a>
                                    <form action="{{ url('admin/comments/'.$comment->id) }}" method="POST" style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">删除</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection