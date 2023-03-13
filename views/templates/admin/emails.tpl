<script src="views/js/menu.js" defer></script>

<div class="panel">

    <div class="panel-heading">
        <div class="card-header">
            <h3 class="card-header">
                <i class="icon-search"></i> Buscar y reemplazar
            </h3>
        </div>
    </div>

    <div class="form-wrapper">
        <form action="#" method="post">
            <div class="form-group row">
                <label for="file-path">Selecciona el directorio de archivos</label>
                <input type="text" class="form-control" name="file-path" id="file-path"
                    value="/home/vestatex/pruebas.piscihogar.com/prueba/" size="80" required>
            </div>
            <div class="form-group row">
                <label for="buscar">Texto a buscar</label>
                <input type="text" class="form-control" name="buscar" id="buscar" size="80" required>
            </div>
            <div class="form-group row">
                <label for="reemplazar">Texto a reemplazar</label>
                <input type="text" class="form-control" name="reemplazar" id="reemplazar" size="80" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Buscar y reemplazar</button>
        </form>
    </div>

    <div class="panel-footer">

    </div>
</div>

<div class="panel">

    <div class="panel-heading">
        <div class="card-header">
            <h3 class="card-header">
                <i class="icon-wrench"></i> Plantilla de emails
            </h3>
        </div>
    </div>

    <div class="form-wrapper">
        <!-- BANNER 1-->
        <div class="form-group row">
            <h2>Banner 1</h2>
            <form method="post">

                <div class="form-group row">
                    <label for="file-path">Directorio de las plantillas email</label>
                    <input type="text" class="form-control" name="emails-path" id="emails-path"
                        value="/home/vestatex/pruebas.piscihogar.com/prueba/" size="80" style="text-align: left" required>
                </div>
                <div class="form-group row">
                    <label style="text-align: left">Ruta de imagen 1 actual:</label>
                    <input type="text" name="img-url1" id="img-url1"
                        value="https://piscihogar.com/img/mail-2023/promociones-mail.webp" size="80">
                    <button name="button1" class="btn btn-primary"
                        onclick="setImageUrl('img-banner1', 'img-url1'); event.preventDefault();">Carga imagen</button>
                </div>
                <div class="form-group row">
                    <img id="img-banner1" class="bt-effect img-responsive" src="">
                </div>
                <div class="form-group row">
                    <label style="text-align: left">Ruta de imagen 1 a reemplazar:</label>
                    <input type="text" name="img-url1-remplazar" id="img-url1-remplazar" value="" size="80">
                    <button type="submit" name="submitUrl1" class="btn btn-primary">Reemplazar</button>
                </div>

            </form>
        </div>

        <!-- BANNER 2-->
        <div class="form-group row">
            <h2>Banner 2</h2>
            <form method="post">

                <div class="form-group row">
                    <label style="text-align: left">Ruta de imagen 2 actual:</label>
                    <input type="text" name="img-url2" id="img-url2"
                        value="https://piscihogar.com/img/mail-2023/plan-renove-mail.webp" size="80">
                    <button name="button2" class="btn btn-primary"
                        onclick="setImageUrl('img-banner2', 'img-url2'); event.preventDefault();">Carga imagen</button>
                </div>
                <div class="form-group row">
                    <img id="img-banner2" class="bt-effect img-responsive" src="">
                </div>
                <div class="form-group row">
                    <label style="text-align: left">Ruta de imagen 2 a reemplazar:</label>
                    <input type="text" name="img-url2-remplazar" id="img-url2-remplazar" value="" size="80">
                    <button type="submitUrl2" name="submitUrl2" class="btn btn-primary">Reemplazar</button>
                </div>

            </form>
        </div>

        <!-- BANNER 3-->
        <div class="form-group row">
            <h2>Banner 3</h2>
            <form method="post">

                <div class="form-group row">
                    <label style="text-align: left">Ruta de imagen 3 actual:</label>
                    <input type="text" name="img-url3" id="img-url3"
                        value="https://piscihogar.com/img/mail-2023/cupones-descuento.webp" size="80">
                    <button name="button3" class="btn btn-primary"
                        onclick="setImageUrl('img-banner3', 'img-url3'); event.preventDefault();">Carga imagen</button>
                </div>
                <div class="form-group row">
                    <img id="img-banner3" class="bt-effect img-responsive" src="">
                </div>
                <div class="form-group row">
                    <label style="text-align: left">Ruta de imagen 3 a reemplazar:</label>
                    <input type="text" name="img-url3-remplazar" id="img-url3-remplazar" value="" size="80">
                    <button type="submitUrl3" name="submitUrl3" class="btn btn-primary">Reemplazar</button>
                </div>

            </form>
        </div>
    </div>

    <div class="panel-footer">
        <pre>{print_r($debug_info)}</pre>
    </div>

</div>