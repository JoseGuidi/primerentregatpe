{include file="head.tpl"}
<div class="lista">
<h1> Todos las Casas</h1>
<ul class="list-group">
    {foreach from=$houses item=$house}
        <li class="list-group-item list-group-item-action bg-dark text-white">
            <label>{$house->nombre_casa}</label>
            <a href="editHouse/{$house->id}" class="btn btn-secondary m-2">Editar</a>
        </li>
    {/foreach}

</ul>
</div>
{include file="foot.tpl"}