<html>
  <head>
    <title>Posts</title>
  </head>
  <link href="/sumthing.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "22443004";
 
// Connection
$conn = mysqli_connect($servername, $username, $password);
 
// For checking if connection is
// successful or not
if ($conn->connect_error) {
  echo("hello");
}

$query = "SELECT posttitle, postid, postauthor FROM wordpress.posts ORDER BY postid DESC";


if ($result = $conn->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["postid"];
        $field2name = $row["posttitle"];
        $field3name = $row['postauthor'];
        echo "<div class='card'><a class='center' href='/viewpost.php?id=$field1name'>$field2name</a><br><p class='center'>author of the post: <kbd class='center'>$field3name</kbd></p></div><br><br>";
    }

    /* free result set */
    $result->free();
}
?>
</body>
</html>