<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <header class="bg-dark text-white py-4 text-center">
            <h1>Expenses Tracker</h1>
        </header>
        <div>
            <a class="btn btn-primary" href="/create">Create New expenses</a>
        </div>
        <section class="container mt-4">
            <table class="table table-bordered">
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Category</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                 @foreach($expenses as $value)

                <tr>
                <th scope="row">{{$value['id']}}</th>
                <td>{{$value['title']}}</td>
                <td>{{$value['amount']}}</td>
                <td>{{$value['category']}}</td>
                <td><a href="/edit/{{$value['id']}}" class="btn btn-info">Edit</a></td>
                <td><a href="/delete/{{$value['id']}}" class="btn btn-danger">Delete</a></td>
                </tr>

                @endforeach 
            </table>
        </section>
    </main>
</body>
</html>