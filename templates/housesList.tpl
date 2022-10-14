{include file="head.tpl"}
<div class="lista">
<h1>Todas las casas: </h1>
<ul class="list-group">
    {foreach from=$houses item=$house}
        <li class="list-group-item list-group-item-action">
            <a class="anchorLista" href="house/{$house->id}">{$house->nombre_casa}</a>
        </li>
    {/foreach}

</ul>
</div>
<img src="images/casas.jpg" alt="Casas HP">
{include file="foot.tpl"}
