

<?php

?>

<!DOCTYPE html>
<html>
<body>

<?php
    if (!isset($_SESSION)){
        session_start();
    }

    if (!isset($_SESSION['Count'])){
        $_SESSION['Count'] = 0;
    }

    echo "You have refreshed ". $_SESSION['Count'] . " times.";
    $_SESSION['Count']++;
?>

<?php
    echo "<br> Use of $ _ SERVER SuperGlobals which displays : ". $_SERVER['DOCUMENT_ROOT'];
    ?>


    <?php

    $sql = "SELECT * FROM profile WHERE firstName = 'as';";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0)
    {
        while($row = mysqli_fetch_assoc($result)){
            echo  $row['prof_id'].  "<br>";
        }

    }

    ?>

</body>
</html>

