
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile editing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<ul>
                <li><a href="User_Dashboard.php">Dashboard</a></li>
                <li><a href="User_Profile.php">View Profile</a></li>
                <li><a href="Edit_Profile.php">Edit Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
    <div class="container" style="width:700px;">
        <form method="post">
            Name:
            <input type="text" name="name" class="form-control" >
            <br><br>
            E-mail:
            <input type="text" name="e-mail" class="form-control" >
            <br><br>
            <fieldset>

                <legend>Date of Birth:</legend>
                <input type="date" name="dob" class="form-control">
                <br><br>
            </fieldset>
            <br><br>
            <input type="submit" value="Update" class="btn btn-info" /><br />
            
        </form>
    </div>
</body>

</html>