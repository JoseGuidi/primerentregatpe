{include file="head.tpl"}
<div class="details">
    <label class="details"> Personaje: <span class="gol">{$character->nombre}</span></label>
    <label class="details"> Rol: <span>{$character->rol}</span> </label>
    <label class="details"> Casa: <span><a href="houses/{$house->id}">{$house->nombre_casa}</a></span> </label>
    <label class="details"> Nucleo de varita: <span>{$character->nucleo_varita}</span> </label>
</div>
{include file="foot.tpl"}