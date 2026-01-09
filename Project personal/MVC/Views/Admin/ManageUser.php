<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="">
  <link rel="stylesheet" href="">
<title>
    Manage User - Admin
                </title>

</head>
<body>
 <div class="sidebar">
           <img src="/Project personal/MVC/Images/445492922_122100097214350632_1896056624552573141_n.jpg" alt="Admin">
               <a href="">Dashboard</a>
                   <a href="">Manage Users</a>
                <a href="">Manage Events</a>
                  <a href="">Registrations</a>
                  <a href="">Manage Tasks</a>
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
    
    <div class="content-custom">
        <div style="display:flex; justify-content:right; align-items:center; margin-bottom:15px;">
            <input type="text" class="input-custom" placeholder="Search users...">
            
        </div>
  

        <div class="card-custom">
            <div style="overflow-x:auto;">
                <table class="table-custom table-hover-custom">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                

                </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>
