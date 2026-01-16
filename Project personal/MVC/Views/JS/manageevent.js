
function searchTable()
        {
           const input = document.querySelector(".search-input").value.toLowerCase();
            document.querySelectorAll("#eventTable tbody tr").forEach(row=>{
                row.style.display = row.innerText.toLowerCase().includes(input) ? "" : "none";
                     });
              }

function showAddForm()
        {
           document.getElementById('addForm').style.display='block';
             document.getElementById('editForm').style.display='none';
                      }
function hideForms()
          {
                document.getElementById('addForm').style.display='none';
                document.getElementById('editForm').style.display='none';
                   }

function editEvent(id,name,date,venue,participants,status)
                {
                     document.getElementById('editForm').style.display='block';
                       document.getElementById('addForm').style.display='none';
                      document.getElementById('edit_id').value = id;
                     document.getElementById('edit_name').value = name;
                     document.getElementById('edit_date').value = date;
                      document.getElementById('edit_venue').value = venue;
                       document.getElementById('edit_participants').value = participants;
                     document.getElementById('edit_status').value = status;
                       } 