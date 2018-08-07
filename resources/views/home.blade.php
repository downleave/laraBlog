<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>downleave's blog</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

    <div id="title" style="text-align: center;">
        <h1>downleave's blog</h1>
        <div style="padding: 5px; font-size: 16px;">blog</div>
    </div>
    <hr>
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
</body>
</html>