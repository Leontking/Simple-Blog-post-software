<html>
<head>
<title>Epic Website</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="/sumthing.css" rel="stylesheet">
<body>
<?php 
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "22443004";
 
// Connection
$conn = mysqli_connect($servername, $username, $password);

$query = "SELECT * FROM wordpress.posts WHERE postid = '$id'";

if ($result = $conn->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $postid = $row["postid"];
        $postdata = $row["postdata"];
        $postauthor = $row["postauthor"];
        $posttitle = $row["posttitle"];
            /* fetch associative array */
            echo "<h1 class='posttitle'>$posttitle</h1>";
            echo "<p class='postdata'>$postdata</p>";
            echo "<p>Author of the post: </p><kbd>$postauthor</kbd>";}
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html> 