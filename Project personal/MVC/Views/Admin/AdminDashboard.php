<!DOCTYPE html>
<html>
<head>
   <title>
         Admin Dashboard - AIUB Sports
          </title>

   <style>
       *{
             margin:0;
                   padding:0;
              box-sizing:border-box;
                    font-family:Arial,sans-serif
                  }

body
   {
    background:#f4f6f9
      }

  .sidebar
          {
           position:fixed;
            left:0;
            top:0;
          width:220px;
        height:100vh;
          background:#0d6efd;
              padding-top:20px
            }

.sidebar img
         {
            width:100px;
           border-radius:50%;
               display:block;
             margin:10px auto 20px
            }

  .sidebar a 
         {
            display:block;
               color:#fff;
             text-decoration:none;
             padding:12px 20px;
             margin:5px 10px;
               border-radius:6px
             }

  .sidebar a:hover
             {
           background:#084298
   }

      .top-navbar
           {
             margin-left:220px;
              background:#fff;
            padding:15px 30px;
            display:flex;
              justify-content:space-between;
              align-items:center;
             box-shadow:0 2px 6px rgba(0,0,0,.1)
                }

  .top-navbar h5
            {
           color:#0d6efd
              }
    </style>
</head>
   <body>

    <div class="sidebar">
           <img src="../../../MVC/Images/445492922_122100097214350632_1896056624552573141_n.jpg" alt="Admin">
              <a href="">Dashboard</a>
                   <a href="">Manage Users</a>
                <a href="">Manage Events</a>
                  <a href="">Registrations</a>
                  <a href="">Manage Tasks</a>
                  <a href="">Reports</a>
                     <a href="">Settings</a>
                  <a href="">Logout</a>
        </div>

   <div class="top-navbar">
             <h5>Admin Dashboard</h5>
    <div>
           Welcome
    </div>
</div>
</body>
</html>
