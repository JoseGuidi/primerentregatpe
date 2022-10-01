{include file="head.tpl"}
<h1> Todos los Personajes</h1>
<ul>
    {foreach from=$characters item=$character}
        <li>
            <a href="deleteChar/{$character->id}" class="btn btn-danger m-2">Eliminar</a> <label>{$character->nombre}</label>
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}