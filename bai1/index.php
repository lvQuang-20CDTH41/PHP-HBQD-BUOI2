<?php
require_once "./xuly.php";
$a = $b = $c = $delta = "";
if (!empty($_POST)) {
    if (isset($_POST['a'])) {
        $a = (int) $_POST['a'];
    }
    if (isset($_POST['b'])) {
        $b = (int) $_POST['b'];
    }
    if (isset($_POST['c'])) {
        $c = (int) $_POST['c'];
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
                <h2 class="text-center">Giải phương trình bậc 2:</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        Nhập a: <input type="text" class="form-control" placeholder="Nhap a" value="<?= $a ?>" name="a" required="true">
                    </div>
                    <div class="mb-3">
                        Nhập b: <input type="text" class="form-control" placeholder="Nhap b" value="<?= $b ?>" name="b" required="true">
                    </div>
                    <div class="mb-3">
                        Nhập c: <input type="text" class="form-control" placeholder="Nhap c" value="<?= $c ?>" name="c" required="true">
                    </div>
                    <button type="submit" class="btn btn-success">Result</button>
                    <h2>Kết quả:</h2>
                    <p>
                        <?php if (!empty($_POST)) {
                            giai($a, $b, $c);
                        } ?>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>