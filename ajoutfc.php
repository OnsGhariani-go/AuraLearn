<?php
include"ALcnx.php";
if (isset($_POST['valider'])) {
    $q= $_POST['question'];
    $r= $_POST['reponse']; 
    $conn->query("INSERT INTO flashcard (q,r)
                VALUES ('$q', '$r')");
}

?>