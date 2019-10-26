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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
</head>
    <body>
        <div class="container fd-column ai-baseline">
        <h1 class="text h1 mb-124px">Hi, Abel</h1>
        <div class="content flex-inherit">
        <h3 class="text h3" id="question">¿How do you feel today?</h3>
        <div class="list-boxes">
            <div class="box-img" onclick="next(1)">
            <img id="img1" src="<?php echo base_url(); ?>public/utils/img/medusin.png" alt="logo" >
            </div>
            <div class="box-img" onclick="next(2)">
            <img id="img2" src="<?php echo base_url(); ?>public/utils/img/medusin.png" alt="logo" >
            </div>
        </div>
        </div>
    </div>
        <script src="<?php echo base_url();?>public/utils/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>public/utils/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>
            var array = [];
            function next(option){
                array.push(option);
                if(array.length == 1){
                    $("#question").text('¿Pregunta 2?');
                    $("#img1").attr("src","<?php echo base_url(); ?>public/utils/img/instagram.png");
                    $("#img2").attr("src","<?php echo base_url(); ?>public/utils/img/instagram.png");
                } else if(array.length == 2){
                    $("#question").text('¿Pregunta 3?');
                    $("#img1").attr("src","<?php echo base_url(); ?>public/utils/img/youtube.png");
                    $("#img2").attr("src","<?php echo base_url(); ?>public/utils/img/youtube.png");
                } else if(array.length == 3){
                    window.open("<?php echo base_url(); ?>" + "newmascota", "_self");
                }
            }
            
        </script>
    </body>

</html>