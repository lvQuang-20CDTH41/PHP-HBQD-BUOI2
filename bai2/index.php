<?php
require_once "./xuly.php";
$month = $year = "";
if (!empty($_POST)) {
    if (isset($_POST['month'])) {
        $month = (int) $_POST['month'];
    }
    if (isset($_POST['year'])) {
        $year = (int) $_POST['year'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h2 class="text-center">Kiểm tra tháng đó có mấy ngày</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        Nhập tháng:
                        <input type="text" class="form-control" placeholder="Nhập tháng" value="<?= $month ?>" name=" month" required="true">
                    </div>
                    <div class="mb-3">
                        Nhập năm:
                        <input type="text" class="form-control" placeholder="Nhập năm" value="<?= $year ?>" name="year" required="true">
                    </div>
                    <button type="submit" class="btn btn-success">Result</button>
                    <h2>Kết quả:</h2>
                    <p>
                        <?php if (!empty($_POST)) {
                            Tinh($month, $year);
                        } ?>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>