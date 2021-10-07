<?php
$number = $sum = 0;
if (!empty($_POST)) {
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
    }
    for ($i = 1; $i <= $number; $i++) {
        $sum += $i;
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
                <h2 class="text-center">Tính 1 + 2 + 3 + .... + n</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        Nhập n số nguyên:
                        <input type="number" class="form-control" placeholder="Nhập n" value="<?= $number ?>" name="number" required="true">
                    </div>
                    <button type="submit" class="btn btn-success">Result</button>
                    <h2>Kết quả:</h2>
                    <p>
                        <?php echo $sum ?>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>