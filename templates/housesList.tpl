{include file="head.tpl"}
<h1>Todos las casas: </h1>
<ul>
    {foreach from=$houses item=$house}
        <li>
            <a href="houses/{$house->nombre_casa}">{$house->nombre_casa}</a>
        </li>
    {/foreach}

</ul>
{include file="foot.tpl"}
