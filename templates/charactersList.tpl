{include file="head.tpl"}
<div class="lista">
    <h1> Todos los Personajes</h1>
    <img src="images/personajes.jpg" alt="Personajes de harry potter">
    <ul class="list-group">
        {foreach from=$characters item=$character}
            <li class="list-group-item list-group-item-action">
                <a  class="anchorLista" href="characters/{$character->id}">{$character->nombre}</a>
            </li>
        {/foreach}
    </ul>
    <img src="images/personajes2.jpg" alt="Personajes de harry potter">
</div>
{include file="foot.tpl"}