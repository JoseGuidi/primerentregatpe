{include file="head.tpl"}
<div class="lista">
<h1> Todos los Personajes</h1>
<ul class="list-group">
    {foreach from=$characters item=$character}
        <li class="list-group-item list-group-item-action bg-dark text-white">
            <label>{$character->nombre}</label> 
            <a href="editChar/{$character->id}" class="btn btn-secondary m-2">Editar</a> 
        </li>
    {/foreach}

</ul>
</div>
{include file="foot.tpl"}