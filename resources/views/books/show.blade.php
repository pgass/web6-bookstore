<DOCTYPE html>
    <html>
        <head>
            <title>Detailansicht</title>
        </head>
        <body>
        <h2>{{$book->title}}</h2>
            <ul>
                <li>ISBN: {{$book->isbn}}</li>
                <li>Untertitel: {{$book->subtitle}}</li>
                <li>Bewertung: {{$book->rating}} von 10 Punkten</li>
            </ul>

        <li><a href="/books">Zurück zur Übersicht</a></li>
        </body>
    </html>
