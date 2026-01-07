<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Events – Admin</title>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: 'Poppins', Arial, sans-serif;
}

body{
  background:#f4f6f9;
}

/* ===== Sidebar ===== */
.sidebar{
  position:fixed;
  top:0;
  left:0;
  width:220px;
  height:100vh;
  background:#0d6efd;
  padding-top:25px;
}

.sidebar h4{
  text-align:center;
  color:#ffd369;
  margin-bottom:25px;
}

.sidebar a{
  display:block;
  color:#fff;
  text-decoration:none;
  padding:12px 20px;
  margin:6px 12px;
  border-radius:8px;
  transition:.3s;
}

.sidebar a:hover{
  background:#084298;
}

/* ===== Top Navbar ===== */
.top-navbar{
  margin-left:220px;
  background:#fff;
  padding:15px 30px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  box-shadow:0 2px 8px rgba(0,0,0,0.1);
  position:sticky;
  top:0;
}

.top-navbar h5{
  color:#0d6efd;
}

/* ===== Main Content ===== */
.main-content{
  margin-left:220px;
  padding:30px;
}

/* ===== Actions ===== */
.top-actions{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:20px;
}

.search-input{
  width:260px;
  padding:10px;
  border:1px solid #ccc;
  border-radius:8px;
}

/* ===== Buttons ===== */
.btn{
  padding:10px 16px;
  border:none;
  border-radius:8px;
  cursor:pointer;
  font-weight:bold;
}

.btn-primary{
  background:linear-gradient(45deg,#0d6efd,#198754);
  color:#fff;
}

.btn-primary:hover{
  transform:scale(1.05);
}

.btn-warning{
  background:#ffc107;
  color:#000;
}

.btn-danger{
  background:#dc3545;
  color:#fff;
}

/* ===== Card ===== */
.card{
  background:#fff;
  padding:20px;
  border-radius:12px;
  box-shadow:0 4px 12px rgba(0,0,0,0.1);
}

/* ===== Table ===== */
table{
  width:100%;
  border-collapse:collapse;
}

thead{
  background:#e9ecef;
}

th,td{
  padding:14px;
  border-bottom:1px solid #ddd;
  text-align:left;
}

tr:hover{
  background:#f1f1f1;
}

/* ===== Status ===== */
.status{
  padding:6px 12px;
  border-radius:20px;
  font-size:13px;
  color:#fff;
}

.scheduled{ background:#198754; }
.pending{ background:#6c757d; }

/* ===== Action Buttons ===== */
.action-btn{
  padding:6px 12px;
  border-radius:6px;
  border:none;
  cursor:pointer;
  font-size:14px;
  margin-right:5px;
}
</style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
  <h4>Admin</h4>
  <a href="#">Dashboard</a>
  <a href="#">Manage Users</a>
  <a href="#">Manage Events</a>
  <a href="#">Registrations</a>
  <a href="#">Reports</a>
  <a href="#">Settings</a>
  <a href="#">Logout</a>
</div>

<!-- Top Navbar -->
<div class="top-navbar">
  <h5>Manage Events</h5>
  <div style="color:#0d6efd;">Welcome, Admin</div>
</div>

<!-- Main Content -->
<div class="main-content">

  <div class="top-actions">
    <input type="text" class="search-input" placeholder="Search events...">
    <button class="btn btn-primary">Add New Event</button>
  </div>

  <div class="card">
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Event Name</th>
          <th>Date</th>
          <th>Venue</th>
          <th>Participants</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>Football Tournament</td>
          <td>2025-09-15</td>
          <td>Main Field</td>
          <td>32</td>
          <td><span class="status scheduled">Scheduled</span></td>
          <td>
            <button class="action-btn btn-warning">Edit</button>
            <button class="action-btn btn-danger">Delete</button>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Basketball Match</td>
          <td>2025-09-20</td>
          <td>Gymnasium</td>
          <td>16</td>
          <td><span class="status pending">Pending</span></td>
          <td>
            <button class="action-btn btn-warning">Edit</button>
            <button class="action-btn btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

</body>
</html>
