<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="signup2.css">
</head>
<body style="background-image:url(signup_bgimage.jpg)";>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $session = $_POST['session'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobileno = $_POST['mobileno'];
$servername="localhost";
$username="root";
$password= "";
$databse="lms";
$conn=mysqli_connect($servername,$username,$password,$databse);
if (!$conn) {
    die("connection not established sucessful".mysqli_connect_error());
}
else{
    

$sql="INSERT INTO sign_up (rollno, name, session, email, password, mobileno) 
values ('$rollno', '$name', '$session', '$email', '$password', '$mobileno')";
$result=mysqli_query($conn,$sql);
if ($result){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
else{
    echo "data not inserted".mysqli_error($conn);
    }
    }
}
?>
    <div class="container">
            <form id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <h2>Register Yourself</h2>
                <label for="name">Name:</label>
                <input type="text" name="name" class="input-box" id="name" placeholder="Your Name" required="">
                <br/>
                <label for="rollno">Rollno:</label>
                <input type="text" name="rollno" class="input-box" id="rollno" placeholder="Your Rollno" required="">
                <br/>
                <label for="session">Session:</label>
                From &nbsp;<input type="date" name="session" class="sesson" placeholder="" id=session required="">
                &nbsp;To&nbsp;<input type="date" name="session2" class="sesson " id="session2" placeholder="" required="">
                <br/>
                <label for="email">Email:</label>
                <input type="email" name="email" class="input-box" id="email" placeholder="Your Email" required>
                <br/>
                <label for="password">Password:</label>
                <input type="password" name="password" class="input-box" id="password" placeholder="Your Password"required="">
                <br/>
                <label for="mobileno">Mobile no. :</label>
                <input type="number" name="mobileno" class="input-box" id="mobileno" placeholder="Your Mobile no." required="">
                <br/>
                <label for="department">Department:</label>
                <select>
                    <option>MCA</option>
                    <option>BCA</option>
                    <option>B.tech</option>
                </select>
                <br/>
                <p><input type="checkbox" class="" name=""/>Terms&Conditions</p>
                <br/>
                <input type="submit" value="Register" class="input-box" id="Register" name="Register">
            </form>
    </div>
</body>
<script>

</script>
</html>