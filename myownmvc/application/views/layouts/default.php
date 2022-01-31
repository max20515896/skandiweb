<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/style.css">
    <title>Product List</title>
</head>
<body>
    <div class="content">
        <div class="top">
            <div class="top-left-header">
                <h1><?= $title?></h1>
            </div>
            <div class="top-right-btns">
                <a href="<?= $btns[0]['uri']?>"><?= $btns[0]['name']?></a>
                <a href="<?= $btns[1]['uri']?>" id="delete-product-btn"><?= $btns[1]['name']?></a>
            </div>
        </div>
                <?= $content ?>
        </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="public/scripts/script.js"></script>
</body>
</html>