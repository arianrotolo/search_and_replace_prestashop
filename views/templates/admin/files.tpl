<h1>Folder Path: {$path}</h1>

<table>
    <thead>
        <tr>
            <th>Directories</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$directories item=dir}
            <tr>
                <td><a href><i class="icon-folder-close"></i> {$dir}</a></td>
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
        {foreach from=$files item=file}
            <tr>
                <td><a href="{$path}/{$file}" target="_blank"><i class="icon-file"></i> {$file}</a></td>
            </tr>
        {/foreach}
    </tbody>
</table>

<div>
    <a href>&laquo; Back</a>
</div>
