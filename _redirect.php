<?php
require '_functions.php';

if (isset($_POST['fruitSearch'])) {

    $fruitSearch = $_POST['fruitSearch'];

    //check if the search is empty
    if (empty($fruitSearch)) {
        header("location: index.php?note=invalid");
    } else {
        header("location: fruit_search.php?searchText=$fruitSearch");
    }
} else {
    header("location: index.php?note=invalid");
}

?>