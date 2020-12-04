<?php

if(isset($_POST['submit']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `bca`.`students` WHERE CONCAT(`FirstName`, `LastName`, `EnrolNo`, `RollNo`, `EmailId`, `Program`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `bca`.`students`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "bca");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <!-- <form action="search result.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br> -->
            
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Enrolment No</th>
                    <th>Roll No</th>
                    <th>Email Id</th>
                    <th>Program</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['FirstName'];?></td>
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['EnrolNo'];?></td>
                    <td><?php echo $row['RollNo'];?></td>
                    <td><?php echo $row['EmailId'];?></td>
                    <td><?php echo $row['Program'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        
        <!-- </form> -->
        
    </body>
</html>