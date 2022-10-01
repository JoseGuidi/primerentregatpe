{include file="head.tpl"}
<h1> Todos las Casas</h1>
<ul>
    {foreach from=$houses item=$house}
        <li>
        <label>{$house->nombre_casa}</label><a href="deleteHouse/{$house->id}" class="btn btn-danger m-2">Eliminar</a> <a href="editHouse/{$house->id}" class="btn btn-secondary m-2">Editar</a> 
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}