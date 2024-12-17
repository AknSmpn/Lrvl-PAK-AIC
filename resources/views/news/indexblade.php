<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>
    <h1>Ini news</h1>
    {{ var_dump($news) }}
    @foreach($news as $row)

    <div>
        <div style="width: 10%; floating:left">
        <div><img src="{{ $row->picture }}"/></div>
        <div>
            <div style="width: 90%">
        <span>{{ $row->title }} </span><sr>
        <p style="display: inline-block">{{ $row->content }}</p>
        </div>
        @endforeach
        
</body>
</html>