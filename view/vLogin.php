<!DOCTYPE html>
<title>Login- Alvaro Cordero Miñambres</title>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(120deg, #2980b9, #8e44ad);
        height: 100vh;
        overflow: hidden;
    }
    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: white;
        border-radius: 10px;
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);
    }
    .center h1 {
        text-align: center;
        padding: 20px 0;
        font-size: 32px;
        color: black;
        font-weight: bold;
        border-bottom: 1px solid silver;
    }
    .center form {
        margin-bottom: 20px;
        padding: 0 40px;
        box-sizing: border-box;
    }
    form .txt_field {
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 40px 0;
    }
    .txt_field input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
    }
    .txt_field label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: 0.5s;
    }
    .txt_field span::before {
        content: "";
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #2691d9;
        transition: 0.5s;
    }
    .txt_field input:focus ~ label,
    .txt_field input:valid ~ label {
        top: -5px;
        color: #2691d9;
    }
    .txt_field input:focus ~ span::before,
    .txt_field input:valid ~ label {
        width: 100%;
    }

    input[type="submit"] {
        width: 50%;
        height: 50px;
        border: 1px solid;
        background: #2691d9;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
    }
    input[type="submit"]:hover {
        border-color: #2691d9;
        transition: 0.5s;
    }
    
    footer {
        color: white;
    }


</style>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="txt_field">
                <input type="text" id="usuario" name="usuario" value="<?php echo (isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : ''); ?>">
                <span class="raya"></span>
                <label>Usuario: </label>

            </div>
            <div class="txt_field">
                <input type="password" id="contrasena" name="contrasena" value="<?php echo (isset($_REQUEST['contrasena']) ? $_REQUEST['contrasena'] : ''); ?>">
                <span class="raya"></span>
                <label>Password: </label>

            </div>

            <p style="color: red; position: absolute; bottom: 80px; left: 28%"><?php echo (!empty($aErrores["usuario"]) ? $aErrores["usuario"] : ''); ?></p>
            <div class="botons" style="display: flex;">
                <input style="width: 50%; margin-right: 10px;" type="submit" value="Iniciar Sesion" name="enviar">
                <input style="width: 50%; margin-left: 10px; background-color: #bf1515;" type="submit" value="Cancelar" name="cancelar">
            </div>
        </form>
    </div>
</body>

</html>