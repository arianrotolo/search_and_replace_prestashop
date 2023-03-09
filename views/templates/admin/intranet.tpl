<div class="container">
    <h1>Formulario Intranet</h1>
    <form action="{$smarty.server.PHP_SELF|escape:'html':'UTF-8'}" method="post">
        <label for="input1">Input 1</label>
        <input type="text" name="input1" id="input1" />

        <label for="input2">Input 2</label>
        <input type="text" name="input2" id="input2" />

        <input type="submit" name="submit" value="Enviar" />
    </form>
</div>
