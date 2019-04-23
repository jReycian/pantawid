<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pantawid Pamilya</title>

    <link rel="icon" href="image-directory/4ps-logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap4/css/bootstrap.min.css">
    <script src="bootstrap/bootstrap4/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap4/js/jquery-3.3.1.min.js"></script>

</head>
<body>
    <div>
        <div style="border: 1px solid green; width: 300px; margin: 5% auto">
            <h3>Sign Up</h3>
            <form action="Page/action-page/sign-up-action.php" method="post">
            <table>
                <tbody>
                <tr>
                    <td>Firstname:</td>
                    <td><input type="text" name="first_name" id="firstname"></td>
                </tr>
                <tr>
                    <td>Middlename:</td>
                    <td><input type="text" name="middle_name" id="middlename"></td>
                </tr>
                <tr>
                    <td>Lastname:</td>
                    <td><input type="text" name="last_name" id="lastname"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender">
                                <option></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age"></td>
                </tr>
                <tr>
                    <td>Birthdate</td>
                    <td>
                        <input type="date" name="birthday">
                    </td>
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="contact_number" id="contactNumber"></td>
                </tr>
                <tr>
                    <td>User Type:</td>
                    <td>
                        <select name="user_type">
                                <option></option>
                                <option value="Admin">Admin</option>
                                <option value="Personnel">Personnel</option>
                                <option value="Grantee">Grantee</option>
                        </select>
                    </td>
                </tr>
                </tbody>
            </table>
            </form>
        </div>
    </div>
</body>