{include file="head.tpl"}
<h1> Todos los Personajes</h1>
<ul>
    {foreach from=$characters item=$character}
        <li>
            <a href="characters/{$character->nombre}">{$character->nombre}</a>
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}