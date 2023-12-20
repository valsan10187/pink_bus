<?php
session_start();
if (!isset($_SESSION['access'])) {
    header('location:userlogin.php');
}
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="row">
    <div class="">
        <?php
        include('usersidebar.php');
        ?>
    </div>
    <div class="col-1"></div>
    <div class="col-11 col-md-10 my-5">

        <h2 class="text-info mb-5 text-center">Search Bus Route</h2>
        <hr>
        <form action="book.php" method="POST">
            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label fw-bold">From</label>
                    <select class="form-control" name="from">
                        <option>madurai</option>
                        <option>chennai</option>
                        <option>kerala</option>
                        <option>mumbai</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="form-label fw-bold">TO</label>
                    <select class="form-control" name="to">
                        <option>madurai</option>
                        <option>chennai</option>
                        <option>kerala</option>
                        <option>mumbai</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary mt-4" name="search">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
<div class="col-md-1"></div>

    <div class="col-11 col-md-10 my-5 table-responsive">
        <table class="table">
            <thead>
            <tr class="">
                <th scope="col">BusNo</th>
                <th scope="col">NAME</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">StartRoute</th>
                <th scope="col">EndRoute</th>
                <th scope="col">Seatcount</th>
                <th scope="col">Reserved</th>
                <th scope="col">Book</th>
            </tr>
            </thead>
            <?php
            if (isset($_POST['search'])) {
                $S = $_POST['from'];
                $E = $_POST['to'];

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sreevalsan";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $a = $_SESSION['access'];

                $sql = "SELECT * FROM bus where SRoute='$S' and ERoute='$E' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $Bno = $row["BNo"];
                        $Name = $row["Name"];
                        $Date = $row["Date"];
                        $Time = $row["Time"];
                        $SRout = $row["SRoute"];
                        $ERout = $row["ERoute"];
                        $SC = $row["SeatCount"];
                        $R = $row["Reserve"];
                        ?>
                        <tr>
                            <td><?php echo $Bno ?></td>
                            <td><?php echo $Name ?></td>
                            <td><?php echo $Date ?></td>
                            <td><?php echo $Time ?></td>
                            <td><?php echo $SRout ?></td>
                            <td><?php echo $ERout ?></td>
                            <td><?php echo $SC ?></td>
                            <td><?php echo $R ?></td>
                            <td>
                                <button type="submit" class=" btnx btn btn-primary " onclick="x('<?php echo $Bno ?>')" name="book"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book
                                </button>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    $conn->close();
                }
            }
            ?>
        </table>
    </div>
</div>

<script>
    function x(Bno) {
        var ans = confirm("Conformation to Book Tickets");
        if (ans) {
            window.location.assign("book2.php?Bno=" + Bno);
        } else {
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>
</html>
