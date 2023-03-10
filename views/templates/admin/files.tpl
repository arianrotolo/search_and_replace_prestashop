<h1>Ruta de carpeta: {$path}</h1>

<form method="post" name="change_directory">
    <input type="text" name="directory_clicked" id="directory_clicked" value="{$path}" size="80">
</form>

<div>
    <button onclick="document.getElementById('directory_clicked').value='{dirname($path)|urlencode}'; document.forms['change_directory'].submit();">Atrás</button>
</div>

<table>
    <thead>
        <tr>
            <th>Directories</th>
        </tr>
    </thead>
    <tbody>
        {foreach $directories as $dir}
        <tr>
            <td><a href="#" onclick="document.getElementById('directory_clicked').value='{$dir|urlencode}'; document.forms['change_directory'].submit();"><i class="icon-folder-close"></i> {$dir}</a></td>
        </td>
        </tr>
        {/foreach}
    </tbody>
</table>

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

<div>
    <pre>{print_r($link)}</pre>
</div>