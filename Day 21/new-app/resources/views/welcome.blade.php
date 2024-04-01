<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- name of input field -->
                        @error('email')    
                            <div style="color: red;"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter name">
                        @error('username')    
                            <div style="color: red;">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter Password">
                        @error('password')    
                            <div style="color: red;">{{$message}}</div>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>