<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pantawid Pamilya</title>

    <link rel="icon" href="image-directory/4ps-logo.jpg">
    <link rel="stylesheet" href="css-directory/css-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap4/css/bootstrap.min.css">
    <script src="bootstrap/bootstrap4/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap4/js/jquery-3.3.1.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="form-field col-sm-3">
        <form action="Page/action-page/login-action.php" method="post" class="login-form">
                <img src="image-directory/2000px-User_icon_2.svg.png">
            <h5>Login</h5>
            <hr>
            <div class="form-group">
            <label>Username:</label>
            <div class="input-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
            </div>
            </div>
            <div class="form-group">
            <label>Password:</label>
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <div class="input-group-append">
                     <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
            </div>
            </div>
            <div class="form-group">
                <label>User Type:</label>
                <select name="userType" class="custom-select-md form-control">
                    <option>-Select-</option>
                    <option name="admin" value="Admin">Admin</option>
                    <option name="userPersonnel" value="User Personnel">User Personnel</option>
                    <option name="grantee" value="Grantee">Grantee</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="login" ><i class="fa fa-sign-in"> Proceed</i></button>
        </form>
        </div>
    </div>
</body>
</html>