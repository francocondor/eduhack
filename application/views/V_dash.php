<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="Ingresarport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Mantenimiento - SB</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/utils/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/utils/css/styledash.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="container">
            <div class="content">
                <p style="font-size:100px" >Hi, <a style="font-family: 'Montserrat Black', sans-serif; font-weight:900">Abel<a></p>
                <h5 style="font-size:40px" class="text mb-124px">At this platform you can learn and win points to take care of you virtual pet</h5>
                <h5 >Courses</h5><p>
                <div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo base_url(); ?>public/utils/img/math.png" alt="logo" class="image-brand">
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo base_url(); ?>public/utils/img/math.png" alt="logo" class="image-brand">
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo base_url(); ?>public/utils/img/medusin.png" alt="logo" class="image-brand">
        </div>
        <script src="<?php echo base_url();?>public/utils/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>public/utils/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>
            var array = [];
            function iralcurso(option){
                return;
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