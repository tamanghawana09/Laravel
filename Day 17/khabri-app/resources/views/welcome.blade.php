<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <h1>Rocket-khabar.com🚀</h1>
        </header>
        <section>
                @foreach ($news as $value )
                <ul>
                    <li>
                        <div>
                            <h2> <a href="news/{{$value['id']}}">{{$value['title']}}</a></h2>
                            <p>{{$value['description']}}</p>
                        </div>
                    </li>
                </ul>
                @endforeach
            </ul>
        </section>
    </main>
</body>
</html>