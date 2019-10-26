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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <div class="container">
        <div class="content">
            <h1 class="text h1">What's your user?</h1>
            <div class="group-input">
                <input class="input" id="usuarioID" type="text" name="username" placeholder="User">
                <div class="line"></div>
                <input class="input" id="passwordID" type="password" name="password" placeholder="Password">
            </div>
            <button class="btn" onclick="loguear()">Continue</button>
        </div>
        <img src="<?php echo base_url(); ?>public/utils/img/medusin.png" alt="logo" class="image-brand">
    </div>


    <script src="<?php echo base_url(); ?>public/utils/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>public/utils/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        function loguear() {
            var usuario = $('#usuarioID').val();
            var password = $('#passwordID').val();
            if (usuario.length == 0) {
                toastr.warning('Incorrect user', '', {
                    "positionClass": "toast-top-center"
                });
                return;
            }
            if (password.length == 0) {
                toastr.warning('Incorrect password', '', {
                    "positionClass": "toast-top-center"
                });
                return;
            }
            $.ajax({
                url: 'C_login/login',
                type: 'POST',
                data: {
                    usuario,
                    password
                }
            })
            .done(function(response) {
                let data = JSON.parse(response);
                if (data.error == 0) {
                    window.open("<?php echo base_url(); ?>" + "main", "_self");
                } else {
                    alert('Incorrect user');
                } //location.reload();}
            })
            .fail(function() {
                alert('error');
            });
        }
    </script>
</body>

</html>