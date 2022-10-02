{include file="head.tpl"}
<h1> Todas las casas</h1>
<ul>
    {foreach from=$houses item=$house}
        <li>
            <label>{$house->nombre_casa}</label> 
            <a href="deleteHouse/{$house->id}" class="btn btn-danger m-2">Borrar</a> 
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}