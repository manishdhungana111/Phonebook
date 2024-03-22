<?php
require "./connect.php";

$sql="Select * from contacts";
$result=mysqli_query($conn,$sql);

$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone_Book_System</title>
</head>
<body>
    <main>
    <section>
    <form action="add.php" method="post">
            <label>First Name</label>
            <input type="text" name="first_name">
            <label>Middle Name</label>
            <input type="text" name="middle_name">
            <label>Last Name</label>
            <input type="text" name="last_name">
            <label>Number</label>
            <input type="text" name="number"><br>
            <button type="submit">Add</button><br>
            <button type="submit">Edit</button><br>
            <button type="submit">Delete</button>
        </form>
    </section>

   

        <table>
            <thead>
            <tr>
                <th>First_Name</th>
                <th>Middle_Name</th>
                <th>Last_Name</th>
                <th>Phone Number</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($rows as $value) {
                    echo "<tr>";
                    echo "<td>{$value["first_name"]}</td>";  
                    echo "<td>{$value["middle_name"]}</td>";
                    echo "<td>{$value["last_name"]}</td>";
                    echo "<td>{$value["phone_number"]}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>