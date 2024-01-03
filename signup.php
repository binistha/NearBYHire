<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $birth = $_POST["birth"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $check = $_POST["check"];


    $conn = new mysqli("localhost", "root", "", "form");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `signup` (`fname`, `lname`, `city`, `mobile`, `email`, `birth`, `gender`, `password`, `check`) 
    VALUES ('$fname', '$lname', '$city', '$mobile', '$email', '$birth', '$gender', '$hashed_password', '$check')";

    $result = $conn->query($sql);

    if ($result) {
        echo "Data inserted successfully";
        header("Location: service.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close(); // Close the database connection
}


?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Signup</title>
      <link rel="stylesheet" href="sass/nby.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="sass/login.css">

  <style>
    section{
      align-items: center;
      justify-content: center;
    }
    .error{
      color: red;
    }
  </style>
  </head>
  <body style="background-color: rgba(0, 45, 91, 0.8);">


  <section class="petcntainer" id="petcntainer">
    <div class="petbg-outer">
            <div class="petbg">
              <div class="petbg-inner padding-horizontal--48">
              <form action="" method="POST" onsubmit="return validateForm()" >   
                <h1>Register Now </h1>
                <h3>Personal Information</h3>

          <div class='set'>
            <div class='pets-name'>
              <label >First Name:</label>
              <input id='fname'name='fname' placeholder=" First name" type='text' required>                 
              <span id="fnameError" class="error-message"></span>
            </div>
            <div class='pets-name'>
                    <label >Last Name:</label>
                    <input id='lname'name='lname' placeholder=" Last name" type='text' required>                  
                  
                    <span id="lnameError" class="error-message"></span>
                  </div>
            </div>
          
      <div class='set'>
        <div class='pets-name'>
                <label> City: </label>
                    <select id='city' name='city'>
                      <option value='Kathmandu'>Please City</option>
                      <option value='Kathmandu'>Kathmandu</option>
                      <option value='Bhaktapur'>Bhaktapur</option>
                      <option value='Lalitpur'>Lalitpur</option>
                    </select>
        <span id="cityError" class="error-message"></span>
          </div>
    
        <div class='pets-name'>
              <label> Mobile number: </label>
              <input id='mobile' name='mobile' placeholder=" Mobile number" type='text' required>
              <span id="mobileError" class="error-message"></span>
        </div>
      </div>

    <div class='set'>
        <div class='pets-name'>
              <label>Email: </label>
              <input id='email' name='email' placeholder="example@.com " type='text' required>
              <span id="emailError" class="error-message"></span>
            </div>  
    
        <div class='pets-name'>
              <label >DOB</label>
              <input id='birth' name='birth' placeholder='MM/DD/YYYY' type='date' required>
              <span id="birthError" class="error-message"></span>
    
        </div>
      </div>
    
      <div class='set'>
              <div class='pets-gender'>
                <label for='pet-gender-female'>Gender</label>
                <div class='radio-container'>
                  <input checked='' id='female' name='gender' type='radio' value='female'>
                  <label >Female</label>
    
                  <input id='male' name='gender' type='radio' value='male'>
                  <label>Male</label>
    
                  <input id='other' name='gender' type='radio' value='other'>
                  <label >Other</label>
                </div>
                <span id="genderError" class="error-message"></span>
    
              </div>
            </div>
    
    <div class='set'>
        <div class='pets-name'>
                <label>Password: </label>
                <input id='password' name='password' placeholder="Password" type='password' required>
                <span id="passwordError" class="error-message"></span>
    
        </div>
    
      </div>

      <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
          <label for="checkbox">
          <input type="checkbox" name="check" required> I agree to all the Terms & Conditions
          </label>
      </div>
              <div class="field padding-bottom--24">
                <input type="submit" name="submit" value="Sign up">
              </div>
              <div class="field">
                  <span>Already have an account?</span>
                  <a class ="holink" href="loginform.php">Sign in</a>
              </div>
          </form> 
            </div>
          </div>
        </div>
      </div>
   </div>
 </section>
 
 <script>
  function validateForm() {
    resetErrors();

    let hasErrors = false;

    // Validate First Name
    const fname = document.getElementById('fname').value.trim();
    if (!isAlpha(fname)) {
      displayError('fnameError', 'First Name should contain only alphabetical characters.');
      hasErrors = true;
    }

    // Validate Last Name
    const lname = document.getElementById('lname').value.trim();
    if (!isAlpha(lname)) {
      displayError('lnameError', 'Last Name should contain only alphabetical characters.');
      hasErrors = true;
    }

    // Validate City
    const city = document.getElementById('city').value;
    if (city === 'Please City') {
      displayError('cityError', 'Please select a City.');
      hasErrors = true;
    }

    // Validate Mobile Number
    const mobile = document.getElementById('mobile').value.trim();
    if (!/^\d{10}$/.test(mobile)) {
      displayError('mobileError', 'Mobile Number must be 10 digits.');
      hasErrors = true;
    }

    // Validate Email
    const email = document.getElementById('email').value.trim();
    if (!/^\S+@\S+\.\S+$/.test(email)) {
      displayError('emailError', 'Enter a valid email address.');
      hasErrors = true;
    }

    // Validate Date of Birth
    const birth = document.getElementById('birth').value.trim();
    if (!birth) {
      displayError('birthError', 'Date of Birth is required.');
      hasErrors = true;
    }

    // Validate Gender
    const gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
      displayError('genderError', 'Please select a Gender.');
      hasErrors = true;
    }

    // Validate Password
    const password = document.getElementById('password').value;
    if (password.length < 8) {
      displayError('passwordError', 'Password must be at least 8 characters.');
      hasErrors = true;
    }

    // Validate Terms & Conditions Checkbox
    const termsCheckbox = document.querySelector('input[name="check"]');
    if (!termsCheckbox.checked) {
      displayError('checkboxError', 'You must agree to the Terms & Conditions.');
      hasErrors = true;
    }

    return !hasErrors; // Return true if no errors, false otherwise
  }

  // Function to check if a string contains only alphabetical characters
  function isAlpha(value) {
    return /^[A-Za-z]+$/.test(value);
  }

  // Function to display error messages
  function displayError(id, message) {
    const errorElement = document.getElementById(id);
    if (errorElement) {
      errorElement.textContent = message;
    }
  }

  // Function to reset error messages
  function resetErrors() {
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach((element) => {
      element.textContent = '';
    });
  }
</script>



    </body>
    </html>