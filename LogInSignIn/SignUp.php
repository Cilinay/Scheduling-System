<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card cardBack">
                        <div class="card-body">
                            <h3 class="text-center mb-4 font">Sign Up</h3>
                            <form method="POST" action="SignUpForm.php">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">Password</label>
                                    <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                                    <div id="passwordHelpBlock" class="form-text">
                                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                    <input type="text" name="lastName" class="form-control" id="exampleFormControlInput1" required>
                                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                    <input type="text" name="firstName" class="form-control" id="exampleFormControlInput1" required>
                                    <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                                    <input type="text" name="middleName" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="birthdayInput" class="form-label">Birthday</label>
                                    <input type="date" name="birthday" class="form-control" id="birthdayInput" required>
                                </div>                            
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="exampleFormControlInput1" required >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                                    <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100">Sign Up</button>    
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 