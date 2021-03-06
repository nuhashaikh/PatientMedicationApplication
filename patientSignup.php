<!DOCTYPE php>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightblue;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: lightgreen;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/PatientMedicationApplication/patient_action.php" method="get">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" id="name" required>

    <label for="medID"><b>Healthcard Number</b></label>
    <input type="text" placeholder="Enter Healthcare #" name="health_no" id="health_no" required>
    
    <label for="email"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone #" name="phone" id="phone" required>

    <label for="doctor"><b>Doctor</b></label>
    <div class="row">
      <select name="doctor" id="doctor" class="container">
        <option value="default"><b>Select Your Doctor</b></option>
        <?php 
          require __DIR__ . '/helper.php';
          $url = "https://localhost:5001/api/doctors/GetDoctors";
          $arr = make_curl_get_request($url);
      
          foreach($arr["value"] as $key=>$value){
            echo '<option value='.$value["id"].'>' . $value["name"] . '</option>';
          }
        ?>
      </select> 
    </div>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>
    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

    <button type="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="login.html">Log in</a>.</p>
  </div>
</form>

</body>
</html>
