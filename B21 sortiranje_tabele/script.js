var sortirano = 'nadole';
function sortTable(number) {
    if(sortirano == 'nadole')
    {
        var table, i, x, y;
        table = document.getElementById("Tabela");
        var switching = true;
        while (switching) 
        {
            switching = false;
            var rows = table.rows;
    
            for (i = 1; i < (rows.length - 1); i++) 
            {
                var Switch = false;
      
                
                x = rows[i].getElementsByTagName("td")[number];
                y = rows[i + 1].getElementsByTagName("td")[number];
      
                
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase())
                {
                    Switch = true;
                    break;
                }
            }
            if (Switch) 
            {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        sortirano = 'nagore';
    }
    else
    {
    var table, i, x, y;
    table = document.getElementById("Tabela");
    var switching = true;
  
    while (switching) 
        {
            switching = false;
            var rows = table.rows;
    
            for (i = 1; i < (rows.length - 1); i++) 
            {
                var Switch = false;

                x = rows[i].getElementsByTagName("td")[number];
                y = rows[i + 1].getElementsByTagName("td")[number];
    
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase())
                {
                    Switch = true;
                    break;
                }
            }
            if (Switch) 
            {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
        sortirano = 'nadole';
    }
    
}