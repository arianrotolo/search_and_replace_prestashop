<h1>Ruta de carpeta: {$path}</h1>

<table>
    <thead>
        <tr>
            <th>Directories</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$directories item=dir}
            <tr>
                <td><a href=""><i class="icon-folder-close"></i> {{ dir }}</a></td>
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
    <a href="{if $pagination.page > 1}{$link->getAdminLink('AdminFiles', true, array('path' => $path, 'page' => $pagination.page - 1, 'limit' => $pagination.limit))}{else}#"{/if}>&laquo; Previous</a>
    <span>Page {$pagination.page} of {$pagination.total_pages}</span>
    <a href="{if $pagination.page < $pagination.total_pages}{$link->getAdminLink('AdminFiles', true, array('path' => $path, 'page' => $pagination.page + 1, 'limit' => $pagination.limit))}{else}#"{/if}>Next &raquo;</a>
    <form method="GET" action="{$link->getAdminLink('AdminFiles', true)}">
        <label for="limit">Show:</label>
        <select name="limit" id="limit">
            <option value="10"{if $pagination.limit == 10} selected{/if}>10</option>
            <option value="25"{if $pagination.limit == 25} selected{/if}>25</option>
            <option value="50"{if $pagination.limit == 50} selected{/if}>50</option>
            <option value="100"{if $pagination.limit == 100} selected{/if}>100</option>
        </select>
        <input type="hidden" name="path" value="{$path}">
        <input type="submit" value="Go">
    </form>
</div>
