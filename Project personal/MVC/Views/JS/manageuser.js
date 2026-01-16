        const searchInput = document.querySelector('.input-custom');
        const table = document.querySelector('.table-custom tbody');

searchInput.addEventListener('input', function() 
          {
            const filter = searchInput.value.toLowerCase();
            const rows = table.querySelectorAll('tr');

    rows.forEach(row => 
            {
              const cells = row.querySelectorAll('td');
              let match = false;

        cells.forEach(cell => 
            {
               if (cell.textContent.toLowerCase().includes(filter))
                                       {
                                            match = true;
                                                   }
                                                        });

        if (match)
                  {
                     row.style.display = '';
                       } 
                 else {
                     row.style.display = 'none';
                              }
                        });
                    });