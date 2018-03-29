<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ascii_codes";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

//    $sql = "SELECT * FROM ascii_codes";
//    $result = $conn->query($sql);
//
//    if ($result->num_rows > 0) {
//        // output data of each row
//        echo "ALL CHARACTERS<br><ul>";
//        while($row = $result->fetch_assoc()) {
//            echo "<li>id: " . $row["id"] . " - HTML code: " . $row["html_code"] . " - Character code: " . $row["char_code"] . " - Description: " . $row["description"] . "<br></li>";
//        }
//        echo "</ul>";
//    } else {
//        echo "0 results";
//    }
//
//    $sql = "SELECT * FROM ascii_codes ORDER BY clicks DESC limit 20";
//    $result = $conn->query($sql);
//
//    echo "TOP 20<br><ul>";
//        while($row = $result->fetch_assoc()) {
//            echo "<li>Char:&" . $row["html_code"] . "';'HTML code: " . $row["html_code"] . " - Character code: " . $row["char_code"] . " - Description: " . $row["description"] . "<br></li>";
//        }
//    echo "</ul>";
//
//    include 'lang/languages.php';
//    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//    $t = $text_translate[$lang];
include 'findcharacters/index.php';
?>
