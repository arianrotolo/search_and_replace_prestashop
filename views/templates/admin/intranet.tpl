<form action="#" method="post">
    <div class="form-group">
        <label for="file-path">Selecciona el directorio de archivos</label>
        <input type="text" class="form-control" name="file-path" id="file-path" value="/home/vestatex/pruebas.piscihogar.com/prueba/" size="80" required>
    </div>
    <div class="form-group">
        <label for="buscar">Texto a buscar</label>
        <input type="text" class="form-control" name="buscar" id="buscar" size="80" required>
    </div>
    <div class="form-group">
        <label for="reemplazar">Texto a reemplazar</label>
        <input type="text" class="form-control" name="reemplazar" id="reemplazar" size="80" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Reemplazar</button>
</form>
<!-- Agrega una etiqueta HTML para mostrar la información de depuración -->
<!--
<div>
    <pre>{print_r($debug_info)}</pre>
</div>
-->