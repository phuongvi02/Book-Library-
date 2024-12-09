<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="nav-day"><?php include('include/nav.php'); ?></div>
<div class="container">
<br>
<div class="row">
        <aside class="col-md-2"><span> </span></aside>
        <article class="col-md-8">
            <br>
            <br>
            <h5>Gửi email cho chúng tôi nếu bạn thắc mắc</h5>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Địa chi email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ý kiến của bạn</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Gửi</button>
            </div>
        <hr>
        <br>
        <br>
        <br>
        

        </article>
        <aside class="col-md-2"><span> </span></aside>
    </div>
</div>
<div>
    <?php include('include/footer.php'); ?>
</div>

</body>
</html>