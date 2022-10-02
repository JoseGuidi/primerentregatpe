{include file="head.tpl"}
<h1> Todos los Personajes</h1>
<ul>
    {foreach from=$characters item=$character}
        <li>
            <label>{$character->nombre}</label> 
            <a href="deleteChar/{$character->id}" class="btn btn-danger m-2">Borrar</a> 
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}