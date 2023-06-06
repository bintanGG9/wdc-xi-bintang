<html>
<head>
    <title>Add Users</title>
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
    <a href="admin/dashboard.php">Go to Back</a>
    <br/><br/>
    <form action="add.php" method="post" name="form1">
    <section class="base">
        <div>
            <label>Berangkat</label>
            <input type="text" name="come">
        </div>
        <div>
            <label>Pulang</label>
            <input type="text" name="home">
        </div>
        <div>
            <label>Aktifitas</label>
            <input type="text" name="activities">
        </div>
        <div>
            <label>Tanggal</label>
            <input type="date" name="date">
        </div>
        <div>
            <input type="submit" name="Submit" value="Add">
        </div>
    </section>
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
