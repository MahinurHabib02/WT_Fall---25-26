
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin - Manage Tasks</title>
<link rel="stylesheet" href="../CSS/adtaskview.css">

<style>

</style>
</head>

<body>

<div class="sidebar">
  <img src="445492922_122100097214350632_1896056624552573141_n.jpg" alt="Admin">
          <a href="">Dashboard</a>
          <a href="">Manage Users</a>
          <a href="i">Manage Events</a>
          <a href="">Registrations</a>
          <a href="">Manage Tasks & Announcements</a>
          <a href="">Reports</a>
          <a href="">Settings</a>
          <a href="">Logout</a>
</div>

<div class="top-navbar">
  <h5>Manage Tasks & Announcements</h5>
  <div style="color:#0d6efd;">Welcome, </div>
</div>

<div class="main-content">
<div class="grid">
<div class="card">
  
<h5>Add New Task</h5>
<form method="POST">
<div class="form-group">
<label>Volunteer</label>
</div>

<div class="form-group">
<label>Event Name</label>
</select>
</div>

<div class="form-group">
<label>Task Name</label>
<input type="text" name="task_name" required>
</div>

<div class="form-group">
<label>Task Date</label>
<input type="date" name="task_date" required>
</div>

<button type="submit" name="add_task" class="btn btn-primary">Add Task</button>
</form>
</div>


<div class="card">
<h5>Add Announcement</h5>
<form method="POST">
<div class="form-group">
<label>Message</label>
<textarea name="add_announcement" rows="3" required></textarea>
</div>

<div class="form-group">
<label>Event Date (Optional)</label>
<input type="date" name="event_date">
</div>

<button type="submit" name="add_announcement" class="btn btn-success">Add Announcement</button>
</form>
</div>

</div>

<h5 style="margin:25px 0;color:#0d6efd;">Existing Tasks</h5>

<table>
  <thead>
      <tr>
          <th>Volunteer</th>
          <th>Event</th>
          <th>Task</th>
          <th>Status</th>
          <th>Date</th>
          </tr>
        </thead>
</table>

</div>
</body>
</html>