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
    <style>
        .content {
            margin-right: -20%;
        }
    </style>
</head>
    <body>
        <div class="container fd-column ai-baseline">
        <h1 class="text h1 mb-124px">¿Wich pet choose?</h1>
        <div class="content flex-inherit">
        <div class="list-boxes">
            <div class="box-img" onclick="choose(1)">
            <img id="img1" src="<?php echo base_url(); ?>public/utils/img/elef.png" alt="logo" >
            </div>
            <div class="box-img" onclick="choose(2)">
            <img id="img2" src="<?php echo base_url(); ?>public/utils/img/llam.png" alt="logo" >
            </div>
            <div class="box-img" onclick="choose(3)">
            <img id="img2" src="<?php echo base_url(); ?>public/utils/img/oso.png" alt="logo" >
            </div>
            <div class="box-img" onclick="choose(4)">
            <img id="img2" src="<?php echo base_url(); ?>public/utils/img/pand.png" alt="logo" >
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
            function choose(option){
                $.ajax({
                    url: 'C_newmascota/newmascota',
                    type: 'POST',
                    data: {
                        option
                    }
                })
                .done(function (response) {
                    let data = JSON.parse(response);
                    if (data.error == 0) {
                        window.open("<?php echo base_url(); ?>" + "dash", "_self");
                    } else {
                        alert('Incorrect user');
                    } //location.reload();}
                })
                .fail(function () {
                    alert('error');
                });
            }
            
        </script>
    </body>

</html>