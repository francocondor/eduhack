<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="Ingresarport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Mantenimiento - SB</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/utils/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/utils/css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>
    <body>
        <div class="container">
            <div class="content">
            <p style="font-size:80px;font-weight:900;font-family: 'Montserrat Black', sans-serif">Pet learning</p>
            <p style="font-size:35px;">Learn and study to take care of your virtual pet</p>
            <button class="btn" onclick="goToLogin()">Start</button>
            </div>
            <img src="<?php echo base_url(); ?>public/utils/img/medusin.png" alt="logo" class="image-brand">
        </div>
    <script src="<?php echo base_url();?>public/utils/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/utils/js/bootstrap.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        function goToLogin() {
            
            window.open("<?php echo base_url(); ?>" + "login", "_self");
        }
    </script>

    </body>

</html>