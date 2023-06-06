<?php
    include ('../config.php');
    $result = mysqli_query($conn, "SELECT * FROM tbl_activities ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDC</title>
    <link rel="stylesheet" href="assets/admin.css">
    <link rel="stylesheet" href="assets/fontawsome/css/all.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
    <section id="menu">
        <div class="logo">
            <img src="assets/img/smkti-logo-crop.png" alt="">
            <h2>Dashboard</h2>
        </div>

        <div class="items">
            <li><i class="fa-solid fa-chart-pie"></i><a href="#">Dashboard</a></li>
            <li><i class="fa-brands fa-uikit"></i><a href="#">UI Elemnts</a></li>
            <li><i class="fa-solid fa-table-cells-large"></i><a href="#">Tabel</a></li>
            <li><i class="fa-solid fa-edit"></i><a href="#">Form</a></li>
            <li><i class="fa-solid fa-cc-visa"></i><a href="#">Cards</a></li>
            <li><i class="fa-solid fa-hamburger"></i><a href="#">Modal</a></li>
        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fa fa-bars"></i>
                </div>
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
            </div>

            <div class="profile">
                <i class="fa fa-bell"></i>
                <a href="../logout.php"><img src="assets/img/1.jpg" alt=""></a>
                <!-- <div class="drop-content">
                    <p>Log out</p>
                </div> -->
            </div>
        </div>

        <h3 class="i-name">
            
        </h3>

        <div class="values">
            <a href="../add.php" class="val-box">
                <i class="fa fa-add"></i>
                <div>
                    <h3>Add activities</h3>
                </div>
            </a>
        </div>

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Come</td>
                        <td>Home</td>
                        <td>Activities</td>
                        <td>Date</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        //$conn = mysqli_connect("localhost", "root", "", "wdc_xi");
                        $query = "SELECT * FROM tbl_activities";
                        $query_run = mysqli_query($conn, $query);
                        $no = 1;

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                                ?>
                                <tr>
                                <td class="peopel">
                                    
                                    <div class="peopel-de">
                                    <h5><?= $no ?></h5>
                                    </div>
                                    <td>
                                    <h5><?= $row['come']; ?></h5>
                                    </td>
                                    <td class="poepel-des">
                                        <h5><?= $row['home']; ?></h5>
                                    </td>
                                    <td class="poepel-des">
                                        <h5><?= $row['activities']; ?></h5>
                                    </td>
                                    <td>
                                        <h5><?= $row['date']; ?></h5>
                                    </td>
                                    <td class="active">
                                        <a href="../edit.php?id=<?php echo $row['id']; ?>">Update</a>
                                        <a href="../delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </td>
                                </tr>
                                <?php
                                $no++;
                            }
                        } else {
                            echo "No data record";
                        }
                        ?>
                        
                </tbody>
            </table>
        </div>
    </section>

    <script>
        $('#menu-btn').click(function() {
            $('#menu').toggleClass("active");
        })
    </script>
</body>

</html>
