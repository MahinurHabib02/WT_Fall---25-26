<!DOCTYPE html>
<html>
<head>
   <title>
         Admin Dashboard - AIUB Sports
          </title>

   <style>
 
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
