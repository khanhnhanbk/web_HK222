<h1>User</h1>
<?php
    // $user get from mysql database
    while ($row = $user->fetch_assoc()) {
        echo $row['names'] . '<br>';
    }
?>