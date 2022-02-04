<html>
    <body>
        @foreach($data as $d)
        {{$d->id}}
        {{$d->layanan}}
        {{$d->status}}
        @endforeach
    </body>
</html>