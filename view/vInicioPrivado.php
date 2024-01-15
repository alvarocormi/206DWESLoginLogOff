<title>Alvaro Cordero Miñambres - Progama</title>
<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);">
    <div style="width: 370px; height: 320px; background-color: white; text-align: center; position: relative; display: flex; flex-direction: column; min-width: 0; word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 0.25rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075)">
        <div style="color: black; padding: 15px; flex: 1 1 auto; padding: 1.25rem;">
            <h5 style="font-size: 1.7rem; font-weight: bold; margin-bottom: 0.75rem; font-weight: 700;"><?php echo ("$bienvenida") ?></h5>
            <hr>
            <p style="font-size: 18px; margin-top: 20px; margin-bottom: 1rem;"><?php echo ("$numConexiones") ?><?php echo ("<br>$ultimaConexion") ?></p>
            <form name="Programa" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <button style="position: absolute; color: white; bottom: 10px; left: 10px; width: 150px; height: 50px; background-color: #bf1515; font-weight: bold; font-size: 1rem" aria-disabled="true" type="submit" name="cerrarSesion">Cerrar Sesion</button><br><br>
                <button style="position: absolute; color: white; bottom: 10px; right: 10px; width: 150px; height: 50px; line-height: 35px; background: #2691d9; font-size: 1rem; font-weight: bold;"  aria-disabled="true" type="submit" name="detalle">Detalle</button><br><br>
            </form>
        </div>
    </div>
</div>
</html>