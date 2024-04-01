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
            <h1>Create Expenses</h1>
        </header>

        <section class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="/submit-form" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="expenses" class="form-label">Expenses Title:</label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount:</label>
                        <input type="text" class="form-control" id="amount" name="amount" >
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <input type="text" class="form-control" id="category" name="category">
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>