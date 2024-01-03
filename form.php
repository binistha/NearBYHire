
<?php

$successMessage = '';

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $ward = $_POST["ward"];
    $service = $_POST["service"];
    $requirement = $_POST["requirement"];
    

    
    $conn = new mysqli("localhost", "root", "", "form");
    if($conn->connect_error){
        die("not connected");
    }
    
    $sql = "INSERT INTO `nearbyhire` (`name`, `email`, `address`, `ward`, `service`, `requirement`) VALUES ('$name', '$email', '$address', '$ward', '$service', '$requirement')";
    $result=$conn->query($sql);

    
    if ($result) {
      $successMessage = 'Data inserted successfully';
      // echo "Data inserted successfully";
      header("Location: index.php");
      exit;
  } 
  else {
    // echo "Error: " . $conn->error;
    // echo "SQL Query: " . $sql;

  }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final form </title>
    <link rel="stylesheet" href="sass/nby.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
    <style>
        body{
            background-color: rgba(0, 45, 91, 0.8);
        }
        /* about section of the websites */
#about{
        padding: 6rem ;
        min-height: 53vh;
        background: url(../assests/news4.png) left center no-repeat;
        background-size: cover;
        position: relative;
        z-index: 1;
        opacity: 1;
        align-items: center;
        justify-content: center;
     }
     #about::after{
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 45, 91, 0.8);
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
     }

.about{
    display: flex;
    gap: 10%;
    margin: 3rem;
    color: white;
}

.about-left{
   padding: 3rem;
   border-right: 2px solid black;
}
.about-left h1, h2{
    font-size: clamp(2rem, 1rem + 10vw, 3rem);
}
.about-right{
    padding: 1rem 2rem;
}
.about-right p{
    font-size: clamp(1rem, 0.8rem + 5vw, 1rem);
}
@media(max-width: 1100px){
    #about{
   padding: 2.7rem;
} 
.about{
    gap: 5%;
}
}
@media(max-width: 750px){
    #about{
        padding: 1.5rem;
    }
    .about{
        display: block;
        margin: 2rem;
    }
    .about-left h1{
        display: none;
       
    }
    .about-left{
        border-right: none;
        border-bottom: 2px solid black;
        padding-bottom: 1rem;
    }
    .about-right{
        padding-top: 10px;
    }
}
 /* form */
h1 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: rgba(29, 111, 163, 1);
        color:black;
        /* color: #fff; */
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        align-items: center;
    }
    .submit button{
        background-color: rgba(29, 111, 163, 1);
        color: white;
    }

    button:hover {
        background-color: white;
        background-color: rgb(11, 41, 60);
    }
         @media screen and (max-width: 600px) {
            form {
                max-width: 100%;
            }
        }  
    </style>
</head>
<body>
     <header>
        <nav class="navbar">
            <div class="logo">
        <a href="#home">Near By Hire<span>.</span></a></div>
            <ul class="links">
                <li> <a href="index.php">Home</a></li>
                <li> <a href="service.php">Services</a></li>
                <li> <a href="#">About Us</a></li>
                <li> <a href="#">Contact</a></li>
            </ul>
            
       
        <div class="search-icons"><i class="bx bx-search"></i></div>
        <div class="toggle_btn"><i class='bx bx-menu'></i></div>

        <!-- dropdown -->
         <div class="dropdown open">
            <!-- <li> <a href="index.html">Home</a></li> -->
            <li> <a href="service.html">Services</a></li>
            <li> <a href="#">About Us</a></li>
            <li> <a href="##catloglinks">Contact</a></li>
           <li><a href= "#"><i class="bx bx-search"></i></a></li>
        </div>
        </nav> 
    </header>

    <section class="finalform">
        <div class="final-box">
          <div class="final-primary">
            <h2>Please Fill The Form</h2>
          </div>
          <form id="bookingForm" method="post" action="">
            <div class="final-field">
            <div class="final-box">
              <label>Full Name:</label>
              <input type="text" id="name" name="name" placeholder="Your Name" required>
              <span id="nameError" class="error-message"></span>
            </div>
      </div>

            <div class="final-field">
            <div class="final-box">
              <label>Email:</label>
              <input type="text" id="email"  name="email" placeholder="Your Email" required>
              <span id="emailError" class="error-message"></span>
            </div>
      </div>

            <div class="final-field">
            <div class="final-box">
              <label>Address:</label>
              <input type="text" id="address" name="address" placeholder="Your Address" required>
              <span id="addressError" class="error-message"></span>
            </div>
      </div>
            <div class="final-field">
            <div class="final-box">
              <label>ward no:</label>
              <input type="text" id="ward" name="ward" placeholder="ward no" required>
              <span id="wardError" class="error-message"></span>
            </div>
      </div>

      <div class="final-field">
    <label>Service</label>
    <div class="final-box">
        <select id='service' name='service'>
            <option value='Cleaner'> Please Select</option>
            <option value='Cleaner'>Cleaner</option>
            <option value='Chef'>Chef</option>
            <option value='Waiter'>Waiter</option>
            <option value='Plumber'>Plumber</option>
            <option value='Painter'>Painter</option>
            <option value='Caretaker'>Care Taker</option>
        </select>
    </div>
    <span id="serviceError" class="error-message"></span>
</div>


            <div class="final-field">
              <label class="pas-f">Requirement:</label>
              <textarea id="requirement" name="requirement" cols="10" rows="4" required></textarea>
              <span id="requirementError" class="error-message"></span>
            </div>
            <div class="submit">   
              <button type="submit" onclick="validateForm()" >BOOKING</button>
            </div>
          </form>
        </div>
      </section>
    
<!-- footer  -->

<script>
  function validateForm() {
    resetErrors();
    let hasErrors = false;

    // Validate Full Name
    const fullName = document.getElementById('name').value.trim();
    if (!isAlpha(fullName)) {
      displayError('nameError', 'Full Name should contain only alphabetical characters.');
      hasErrors = true;
    }

    // Validate Email
    const email = document.getElementById('email').value.trim();
    if (!isValidEmail(email)) {
      displayError('emailError', 'Enter a valid email address.');
      hasErrors = true;
    }

    // Validate Address
    const address = document.getElementById('address').value.trim();
    if (address === '') {
      displayError('addressError', 'Address is required.');
      hasErrors = true;
    }

    // Validate Ward Number
    const ward = document.getElementById('ward').value.trim();
    if (!isNumeric(ward)) {
      displayError('wardError', 'Ward Number should contain only numeric characters.');
      hasErrors = true;
    }

    // Validate Service
    const service = document.getElementById('service').value.trim();
    if (service === 'Please Select') {
      displayError('serviceError', 'Please select a valid service.');
      hasErrors = true;
    }

    // Validate Requirement
    const requirement = document.getElementById('requirement').value.trim();
    if (requirement === '') {
      displayError('requirementError', 'Requirement is required.');
      hasErrors = true;
    }

    return !hasErrors; // Return true if no errors, false otherwise
  }

  function isAlpha(value) {
    return /^[a-zA-Z\s]+$/.test(value);
  }

  function isValidEmail(email) {
    return /^\S+@\S+\.\S+$/.test(email);
  }

  function isNumeric(value) {
    return /^\d+$/.test(value);
  }

  function displayError(id, message) {
    const errorElement = document.getElementById(id);
    if (errorElement) {
      errorElement.textContent = message;
    }
  }

  function resetErrors() {
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach((element) => {
      element.textContent = '';
    });
  }
</script>

</body>
</html>


