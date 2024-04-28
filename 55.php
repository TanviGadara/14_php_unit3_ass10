<?php
$con = mysqli_connect("localhost","root","","mydb");
mysqli_query($con, "CREATE TABLE emp(ID INT, First_Name VARCHAR(255),
Last_Name VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))");
print("Table Created .....".”<br>”);
mysqli_query($con, "INSERT INTO emp values(1, 'Sikhar', 'Dhawan', 'Delhi', 'India')");
mysqli_query($con, "INSERT INTO emp values(2, 'Jonathan', 'Trott', 'CapeTown',
'SouthAfrica')");
mysqli_query($con, "INSERT INTO emp values(3, 'Kumara', 'Sangakkara', 'Matale',
'Srilanka')");
print("Record Inserted......”.”<br>");
$res = mysqli_query($con,"SELECT * FROM emp");
while($obj = mysqli_fetch_assoc($res)){
    print("ID: ".$obj["ID"]."<br>");
    print("First_Name: ".$obj["First_Name"]."<br>");
    print("Last_Name: ".$obj["Last_Name"]."<br>");
    print("Place_Of_Birth: ".$obj["Place_Of_Birth"]."<br>");
    print("Country: ".$obj["Country"]."<br>");
    }
    mysqli_free_result($res);
    mysqli_close($con);
    ?>