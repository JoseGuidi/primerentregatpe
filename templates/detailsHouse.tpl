{include file="head.tpl"}
<h1> Casa: {$house->nombre_casa} </h1>
<p> La casa {$house->nombre_casa} fue fundada por {$house->fundador}. Sus colores principales son {$house->colores} y es representada por el simbolo de {$house->simbolo}
<h2> Pertenecen a esta casa los alumnos: </h2>
<ul>
    {foreach from=$characters item=$character}
        <li>
            <a href="characters/{$character->nombre}">{$character->nombre}</a>
        </li>
    {/foreach}
</ul>
{include file="foot.tpl"}