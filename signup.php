<html>

<head>
    <title>Registration </title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="registration.php" method="post">
                                    <h2>Sign Up</h2>
                                    <p>Please enter your details here!</p>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="FName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="LName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Student Number</label>
                                        <input type="text" name="StId" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="pass" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>

                                    <button class="btn" type="submit">Register</button>
                                </form>


                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                                <div>
                                    <p>Thank you for registring </p>

                                </div>


                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

<!---


<html>

<head>
    <title> User Login And Registration </title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2> Register Here <h2>
                        <div id="main">
                            <form action="registration.php" method="post">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="FName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="LName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Student Number</label>
                                    <input type="text" name="StId" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="pass" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Register </button>
                            </form>
                            <form action="login.php">
                                <button type="submit" class="btn btn-primary">
                                    Login </button>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</body>
<html>
---1>