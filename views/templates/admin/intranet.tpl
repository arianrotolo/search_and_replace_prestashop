<form action="" method="post">

    <div>
        <label for="file-select">Seleccionar archivo:</label>
        <select id="file-select" name="file-select">
            <option value="">Seleccionar archivo...</option>
            {foreach $files as $file}
            <option value="{$file['path']}">{$file['name']}</option>
            {/foreach}
        </select>
    </div>
    <br/>
    <div>
        <label for="file-path">Ruta del archivo:</label>
        <input type="text" id="file-path" name="file-path" value="/home/vestatex/pruebas.piscihogar.com/prueba/ejemplo.txt">
    </div>

    <div>
        <label for="buscar">Buscar:</label>
        <input type="text" name="buscar" id="buscar" />
    </div>
    <div>
        <label for="reemplazar">Reemplazar con:</label>
        <input type="text" name="reemplazar" id="reemplazar" />
    </div>
    <div>
        <button type="submit" name="submit">Buscar y Reemplazar</button>
    </div>
</form>
<!-- Agrega una etiqueta HTML para mostrar la información de depuración -->
<div>
    <pre>{print_r($debug_info)}</pre>
</div>