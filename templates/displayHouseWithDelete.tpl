{include file="head.tpl"}
<h1> Todos las Casas</h1>
<ul>
    {foreach from=$houses item=$house}
        <li>
            <a href="deleteChar/{$character->id}" class="btn btn-danger m-2">Eliminar</a> <label>{$character->nombre}</label>
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}