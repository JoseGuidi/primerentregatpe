{include file="head.tpl"}
<h1> Todos los Personajes</h1>
<ul class="list-group">
    {foreach from=$characters item=$character}
        <li class="list-group-item list-group-item-action">
            <a href="characters/{$character->id}">{$character->nombre}</a>
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}