<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/app.css">

    <title><?php echo $data['data']['title']?></title>
</head>
<body>
    <?php require 'layouts/header.php'?>
    <div>
        <?php require $view?>
    </div>
</body>
</html>