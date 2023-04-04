<DOCTYPE html>
    <html>
        <head>
            <title>KWM lernt Laravel</title>
        </head>
        <body>
            <ul>
                @foreach($books as $book)
                    <li><a href="/books/{{$book->id}}">{{$book->title}}</a></li>
                @endforeach
            </ul>
        </body>
    </html>
