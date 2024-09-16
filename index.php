<?php
    require '_functions.phpm'
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I AM CRUD</title>

    <!-- CSS & JS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudfare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Toastr CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/toastr.js.2.1.4/toastr.css">
    <script src="https://cdnjs.cloudfare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

</head>
<body class="bg-dark">
    <div class="container">

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        CREATE | RETRIEVE | UPDATE | DELETE
                        <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#create">Create Fruits</button>
                        </button>
                    </div>
                    <div class="card-body">
                        <form action="_redirect.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fruitSearch" id="fruitSearch" placeholder="Search Here..." autofocus>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Fruit</th>
                                        <th>Quantity</th>
                                        <th>Registered</th>
                                        <th>Updated</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $getFruits = selectFruits();

                                        while ($fruit = $getFruits -> fetch (PDO::FETCH_ASSOC)){
                                    ?>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_"> Edit </button>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_"> Delete </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>