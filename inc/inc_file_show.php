<?php 
$link = mysqli_connect("localhost", "root", "", "ikantam");
$query = mysqli_query($link, "SELECT * FROM files WHERE id_user='" . $_SESSION['user_id'] . "'");
while ($w = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td align=\"center\">" . $w['id'] . "</td>";
    echo "<td>" . $w['url'] . "</td>";
    echo "<td>" . $w['name'] . "</td>";
    echo "</tr>";
}