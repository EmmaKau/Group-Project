<?php

    include_once 'connecttoserver.php';

    $pid = 0;


    $sql = "INSERT INTO Comment(pid, cid, tid, week_fid, comment) VALUES ('$pid', '$cid', '$tid', '$week_fid', '$comment');";
    $result = mysqli_query($conn, $sql);
?>


