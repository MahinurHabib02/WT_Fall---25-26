
<!DOCTYPE html>
<html>
<head>
  <title>Resistration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
 
    h2 {
      text-align: center;
      color: #003366;
    }
 
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
 
    button {
      background-color: #003366;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #0055aa;
    }
 
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
 
  <h2>Participant Registration</h2>
 
  <form onsubmit="return handleSubmit()">
    <label>Full Name:</label>
    <input type="text" id="fullname" />
 
    <label>Email:</label>
    <input type="text" id="email" />

    <label>Phone Number:</label>
    <input type="text" id="phone" />

    <label>Password:</label>
    <input type="password" id="password" />

    <label>Confirm Password:</label>
    <input type="password" id="confirmPassword" />

    <button type="submit">Register</button>
  </form>
 
 
  <div id="error"></div>
  <div id="output"></div>
 
  <script>
    function handleSubmit() {
      
      var fullname = document.getElementById("fullname").value.trim();
      var email = document.getElementById("email").value.trim();
      var phone = document.getElementById("phone").value.trim();
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
 
     
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";
 
  
      if (fullname === "" || email === "" || phone === "" || password === "" || confirmPassword === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }

      if (!email.includes("@")) {
        errorDiv.innerHTML = "Email must contain '@'.";
        return false;
      }
 
      if (isNaN(phone)) {
        errorDiv.innerHTML = "Phone number must contain digits only.";
        return false;
      }

      if (password !== confirmPassword) {
        errorDiv.innerHTML = "Passwords do not match.";
        return false;
      }

   
      outputDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${fullname}<br>
        Email: ${email}<br>
        Phone: ${phone}
      `;
      
 
      return false;
    }


   
  </script>
 
</body>
</html>
