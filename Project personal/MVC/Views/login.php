<!DOCTYPE html>
<html lang="en">
<head>
   <title> 
    Login  </title>

   <style>
           *{
            box-sizing:border-box;font-family:Arial,Helvetica,sans-serif
        }

    body
    {
       margin:0;
       background:#f8f9fa
    }

.container
       {
        width:90%;
           max-width:1200px;
        margin:auto
       }
.row 
    {
        display:flex;
        align-items:center;
        gap:40px}
img
{
    max-width:100%;
    height:auto
}
    .card{
        max-width:400px;
        padding:30px;
            background:#fff;
        border-radius:16px;
        box-shadow:0 8px 20px rgba(0,0,0,.2)
}

    h2
        {   
            text-align:center;
            margin-bottom:20px}

        input[type="email"],input[type="password"],button
                  {
                        width:100%;
                            padding:12px 18px;
                        font-size:16px;
                            border-radius:30px
                    }

input[type="email"],input[type="password"]
                    {
                    border:1px solid #ccc;
                        outline:none
                          }

         input:focus{
            border-color:#0d6efd
        }

.check{
    display:flex;
      align-items:center;
    gap:8px;
       margin-bottom:15px
}

    button
           {
             border:none;
         background:#0d6efd;
        color:#fff;
            font-size:18px;
             cursor:pointer
                     }

   .alert
   {
      margin-bottom:15px;
    padding:10px;
    background:#f8d7da;
      color:#842029;
    border-radius:8px
           }
     </style>
  </head>
<body>



<section>
<div class="container">
<div class="row">

<div>
    <img src="../../MVC/Images/draw2.webp" alt="image">
</div>

<div>
   <div class="card">
          <form method="POST">
       <h2>Login</h2>

      <?php
            if (!empty($error))
                 {
                    echo '<div class="alert">' . $error . '</div>';
                    } ?>

    <label>Email address</label>
          <input type="email" name="email" placeholder="Enter a valid email" required><br><br>

    <label>Password</label>
           <input type="password" name="password" placeholder="Enter password" required><br><br>

      <div class="check">
            <input type="checkbox" id="remember" name="remember">
      <label for="remember">Remember Me</label>
           </div>

   <button type="submit" name="login">Login</button>
</form>
 </div>
    </div>
         </div>
           </div>
</section>

</body>
</html>
