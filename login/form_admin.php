<title>Login Admin</title>
<?php 
session_start()
?>
<body><a href="../dashboard.php" class="button">Kembali</a>
    <link rel="stylesheet" type="text/css" href="../login.css">
        <div id="form_wrapper">
            <div id="form_left">
                <img src="../gambar/buku.jpg">
                
            </div>
            <form id="form_right" action="prosesadmin.php" method="post">
                <h1 style="color: white;">Sign In</h1>
                <div class="input_container">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Username" type="text" name="useradmin" id="username" class='input_field'>
                </div>
                <div class="input_container">
                    <i class="fas fa-lock"></i>
                    <input  placeholder="Password" type="password" name="passadmin" id="password" class='input_field'>
                </div>
                <input type="submit" value="Login" id='input_submit' class='input_field'>

            </form>
        </div>
    </body>

<!-- <title>Login Admin</title>

<body><a href="../dashboard.php" class="button">Kembali</a>
    <link rel="stylesheet" type="text/css" href="../login.css">
        <div id="form_wrapper">
            <div id="form_left">
                <img src="../gambar/buku.jpg">
                
            </div>
            <form id="form_right" action="prosesadmin.php" method="post">
                <h1 style="color: white;">Sign In</h1>
                <div class="input_container">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Username" type="text" name="useradmin" id="username" class='input_field'>
                </div>
                <div class="input_container">
                    <i class="fas fa-lock"></i>
                    <input  placeholder="Password" type="password" name="passadmin" id="password" class='input_field'>
                </div>
                <input type="submit" value="Login" id='input_submit' class='input_field'>

            </form>
        </div>
    </body> -->