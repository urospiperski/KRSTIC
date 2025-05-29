function sortTable() {
        var table, i, x, y;
        var xBroj, yBroj;
        table = document.getElementById("Tabela");
        var switching = true;
        while (switching) 
        {
            switching = false;
            var rows = table.rows;
    
            for (i = 1; i < (rows.length - 1); i++) 
            {
                var Switch = false;
      
                
                x = rows[i].getElementsByTagName("td")[3];
                y = rows[i + 1].getElementsByTagName("td")[3];
                
                xBroj = parseInt(x.innerHTML);
                yBroj = parseInt(y.innerHTML);
                
                if (xBroj < yBroj)
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
    
}

function polozili()
{
    var table, i, x;
        var xBroj;
        table = document.getElementById("Tabela");
        var rows = table.rows;
    
            for (i = 1; i < rows.length; i++) 
            {
                x = rows[i].getElementsByTagName("td")[3];
                
                xBroj = parseInt(x.innerHTML);
                
                if (xBroj > 50)
                {
                    rows[i].getElementsByTagName("td")[0].setAttribute("class", "polozio");
                    rows[i].getElementsByTagName("td")[1].setAttribute("class", "polozio");
                    rows[i].getElementsByTagName("td")[2].setAttribute("class", "polozio");
                    rows[i].getElementsByTagName("td")[3].setAttribute("class", "polozio");
                }
                else
                {
                    rows[i].getElementsByTagName("td")[0].setAttribute("class", "");
                    rows[i].getElementsByTagName("td")[1].setAttribute("class", "");
                    rows[i].getElementsByTagName("td")[2].setAttribute("class", "");
                    rows[i].getElementsByTagName("td")[3].setAttribute("class", "");
                }
            }
}

function nisupolozili()
{
    var table, i, x;
    var xBroj;
    table = document.getElementById("Tabela");
    var rows = table.rows;

        for (i = 1; i < rows.length; i++) 
        {
            x = rows[i].getElementsByTagName("td")[3];
            
            xBroj = parseInt(x.innerHTML);
            
            if (xBroj < 50)
            {
                rows[i].getElementsByTagName("td")[0].setAttribute("class", "nijepolozio");
                rows[i].getElementsByTagName("td")[1].setAttribute("class", "nijepolozio");
                rows[i].getElementsByTagName("td")[2].setAttribute("class", "nijepolozio");
                rows[i].getElementsByTagName("td")[3].setAttribute("class", "nijepolozio");
            }
            else
            {
                rows[i].getElementsByTagName("td")[0].setAttribute("class", "");
                rows[i].getElementsByTagName("td")[1].setAttribute("class", "");
                rows[i].getElementsByTagName("td")[2].setAttribute("class", "");
                rows[i].getElementsByTagName("td")[3].setAttribute("class", "");
            }
        }
}

function izdvoji()
{
    var table, i, x;
    var xBroj;
    table = document.getElementById("Tabela");
    var rows = table.rows;

        for (i = 1; i < rows.length; i++) 
        {
            x = rows[i].getElementsByTagName("td")[3];
            
            xBroj = parseInt(x.innerHTML);
            
            if (xBroj < 50)
            {
                rows[i].remove();
                i--;
            }
        }
}

function bojiNeparne()
{
    var table, i, x;
    var xBroj;
    table = document.getElementById("Tabela");
    var rows = table.rows;

        for (i = 1; i < rows.length; i++) 
        {
            x = rows[i].getElementsByTagName("td")[0];
            
            xBroj = parseInt(x.innerHTML);
            
            if (xBroj % 2 == 1)
            {
                rows[i].getElementsByTagName("td")[0].setAttribute("class", "neparni");
                rows[i].getElementsByTagName("td")[1].setAttribute("class", "neparni");
                rows[i].getElementsByTagName("td")[2].setAttribute("class", "neparni");
                rows[i].getElementsByTagName("td")[3].setAttribute("class", "neparni");
            }
            else
            {
                rows[i].getElementsByTagName("td")[0].setAttribute("class", "");
                rows[i].getElementsByTagName("td")[1].setAttribute("class", "");
                rows[i].getElementsByTagName("td")[2].setAttribute("class", "");
                rows[i].getElementsByTagName("td")[3].setAttribute("class", "");
            }
        }
}
