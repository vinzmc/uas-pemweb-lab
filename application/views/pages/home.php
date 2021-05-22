<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div class="box">
        <?php echo $navbar; ?>
        <div class="container content navmargin">
            <div class="row">
                <?php foreach ($data as $row) : ?>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= $row['hotel-photo'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php echo $footer; ?>
    </div>


    <?php echo $style; ?>
    <?php echo $script; ?>
</body>

</html>