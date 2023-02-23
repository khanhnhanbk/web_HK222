<h1 class="banner_taital">User</h1>
<?php
    // $user get from mysql database
    while ($row = $user->fetch_assoc()) {
        echo $row['names'] . '<br>';
    }
?>