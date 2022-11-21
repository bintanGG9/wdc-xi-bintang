<?php
// include database connection file
include ("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $come=$_POST['come'];
    $home=$_POST['home'];
    $activities=$_POST['activities'];
        
    // update user data
    $result = mysqli_query($conn, "UPDATE tbl_activities SET come='$come',activities='$activities',home='$home' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM tbl_activities WHERE id=$id");
 
while($activty_data = mysqli_fetch_array($result))
{
    $come = $activty_data['come'];
    $activities = $activty_data['activities'];
    $home = $activty_data['home'];
    $date = $activty_data['date'];
}
?>
<html>
<head>	
    <title>Edit activty Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="come" value=<?php echo $come;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="home" value=<?php echo $home;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="activities" value=<?php echo $activities;?>></td>
            </tr>
            <tr> 
                <td>Date</td>
                <td><input type="text" name="date" value=<?php echo $date;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $id;?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>