{include file="head.tpl"}
<div class="contenedorHouse">
    <div class="infoHouse">
        <img src="{$house->escudo}" alt="{$house->nombre_casa}">
        <div>
            <label>Casa: <span>{$house->nombre_casa}</span></label>
            <label>Fundador: <span>{$house->fundador}</span></label>
            <label>Colores: <span>{$house->colores}</span></label>
            <label>Simbolo: <span>{$house->simbolo}</span></label>
        </div>

    </div>
    <div class="personajesHouse">
        {if $houseEmpty == true}
            <h2> Pertenecen a esta casa los alumnos: </h2>
            <ul class="list-group ">
                {foreach from=$characters item=$character}
                    <li class="list-group-item list-group-item-action">
                        <a href="character/{$character->id}">{$character->nombre}</a>
                    </li>
                {/foreach}
            </ul>
        {else}
            <h2> Esta casa no tiene alumnos :( </h2>
        {/if}
    </div>
</div>




{include file="foot.tpl"}