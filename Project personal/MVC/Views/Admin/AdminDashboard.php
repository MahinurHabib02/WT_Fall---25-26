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

.main-content
          {
        margin-left:220px;
          padding:30px
             }

  .card-row 
           {
         display:flex;
          gap:20px;
         margin-bottom:30px
              }

  .card
       {
         flex:1;
           background:#fff;
           padding:20px;
              text-align:center;
                 border-radius:10px;
              box-shadow:0 4px 10px rgba(0,0,0,.1)
             }

           .card h5
                {
                margin-bottom:10px
                   }

       .card p
           {
            font-size:40px;
                  color:#0d6efd
               }

    .table-box
          {
            background:#fff;
            padding:20px;
              border-radius:10px;
             box-shadow:0 4px 10px rgba(0,0,0,.1)
                 }

    table
        {
         width:100%;
            border-collapse:collapse
               }

      thead
         {
        background:#e9ecef
           }

    th,td
        {
        padding:12px;
         text-align:left;
         border-bottom:1px solid #ddd
              }

      tr:hover
      {
         background:#f1f1f1
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
        Welcome,
        <?php
        if(isset($_SESSION['username'])){
            echo $_SESSION['username'];
        }else{
            echo 'Admin';
        }
        ?>
    </div>
</div>

<div class="main-content">
    <div class="card-row">
        <div class="card">
            <h5>Total Users</h5>
            <p>0</p>
        </div>

       
   <div class="card">
       <h5>Total Volunteers</h5>
         <p>0</p>
     </div>

      
     <div class="card">
         <h5>Active Events</h5>
           <p>0</p>
        </div>

    </div>

    <div class="table-box">
        <h5 style="margin-bottom:15px;">Upcoming Events</h5>

          <table>
                <thead>
                   <tr>
                       <th>Event Name</th>
                       <th>Date</th>
                       <th>Venue</th>
                       <th>Participants</th>
                       <th>Status</th>
                        </tr>
                     </thead>
                   <tbody>
            </tbody>
        </table>
   
       </div>
         </div>
    </body>
      </html>
