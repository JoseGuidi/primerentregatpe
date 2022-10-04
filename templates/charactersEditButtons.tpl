{include file="head.tpl"}
<h1> Todos los Personajes</h1>
<ul>
    {foreach from=$characters item=$character}
        <li>
            <label>{$character->nombre}</label> 
            <a href="editChar/{$character->id}" class="btn btn-secondary m-2">Editar</a> 
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}