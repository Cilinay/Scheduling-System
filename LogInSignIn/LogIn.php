<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card cardBack">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Log In</h3>
                        <form method="POST" action="LogInForm.php">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock" required>
                                <div id="passwordHelpBlock" class="form-text">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                </div> <br>
                                <div class="text-center">
                                    <a class="text-center" href="SignUp.php">Are you a new User?</a> 
                                </div> <br>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
