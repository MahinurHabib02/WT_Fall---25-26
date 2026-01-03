<!DOCTYPE html>
<html>
<head>
  <title>
      Manage Events - Admin
        </title>

         <style>
                *{
                  margin:0;
                   padding:0;
                  box-sizing:border-box;
                  font-family:Arial,sans-serif;
                    }

body 
    {
     background:#f4f6f9;
           }

.sidebar
        {
          position:fixed;
             left:0;
            top:0;
             width:220px;
             height:100vh;
            background:#0d6efd;
             padding-top:20px;
                }

.sidebar h4
        {
            color:#fff;
            text-align:center;
            margin-bottom:20px;
                }

.sidebar a
                {
                display:block;
                    color:#fff;
                text-decoration:none;
                 padding:12px 20px;
                margin:5px 10px;
                     border-radius:6px;
                    }

.sidebar a:hover
            {
            background:#084298;
                }

.top-navbar
            {
                 margin-left:220px;
                background:#fff;
                padding:15px 30px;
                    display:flex;
                    justify-content:space-between;
                align-items:center;
                    box-shadow:0 2px 6px rgba(0,0,0,.1);
                    }

.top-navbar h5
                {
                color:#0d6efd;
                        }

.main-content
           {
             margin-left:220px;
              padding:30px;
                }

.card
        {
            background:#fff;
            padding:20px;
             border-radius:10px;
             box-shadow:0 4px 10px rgba(0,0,0,.1);
                }

.top-actions
          {
             display:flex;
             justify-content:space-between;
                margin-bottom:15px;
                 }

.search-input
            {
            padding:8px;
            width:250px;
             border:1px solid #ccc;
             border-radius:5px;
                }

.add-btn
        {
          background:#0d6efd;
          color:#fff;
           border:none;
           padding:8px 15px;
            border-radius:5px;
            cursor:pointer;
              }

.add-btn:hover
            {
            background:#084298;
               }

table{
  width:100%;
  border-collapse:collapse;
}

thead{
  background:#e9ecef;
}

th, td
    {
        padding:12px;
        border-bottom:1px solid #ddd;
        text-align:left;
        }

tr:hover
        {
            background:#f1f1f1;
            }

.status
      {
       padding:5px 10px;
        border-radius:20px;
        font-size:13px;
        color:#fff;
             }

.scheduled
           { 
            background:#198754;
         }
.pending  
         { 
          background:#6c757d;
            }


.action-btn
     {
       padding:5px 10px;
       border:none;
       border-radius:5px;
       cursor:pointer;
         color:#fff;
          }

.edit
       { 
        background:#ffc107;
     }
.delete
      { 
       background:#dc3545; 
        }
</style>
</head>

<body>

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

<div class="top-navbar">
        <h5>Manage Events</h5>
        <div>Welcome, Admin</div>
            </div>

<div class="main-content">
 <div class="top-actions">
    <input type="text" class="search-input" placeholder="Search events..." >
    <button class="add-btn">Add New Event</button>
  </div>

  <div class="card">
    <table id="eventTable">
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
            <button class="action-btn edit">Edit</button>
            <button class="action-btn delete">Delete</button>
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
            <button class="action-btn edit">Edit</button>
            <button class="action-btn delete">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

</body>
</html>
