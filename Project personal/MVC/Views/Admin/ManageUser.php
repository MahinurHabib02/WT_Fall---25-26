<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="/Project personal/MVC/Views/CSS/admindashboard.css">
  <link rel="stylesheet" href="/Project personal/MVC/Views/CSS/adminuser.css">
<title>
    Manage User - Admin
                </title>

</head>
<body>
 <div class="sidebar">
           <img src="/Project personal/MVC/Images/445492922_122100097214350632_1896056624552573141_n.jpg" alt="Admin">
               <a href="../Controller/AdminDashboardController.php">Dashboard</a>
                   <a href="../Controller/AdminUsersController.php">Manage Users</a>
                <a href="">Manage Events</a>
                  <a href="">Registrations</a>
                  <a href="">Manage Tasks</a>
                  <a href="">Settings</a>
             <a href="/Project personal/MVC/Controller/logout.php">Logout</a>

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
<?php if($editUser): ?>
<div class="card-custom" style="margin-bottom:20px;">
    <form method="POST" action="/Project personal/MVC/Controller/AdminUsersController.php">
        <input type="hidden" name="id" value="<?php echo $editUser['id']; ?>">


        <input type="text" name="username" value="<?php echo htmlspecialchars($editUser['username']); ?>" placeholder="Username" required>


        <input type="email" name="email" value="<?php echo htmlspecialchars($editUser['email']); ?>" placeholder="Email" required>
        
        <select name="role">
            <option value="admin" <?php if($editUser['role']=='admin') echo 'selected'; ?>>Admin</option>
            <option value="user" <?php if($editUser['role']=='user') echo 'selected'; ?>>User</option>
            <option value="volunteer" <?php if($editUser['role']=='volunteer') echo 'selected'; ?>>Volunteer</option>
        </select>
        <select name="status">
            <option value="1" <?php if($editUser['status']==1) echo 'selected'; ?>>Active</option>
            <option value="0" <?php if($editUser['status']==0) echo 'selected'; ?>>Inactive</option>
        </select>
        <button type="submit" name="update_user" class="button-custom button-primary">Update User</button>
    </form>
</div>
<?php endif; ?>

</body>
</html>
