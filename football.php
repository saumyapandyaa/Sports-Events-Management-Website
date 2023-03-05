<html>

<head>
    <title> User Login And Registration </title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="football.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 login">
                <h2> Register Here For Soccer <h2>
                        <div id="main">
                            <form action="Ftregistration.php" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="Name" class="form-control">
                                    <label>Student Number</label>
                                    <input type="text" name="StId" class="form-control">
                                    <label>Gender</label>
                                    <input type="text" name="gen" class="form-control">
                                    <label>Year of Study</label>
                                    <input type="text" name="YoS" class="form-control">
                                    <label>Time</label>
                                    <select name='time' id='time'>
                                        <option value='0' selected='selected'>Select any</option>
                                        <option value='21:30'>9:30 PM</option>
                                        <option value='22:30'>10:30 PM</option>
                                    </select><br>
                                    <button type="submit" class="btn"> Register</button>
                            </form>
                        </div>
            </div>
        </div>
    </div>
    </div>
</body>
<html>