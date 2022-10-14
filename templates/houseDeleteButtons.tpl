{include file="head.tpl"}
<div class="lista">
<h1> Todas las casas</h1>
<ul class="list-group">
    {foreach from=$houses item=$house}
        <li class="list-group-item list-group-item-action bg-dark text-white">
            <label>{$house->nombre_casa}</label> 
            <a href="deleteHouse/{$house->id}" class="btn btn-danger m-2">Borrar</a> 
        </li>
    {/foreach}

</ul>
</div>
{include file="foot.tpl"}