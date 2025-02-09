<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/css/header.css" />
    <link rel="stylesheet" href="public/css/footer.css" />
    <link rel="stylesheet" href="public/css/orderlist.css" />
    <link rel="stylesheet" href="public/css/carousel.css" />
    <link rel="stylesheet" href="public/css/popup_orderlist.css" />
    <link rel="stylesheet" href="public/css/popup_productdetail.css" />
    <link rel="stylesheet" href="public/css/uikit.min.css" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/promot.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>The Pizza Company</title>
</head>

<body>
  <?php include '../ltw_pizza/app/views/components/header.php' ?> 
  
  <?php require_once "./mvc/views/". $data["log_page"].".php"; ?>
  <?php include '../ltw_pizza/app/views/components/footer.php' ?>

</body>

</html>