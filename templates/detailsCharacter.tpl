{include file="head.tpl"}
<h1>Personaje: {$character->nombre}</h1>
<p>El personaje {$character->nombre}, es un {$character->rol}, pertenece a la casa de <a href="houses/{$house->id}">{$house->nombre_casa}</a> y su nucleo de varita es {$character->nucleo_varita} </p>
{include file="foot.tpl"}