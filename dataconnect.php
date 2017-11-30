<?php
    echo"************  egco313 Test Database Connection  ****************";
    $dbconn = pg_connect("host=ec2-54-221-221-153.compute-1.amazonaws.com port=5432 dbname=dahkg40rg16lqi user=npjgxdptpbtkwi password=3cf69df0194aeb93b804b4a9bfc9c21de4b34997561d69b4908d01ca64d4a814");

     if($dbconn){
       echo "--- Database connected <br>";
     }
     else{
        echo "---- Database disconnected <br>";
     }

    $result = pg_query($dbconn,"SELECT * FROM home " );
    
    //var_dump(pg_fetch_all($result));

    if(pg_num_rows($result)==0){
        print("No data in table<br>");
    } else{
print("=== Table in Database ===<br>");
print("<table border = 1>");
print("<tr>");
print("<th>ID</th>");
print("<th>Age</th>");
print("</tr>");
while($row=pg_fetch_row($result))
{
    echo"<tr>
    <th>$row[0]</th>
    <th>$row[1]</th><br>
  </tr>";

}
print("</table><br>");

}

    ?>