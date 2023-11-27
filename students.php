<?php  include 'includes/header.php';  ?>

<div class="breadcrumbs">
    <div class="container2" data-aos="fade-left" data-aos-delay="100">
        <h2>Students</h2>
    </div>  
</div>

<div class="wrapper">
    <h1> Our Waiting List</h1>
</div>

<?php
$sql = "SELECT * FROM students";
$result = $con->query($sql);

if (!$result) {
    die("Error fetching data: " . $con->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Course Type</th><th>Nationality</th><th>Email</th><th>Date</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["stuId"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["course"] . "</td><td>" . $row["nationality"] . "</td><td>" . $row["email"] . "</td><td>" . $row["date"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$con->close();
?>

<br>
<br>

<?php  include 'includes/footer.php';  ?>