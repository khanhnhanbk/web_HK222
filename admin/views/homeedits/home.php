

<head>
    <meta charset="UTF-8">
    <title>Display Course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

    <div class="container">
        <h1>Display Course</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="inputValue">Enter a value:</label>
                <input type="text" class="form-control" id="inputValue" name="inputValue">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <?php
                if (isset($_POST['submit'])) {
                    $inputValue = $_POST['inputValue'];
                    //require_once (ADMIN_PATH . 'controllers/HomeeditController.php');
                    $result = $this->getById('courses',$inputValue);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    $row = mysqli_fetch_assoc($result);
                    foreach($row as $key => $value) {
                        if ($key == "image" && is_string($value)) {
                            //header('Content-Type: image/jpeg');
                            
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';
                        } 
                        else{
                        echo $key . ": " . $value . "<br>";
                        }
                    }
                } else {
                    echo "0 results";
                }
                }
            ?>
        </form>
    </div>

