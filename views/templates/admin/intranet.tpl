<form action="" method="post">
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