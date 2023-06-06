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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,700;1,600;1,700&family=PT+Sans+Narrow&family=Poppins:ital,wght@0,500;1,400;1,500&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #E5E7Eb;
        }
        h1 {
            /* text-transform: uppercase; */
            color: #111827;
        }
        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ededed;
            border-radius: 5px;
        }
        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: #434343;
            border-radius: 5px;
        }
        input[type=submit]{
            background-color: #111827;
            border-radius: 10px;
            color: white;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
    </style>
</head>
 
<body>
    <a href="admin/dashboard.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <section class="base">
            <div> 
                <label>Name</label>
                <input type="text" name="come" value=<?php echo $come;?>>
            </div>
            <div> 
                <label>Email</label>
                <input type="text" name="home" value=<?php echo $home;?>>
            </div>
            <div> 
                <label>Mobile</label>
                <input type="text" name="activities" value=<?php echo $activities;?>>
            </div>
            <div> 
                <label>Date</label>
                <input type="date" name="date" value=<?php echo $date;?>>
            </div>
            <div>
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" value="Update">
            </div>
            </section>
    </form>
</body>
</html>
