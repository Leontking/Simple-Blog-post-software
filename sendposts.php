<?php
$servername = "localhost";
$username = "root";
$password = "22443004";
$postdata = $_POST['postdata'];
$posttitle = $_POST['postitle'];
$postauthor = $_POST['postauthor'];
$password1 = $_POST['password'];

if($password1 == $password) {
  echo "Correct Password Sending Data!";
} else {
  die("Wrong Password!");
}
$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {
  echo("hello");
};
$randomnumbersql = "SELECT postid FROM wordpress.posts ORDER BY postid DESC LIMIT 1";
if (mysqli_query($conn, $randomnumbersql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $randomnumbersql . "<br>" . mysqli_error($conn);
}
if ($result = $conn->query($randomnumbersql)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $postid = $row["postid"];
     }
  }
$postid = $postid+1;
echo $postid + "/nl";
$seqel = "INSERT INTO wordpress.posts(postid, posttitle, postdata, postauthor) VALUES ('$postid', '$posttitle', '$postdata', '$postauthor')";
if (mysqli_query($conn, $seqel)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $seqel . "<br>" . mysqli_error($conn);
}
?>