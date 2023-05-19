<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="signup2.css">
  </head>
  <body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>