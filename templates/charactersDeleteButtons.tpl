{include file="head.tpl"}
<div class="lista">
<h1> Todos los Personajes</h1>
<ul class="list-group">
    {foreach from=$characters item=$character}
        <li>
            <label>{$character->nombre}</label> 
            <a href="deleteChar/{$character->id}" class="btn btn-danger m-2">Borrar</a> 
        </li>
    {/foreach}

</ul>
</div>
{include file="foot.tpl"}