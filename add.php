<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="admin/dashboard.php">Go to Back</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>come</td>
                <td><input type="text" name="come"></td>
            </tr>
            <tr> 
                <td>home</td>
                <td><input type="text" name="home"></td>
            </tr>
            <tr> 
                <td>activities</td>
                <td><input type="text" name="activities"></td>
            </tr>
            <tr> 
                <td>Date</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $come = $_POST['come'];
        $home = $_POST['home'];
        $activities = $_POST['activities'];
        $date = $_POST['date'];
        
        // include database connection file
        include ("config.php");
                
        // Insert user data into table
         $result = mysqli_query($conn, "INSERT INTO tbl_activities(come,home,activities,date) VALUES('$come','$home','$activities','$date')");
        
        // Show message when user added
        echo "Data added successfully. <a href='admin/dashboard.php'>View Data</a>";
    }
    ?>
</body>
</html>