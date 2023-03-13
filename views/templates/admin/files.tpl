<script src="views/js/menu.js" defer></script>

<div class="panel">

    <div class="panel-heading">
        <div class="card">
            <h3 class="card-header">
                <i class="icon-home"></i> Explorador de archivos
            </h3>
        </div>
    </div>

    <div class="form-wrapper">
        <div class="form-group row">
            <form method="post" name="change_directory">
                <label>Ruta de carpeta:</label>
                <input type="text" name="directory_clicked" id="directory_clicked" value="{$path}" size="80">
            </form>
        </div>
        <div class="form-group row">
            <button
                onclick="document.getElementById('directory_clicked').value='{dirname($path)}'; document.forms['change_directory'].submit();">Atrás</button>
        </div>
        <div class="form-group row">
            <table style="height: 300px; overflow-y: scroll;">
                <thead>
                    <tr>
                        <th>Directories</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $directories as $dir}
                    <tr>
                        <td><a href="#"
                                onclick="document.getElementById('directory_clicked').value='{$path}/{$dir}'; document.forms['change_directory'].submit();"><i
                                    class="icon-folder-close"></i> {$dir}</a></td>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>

        <div class="form-group row">
            <table>
                <thead>
                    <tr>
                        <th>Files</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $files as $file}
                    <tr>
                        <td><a href="{$base_url}{$file}" target="_blank"><i class="icon-file"></i> {$file}</a></td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>

    </div>

    <div class="panel-footer">
        <pre>{print_r($path)}</pre>
    </div>

</div>

<div class="panel">

    <div class="panel-heading">
        <div class="card">
            <h3 class="card-header">
                <i class="icon-wrench"></i> Plantilla de emails
            </h3>
        </div>
    </div>

    <div class="form-wrapper">

        <div class="form-group row">
            <h2>Banner 1</h2>
            <form method="post" name="imagenes-banner">
                <label class="text-left">Ruta de archivo imagen 1:</label>
                <input type="text" name="img-url-1" id="img-url-1" value="" size="80" class="text-left">
            </form>
        </div>
        <div class="form-group row">
            <img class="bt-effect img-responsive" src="https://piscihogar.com/img/mail-2023/promociones-mail.webp"
                onload="setImageUrl('img-url-1', this.src)">
        </div>

        <div class="form-group row">
            <h2>Banner 2</h2>
            <form method="post" name="imagenes-banner">
                <label>Ruta de archivo imagen 2:</label>
                <input type="text" name="img-url-2" id="img-url-2" value="" size="80">
            </form>
        </div>
        <div class="form-group row">
            <img class="bt-effect img-responsive" src="https://piscihogar.com/img/mail-2023/plan-renove-mail.webp" onload="setImageUrl('img-url-2', this.src)">
        </div>

        <div class="form-group row">
            <h2>Banner 3</h2>
            <form method="post" name="imagenes-banner">
                <label>Ruta de archivo imagen 3:</label>
                <input type="text" name="img-url-3" id="img-url-3" value="" size="80">
            </form>
        </div>
        <div class="form-group row">
            <img class="bt-effect img-responsive" src="https://piscihogar.com/img/mail-2023/cupones-descuento.webp" onload="setImageUrl('img-url-3', this.src)">
        </div>

    </div>

</div>