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
            <h1>{{$title}}</h1>
        </header>
    </main>
    <section>
       @if ($is_expired)
        <h3 style ="color:red">!!! This site is expired !!!</h3>   
       @endif
        
        <ul>
             @foreach ($news as $element)
                <li>
                    <h2><a href="/news/1">{{$element}}</a></h2>
                </li>
            @endforeach
        </ul>
    </section>
</body>
</html>