<?php
    session_start();
    if(session_status() != 2 or $_SESSION['aut'] != 'qwe1534!"#;'){
        session_destroy();
        header("Location: index.php");
        exit();
    }
?>