<!DOCTYPE html>
<html>
<head>
  <title>Types of form-3</title>
  <!-- <h2 style="text-align: center;">Form Type-3</h2> -->
  <!-- <h2 style="text-align: center;">Fill up your info</h2> -->
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #3c8fb5;
    }

    .form-container {
      width: 800px;
      outline: solid 1px #999;
      background-color: lightsteelblue;
      padding: 20px;
    }

    .form-label {
      font-size: 18px;
    }

    .form-input {
      width: 100%;
      padding: 5px;
      font-size: 16px;
    }

    .form-submit {
      margin-top: 10px;
    }
  </style>
</head>
<body>
 
  <div class="form-container">
  <h2 style="text-align: center;">Fill up your info</h2>
    <form action="">
      <label class="form-label">First Name:</label>
      <input class="form-input" type="text" name="F_Name" placeholder="Enter your first name">
    
      <br><br>
    
      <label class="form-label">Last Name:</label>
      <input class="form-input" type="text" name="L_Name" placeholder="Enter your last name">
    
      <br><br>
    
      <label class="form-label">Email:</label>
      <input class="form-input" type="email" name="Email" placeholder="Enter your email or gmail">
    
      <br><br>

      <label class="form-label">Address:</label>
      <input class="form-input" type="text" name="Address" placeholder="Enter your address">
    
      <br><br>
    
      <label class="form-label">Phone Number:</label>
      <input class="form-input" type="number" name="PhoneNum" placeholder="Enter your phone number">

      <br><br>
      <button class="form-submit" id="submitbutton">Submit</button>
    </form>
  </div>
</body>
</html>
