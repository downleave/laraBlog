@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">编辑</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>修改失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/articles/'.$articles->id) }}" method="POST">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题" value="{{$articles->title}}">
                        <br>
                        <!-- <textarea name="body" rows="10" class="form-control" required="required" placeholder="请输入内容">{{$articles->body}}</textarea> -->
                        <div id="editormd">
                            <textarea style="display:none;" name="body" placeholder="请输入内容" required="required">{{$articles->body}}</textarea>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-info">修改文章</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        var editor = editormd("editormd", {
            path : "{{ asset('editor/lib') }}/",// Autoload modules mode, codemirror, marked... dependents libs path
            height  : 640,
            width   : "100%",
            syncScrolling : "single",
            saveHTMLToTextarea : true//注意3：这个配置，方便post提交表单
        });

        /*
        // or
        var editor = editormd({
            id   : "editormd",
            path : "../lib/"
        });
        */
    });
</script>
@endsection