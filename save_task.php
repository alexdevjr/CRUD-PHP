<?php  

include("db.php");

if ($_POST['title'] != ""){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    echo $query;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Tarea Guardada con Exito';
    $_SESSION['message_type'] = "success";

    header("Location: index.php");
}else {
    echo "Ingrese un titulo y una descripcion por favor";
}

?>