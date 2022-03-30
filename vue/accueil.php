<?php
$title = 'AquaVision';
$description = " - Aquavision, photos videos et referencement sub-aquatique";
include './vue/commun/header.php';

?>
<script>
    function visited(elem, id) {

        document.querySelector("path.departement-" + elem).classList.add("fillRed");
        document.querySelector("path.departement-" + elem).parentElement.setAttribute("href", "./departement/visite/" + id)

    }
</script>
<section class="carteInteractive">
    <div class="slideinTopAnim">
        <h2 class="bleu"><span class="vert">C</span>ARTE INTERACTIVE</h2>
        <p>Cliquez sur les departements en rouge pour acceder aux medias correspondant à ces departements</p>
    </div>
    <div class="carte">
        <h2 class="mt-5">France</h2>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 667 578" xml:space="preserve">
            <a target="_blank" xlink:href="#a">
                <g class="region region-11" data-nom="Île-de-France" data-code_insee="11">
                    <a href="#a">
                        <path data-nom="Paris" data-numerodepartement="75" class="region-11 departement departement-75 departement-paris" d="M641.8,78.3l-0.2,3.8l-1,2.6l-8.3-1.7l-6-0.6l-5.2,3h-4l-2.5-0.3l-0.4-0.1l-13.5-5l-3-3.8l-4.3-1.9l-0.5-0.2 l0.4-1.9l1.3-3.1l2.7-2.1l2.9-1.1l3.9,0.5h0.1l0.9-2.2l7.1-4.6l14-0.1l1.8,3.6l1.8,2.4l0.6,0.9l0.1,0.4L631,68l0.4,5.4l0.4,1.8v0.1 l-0.3,0.8l0.1,3.6l0.6-0.5l1.6-1.6l2-0.5l2-0.5L641.8,78.3z M396.8,154.7l-3.2-0.5l-2.5,1.7l3,3.5l5.3-0.1l-1.8-1.9L396.8,154.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Seine-et-Marne" data-numerodepartement="77" class="region-11 departement departement-77 departement-seine-et-marne" d="m441.1,176.1l-2.9,0.8l0.4,8.5l-15.4,3 l-0.2,5.8l-3.9,5.4l-11.2,2.7l-9.2-0.7l2.6-1.5l0.6-2.7l-4.2-4.3L397,190l3.4-4.8l4-17.2l-0.5-1l1.1-4.1l-0.3-2.9v-0.1l-1.3-4.7 l1.3-2.5l-1.7-5.1l0.1-0.1l1.7-2.3l-0.2-2l6.9,1l2-2.2l2.5,1.6l8.1-2.9l2.6,0.7l1.8,2.5l-0.7,2.8l3.9,4.2l9.3,6l-0.4,2l-2.6,2.2 l3.5,8.3l2.6,1.7L441.1,176.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Yvelines" data-numerodepartement="78" class="region-11 departement departement-78 departement-yvelines" d="m364.1,158.1l-3.6-6.6l-1.8-5.8l2.3-2.6 l3.8,0.1l9.5,0.8l9,3.6l5.5,6.1l-2,3.1l3.2,5.2l-7.1,5.4l-1.6,2.6l0.7,2.9l-4.6,8.6l-3.1,0.7L372,180l-1.2-5.6l-6.2-5.4L364.1,158.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Essonne" data-numerodepartement="91" class="region-11 departement departement-91 departement-essonne" d="m401.6,164.8l2.3,2.2l0.5,1l-4,17.2L397,190 l-3.7-0.6l-2.8,1.8l-1.5-2.7l-1.9,2.9l-6.9,0.7l-2.8-10.6l4.6-8.6l-0.7-2.9l1.6-2.6l7.1-5.4v-0.1l3.7,1.6l5.1,2.1L401.6,164.8z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Hauts-de-Seine" data-numerodepartement="92" class="region-11 departement departement-92 departement-hauts-de-seine" d="M391.1,155.9l3,3.5l-0.4,4.1l-3.7-1.6v0.1l-3.2-5.2l2-3.1l3.6-2.6l1.3,2l-0.1,1.1L391.1,155.9z M612.6,54.1 l1.6-0.7l0.7-1.9l0.5-1.8l-0.1-1.1l-0.2-1.4l-4.6-1.9l-4.6-0.9l-4,1.3l-7.6,5.6l-6.1,5.8l-5.3,3l-1,1l-3.75,7.4l1.79,7.17 l-0.06,0.07l0.01,0.06l-2.74,3.23l0.68,2.44l2.5,4.8l3.3-0.5l1,5.2l3.9-0.3l1.4,3.5l3.4,1.6l0.5,2.1l5.3,4.2l4.3,1.3l-0.1,4.9 l5.7,3.5l3.15-5.91l-0.7-5.46l0.72-1.2l0.4-1.3l0.7-2.1l-1.4-1.9l0.3-1.2l0.8-2.8l-1-2.6l0.5-0.3l0.5-0.3l0.9-0.5l0.7-1.1l-0.4-0.1 l-13.5-5l-3-3.8l-4.3-1.9l-0.5-0.2l0.3-1.9l1.4-3.1l2.7-2.1l2.8-1.1h0.1l3.9,0.5l0.9-2.2l7.2-4.6l-0.7-2l-0.6-2l1.4-0.7L612.6,54.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Seine-Saint-Denis" data-numerodepartement="93" class="region-11 departement departement-93 departement-seine-saint-denis" d="M404.7,152.7l-1.3,2.5l1.3,4.7v0.1l-7.1-2.6l-0.8-2.7l-3.2-0.5l0.1-1.1l-1.3-2l3.3-1.3l2.6,1.1 c1.6-1.1,3.2-2.2,4.7-3.3L404.7,152.7z M663.2,73.89l0.06-0.08l-0.02-0.04l2.61-3.38l-3.95-0.3l-1.6-5.9l0.06-0.06l-0.02-0.06 l6.36-6.56l0.1-5.42l1.1-4l-1.2-3.4l-5.1-8l0.07-0.08l-0.03-0.04l2.65-3.33l-0.89-4.04l-4.5-2.9l-4.1,1.7l-6.4,8.8l-8.2,6.2 l-0.7-0.2l-7.8-1.1l-1.9,1l-5.1-4.6l-1.3-0.2l-1.9-0.7l-5.1,3l-1.6,2.7l-1-1.2l-5.9-2.1l-1.96,2.25v0.2l0.66,2.45l3.9,0.8l4.7,1.9 l0.1,1.4l0.1,1.1l-0.2,0.9l-0.3,0.9l-0.7,1.9l-1.6,0.7l-0.3,0.8l-1.4,0.7l0.6,2l0.7,2l13.9-0.2l0.1,0.1l1.8,3.6l1.8,2.4l0.6,0.8 l0.1,0.5L631,68l0.4,5.4l0.4,1.8l5.9-0.5l0.5-0.3c0.1,0,0.1,0,0.2,0l6.3-2.8l2.9,0.4l0.7,1.3l3,1.5l4,2.9c0,0.1,0.1,0.2,0.2,0.2 l0.7,0.5l6,6.2l0.8,0.6c0.1,0,0.2,0.1,0.3,0.1l3.6,2.6l0.04-0.13l0.43-1.3l0.23-0.68l-1.8-6L663.2,73.89z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Val-de-Marne" data-numerodepartement="94" class="region-11 departement departement-94 departement-val-de-marne" d="M404.7,160l0.3,2.9l-1.1,4.1l-2.3-2.2l-2.8,0.8l-5.1-2.1l0.4-4.1l5.3-0.1l-1.8-1.9L404.7,160z M668.09,102.2 h0.06l-0.02-0.12l3.31-0.19l-1.55-3.58l-3.69-2.41l0.8-8h-0.1l-3.6-2.6c-0.1,0-0.2-0.1-0.3-0.1l-0.8-0.6l-6-6.2l-0.7-0.5 c-0.1,0-0.2-0.1-0.2-0.2l-4-2.9l-3-1.5l-0.7-1.3l-2.9-0.4l-6.3,2.8c-0.1,0-0.1,0-0.2,0l-0.5,0.3l-5.9,0.5v0.1l-0.3,0.8l0.1,3.6 l0.6-0.5l1.6-1.7l2-0.4l2-0.5l4,1.7l-0.2,3.8l-1,2.6l-8.3-1.7l-6-0.6l-5.2,3h-4l-2.5-0.3l-0.6,1.1h-0.1l-0.9,0.5l-0.5,0.3l-0.5,0.3 l1,2.5v0.1l-0.8,2.8l-0.3,1.2l1.4,1.9l-0.7,2.1l-0.4,1.3l-0.7,1.2l0.78,5.38h0.06l2.1,0.2l4.7,2.8l3.1-2.2l0.1,5.5l3.3,2.4l4.9-1.8 l0.7,2.5l5.2-2.3l0.5,1.3l1.7,1.7l4.6-3.6l2.1-0.5l5.2-1.8l1.9,6.8l1.7,2.5l3.3,1.8l5.44,1.88l-0.68-5.05l0.05-0.08l-0.01-0.04 l2.5-4.2l2.73-2.74l-1.38-3.64l0.07-0.06l-0.03-0.07l2.35-1.96L668.09,102.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Val-d’Oise" data-numerodepartement="95" class="region-11 departement departement-95 departement-val-doise" d="m374.3,144l-9.5-0.8l4-9.5l1.6,3.2l5.6,1.1 l6.3-1.8l9.2,2.2l2.2-1.6l10.9,6.4l0.2,2l-1.7,2.3l-0.1,0.1c-1.5,1.1-3.1,2.2-4.7,3.3l-2.6-1.1l-3.3,1.3l-3.6,2.6l-5.5-6.1 L374.3,144z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-24" data-nom="Centre-Val de Loire" data-code_insee="24">
                    <a href="#a">
                        <path data-nom="Cher" data-numerodepartement="18" class="region-24 departement departement-18 departement-cher" d="m385.3,235.4l5-2.4l13.5,3.1l3.9,4.8l9-1.7l2,6.5l-1.7,5.8l2.7,2.1 l3.1,7.6l0.3,5.9l2.2,2l-0.2,5.8l-1.3,8.9h-0.1h-4l-4.8,3.7l-8.4,2.9l-2.3,1.9l1.7,5.3l-1.7,2.4l-8.7,1l-3.5,5.9v0.1l-4.9-0.2 l1.5-3.5l-0.9-8.9l-4.7-7.9l1.4-2.7l-2.3-2.2l2.5-5.1l-2.3-11.7l-11.6-1.6l2.8-5.5l2.8,0.1l0.6-2.8l9.7-2l-2.1-5.9l5.9-4.1 L385.3,235.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Eure-et-Loir" data-numerodepartement="28" class="region-24 departement departement-28 departement-eure-et-loir" d="m333.1,200.9l-2.1-3.8l-1.1-7.5l7.5-5.1 l-0.5-4.6l0.2-4.5l-4.8-4.4l-0.1-3.2l2.4-2.6l6-1.1l5.3-3.2l2.8,1.6l6-1.3l-0.2-2.8l6-6.9l3.6,6.6l0.5,10.9l6.2,5.4l1.2,5.6l2.3,2.2 l3.1-0.7l2.8,10.6l-0.5,1.5l-4.8,10.8l-8.5,0.6l-6,2.8l0.2,2.8l-3.3-1.9l-5.5,3.5L339,201.4l-6.3,1.3L333.1,200.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Indre" data-numerodepartement="36" class="region-24 departement departement-36 departement-indre" d="m357.8,308.5l-2.8,2.9l-1.7-2.5l-5.8,1.1 l-2.6-1.1l1.5-2.8l-2.5-1.3l-2.6-5.4h-2.9l-4.6-4.4l0.8-5.8l-2.1-3l5.6-0.5l-1-2.7l3.3-11.9l5.1-2.7l2.3,1.7l2.6-3.5l2.5-2.1l-1-4.9 l6-3.2l2.5,1.3l1.5-2.6l6.4-0.9l5.2,3.5l-2.8,5.5l11.6,1.6l2.3,11.7l-2.5,5.1l2.3,2.2l-1.4,2.7l4.7,7.9l0.9,8.9l-1.5,3.5l-2.7,0.8 l-13.2-2.7l-1.9,2.5L357.8,308.5z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Indre-et-Loire" data-numerodepartement="37" class="region-24 departement departement-37 departement-indre-et-loire" d="m303.9,263l-5.5-3.2v-0.1l5.8-15.3l1.7-9.3 l0.7-2.4l6.1,2.6l-0.5-3.3l2.8,0.3l7.7-4.5l10.5,0.5l-0.2,5.5l2.2-1.8l6,3.4l-0.7,2.7l3.4,5.1l-1.2,9.1l2.4,1.9l2.6-1.3l4.2,6.7 l1,4.9l-2.5,2.1l-2.6,3.5l-2.3-1.7l-5.1,2.7l-3.3,11.9l1,2.7l-5.6,0.5l-7.1-10l-0.3-3.1l-5.3-3l1.4,2.9l-10,0.4l-2.8-1.4l-1.3-6.1 l-2.9,0.3L303.9,263z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Loir-et-Cher" data-numerodepartement="41" class="region-24 departement departement-41 departement-loir-et-cher" d="m357.9,256.4l-6,3.2l-4.2-6.7l-2.6,1.3 l-2.4-1.9l1.2-9.1l-3.4-5.1l0.7-2.7l-6-3.4l-2.2,1.8l0.2-5.5l-10.5-0.5l0.6-3.5l3.2-1.1l6.3-10.6l-0.4-5.5l-1.7-2.2l2-2.1v-0.1 l6.3-1.3l12.8,10.8l5.5-3.5l3.3,1.9l2.5,7.1l-1.8,3.2l1.7,5.6l3-1.3l2.4,1.5l1.1,3.8l2.9,0.6l1.9-2.3l15.2,1.6l0.8,2.6l-5,2.4 l5.1,7.6l-5.9,4.1l2.1,5.9l-9.7,2l-0.6,2.8l-2.8-0.1l-5.2-3.5l-6.4,0.9l-1.5,2.6L357.9,256.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Loiret" data-numerodepartement="45" class="region-24 departement departement-45 departement-loiret" d="m393.3,189.4l3.7,0.6l0.7,3.1l4.2,4.3l-0.6,2.7 l-2.6,1.5l9.2,0.7l11.2-2.7l6.7,7.5l0.4,5.8l-4.6,4.9l1.1,2.9l-1.6,2.4l-5.3,3.3l3,2.8l2.2,6.9l-2.8,0.7l-1.5,2.4l-9,1.7l-3.9-4.8 l-13.5-3.1l-0.8-2.6l-15.2-1.6l-1.9,2.3l-2.9-0.6l-1.1-3.8l-2.4-1.5l-3,1.3l-1.7-5.6l1.8-3.2l-2.5-7.1l-0.2-2.8l6-2.8l8.5-0.6 l4.8-10.8l0.5-1.5l6.9-0.7l1.9-2.9l1.5,2.7L393.3,189.4z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-27" data-nom="Bourgogne-Franche-Comté" data-code_insee="27">
                    <a href="#a">
                        <path data-nom="Côte-d’Or" data-numerodepartement="21" class="region-27 departement departement-21 departement-cote-dor" d="m523.6,241.7l3.9,8.2l-1.2,1.3l-1.8,8.2 l-6.2,6.8l-1.1,4.1v-0.1l-15,1.5l-8.8,4.2l-5.6-6.3l-5.5-1.9l-1.3-2.6l-5.7-1.7l-2.4-2.6V260l0.4-3.2l-3.7-1.2l-1.3-6h0.1l-1.3-2.7 l1.3-8.1l6.7-10.4l-1.7-2.3l2.8-2.1l0.3-3.7l-3.1-3.9l1.9-3.1l2.2-2l6.1-0.9l4.7-3.9l3.9,0.5l3.5,0.7l0.5,2.7l2.6,1l-0.3,2.9 l2.9,0.3l1.8,2.2l1,3.1l-2.8,2.4l2.3,4.8l9.2,2l3,1.6v2.8l4.8-1.9h0.1l2.7-1.6l2,3l0.1,3.2l-4.6,4.1L523.6,241.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Doubs" data-numerodepartement="25" class="region-27 departement departement-25 departement-doubs" d="m590.1,245.2l-2.4,2.2l0.4,3l-4.8,6.2l-4.8,4 l-0.4,2.9l-2.5,2.7l-5.7,1.7l-0.3,0.3l-1.7,2.3l0.9,2.7l-0.7,4.5l0.5,2.5l-9.5,8.8l-2.9,5.2l-0.22,0.69l-3.68-3.49l3.6-7.4l2.1-2.3 l-4.2-4.1l-2.9-0.5l-5.8-10.1l-3,0.8l-1.5-2.5l-2,2.1l-1.2-2.5l3-5.1l-5.2-7.8l22.3-10.2l3-4.7l5.6-1.9l2.8,0.9l1.8-2.2l3.2-0.4 l0.5-2.8l5.9,0.8l0.2-0.1h0.1l5.9,2.7l-1.4,2.5l1.4,2.4l0.41-0.46l-0.11,0.16l-2.2,4.9l7-0.7L590.1,245.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Jura" data-numerodepartement="39" class="region-27 departement departement-39 departement-jura" d="m552.3,291.4l3.68,3.49L553.4,303l-5.3,7.2 l-5.5,3.2l-3.8,0.2l-0.4-2.8l-3.4-1.6l-4,4.4l-2.9,0.1l-0.1-3h-2.9l-4.3-7.7l2.8-1.1l-0.8-5.3l2.8-5l-2.2-8.7l-2.5-1.6l5-3.7 l-8.3-4.4l-0.4-2.9l1.1-4.1l6.2-6.8l1.8-8.2l1.2-1.3l2.3,2l5.4,0.1l5.2,7.8l-3,5.1l1.2,2.5l2-2.1l1.5,2.5l3-0.8l5.8,10.1l2.9,0.5 l4.2,4.1l-2.1,2.3L552.3,291.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Nièvre" data-numerodepartement="58" class="region-27 departement departement-58 departement-nievre" d="m462.8,250l5.5-0.4l1.3,6l3.7,1.2l-0.4,3.2v0.8 l-1.1,0.3l-2.7,0.4v1.3l-2.8,1l0.3,5.9l-2.1,1.7l4,7l-1.9,2.1l0.7,2.9l-11.3,5.7l-7-2.8l-5.9,6l-4.4-3.7l-2.8,1.7l-6.4-0.2l-5.7-6.3 l1.3-8.9l0.2-5.8l-2.2-2l-0.3-5.9l-3.1-7.6l-2.7-2.1l1.7-5.8l-2-6.5l1.5-2.4l2.8-0.7v0.1h3.4l7.4,4.8h6l4.6-4.3l3.9,5.6l5.5,3 l5.8-0.9l0.9,3.7l2.8-0.9L462.8,250z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haute-Saône" data-numerodepartement="70" class="region-27 departement departement-70 departement-haute-saone" d="m579.1,225.9l1.4,5.5l-0.2,0.1l-5.9-0.8 l-0.5,2.8l-3.2,0.4l-1.8,2.2l-2.8-0.9l-5.6,1.9l-3,4.7L535.2,252l-5.4-0.1l-2.3-2l-3.9-8.2l-2.6-1.4l4.6-4.1l-0.1-3.2l-2-3l-2.7,1.6 h-0.1l1.2-2.5l6.6-3.9l2.1,1.8l3.2-1l0.3-8.3l2-2.4l2.9,0.3l2.3-3.2l-0.2-1.4l8-5.8l7,4.3l5.8-1.6l4.9,3.6l5.1-2.2l8.4,6.6l-2.3,5.7 L579.1,225.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Saône-et-Loire" data-numerodepartement="71" class="region-27 departement departement-71 departement-saone-et-loire" d="m517.2,270.2v0.1l0.4,2.9l8.3,4.4l-5,3.7 l2.5,1.6l2.2,8.7l-2.8,5l0.8,5.3l-2.8,1.1l-4.8-3.3l-5.4,1.3l-5.9-1.5l-5.9,20.9l-5.7-7.7l-1.6,2.3l-2.5-1.5l-2.2,1.6l-2.2-1.7 l-2.3,1.9l-0.29,2.91L482,318.2v0.1l-5.7,3.8l-2.1-2.1l-8,1.5l-5.2-3.3v-3l3.7-4.6l0.5-5.5l-1.6-2.4l-7.9-2.9l-6.7-13.5l7,2.8 l11.3-5.7l-0.7-2.9l1.9-2.1l-4-7l2.1-1.7l-0.3-5.9l2.8-1l2.7-1.7l1.1-0.3l2.4,2.6l5.7,1.7l1.3,2.6l5.5,1.9l5.6,6.3l8.8-4.2 L517.2,270.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Yonne" data-numerodepartement="89" class="region-27 departement departement-89 departement-yonne" d="m425.8,207.1l-6.7-7.5l3.9-5.4l0.2-5.8l15.4-3 l3.6,1.5l4.5,5.5l2.5,8.3l2-2.2l3.6,4.1l5,10.9l12.6-1.6l2.9,1.4l-1.9,3.1l3.1,3.9l-0.3,3.7l-2.8,2.1l1.7,2.3l-6.7,10.4l-1.3,8.1 l1.3,2.7h-0.1l-5.5,0.4l-1.5-2.8l-2.8,0.9l-0.9-3.7l-5.8,0.9l-5.5-3l-3.9-5.6l-4.6,4.3h-6l-7.4-4.8H421v-0.1l-2.2-6.9l-3-2.8 l5.3-3.3l1.6-2.4l-1.1-2.9l4.6-4.9L425.8,207.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Territoire de Belfort" data-numerodepartement="90" class="region-27 departement departement-90 departement-territoire-de-belfort" d="m580.3,215.9l0.9-0.6l7.6,5l0.5,9l2.8-0.2l2,5 l-0.1,0.1l-2.79,0.39l-1.11-0.39l-3.19,4.34L586.5,239l-1.4-2.4l1.4-2.5l-5.9-2.7h-0.1l-1.4-5.5l-1.1-4.3L580.3,215.9z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-28" data-nom="Normandie" data-code_insee="28">
                    <a href="#a">
                        <path data-nom="Calvados" data-numerodepartement="14" class="region-28 departement departement-14 departement-calvados" d="m316.9,148l-0.7,2.2l-5.6-1l-7,1.7l-7.2,5.4 l-2.9,0.3l-5.7-1.1l-2.6,1.7l-4.9-3l-6.4,2.3l-2.7-1.3l-0.9,2.7l-5.4,2.9l-9.7-2.1l-1.8-2.4l4.5-5.3l-1.6-2.3l8.1-4.9l-2.2-8.2 l2-2.6l-8.4-3.1l-0.5-6.6v-0.1l0.1-0.7l1.8,0.8l1.9-2.1l3.4-0.3l9.4,3.3l13.9,1.5l6.9,3.4l5.7-0.7l4.7-2.5l4.1-3.7l5.1-1.1l0.3,8.3 h2.9l-2.3,2.1l2.8,9.4l-1.4,3L316.9,148z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Eure" data-numerodepartement="27" class="region-28 departement departement-27 departement-eure" d="m316.4,153.4l-0.2-3.2l0.7-2.2l-2.3-4.1l1.4-3l-2.8-9.4l2.3-2.1h-2.9 l-0.3-8.3l1.7-0.4l0.28-0.1h1.52l-0.9-0.2l0.8-0.3l-1.29-0.3l5.89-2.4l7.6,5l3.4-0.7l4.9,3l-1.9,2.4l2.1,2.1l5.4,2.4l1.4-2.7 l8.2-2.5l4.8-7l13.1,3.3l3.5,8.4l-4,2.6l-4,9.5l-3.8-0.1l-2.3,2.6l1.8,5.8l-6,6.9l0.2,2.8l-6,1.3l-2.8-1.6l-5.3,3.2l-6,1.1l-2.4,2.6 l-3.4-2.1l1.7-2.3l-7.8-9.5L316.4,153.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Manche" data-numerodepartement="50" class="region-28 departement departement-50 departement-manche" d="m255.2,158.7l9.7,2.1l4.1,4.2l-1.8,6.7 l-3.6,4.5h-0.1l-8.6-0.8l-5.4-2.3l-7.1,4.8l-2.7-1l-4.7-9.6l1.9-0.2l4.8,0.4l2.5-1.1l0.5-2.2l-2.4,1.3l-5.1-5.6l-0.3-5.3l2-6.1 l-0.3-4.9l-1.8-3.6l0.4-7.4l1.5-2l-2.5,0.3l-2-5l0.3-2.2l-2.4-1.2l-2.9-4.1l-0.7-5.9l-1.4-1.9l1.8-1.8l0.1-2.8l-0.5-2.3l-2.2-1.1 l-1-2.5l2.1-0.2l11.9,4.2h2.4l4-2.6l5.1,0.6l1.8,1.7l0.9,2.7l-3.2,5.2l4,6.5l1.1,4.3l-0.1,0.7v0.1l0.5,6.6l8.4,3.1l-2,2.6l2.2,8.2 l-8.1,4.9l1.6,2.3l-4.5,5.3L255.2,158.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Orne" data-numerodepartement="61" class="region-28 departement departement-61 departement-orne" d="m266.9,179.9l-3.3-3.7l3.6-4.5l1.8-6.7 l-4.1-4.2l5.4-2.9l0.9-2.7l2.7,1.3l6.4-2.3l4.9,3l2.6-1.7l5.7,1.1l2.9-0.3l7.2-5.4l7-1.7l5.6,1l0.2,3.2l6.3,0.5l7.8,9.5l-1.7,2.3 l3.4,2.1l0.1,3.2l4.8,4.4l-0.2,4.5l0.5,4.6l-7.5,5.1l1.1,7.5l-3.2-0.7l-3.1-3.5l-2.9,1l-7.2-5l-1.6-8.4l-2.8-1.5l-11,5.9l-3-0.1 v-0.1v-2.9l-3.3-1.6l-1.9-6l-2.7-0.2l-0.7,2.7h-9.1l-6.7,3.3l-2.5-1.7L266.9,179.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Seine-Maritime" data-numerodepartement="76" class="region-28 departement departement-76 departement-seine-maritime" d="m314.41,119.8l-7.61-1.8l-1.2-2l-0.1-2.3 l4.4-9.7l13.8-7.4L326,95l10.3-2.1l4.8-1.8l2.4,0.3L352,87l5.11-4.09l11.79,9.99l3.4,8.4l-3.1,4.7l1.4,8.7l-1.3,8l-13.1-3.3l-4.8,7 l-8.2,2.5l-1.4,2.7l-5.4-2.4l-2.1-2.1l1.9-2.4l-4.9-3l-3.4,0.7l-7.6-5L314.41,119.8z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-32" data-nom="Hauts-de-France" data-code_insee="32">
                    <a href="#a">
                        <path data-nom="Aisne" data-numerodepartement="02" class="region-32 departement departement-02 departement-aisne" d="m450.3,82.6l16.7,4.6l2.91,0.94L470.6,94l-1.3,3.5l1.3,3.1l-5,7.2 l-2.7,0.3l0.3,14.3l-1,2.8l-5.3-1.8l-8,4l-1.2,2.6l3.2,8l-5.5,2.3l1.6,2.4l-0.8,2.7l2.5,1.3l-7.7,10.2l-9.3-6l-3.9-4.2l0.7-2.8 l-1.8-2.5l-2.6-0.7l2.1-1.7l-0.5-2.8l-2.9-1.1l-2.4,1.5l-0.7-2.9l3,0.2l-2.9-4.5l2.6-1.7l2.4-5.7l2.6-1.1l-2.2-1.8l0.8-4.5 l-0.4-10.2l-2.3-7l3.9-8.1l0.4-3.8l12.6-0.6l2.6-2.2l2.3,1.7L450.3,82.6z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Nord" data-numerodepartement="59" class="region-32 departement departement-59 departement-nord" d="m384.33,25.06l0.87-0.26l2,0.8l1.1-2.1l7.9-2.1 l2.9,0.3l4.4-1.9v-0.1l1.2,4.8l2.3,3.7l-1.6,1.9l0.6,0.8l1.2,5.8h3.4l2.7,5.1l3.1,1.5h2.1l0.6-2.4l8.1-3l3.8,7.5l0.1,1l1.3,5.2 l2,3.5h0.1l2.8,0.6l2.1-1.4l2.4-0.2l-0.5,2.2l2.2-0.7l2.8,1l1.8,4.4l-0.6,2.3l0.7,2.3l1.4,1.9l1.1-2.6l4.6-0.3l2.4,1.1L462,64l5.5,6 l2.3,0.2l-2.1,2.4l-1.4,4.7l2.6,0.2l1.4,3.3l-3.5,3.9l0.2,2.5l-16.7-4.6l-5.2,1.8l-2.3-1.7l-2.6,2.2l-12.6,0.6l-3.3-2.6l3.5-10.6 l-1.8-2.4l-3-0.4l0.7-2.7l-3.9-5.2l3.1-1.6l-3.8-5.3l-5.9-1l1-6.1l-1.3-2.5l-1.7,2.2l-11.6-0.5l-4.1-4.2l0.6-2.8l-5.5-2.6 L384.33,25.06z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Oise" data-numerodepartement="60" class="region-32 departement departement-60 departement-oise" d="m372.8,131.1l-3.5-8.4l1.3-8l-1.4-8.7l3.1-4.7 l4.1,3.7l3.1-1.2l14.4,2.2l12.8,6.7l8.6-6.8l10.3-1.5l0.4,10.2l-0.8,4.5l2.2,1.8l-2.6,1.1l-2.4,5.7l-2.6,1.7l2.9,4.5l-3-0.2l0.7,2.9 l2.4-1.5l2.9,1.1l0.5,2.8l-2.1,1.7l-8.1,2.9l-2.5-1.6l-2,2.2l-6.9-1l-10.9-6.4l-2.2,1.6l-9.2-2.2L376,138l-5.6-1.1l-1.6-3.2 L372.8,131.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Pas-de-Calais" data-numerodepartement="62" class="region-32 departement departement-62 departement-pas-de-calais" d="m379.8,68.9l7.1,5.8l12-2.5l-2.6,5.7L398,81 l2.5-3.1l8.4,3.5l0.8-2.8l2.8,4.6l2.4-1.7l0.8,3.2l8.6-1.8l3.5-10.6l-1.8-2.4l-3-0.4l0.7-2.7l-3.9-5.2l3.1-1.6l-3.8-5.3l-5.9-1 l1-6.1l-1.3-2.5l-1.7,2.2l-11.6-0.5l-4.1-4.2l0.6-2.8l-5.5-2.6l-6.27-12.14L372.6,28.5l-6.4,5.4l0.9,5.6l-1.7,4.6l0.6,6.7l2,4.2 l-1.7-1.4l-0.3,9.7l2.27,1.58l10.53,1.02L379.8,68.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Somme" data-numerodepartement="80" class="region-32 departement departement-80 departement-somme" d="m424.3,82.9l3.3,2.6l-0.4,3.8l-3.9,8.1l2.3,7 l-10.3,1.5l-8.6,6.8l-12.8-6.7l-14.4-2.2l-3.1,1.2l-4.1-3.7l-3.4-8.4l-11.79-9.99L359.5,81l3.4-6.6l1.9-1.1l0.1-0.1l1.4,1.8l3.5,0.3 l-5.6-6l1.2-5.1l2.9,0.7l-0.03-0.02l10.53,1.02l1,3l7.1,5.8l12-2.5l-2.6,5.7L398,81l2.5-3.1l8.4,3.5l0.8-2.8l2.8,4.6l2.4-1.7 l0.8,3.2L424.3,82.9z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-44" data-nom="Grand Est" data-code_insee="44">
                    <a href="#a">
                        <path data-nom="Ardennes" data-numerodepartement="08" class="region-44 departement departement-08 departement-ardennes" d="m469.91,88.14l0.79,0.26l9.8,0.4l7.3-3.2l1.1-6 l4-3.8l2.8-0.2v3.8L494,81l-0.6,5.2l3.3,4.5l-1,2.4l0.6,3.1l1.4,1.9l3.3-0.9l4.3,2.4l2.8,3.8l4.9,0.6l2,1.7l-0.9,2.4l2.1-0.13 l-1.6,1.13l-2,2.7l-5.7-2.1l-1.9,2l0.8,8.8l-3.2,5.1l1.4,2.5l-4.2,3.6v0.1l-20.1-1.9l-9.8-6.6l-6.7-0.9l-0.3-14.3l2.7-0.3l5-7.2 l-1.3-3.1l1.3-3.5L469.91,88.14z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Aube" data-numerodepartement="10" class="region-44 departement departement-10 departement-aube" d="m442.2,186.9l-3.6-1.5l-0.4-8.5l2.9-0.8l3-5 l3.2,4.5l9,1.2v-3.3l9.5-7.6l6.5-0.9l3.1,0.5l0.4,6.1l2.6,2c1.9,0.8,3.8,1.5,5.6,2.3l2.5-1.5l3.3,1.1l-0.6,3.4l2.4,5.2l5.6,3 l0.5,9.9l-0.1,2.7l-5.6,2.5l0.2,4.8l-3.9-0.5l-4.7,3.9l-6.1,0.9l-2.2,2l-2.9-1.4l-12.6,1.6l-5-10.9l-3.6-4.1l-2,2.2l-2.5-8.3 L442.2,186.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Marne" data-numerodepartement="51" class="region-44 departement departement-51 departement-marne" d="m440.6,158.9l0.4-2l7.7-10.2l-2.5-1.3l0.8-2.7 l-1.6-2.4l5.5-2.3l-3.2-8l1.2-2.6l8-4l5.3,1.8l1-2.8l6.7,0.9l9.8,6.6l20.1,1.9l2.2,9l-1,4.1l2.6,1.3l-0.6,3.9l-3.1,1.1l-1.1,5.8 l3.2,4.6l0.5,4.1l-8.6,2.2l2.2,2.5l-2.3,2.2l0.7,2.9h-4.7l-3.3-1.1l-2.5,1.5c-1.8-0.8-3.7-1.5-5.6-2.3l-2.6-2l-0.4-6.1l-3.1-0.5 l-6.5,0.9l-9.5,7.6v3.3l-9-1.2l-3.2-4.5l-2.6-1.7l-3.5-8.3L440.6,158.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haute-Marne" data-numerodepartement="52" class="region-44 departement departement-52 departement-haute-marne" d="m493.9,167.9l8.6-2.2l3.4,5.2l16.9,10.4 l-2.4,2.3l12.7,9.5l-1.7,8.6l5.5,4.7l0.2,3.1l2.7-1.1l1.3,2.5v0.1l0.2,1.4l-2.3,3.2l-2.9-0.3l-2,2.4l-0.3,8.3l-3.2,1l-2.1-1.8 l-6.6,3.9l-1.2,2.5l-4.8,1.9v-2.8l-3-1.6l-9.2-2l-2.3-4.8l2.8-2.4l-1-3.1l-1.8-2.2l-2.9-0.3l0.3-2.9l-2.6-1l-0.5-2.7l-3.5-0.7 l-0.2-4.8l5.6-2.5l0.1-2.7l-0.5-9.9l-5.6-3l-2.4-5.2l0.6-3.4h4.7l-0.7-2.9l2.3-2.2L493.9,167.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Meurthe-et-Moselle" data-numerodepartement="54" class="region-44 departement departement-54 departement-meurthe-et-moselle" d="m588.2,170.9l1.9,1.3l-1.5,0.4l-10.6,7.6l-6.1-1.6l-1.6-2.7l-5.3,3.8 l-6,1l-2.4-1.8l-5.4,2l-1.1,2.8l-5.7,0.7l-4.1-4.8l0.1-2.9l-5.8-0.6l0.2-2.9l-2.5-2l1.7-2.8l-1.3-8.6l2.2-13.8l0.9-2.7l-4.9-11.5 l1.5-5.9l-1.2-2.7l-4.4-4.8l-5.3,2l-0.7-5.3l4.8-1.7l2-1.9h6.8l2.54,2.31L539.6,124l2.5,1.6l1.2,3.6l-1.7,3.1l1,5.6l-2.8,0.1 l4.3,7.5l11.5,4l-0.3,2.9l2.7,5.1l8.5,1.5l5.3,3.9l14.4,5.3L588.2,170.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Meuse" data-numerodepartement="55" class="region-44 departement departement-55 departement-meuse" d="m516.2,107.97l1.2-0.07l1.5,1.6l1.9,5.6 l0.7,5.3l5.3-2l4.4,4.8l1.2,2.7l-1.5,5.9l4.9,11.5l-0.9,2.7l-2.2,13.8l1.3,8.6l-1.7,2.8l2.5,2l-0.2,2.9l-1.9,2.3l-3-0.5l-6.9,3.4 l-16.9-10.4l-3.4-5.2l-0.5-4.1l-3.2-4.6l1.1-5.8l3.1-1.1l0.6-3.9l-2.6-1.3l1-4.1l-2.2-9v-0.1l4.2-3.6l-1.4-2.5l3.2-5.1l-0.8-8.8 l1.9-2l5.7,2.1l2-2.7L516.2,107.97z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Moselle" data-numerodepartement="57" class="region-44 departement departement-57 departement-moselle" d="m539.6,124l-2.65-10.19l0.65,0.59h2.4l1.5,2.1 l2.3,0.7l2.3-0.5l1-2.3l2-1.2l2.2-0.2l4.5,2.3l4.9-0.1l3.1,3.8l2.3,1.9l-0.5,2l3.7,3.2l2.8,4.5v2.3l4.2,0.7l1.2-1.9l-0.3-2.4 l2.6-0.2l3.8,1.8l1.4,3.5l2.1-1.5l2.5,1.9l5.8-0.4l5.3-4.2l2.2,1.4l0.5,2.1l2.4,2.4l3.2,1.5h0.03l-1.73,4.4l-1.4,2.6l-8.9,0.3 l-9.1-4.6l-0.8-2.8l-5,10.8l5.5,2.4l-1.6,2.5l2.3,1.7l1.3-2.5l3,0.3l4.3,3.4l-3,13.3l-2.3,1.8l-3.4-0.3l-2-2.7l-14.4-5.3l-5.3-3.9 l-8.5-1.5l-2.7-5.1l0.3-2.9l-11.5-4l-4.3-7.5l2.8-0.1l-1-5.6l1.7-3.1l-1.2-3.6L539.6,124z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Bas-Rhin" data-numerodepartement="67" class="region-44 departement departement-67 departement-bas-rhin" d="m631.8,140.7l-2.8,9.4l-7.8,10.5l-2,1.5l-1.4,3.3l0.3,4.9l-2.4,7.2 l0.7,3.6l-1.5,2l-1.2,5.5l-3.16,6.23L605.9,193l-0.3-2.8l-8.5-5.6l-3.1-0.2l-5.2-2.2l1.3-10l-1.9-1.3l3.4,0.3l2.3-1.8l3-13.3 l-4.3-3.4l-3-0.3l-1.3,2.5l-2.3-1.7l1.6-2.5l-5.5-2.4l5-10.8l0.8,2.8l9.1,4.6l8.9-0.3l1.4-2.6l1.73-4.4l8.87,0.6l2.4-0.6 L631.8,140.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haut-Rhin" data-numerodepartement="68" class="region-44 departement departement-68 departement-haut-rhin" d="m605.9,193l4.64,1.83l-0.04,0.07v5.3l1.6,1.9 l0.2,3.4l-2.2,11.1l0.1,6.7l1.8,1.5l0.6,3.5l-2.2,2l-0.2,2.3l-3.1,0.9l0.5,2.2l-1.5,1.6h-2.7l-3.8,1.4l-3-1.1l0.3-2.5l-2.4-1.1 l-0.4,0.1l-2-5l-2.8,0.2l-0.5-9l-7.6-5l2.8-2.4v-6.2l4.8-7.8l4.1-13.5l1.1-1l3.1,0.2l8.5,5.6L605.9,193z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Vosges" data-numerodepartement="88" class="region-44 departement departement-88 departement-vosges" d="m520.4,183.6l2.4-2.3l6.9-3.4l3,0.5l1.9-2.3 l5.8,0.6l-0.1,2.9l4.1,4.8l5.7-0.7l1.1-2.8l5.4-2l2.4,1.8l6-1l5.3-3.8l1.6,2.7l6.1,1.6l10.6-7.6l1.5-0.4l-1.3,10l5.2,2.2l-1.1,1 l-4.1,13.5l-4.8,7.8v6.2l-2.8,2.4l-0.9,0.6l-8.4-6.6l-5.1,2.2l-4.9-3.6l-5.8,1.6l-7-4.3l-8,5.8v-0.1l-1.3-2.5l-2.7,1.1l-0.2-3.1 l-5.5-4.7l1.7-8.6L520.4,183.6z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-52" data-nom="Pays de la Loire" data-code_insee="52">
                    <a href="#a">
                        <path data-nom="Loire-Atlantique" data-numerodepartement="44" class="region-52 departement departement-44 departement-loire-atlantique" d="m213.1,265.2l1.8-1l-2.8-4.1l-7.8-3l3-1.3 l0.6-2.2l-0.5-2.5l1.4-2.1l5.8-1.1l-5.5-0.7l-6.6,3.7l-4.1-3.2l-2.2,1l-2.2-1.2l-0.5-4.9l0.9-2.5l3-0.5l-0.9-2.2l-0.18-0.31 l13.18-3.89l0.4-6l5.2-3.4l13.2-0.4l1.6-2.9l9-3.9l6.8,3.6l7.2,13.3l-2.7-0.4l-1.9,2.4l8.5,3.3l0.3,5.9l-14.3,2.1l-2.9,2.2l3,0.8 l3.6,4.7l0.8,2.8l-2.8,4.5l2.8,1.4l0.4,3l-4.8-3.5l-1.5,2.4l-3.2,0.7l0.5,3l-2.4,2.1l-2.3-1.7v-3.1l-3.4,0.2l-0.2,9.5l-11.7-5 L213.1,265.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Maine-et-Loire" data-numerodepartement="49" class="region-52 departement departement-49 departement-maine-et-loire" d="m270.6,269.2l-12.3,0.8l-10.6-3.8l-0.4-3 l-2.8-1.4l2.8-4.5l-0.8-2.8l-3.6-4.7l-3-0.8l2.9-2.2l14.3-2.1l-0.3-5.9l-8.5-3.3l1.9-2.4l2.7,0.4l-7.2-13.3l0.4-2.2l10.5,3.5 l2.1-1.9l8.7,3.6l3,0.4l5.9-2.7l5.1,1.7l0.6,2.7l6.7-0.2l0.2,3.5l2,2l3.1-1.3l5.2,3.3l7.4,0.1l-0.7,2.4l-1.7,9.3l-5.8,15.3v0.1 l-6.6,5.9l-2.3-2.3l-9.6,0.2l-5.6,0.8L270.6,269.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Mayenne" data-numerodepartement="53" class="region-52 departement departement-53 departement-mayenne" d="m256.6,221.5l-10.5-3.5l3.6-8.6l5.5-2.2 l-1.9-17.3l1.5-2.4l0.1-12.1l8.6,0.8h0.1l3.3,3.7l2.4-1.6l2.5,1.7l6.7-3.3h9.1l0.7-2.7l2.7,0.2l1.9,6l3.3,1.6v2.9v0.1l-4.3,2.7 l0.3,6.9l-4.4,4l1.2,2.9l-5,4.6l1.4,3.4l-5.5,7.7l1.5,5.6l-5.1-1.7l-5.9,2.7l-3-0.4l-8.7-3.6L256.6,221.5z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Sarthe" data-numerodepartement="72" class="region-52 departement departement-72 departement-sarthe" d="m312.7,235.3l-6.1-2.6l-7.4-0.1l-5.2-3.3 l-3.1,1.3l-2-2l-0.2-3.5l-6.7,0.2l-0.6-2.7l-1.5-5.6l5.5-7.7l-1.4-3.4l5-4.6l-1.2-2.9l4.4-4l-0.3-6.9l4.3-2.7l3,0.1l11-5.9l2.8,1.5 l1.6,8.4l7.2,5l2.9-1l3.1,3.5l3.2,0.7l2.1,3.8l-0.4,1.8v0.1l-2,2.1l1.7,2.2l0.4,5.5l-6.3,10.6l-3.2,1.1l-0.6,3.5l-7.7,4.5l-2.8-0.3 L312.7,235.3z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Vendée" data-numerodepartement="85" class="region-52 departement departement-85 departement-vendee" d="m269.3,305.1l0.2-7.4l-4.7-17.9l-4.2-4.1l-2.3-5.7l-10.6-3.8l-4.8-3.5l-1.5,2.4l-3.2,0.7 l0.5,3l-2.4,2.1l-2.3-1.7v-3.1l-3.4,0.2l-0.2,9.5l-11.7-5l-5.6-5.6l-0.3,0.1l-0.8,2.6l-3.4,4.3l-1.2,2.3l0.2,2.4l8.7,9.5l2.7,5.6 l1.2,5.3l8,5.4l3.4,0.5l3.9,4.3l2.9-0.1l2,1.2l1.8,2.5l-0.9-2.1l3.9,3.3l0.5-2.7l2.4,0.3l7.1-2.7l-1.4,2.9l6.5-0.3l2.4,1.8l9.1-4.5 L269.3,305.1z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-53" data-nom="Bretagne" data-code_insee="53">
                    <a href="#a">
                        <path data-nom="Côtes-d’Armor" data-numerodepartement="22" class="region-53 departement departement-22 departement-cotes-darmor" d="m208.7,188.9l-4.9,7.1l-2.9,1.1l-1.5-2.7 l-3.5-0.9l-6.2,7.5l-1.8-6l-3,0.9l-12.9-6.5l-7.9,3l-12.46-3.29l2.06-4.11l-2.5-9.3l2.5-8.3l-3.6-4.7l1.1-4.3l1.2,1.4l3.2-0.4 l1.1-7.7l1.5-1.6l2.2-0.6l1.9,1.4h2.5l2.1-1l2.2,0.3l1.5-1.8l0.9,2L170,153l3-3.6l2.9-0.8l-0.1,2.3l-1.2,4.4l1.7-3.1l2.6-0.5l-1.1,2 l7.2,7.8l2.2,5.4l3,2l0.8,3.7l0.7-2.2l3-1l2.4-2.7l8.1-3.3l2.7-0.2l-2,2.5l2.9-1.1l1.8,4.4l1.3-1.9l2.5,0.2v-0.09l1.6,3.99h-0.3h0.3 l2.5,0.3l0.7,0.2l0.4,1.7l-1.9,13L208.7,188.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Finistère" data-numerodepartement="29" class="region-53 departement departement-29 departement-finistere" d="m151.6,210.1l2,3.4l-0.8,1.4l-5.5-1.2l-1.2-1.9 l2.2-0.7l-3,0.8l-0.3-2.7v2.7l-2.5,0.7l-2.2-1l-4.2-6.1l-0.8,2.5l-2.3,0.2l-3.5-3.1l1.6-4.6l-2.4,4.3l1.3,1.9l-2.2,1l-1,2.8 l-5.9-0.2l-2.1-1.6l1.5-1.6l-1.5-5.5l-2.4-3.1l-2.8-1.8l1.6-1.7l-2.1,1.4l-7.5-2.2l2.2-1.3l12.5-1.8l1.8,1.8l2-1.3l0.7-2.5l-1.6-3.6 l-6.8-2.5l-1.5,2.6l-2.6-4.2l1.3-1.8l-0.3-2.2l1.7,2.3l4.9,1l4.6-0.8l2.1,3.1l5.4,1l-3.7-0.9l-2.8-2l2.2-0.5l-4.2-2l2-1.5l-2.6-0.2 l-2.7,0.8l-0.8-2.2l7.1-4.5l-4.4,2.2l-2.3,0.1l-7.5,2.9l-2.7-1.2l-2.7,1.2l-1.5-1.8l0.6-5.3l2.5-1.6l-2.2-0.9l0.8-2.6l1.8-1.6 l2.1-0.8l5.1,1.5l-1.9-1.1l2.5-1.2l1.6,1.4l-1.9-1.7l1.2-1.9l2.9-0.1l3.8-2l2.3,2.6l6.7-3.1l3,1.6l1-2.2l2.9-0.5l0.4,5l2.2-1.5 l1.3,2.5l1.2-4.5l4.7,0.3l1.2,1.7l-1.1,4.3l3.6,4.7l-2.5,8.3l2.5,9.3l-2.06,4.11l-0.04-0.01v0.1l-6.8,3.2l0.5,3.5l3.4,5.5l8.1,1.3 l0.1,5.4l-2.5,2.8L151.6,210.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Ille-et-Vilaine" data-numerodepartement="35" class="region-53 departement departement-35 departement-ille-et-vilaine" d="m255.2,207.2l-5.5,2.2l-3.6,8.6l-0.4,2.2 l-6.8-3.6l-9,3.9l-1.6,2.9l-13.2,0.4l-5.2,3.4l-1-5.8l3-0.7l-2.8-1.5l2.4-2.2l1-3.2l-2.4-1.7l1.6-2.6l-1.2-2.5l-5.1-2.8l-0.5-2.8 l3.5-0.9l-3.6-0.1l-1-4.4l4.9-7.1l9-2.5l1.9-13l-0.4-1.7l-0.7-0.2l-2.5-0.3l-1.6-3.99l0.05-0.86l0.05-0.85l0.7-0.1h2.1v0.1l1.7,4.4 l1.3,2l-0.5,2.1l1.4-2.1l-2.3-5.1l0.7-2.5l2.2-1.5l2.3-0.6l2.2,1l-1.5,2.3l2.9,2.4l7.3-0.6l4.7,9.6l2.7,1l7.1-4.8l5.4,2.3l-0.1,12.1 l-1.5,2.4L255.2,207.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Morbihan" data-numerodepartement="56" class="region-53 departement departement-56 departement-morbihan" d="M167.7,242.6l2.9,1.2l-1.1,2.1l-5.1-1.2l-1.3-2.7l0.4-3l2.1,1.4L167.7,242.6z M209.1,219.2l2.4-2.2l1-3.2 l-2.4-1.7l1.6-2.6l-1.2-2.5l-5.1-2.8l-0.5-2.8l3.5-0.9l-3.6-0.1l-1-4.4l-2.9,1.1l-1.5-2.7l-3.5-0.9l-6.2,7.5l-1.8-6l-3,0.9 l-12.9-6.5l-7.9,3l-12.46-3.29l-0.04,0.09l-6.8,3.2l0.5,3.5l3.4,5.5l8.1,1.3l0.1,5.4l-2.5,2.8l-2.8-0.8l2,3.4l0.1,1.5l2.9,4.4 l2.3-0.2l1.5-1.7l-0.8-5.1l0.6,2.4l1.7,1.7l1.9-1.7l-2.5,4.2l2.2,1.4l-2.3-0.6l3.2,1.9l0.1,0.1l1.6,1l1.7-2.5l-1.6,3.1l2.1,2.6 l0.6,3.5l-0.9,2.8l2.1,1.1l-1.2-3l0.5-3.8l2.2,1.6l5.1,0.1l-0.7-5l1.4,2l2.1,1.5l4.8-0.5l2.1,2.4l-1,2.2l-2.1-0.6l-4.8,0.4l3.8,3.3 l12.9-0.9l3.1,1.5l-3.4,0.1l1.42,2.39l13.18-3.89l0.4-6l-1-5.8l3-0.7L209.1,219.2z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-75" data-nom="Nouvelle-Aquitaine" data-code_insee="75">
                    <a href="#a">
                        <path data-nom="Charente" data-numerodepartement="16" class="region-75 departement departement-16 departement-charente" d="m294.8,379.2l-2,2v-0.1l-6.3-6.3l-6-1.2l1.7-3l-2.3-2l2.4-1.7l-1.5-2.6 l1.7-2.6l-2.4-1.7l-0.3-3l-5-3.1l2.2-2.1l-3.2-5.6l8.1-3.3l2.3,2l2.7-0.1l2.7-11.6l2.7-1.6l0.3-3l5.8-2.5l3.5,0.4l0.8-0.8h0.1l9.1,3 l2.9-0.8l-1.4-2.4l2.2-1.8l4.1,3.9l3.8-1.4l1.3-2.5l4.8,0.6l-0.2,5.1l4.7,3.6l-0.6,3.2l-2.6,1.1l-4,8l-2.8,0.6l-3.4,3.8h0.1 l-5.7,6.1l-2.1,5.3l-7.9,5.9l-0.7,5.7l-4.1,5.8L294.8,379.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Charente-Maritime" data-numerodepartement="17" class="region-75 departement departement-17 departement-charente-maritime" d="M242.8,341.1l-1.4-5l-3.5-3l-1.3-2.3l1.5-3.6l1.7,1.8l2.9,0.5l1.4,8.4L242.8,341.1z M241.9,318.9l-5.8-4.5 l-4.4-1.5l-0.6,2.9l2.7,0.1l4.8,3.3L241.9,318.9z M286.5,374.8l-6-1.2l1.7-3l-2.3-2l2.4-1.7l-1.5-2.6l1.7-2.6l-2.4-1.7l-0.3-3 l-5-3.1l2.2-2.1l-3.2-5.6l8.1-3.3l2.3,2l2.7-0.1l2.7-11.6l-3.6-4.7l-17.4-6.7l-5.9-6.5v-3.7l-2.4-1.8l-6.5,0.3l1.4-2.9l-7.1,2.7 l0.5,0.1l-0.6,3.4l-4.5,5.9l2.4,0.3l2.2,1.7l3,7.2l-1.5,1.9l-0.2,5.1l-3.3,3.1l-0.1,2.6l-2.2,0.4l-1.5,1.7l1.1,4.3l9,6.5l1.5,2.6 l4.3,2.7l3.7,4.8l1.81,7.3l3.79-0.5l0.7,2.8l6.4,1.7l0.6,5.8l6.1,4.3l9.4,1l2-5l0.1-0.4v-0.1L286.5,374.8z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Corrèze" data-numerodepartement="19" class="region-75 departement departement-19 departement-correze" d="m363.6,392.3l-8.1,0.8l-3.5-7l-3.2-0.7l-0.2-3 l-2.3-1.5l2-1.8l-1.7-3l3.6-4.6l-2.9-4.7l1.6-2.7l2.5,1.2l4.7-4l5.7-1.3l4.9-4.6l8.7-4l7-3.4l11.2,5.2l2.3-2.6l2.7,0.8l2.4-2.4 l1.2,5.6l-1.7,2.4l1.2,7.9l0.7,6l-6.2-2l-0.6,3.5l-7.6,9.5l1.8,2.2l-2.3,1.9l-0.3,3.5l-3.1,1.1l1.5,3.4l-3.2,1.9h-0.1l-6.7-0.2 l-5.3,2.7L363.6,392.3z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Creuse" data-numerodepartement="23" class="region-75 departement departement-23 departement-creuse" d="m396.6,343.5l4.4,5.5l-2.4,2.4l-2.7-0.8 l-2.3,2.6l-11.2-5.2l-7,3.4l-0.6-5.9l-4.7-3l-6.4-0.5l-0.1-2.8l-2.9-1.5l0.9-3.4l-1.8-5.2l-6.6-9.8l3-5.3l-1.2-2.6l2.8-2.9l11.5-1.1 l1.9-2.5l13.2,2.7l2.7-0.8l4.9,0.2l1.1,3.9c2.5,1.6,4.9,3.2,7.4,4.8l3.6,8.4l-0.5,4.1l2.3,6.7L396.6,343.5z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Dordogne" data-numerodepartement="24" class="region-75 departement departement-24 departement-dordogne" d="m307.7,414.3l-2.8-6.4l-1-1.3l0.9-2.9l-2.4-2.6l-2,3.2l-9.8-2.3l2-2 l0.2-5.7l2.8-5.5l-1.2-2.8l-3.7,0.6l2-5l0.1-0.4l2-2l5.5-0.7l4.1-5.8l0.7-5.7l7.9-5.9l2.1-5.3l5.7-6.1l6.2,3l-0.1,4.7l9.5-1.1 l7.2,5.6l-2,2.7l5.7,2.2l2.9,4.7l-3.6,4.6l1.7,3l-2,1.8l2.3,1.5l0.2,3l3.2,0.7l3.5,7l-0.7,5l-1.4,5.3l-4.5,3.2l0.6,3.6l-6,3.4 l-4.7,6.5l-4.2-4.2l-5.4,2.7l-1.5-6l-6.1,1l-2.2-1.8l-2.8,2L307.7,414.3z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Gironde" data-numerodepartement="33" class="region-75 departement departement-33 departement-gironde" d="m243.9,420.1l-5.8,2.6v-4.6l2.2-3.2l0.5-2.3 l1.9-1.7l1.8,1.4l3.1-0.2l-1.1-4.6l-3.5-3.4l-2.8,4l-1.2,3.8l6.2-50l0.9-2.8l3.3-3.4l1.4,4.7l9,9l2.8,7.6l1.7-3.1l-0.59-2.4 l3.79-0.5l0.7,2.8l6.4,1.7l0.6,5.8l6.1,4.3l9.4,1l3.7-0.6l1.2,2.8l-2.8,5.5l-0.2,5.7l-2,2l9.8,2.3l2-3.2l2.4,2.6l-0.9,2.9l1,1.3 l-3.1-0.1l-1.2,2.5l-2.7-0.9l-1.1,3.3l2.9,1.4l-8.5,8.6l-0.6,8.9l-3,2.3l1.5,2.5l-4.5,4l-2.1-2.7l-1.6,3.6h-6.4l-0.6-4.7l-11-7.7 l0.4-2.8l-17.2,0.7l1.5-5.4L243.9,420.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Landes" data-numerodepartement="40" class="region-75 departement departement-40 departement-landes" d="m222.32,481.21l1.08-1.51l3.9-7.1l8.8-37.8 l2-11.7v-0.4l5.8-2.6l3.7,1.3l-1.5,5.4l17.2-0.7l-0.4,2.8l11,7.7l0.6,4.7h6.4l1.6-3.6l2.1,2.7l0.4,4.6l11.7,2.9l-3.6,5.2l0.7,2.6 l-0.4,2.9l-2.5,1.3l-0.6-3l-9.4,2.7l0.5,6.4l-4.2,11.1l1.6,2.7l-8.6,1.5l-3.3-1.1l-4.8,1.9l-2.2-2l-2.3,1.5l-2.5-2.3l-9.8,2 l-1.6,2.2l-2.5-1.4l-2.7,1.3l-1.2-2.8l-11,2.5L222.32,481.21z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Lot-et-Garonne" data-numerodepartement="47" class="region-75 departement departement-47 departement-lot-et-garonne" d="m293.8,455.6v0.1l-0.7-2.6l3.6-5.2L285,445 l-0.4-4.6l4.5-4l-1.5-2.5l3-2.3l0.6-8.9l8.5-8.6l-2.9-1.4l1.1-3.3l2.7,0.9l1.2-2.5l3.1,0.1l2.8,6.4l8.9-0.5l2.8-2l2.2,1.8l6.1-1 l1.5,6l5.4-2.7l4.2,4.2l-3.4,3.1l2.7,9.1l-7.5,2v2.9l2.4,1.4l-4.4,5.5l1.3,2.7l-2.8-0.2l-3.6,4.7l-2.7,1.3l-8.6-1l-5,2.9l-8.3-0.7 l-1.4,2.5L293.8,455.6z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Pyrénées-Atlantiques" data-numerodepartement="64" class="region-75 departement departement-64 departement-pyrenees-atlantiques" d="m276.9,513.4l3.4-0.8l-0.4-2.9l8-9.3l-0.8-3.1 l2.7-1.4l-0.5-7.2h-2.9l1.5-2.8l-2.5-5.8l-6.6-0.3l-8.6,1.5l-3.3-1.1l-4.8,1.9l-2.2-2l-2.3,1.5l-2.5-2.3l-9.8,2l-1.6,2.2l-2.5-1.4 l-2.7,1.3l-1.2-2.8l-11,2.5l-3.98-1.89l-3.52,4.89l-2.7,1.9l-4.5,0.9l1.9,4.5l4.5-0.2l0.2,2.2l2.4,1l2.2-2.1l2.4,1.3l2.5,0.1 l1.4,2.8l-2.5,6.7l-2.1,2.2l1.3,2.2l4.3-0.1l0.7-3.4l2.3-0.1l-1.3,2.4l5.9,2.3l1.5,1.8h2.5l6.1,3.8l5.8,0.4l2.3-1l1.4,2.1l0.3,2.8 l2.7,1.3l3.9,4l2.1,0.9l1.1-2.1l2.7,2.1l3.6-1.1l0.19-0.16l1.41-9.34L276.9,513.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Deux-Sèvres" data-numerodepartement="79" class="region-75 departement departement-79 departement-deux-sevres" d="m292.3,331.6l-2.7,1.6l-3.6-4.7l-17.4-6.7 l-5.9-6.5v-3.7l9.1-4.5l-2.5-2l0.2-7.4l-4.7-17.9l-4.2-4.1l-2.3-5.7l12.3-0.8l3.7-4.8l5.6-0.8l9.6-0.2l2.3,2.3l3.4,9l-0.8,3l2.7,1.2 l-4.5,14.1l2.7-0.9l1.5,3l-3.4,5.5l0.5,5.8l2.1,2l-0.1,2.8l6.4,0.2l-3.2,8.5l4.5,3l-0.8,2.8h-0.1l-0.8,0.8l-3.5-0.4l-5.8,2.5 L292.3,331.6z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Vienne" data-numerodepartement="86" class="region-75 departement departement-86 departement-vienne" d="m329.6,320.8v3.5l-4.8-0.6l-1.3,2.5l-3.8,1.4 l-4.1-3.9l-2.2,1.8l1.4,2.4l-2.9,0.8l-9.1-3l0.8-2.8l-4.5-3l3.2-8.5l-6.4-0.2l0.1-2.8l-2.1-2l-0.5-5.8l3.4-5.5l-1.5-3l-2.7,0.9 l4.5-14.1l-2.7-1.2l0.8-3l-3.4-9l6.6-5.9l5.5,3.2l0.3,3.2l2.9-0.3l1.3,6.1l2.8,1.4l10-0.4l-1.4-2.9l5.3,3l0.3,3.1l7.1,10l2.1,3 l-0.8,5.8l4.6,4.4h2.9l2.6,5.4l2.5,1.3l-1.5,2.8l-0.8-0.3l-1.3,2.4l-3.3-0.9l-1.3,3l-5.6,2.7L329.6,320.8z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haute-Vienne" data-numerodepartement="87" class="region-75 departement departement-87 departement-haute-vienne" d="m348.9,364.1l-1.6,2.7l-5.7-2.2l2-2.7l-7.2-5.6 l-9.5,1.1l0.1-4.7l-6.2-3h-0.1l3.4-3.8l2.8-0.6l4-8l2.6-1.1l0.6-3.2l-4.7-3.6l0.2-5.1v-3.5l3-5l5.6-2.7l1.3-3l3.3,0.9l1.3-2.4 l0.8,0.3l2.6,1.1l5.8-1.1l1.7,2.5l1.2,2.6l-3,5.3l6.6,9.8l1.8,5.2l-0.9,3.4l2.9,1.5l0.1,2.8l6.4,0.5l4.7,3l0.6,5.9l-8.7,4l-4.9,4.6 l-5.7,1.3l-4.7,4L348.9,364.1z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-76" data-nom="Occitanie" data-code_insee="76">
                    <a href="#a">
                        <path data-nom="Ariège" data-numerodepartement="09" class="region-76 departement departement-09 departement-ariege" d="m369.82,543.59l0.78-0.89l-2.6-1.1l-2-2.1 l-3.7-0.1l-1.7-1.7l-2.8,0.4l-1.3,2.1l-2.4-0.8l-2.8-5.9l-10-0.6l-1.3-2.8l-13.2-3.9l-0.5-1.4l3.8-5.2l2.8-1v-5.9l3.9-4l2.8-1.1 l6.2,4.1l-0.4-5.6l5.4-1.6l-3-4.8l2.8-1.1l3.4,5.5l2.8-0.5l0.6-2.8l5.7,2.2l2-2.3l2.2,5.5l8.7,3.9l2.2,5.2l0.2,3.1l-2.2,2.3l2.4,2.5 l-1.2,3l-3.2,0.6l0.8,5.7l3.4,1.5l3.3-1.2l4.8,5.6l-7.4,0.2l-1.3,2.6L369.82,543.59z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Aude" data-numerodepartement="11" class="region-76 departement departement-11 departement-aude" d="m435.07,504.37l-1.47,1.53l-5.2,9.3l-0.9,3.5 l0.15,9.57l-9.45-5.57l-8.2,5.4l-13.6-1l-2.7,1.4l1.4,6l-8.6,3.9l-4.8-5.6l-3.3,1.2l-3.4-1.5l-0.8-5.7l3.2-0.6l1.2-3l-2.4-2.5 l2.2-2.3l-0.2-3.1l-2.2-5.2l-8.7-3.9l-2.2-5.5l8.4-10l1.4,2.7l5.2-1.8l0.5-0.8l1.8,2.3l6.3,0.9l1.1-3.3l2.8-0.5l12,1.4l-0.5,2.8 l3.5,5l2.5-1.6l1.4,2.9l3.1-0.8l3.8-5.3l1,2.9l13.8,4.7l1.7,2L435.07,504.37z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Aveyron" data-numerodepartement="12" class="region-76 departement departement-12 departement-aveyron" d="m430.8,440.7l9.4,4.5l-2,3.9l-2.8,1.1l8.4,4.1 l-4.3,5.3l0.3,1.5l-3.7,1l-3,5.3l-6.3-1.3l-0.1,8.7l-5.7-0.1l-1.3-2.8l-11.1-1.3l-4.2-5l-4.3-11.5l-4.8-4.3L385,444l-6.1,2.8 l-4.3-3.6l2.3-2.4l-3.1-2.7l0.4-3l-0.8-9.1l7.6-5l5.9-1.4l1.7-1.5h0.1l5.1-3.2l6.4,1.5l3.8-4.8l3-9.1l4.7-4.2l5.2,4l1.3,4.2l2.4,1.6 l-0.5,3l2.6,5.1v0.1l4.2,4.5l2.9,8.8l-0.5,8.7L430.8,440.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Gard" data-numerodepartement="30" class="region-76 departement departement-30 departement-gard" d="m480,487.2l-2.8-0.6l-1.9-1.6l-1.1-3.4h-0.1 l3.3-4.4l-1.5-3l-6.1-6.7l-3-0.2l-0.2-3l-6.8-1.4l0.9-2.7l-1.9-2.6l-3.9,0.6l-4.2,3.9l-0.1,2.8l-5.3-2.5l-2.2,1.7l-0.4-2.9l-2.9-0.1 l-0.3-1.5l4.3-5.3l-8.4-4.1l2.8-1.1l2-3.9l7.8,3.4l3.9-0.5l0.1-3.3l8.7,2.2l6.3-1.8l-1.4-3l1.2-2.9l-3.9-7.7l3.6-2.5l1.1-2.1 l2.7,5.9l7.8,5l7.1-4.3l0.1,3.1l2.5-2.3h2.8l6,3.5l2.6,4.4l0.2,5.5l6.3,6.4l-4.5,5l-3.9,4.1l-1.9,10.6l-3.3-0.9l-4.2,4.8l1,2.7 l-5.8,1.8L480,487.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haute-Garonne" data-numerodepartement="31" class="region-76 departement departement-31 departement-haute-garonne" d="m326.8,526.2l-5.5-1.5l-1.2,2.4l0.2,7.6 l-8.8-0.7l-1.7,0.3l-0.6-7l5.5-3.2l2.6-5.3l-0.8-2.7l-3.1,0.3l0.6-3.5l-4.6-4l7.1-11.2l3.1-1.1l3.5-5.3l11.4,2.5l0.7-5.8l6.5-6.1 l-9.1-13.3l9.9-0.9l1.7,2.3l5.8-2.5l-2.2-2.3l11.7-4.3l1.4,6.3l2.6,1.2l0.2,2.8l2.3,2.1l-0.7,5.4l14.3,9.3l1,2.8l-0.5,0.8l-5.2,1.8 l-1.4-2.7l-8.4,10l-2,2.3l-5.7-2.2l-0.6,2.8l-2.8,0.5l-3.4-5.5l-2.8,1.1l3,4.8l-5.4,1.6l0.4,5.6l-6.2-4.1l-2.8,1.1l-3.9,4v5.9 l-2.8,1l-3.8,5.2L326.8,526.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Gers" data-numerodepartement="32" class="region-76 departement departement-32 departement-gers" d="m330.6,461.7l2,6.9l9.1,13.3l-6.5,6.1l-0.7,5.8 l-11.4-2.5l-3.5,5.3l-3.1,1.1l-12.4-2.2l-1.4-3l-5.5,0.6l-2.6-8.7l-3.3-1.3l-2-3.5l-3.9,0.5l-6.6-0.3l-1.6-2.7l4.2-11.1l-0.5-6.4 l9.4-2.7l0.6,3l2.5-1.3l0.4-2.9v-0.1l3.7,0.7l1.4-2.5l8.3,0.7l5-2.9l8.6,1l2.7-1.3l5.3,1.7l-3.3,4.6L330.6,461.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Hérault" data-numerodepartement="34" class="region-76 departement departement-34 departement-herault" d="m474.1,481.6l-2.4-0.1l-5.9,2.6l-3.6,3.2 l-7.2,4.6l-4.3,4.2l2.1-3.5l-4.3,6.6h-6.8l-5.5,4l-1.13,1.17l-0.17-0.17l-1.7-2l-13.8-4.7l-1-2.9l-3.8,5.3l-3.1,0.8l-1.4-2.9 l-2.5,1.6l-3.5-5l0.5-2.8l3.4-2l0.8-3l-0.7-9.7l6.1,2.2c2.3-1.5,4.6-2.9,6.8-4.4l5.7,0.1l0.1-8.7l6.3,1.3l3-5.3l3.7-1l2.9,0.1 l0.4,2.9l2.2-1.7l5.3,2.5l0.1-2.8l4.2-3.9l3.9-0.6l1.9,2.6l-0.9,2.7l6.8,1.4l0.2,3l3,0.2l6.1,6.7l1.5,3L474.1,481.6z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Lot" data-numerodepartement="46" class="region-76 departement departement-46 departement-lot" d="m385.4,413.1l3.3,5h-0.1l-1.7,1.5L381,421 l-7.6,5l0.8,9.1l-6.2,0.8l-7.5,5.5l-2.6-2.3l-8.7,2.5l-0.5-4l-2.4,1.5l-2.7-1l-4.5-4l2.1-2.3l-3.1,0.5l-2.7-9.1l3.4-3.1l4.7-6.5 l6-3.4l-0.6-3.6l4.5-3.2l1.4-5.3l0.7-5l8.1-0.8l6.7,6.1l5.3-2.7l6.7,0.2l1,5.4l3.8,6L385.4,413.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Lozère" data-numerodepartement="48" class="region-76 departement departement-48 departement-lozere" d="m463.4,418.7l4.2,8.3l-1.1,2.1l-3.6,2.5 l3.9,7.7l-1.2,2.9l1.4,3l-6.3,1.8l-8.7-2.2l-0.1,3.3l-3.9,0.5l-7.8-3.4l-9.4-4.5l-1.5-2.4l0.5-8.7l-2.9-8.8l-4.2-4.5v-0.1l6.9-15.9 l1.7,2.3l6.8-5.7l1-1l2.3,1.7l1.5,5.7l6.4,1.2l0.1-2.8l2.9,0.2l9,7.7L463.4,418.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Hautes-Pyrénées" data-numerodepartement="65" class="region-76 departement departement-65 departement-hautes-pyrenees" d="m314.7,524.1l-5.5,3.2l0.6,7l-0.7,0.2l-2.3-1.6 l-2.4,1.8l-2.5-0.5l-1.9-1.7l-3.9-0.3l-6.9,2.1l-2.2-0.9l-2.1-1.7l-1.1-2.5l-7.8-5.5l-2.11,1.84l1.41-9.34l1.6-2.8l3.4-0.8l-0.4-2.9 l8-9.3l-0.8-3.1l2.7-1.4l-0.5-7.2h-2.9l1.5-2.8l-2.5-5.8l3.9-0.5l2,3.5l3.3,1.3l2.6,8.7l5.5-0.6l1.4,3l12.4,2.2l-7.1,11.2l4.6,4 l-0.6,3.5l3.1-0.3l0.8,2.7L314.7,524.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Pyrénées-Orientales" data-numerodepartement="66" class="region-76 departement departement-66 departement-pyrenees-orientales" d="m427.65,528.27l0.25,15.63l3.9,3.3l1.9,3.8 h-2.3l-8.1-2.7l-6.9,3.9l-3-0.2l-2.4,1.1l-0.6,2.4l-2.1,1.2l-2.4-0.7l-2.9,1l-4-3.1l-7-2.9l-2.5,1.4h-3l-1,2.1l-4.6,2l-1.9-1.7 l-1.7-4.8l-7.5-2l-2-2.1l2.02-2.31l7.98-2.39l1.3-2.6l7.4-0.2l8.6-3.9l-1.4-6l2.7-1.4l13.6,1l8.2-5.4L427.65,528.27z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Tarn" data-numerodepartement="81" class="region-76 departement departement-81 departement-tarn" d="m419.7,471.9l1.3,2.8c-2.2,1.5-4.5,2.9-6.8,4.4 l-6.1-2.2l0.7,9.7l-0.8,3l-3.4,2l-12-1.4l-2.8,0.5l-1.1,3.3l-6.3-0.9l-1.8-2.3l-1-2.8l-14.3-9.3l0.7-5.4l-2.3-2.1l-0.2-2.8l-2.6-1.2 l-1.4-6.3l0.5-2.8l4.8-3.2l1-2.7L364,450l3-1.1l2.7,1.1l9.2-3.2l6.1-2.8l10.3,5.8l4.8,4.3l4.3,11.5l4.2,5L419.7,471.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Tarn-et-Garonne" data-numerodepartement="82" class="region-76 departement departement-82 departement-tarn-et-garonne" d="m360,458.1l-0.5,2.8l-11.7,4.3l2.2,2.3 l-5.8,2.5l-1.7-2.3l-9.9,0.9l-2-6.9l-5.1-4.1l3.3-4.6l-5.3-1.7l3.6-4.7l2.8,0.2l-1.3-2.7l4.4-5.5l-2.4-1.4v-2.9l7.5-2l3.1-0.5 l-2.1,2.3l4.5,4l2.7,1l2.4-1.5l0.5,4l8.7-2.5l2.6,2.3l7.5-5.5l6.2-0.8l-0.4,3l3.1,2.7l-2.3,2.4l4.3,3.6l-9.2,3.2l-2.7-1.1l-3,1.1 l1.8,2.2l-1,2.7L360,458.1z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-84" data-nom="Auvergne-Rhône-Alpes" data-code_insee="84">
                    <a href="#a">
                        <path data-nom="Ain" data-numerodepartement="01" class="region-84 departement departement-01 departement-ain" d="m542,347l-5.7,6.7l-11.2-15.2l-2.8,0.7l-3,5.1 l-6-2l-6.4,0.5l-3.7-5.7l-2.8,0.5l-3.1-9.2l1.5-8l5.9-20.9l5.9,1.5l5.4-1.3l4.8,3.3l4.3,7.7h2.9l0.1,3l2.9-0.1l4-4.4l3.4,1.6 l0.4,2.8l3.8-0.2l5.5-3.2l5.3-7.2l4.5,2.7l-1.8,4.7l0.3,2.5l-4.4,1.5l-1.9,2l0.2,2.8l0.46,0.19l-4.36,4.71h-2.9l0.8,9.3L542,347z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Allier" data-numerodepartement="03" class="region-84 departement departement-03 departement-allier" d="m443.1,292.3l5.9-6l6.7,13.5l7.9,2.9l1.6,2.4l-0.5,5.5l-3.7,4.6 l-3.9,1.3l-0.5,3l1.5,12.4l-5.5,4.8l-3.5-4.3l-6.4-0.4l-1.4-3.2l-13.1-0.5l-1.6-2.5l-3.3,0.5l-4.4-4.5l1.2-2.8l-2.3-1.7l-11.2,8 l-2.5-1.2l-3.6-8.4c-2.5-1.6-4.9-3.2-7.4-4.8L392,307v-0.1l3.5-5.9l8.7-1l1.7-2.4l-1.7-5.3l2.3-1.9l8.4-2.9l4.8-3.7h4h0.1l5.7,6.3 l6.4,0.2l2.8-1.7L443.1,292.3z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Ardèche" data-numerodepartement="07" class="region-84 departement departement-07 departement-ardeche" d="m496.5,434.2l0.1,3.7l-6-3.5h-2.8l-2.5,2.3 l-0.1-3.1l-7.1,4.3l-7.8-5l-2.7-5.9l-4.2-8.3l-2.1-9.1l6.7-6.4l5.9-1.9l3.4-5.9l3.4-0.4l-0.7-2.8l2.6-2.3l1.5-5.2l2.6,1.2v-3.1 l0.9-4.1l3.5-0.8l3.2-4.9l5-2.7l2,4.2l0.5,10.3l3.8,11.3l-1.5,6.2l-3.5,4.5l1,7.1l-3,5.9L496.5,434.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Cantal" data-numerodepartement="15" class="region-84 departement departement-15 departement-cantal" d="m435.6,387.9l3.5,8l-1,1l-6.8,5.7l-1.7-2.3 l-6.9,15.9l-2.6-5.1l0.5-3l-2.4-1.6l-1.3-4.2l-5.2-4l-4.7,4.2l-3,9.1l-3.8,4.8l-6.4-1.5l-5.1,3.2l-3.3-5l1.7-5.8l-3.8-6l-1-5.4h0.1 l3.2-1.9l-1.5-3.4l3.1-1.1l0.3-3.5l2.3-1.9l-1.8-2.2l7.6-9.5l0.6-3.5l6.2,2l-0.7-6l7.5,3.5l1.5,2.5l6.7,0.3l6.5,5.4l3.7-4.1v3.9 l5.5,1.5l3.3,8.7l2.6,1.1L435.6,387.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Drôme" data-numerodepartement="26" class="region-84 departement departement-26 departement-drome" d="m535.1,404.4l-3,0.5l-0.8-17.5l-3,1.7l-8.2-1.9 l-2.7,1l1.1-6.3l-3.3-7.8l-4.9-2.7l-9,3.1l0.5,10.3l3.8,11.3l-1.5,6.2l-3.5,4.5l1,7.1l-3,5.9l-2.1,14.4l5.9,0.7l3.5,4.2l8.7-3.9 l2.4,1.4l2.5-2.2l0.5,5.8l9.3,0.9l0.1,2.8l5.2,2.3l4.3-4.8l2.3-0.1l1-0.2l0.2-4.7l-10-5.7l-1.5-2.6l3.2-5.1l4.2,1.4l2.5-2.5l-3-2.3 l2.5-6.7l5.8-0.3l0.3-3.4l-5.9-0.8L535.1,404.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Isère" data-numerodepartement="38" class="region-84 departement departement-38 departement-isere" d="m513.6,349.4l-0.3-7.1l6,2l3-5.1l2.8-0.7 l11.2,15.2l6.5,10.5l6.2,0.2l0.3-2.8l9.4,2.1l2.7,6.3l-2.3,5.5l1,5.4l5.2,1.5l-1.6,3.8l1.8,4.2l4.4,3.1l-0.4,5.8l-3.1-1.1l-12.6,3.9 l-0.9,2.8l-5.5,1.2l-1,3.1l-5.9-0.8l-5.4-4l-3,0.5l-0.8-17.5l-3,1.7l-8.2-1.9l-2.7,1l1.1-6.3l-3.3-7.8l-4.9-2.7l-9,3.1l-2-4.2v-4.4 l-0.2-1.1h0.1l4.4-3.9l-1.9-2.5l2.5-2.5l6.9-1.5L513.6,349.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Loire" data-numerodepartement="42" class="region-84 departement departement-42 departement-loire" d="m499.3,365.9v4.4l-5,2.7l-3.2,4.9l-3.5,0.8 l-2.2-2.4l-2.6,1l-0.7-5.5l-6-2.2l-6.2,3l-2.8,0.4l-2.3-2l-2.8,0.8l3-7.1l-2.7-7.5l-4.6-3.8l-4.7-7.7l2.1-6.3l-2.5-2.7l5.5-4.8 l-1.5-12.4l0.5-3l3.9-1.3v3l5.2,3.3l8-1.5l2.1,2.1l5.7-3.8l0.01-0.09l2.09,2.99l-4.9,3.5l-1.6,8.6l5.2,6.7l-1.7,5.9l2.3,1.6 l-1.3,2.5l1.1,3l4.6,4.1l5.9,2.1l0.9,3l4.6,2.6h-0.1L499.3,365.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haute-Loire" data-numerodepartement="43" class="region-84 departement departement-43 departement-haute-loire" d="m485.4,376.3l2.2,2.4l-0.9,4.1v3.1l-2.6-1.2 l-1.5,5.2l-2.6,2.3l0.7,2.8l-3.4,0.4l-3.4,5.9l-5.9,1.9l-6.7,6.4l-9-7.7l-2.9-0.2l-0.1,2.8l-6.4-1.2l-1.5-5.7l-2.3-1.7l-3.5-8 l3.4-0.2l-2.6-1.1l-3.3-8.7l-5.5-1.5v-3.9v-0.1l9.6-3.2l8.5,0.1l5.2,3.2l11.1-0.7l2.8-0.8l2.3,2l2.8-0.4l6.2-3l6,2.2l0.7,5.5 L485.4,376.3z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Puy-de-Dôme" data-numerodepartement="63" class="region-84 departement departement-63 departement-puy-de-dome" d="m449.1,332.4l3.5,4.3l2.5,2.7l-2.1,6.3l4.7,7.7 l4.6,3.8l2.7,7.5l-3,7.1l-11.1,0.7l-5.2-3.2l-8.5-0.1l-9.6,3.2v0.1l-3.7,4.1l-6.5-5.4l-6.7-0.3l-1.5-2.5l-7.5-3.5l-1.2-7.9l1.7-2.4 L401,349l-4.4-5.5l9.3-8.6l-2.3-6.7l0.5-4.1l2.5,1.2l11.2-8l2.3,1.7l-1.2,2.8l4.4,4.5l3.3-0.5l1.6,2.5l13.1,0.5l1.4,3.2L449.1,332.4z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Rhône" data-numerodepartement="69" class="region-84 departement departement-69 departement-rhone" d="m493.1,312.7l5.7,7.7l-1.5,8l3.1,9.2l2.8-0.5 l3.7,5.7l6.4-0.5l0.3,7.1l-2.5,5l-6.9,1.5l-2.5,2.5l1.9,2.5l-4.4,3.9l-4.6-2.6l-0.9-3l-5.9-2.1l-4.6-4.1l-1.1-3l1.3-2.5l-2.3-1.6 l1.7-5.9l-5.2-6.7l1.6-8.6l4.9-3.5l-2.09-2.99l0.29-2.91l2.3-1.9l2.2,1.7l2.2-1.6l2.5,1.5L493.1,312.7z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Savoie" data-numerodepartement="73" class="region-84 departement departement-73 departement-savoie" d="m603.7,362l-1,10.3l-3.1,1.4l-2.2,0.7l-4.5,3.4 l-1.5,2.4l-2.5-1.4l-5.1,1.3l-2,1.8v0.1l-6.8,1.9l-2,2l-7.7-3.5l-5.2-1.5l-1-5.4l2.3-5.5l-2.7-6.3l-9.4-2.1l-0.3,2.8l-6.2-0.2 l-6.5-10.5l5.7-6.7l2.3-13.6l2.7,6.7l2.7,0.9l1.3,2.5l3,1.7l2.6-1.6l3.2,0.8l4.6,3.6l9.4-13.9l2.4,1.6l-0.6,3l2.3,1.8l6.2,2.3 l2.2-1.5l0.62-0.76l1.88,4.66l2.7,1.1l1.5,1.9l2.8,0.4l-0.7,3l1.3,5.2l5.1,4L603.7,362z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haute-Savoie" data-numerodepartement="74" class="region-84 departement departement-74 departement-haute-savoie" d="m547,340.1l-2.7-6.7l-0.8-9.3h2.9l4.36-4.71 l2.24,0.91l2.3-1l2.3,0.1l3.4-3.5l2.1-1l1-2.3l-2.8-1.3l1.8-5.1l2.4-0.8l2.3,1l3.6-2.9l9.5-1.3l3.2,0.6l-0.5,2.7l4.2,4.1l-2.1,6.4 l-0.6,1.5l4.6,1.7l-0.1,4.8l2-1.4l4.6,6.6l-1.3,5l-2.5,1.7l-4.9,0.9l-0.6,3.7l0.02,0.04l-0.62,0.76l-2.2,1.5l-6.2-2.3l-2.3-1.8 l0.6-3l-2.4-1.6l-9.4,13.9l-4.6-3.6l-3.2-0.8l-2.6,1.6l-3-1.7l-1.3-2.5L547,340.1z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-93" data-nom="Provence-Alpes-Côte d&#39;Azur" data-code_insee="93">
                    <a href="#a">
                        <path data-nom="Alpes-de-Haute-Provence" data-numerodepartement="04" class="region-93 departement departement-04 departement-alpes-de-haute-provence" d="m596.5,409.9l0.57-0.5l-0.37,4.5l-2.2,1.5 l-0.6,2.9l3.5,4l-1.8,4.8l0.19,0.21L589,435.1l-2,5.3l4.3,8.5l7,7.7l-5.2-0.6l-5.2,3.8l1.2,2.6l-3,1.4l-9.8,0.4l-1.2,3.5l-5.9-3.6 l-10.1,8.5l-4-4.8l-2.7,1.8l-5.3-0.2l-6.1-6l-3.4-1.1l1.7-2.5l-3.7-5.2l1.2-3l-2.2-5.4l4.3-4.8l2.3-0.1l1-0.2l5.9-1.4l3.8,1 l-3.4-4.9l3.9,1.1l1.4-8.6l5.3-4l3.3-0.7l3.5,4.5l0.7-3.8l3.8-4.2l11.1,3.3l9-10.2L596.5,409.9z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Hautes-Alpes" data-numerodepartement="05" class="region-93 departement departement-05 departement-hautes-alpes" d="m597.1,409l-0.03,0.4l-0.57,0.5l-6,3.3l-9,10.2 l-11.1-3.3l-3.8,4.2l-0.7,3.8l-3.5-4.5l-3.3,0.7l-5.3,4l-1.4,8.6l-3.9-1.1l3.4,4.9l-3.8-1l-5.9,1.4l0.2-4.7l-10-5.7l-1.5-2.6 l3.2-5.1l4.2,1.4l2.5-2.5l-3-2.3l2.5-6.7l5.8-0.3l0.3-3.4l1-3.1l5.5-1.2l0.9-2.8l12.6-3.9l3.1,1.1l0.4-5.8l-4.4-3.1l-1.8-4.2 l1.6-3.8l7.7,3.5l2-2l6.8-1.9l1.8,4.5l2.4,0.6l1.1,2l0.4,3l1.2,2.2l3,2.3l5.7,0.5l2.2,1.3l-0.7,2.1l3.2,4.7l-3,1.5L597.1,409z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Alpes-Maritimes" data-numerodepartement="06" class="region-93 departement departement-06 departement-alpes-maritimes" d="m605.3,477.1l-3.2-0.1l-1.3,1.8l-0.1,2.2 l-0.42,0.77l-2.18-3.97l0.8-2.9l-5.6-2.6l-1.7-5.6l-5.5-2.9l3-1.4l-1.2-2.6l5.2-3.8l5.2,0.6l-7-7.7l-4.3-8.5l2-5.3l6.79-7.79 l6.91,7.79l6.9,1.6l4.2,2.8l2.5-0.4l1.8,1.4l10.3-2.4l2.7-1.8l-0.3,2.6l1.5,2.2l0.3,3.2l-1.6,1.9l-0.2,2.3l-2.7,1.6l-3.3,5l-0.5,1.6 l1.1,2.7l-1.1,2.7l-3.5,2.9l-2.3,0.5l-0.9,2.4l-3-0.9l-1.5,2.1l-2.3,0.5L609,472l0.1,2.8l-2.4,0.6L605.3,477.1z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Bouches-du-Rhône" data-numerodepartement="13" class="region-93 departement departement-13 departement-bouches-du-rhone" d="m545,500.2l2.5-2l-2.2-6.3l1.1-2.6l2.7-0.5 l-5.5-9.1l2-5.3l3.3-0.8l-1.9-3.8l-0.1-0.1l-6.6,4.3l-3.2,0.2l-12-4.8l-3.5,0.7l-4.5-2.3l-5.5-5.7l-10.4-2.9l-3.9,4.1l-1.9,10.6 l-3.3-0.9l-4.2,4.8l1,2.7l-5.8,1.8l-3.1,4.9l0.2,0.1h13.2l2.2,0.9l1,2.2l-1.6,1.5l2.2,1.4l7.4,0.1l3.2,1.3l1.8-1.7l-1.5-2.8l0.4-2.4 l4.9,1l3,5.3l10-0.8l2.6-1.1l1.8,2l-0.2,2.5l1,2l-1.2,2.2h9.2l1.3,2l2.2-0.8l1.7,0.2L545,500.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Var" data-numerodepartement="83" class="region-93 departement departement-83 departement-var" d="m600.28,481.77l-1.38,2.53l-6.8,1.7l-0.7,2.5 l-5.5,5.7l5,0.7l-2,4.8l-4,0.2l-4.8,2.5l-3.5,1.1l0.1,2.7l-4.9-1.5l-2.7,0.5l-1.6,1.6l-0.4,2.3l-2.2,1.6l1.4-1.8l-2.4-1.7l-2.2,0.7 l-1.6-1.6l-3.1,0.1l0.9,2.2l-2.3-0.4l-1.5,1.7l-3-1.1l0.6-2.3l-6.4-4.1l-0.5-0.1l0.2-2.1l2.5-2l-2.2-6.3l1.1-2.6l2.7-0.5l-5.5-9.1 l2-5.3l3.3-0.8l-1.9-3.8l0.1-0.4l5.3,0.2l2.7-1.8l4,4.8l10.1-8.5l5.9,3.6l1.2-3.5l9.8-0.4l5.5,2.9l1.7,5.6l5.6,2.6l-0.8,2.9 L600.28,481.77z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Vaucluse" data-numerodepartement="84" class="region-93 departement departement-84 departement-vaucluse" d="m541,463.4l6.1,6l-0.1,0.4l-0.1-0.1l-6.6,4.3 l-3.2,0.2l-12-4.8l-3.5,0.7l-4.5-2.3l-5.5-5.7l-10.4-2.9l4.5-5l-6.3-6.4l-0.2-5.5l-2.6-4.4l-0.1-3.7l5.9,0.7l3.5,4.2l8.7-3.9 l2.4,1.4l2.5-2.2l0.5,5.8l9.3,0.9l0.1,2.8l5.2,2.3l2.2,5.4l-1.2,3l3.7,5.2l-1.7,2.5L541,463.4z"></path>
                    </a>
                </g>
            </a>
            <a target="_blank" xlink:href="#a">
                <g class="region region-94" data-nom="Corse" data-code_insee="94">
                    <a href="#a">
                        <path data-nom="Corse-du-Sud" data-numerodepartement="2A" class="region-94 departement departement-2A departement-corse-du-sud" d="m640.5,554.2l3.2-1.7l0.7,8.4l-0.15,0.54 l-1.85,4.86l-2.7,1.9l3.3,0.4l-5.8,14.7l-3.1-1.2l-1.2-2.8l-11.2-3.4l-4.8-4.4l0.2-3l4.9-3.3l-9.5-1.9l2.7-7l-0.9-5.8l-7.3,2.6 l3-8.4l2.6-1.6l-7.9-4.4l-1.1-5.5l5.3-3.8l-3.8-4.2l-2.6,1l0.5-2.7l13.6,2.1l1.2,3.5l6,3.4l6,5.9l0.5,3.2l2.7,1.1l3.7,11 L640.5,554.2z"></path>
                    </a>
                    <a href="#a">
                        <path data-nom="Haute-Corse" data-numerodepartement="2B" class="region-94 departement departement-2B departement-haute-corse" d="m643.7,551.5v1l-3.2,1.7l-3.8-0.5l-3.7-11 l-2.7-1.1l-0.5-3.2l-6-5.9l-6-3.4l-1.2-3.5l-13.6-2.1v-0.2l3.9-5l-0.3-3.4l2.2-2.8l2.8-0.3l0.9-2.9l10.7-4.2l3.5-4.9l8.6,1.3 l-0.5-17.4l2.4-2l2.9,1.1l0.18,0.89l1.52,8.21l-0.5,10.6l4,5.6l3.8,26l-5.4,11.9V551.5L643.7,551.5z"></path>
                    </a>
                </g>
            </a>
        </svg>
    </div>
    <div class="carteSuisse">
        <h2 class="mt-5">Suisse</h2>
        <svg version="1.1" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 640 420" enable-background="new 0 0 640 420" xml:space="preserve">
            <g id="landmarks-switzerland">
                <a href="#a">
                    <path id="OW" data-nom="Obwald" class="departement-obwald" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M334.03,216.98l-5.76-4.83l0.76-1.05l0.87-2.04l-0.23-2.21
            v-2.68l0.64-4.65l0.41-3.31l0.64-3.95l-1.28-0.23l-1.57,0.64l-1.8-0.87l-1.16-0.52l-0.52-1.57l-0.23-0.93l0.76-1.28l1.51-2.85
            l-0.12-1.4l-2.44-0.87l-4.13-0.87l-4.13,1.28l-3.31,1.28l-1.05-0.87l-2.44,0.23l-2.97,2.44l1.4,2.97l-1.8,1.51l-1.51,1.69
            l-0.87,2.04l-1.28,2.56l-1.05-0.29l0.23-1.51l-1.69-1.05l-0.87,1.16l-1.69,1.92l-0.93,0.87l-0.29,4.13l-0.41,1.4l-0.87,1.69
            l-1.4,1.05l-0.76,1.69v1.57l2.68,4.13l0.23,0.93l-1.8,1.57l-0.87,1.69l1.16,0.17l4.54,0.64l1.63,0.47l4.07,3.26l3.61,1.28l3.2-1.34
            l1.74-0.52l3.26-0.12l1.98-0.35l2.73,1.1l2.79,1.8l3.72-2.73l1.98-1.8l2.09-0.87l2.33-0.99L334.03,216.98L334.03,216.98z
             M347.41,204.53h2.5l0.76,0.29l1.22,0.35l0.23,1.51l-2.21,1.16l-1.51,1.57l-0.93,2.62l0.7,0.64l0.52,0.87l-0.29,0.93l-0.7,0.29
            l-1.05-0.06l-0.06,0.64l2.44,0.58l-0.23,1.1l0.87,0.76l0.87,1.4l0.12,0.52l-1.74,1.63l-0.64-0.41l-1.05-0.29l-0.87-0.12l-1.63,0.17
            l-3.31-1.57l-2.38,1.86l-0.87-1.1l1.8-1.51l0.35-0.81v-0.7l-0.7-0.76l-0.93-0.47l-1.45-1.05l-0.81-1.51l-0.99-1.28l-0.52-1.51
            l-0.47-2.56l-0.17-2.27l-0.17-1.98l0.52-0.99h0.99l0.81,0.7l0.06,0.52l-0.81,0.35l0.06,0.58l1.05,0.35l0.93-0.17l1.28-0.76
            l1.05-1.28l1.86,1.86L347.41,204.53L347.41,204.53z"></path>
                </a>
                <a href="#a">
                    <path id="NW" data-nom="Nidwald" class="departement-nidwald" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M347.41,204.53v-3.9l0.93-2.38l-0.41-0.7l-0.41,0.12
            l-0.12-0.87l-1.05,0.06l1.4-1.98l1.4-0.7l2.21-0.81l1.92-1.16l1.28-1.05l0.76-0.35l1.8-1.22l1.4-1.8l2.09-1.51l0.7-0.87l-0.17-1.63
            l0.12-1.4l0.93-1.1l0.81-0.81l-0.17-0.64l-0.35-1.16l-4.19,1.57l-4.48,0.7l-5.35-1.63l-0.29-1.51l-1.05-0.76l-1.51,0.06h-1.69
            l-1.22,0.12h-1.4l-1.69,0.35h-2.04l-0.23-2.5l-1.45,0.06l-1.34,0.76l-1.8,1.74l-1.74-0.7l-1.28,0.81l-0.58-0.58l-1.22,0.17
            l-2.33-0.06l-3.37-1.28l-1.8,0.99l-1.86-0.29l-3.55,1.63l1.16,4.54l4.13-1.28l4.13,0.87l2.44,0.87l0.12,1.4l-1.51,2.85l-0.76,1.28
            l0.23,0.93l0.52,1.57l1.16,0.52l1.8,0.87l1.57-0.64l1.28,0.23l-0.64,3.95l-0.41,3.31l-0.64,4.65v2.68l0.23,2.21l-0.87,2.04
            l-0.76,1.05l5.7,4.83l3.31,2.09l0.81,0.81l1.8-1.51l0.35-0.81v-0.76l-0.7-0.76l-0.93-0.47l-1.45-1.05l-0.81-1.51l-0.99-1.28
            l-0.52-1.51l-0.47-2.56l-0.17-2.27l-0.17-1.98l0.52-0.99h0.99l0.81,0.7l0.06,0.52l-0.81,0.35l0.06,0.58l1.05,0.35l0.93-0.17
            l1.28-0.76l1.05-1.28l1.86,1.86L347.41,204.53L347.41,204.53z"></path>
                </a>
                <a href="#a">
                    <path id="ZG" data-nom="Zoug" class="departement-zoug" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M375.84,145.45l-1.74,1.05l-1.8-0.17l-0.47-0.52l-0.47-1.63
            l-0.52-0.06l-2.09-0.23l-0.76-0.29l-0.47-0.81l-0.06-1.28l-0.35-1.22l-0.29-1.34l-0.06-1.22l-0.76-0.29l-0.81,0.17l-0.58-1.45
            l-1.45,0.23l-0.76-0.99l-0.58-0.58l-2.38,0.17l-1.86-0.17l-1.22,0.47l-1.28,1.1l-1.8,0.7l-2.73,0.17l-1.8,0.17l-2.27-0.7l-0.81-0.7
            l-2.5,0.06l-0.99-2.15l-0.99-1.63l-0.64-1.63l-0.17-0.47l-0.81,1.45l-0.64,1.63l0.99,2.15l0.47,1.34l0.17,2.15v2.27l0.47,1.63
            l0.35,1.63l0.62,1.34l-0.64,1.45l-0.35,2.44l1.63,2.62l1.05,1.57l1.16,0.35l0.87-0.81l0.52-0.17l0.29,0.93l0.17,1.74l1.51-0.81
            l1.63-0.93l0.99-0.23l0.81,2.85l0.52,1.28l0.99,0.35l2.33,0.93l1.45-0.58l1.74-0.17l2.09-0.06l0.47,1.98l1.57,0.06l1.51-0.76
            l1.22-0.93l1.34-0.47l0.81-0.52l2.04,0.52l1.63,0.29l0.7-0.47l0.06-0.76l0.17-1.57l0.76-0.99l1.1-0.81l0.76-1.28l0.47-2.38
            l1.1-2.79l-0.17-0.76L375.84,145.45L375.84,145.45z"></path>
                </a>
                <a href="#a">
                    <path id="LU" data-nom="Lucerne" class="departement-lucerne" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M292.8,217.68l0.87-1.69l1.8-1.57l-0.23-0.93l-2.68-4.13
            v-1.57l0.76-1.69l1.4-1.05l0.87-1.69l0.41-1.4l0.29-4.13l0.93-0.87l1.69-1.92l0.87-1.16l1.69,1.05l-0.23,1.51l1.05,0.29l1.28-2.56
            l0.87-2.04l1.51-1.69l1.8-1.51l-1.4-2.97l2.97-2.44l2.44-0.23l1.05,0.87l3.31-1.28l-1.16-4.54l3.55-1.63l1.86,0.29l1.8-0.99
            l3.37,1.28l2.33,0.06l1.22-0.17l0.58,0.58l1.28-0.81l1.74,0.7l1.8-1.74l1.34-0.76l1.45-0.06l0.23,2.5h2.04l1.69-0.35h1.4l1.22-0.12
            h1.69l1.51-0.06l1.1,0.76l1.05-0.52l1.92,0.23l0.76-0.23l0.64-0.64l-0.12-3.9l-0.93-0.47l-0.93-0.58l-0.93-1.05l-1.74-1.57
            l-0.93-1.16l-0.99-0.29l-0.81,0.17l-1.51,0.06l-1.8-0.35l-2.33-0.52l-1.34-0.93l-0.29-0.35l0.87-0.93l0.81-0.93l0.58-1.45
            l0.06-0.41l2.09-1.92l2.27-2.85l0.99-0.76l1.1-0.7l-0.17-1.74l-0.29-0.93l-0.52,0.17l-0.87,0.81l-1.16-0.35l-1.05-1.57l-1.63-2.68
            l-2.79,0.87l-3.14,0.76l-1.34,0.17l-0.87-1.45l-1.22-2.44l-1.16-2.44l-1.28-3.37l-0.47-2.62l-1.05-3.08l-1.22-3.95l-0.58-2.68
            l-0.12-1.92l-0.41-1.22l-0.41-0.23l-2.5-0.7l-0.58-1.05l-1.98-0.47l-1.28,0.06l-2.62,3.37l-1.45,0.81l-0.58,1.51l-0.47,2.33
            l-0.17,1.4l-0.64,1.28l-1.1,0.87l-1.16,0.17l-1.34-0.41l-1.05-0.87l-0.12-0.76v-0.87l1.45-0.7l-0.17-0.81l-1.05,0.23l-2.97,0.35
            l-3.08,0.23l-1.51-0.35l-0.06-1.69l-0.52-1.28l-0.17-0.35l-0.99-0.17l-1.45-0.35l-1.45,0.47l-0.7,0.52l-0.35,1.28l-0.47,1.34
            l-1.51,0.47l-1.45,0.12l-1.63,0.06h-1.1l0.12-0.7l0.12-2.15v-1.63l-0.41-1.16l-0.87-1.69l-1.05,0.41l-1.74,0.52h-0.81h-1.1
            l-0.76-0.7l-0.76-0.12l-0.06,1.22v5.06l-0.35,0.64l-0.52,0.58l-0.76,0.47l-2.33-0.12l-1.1-0.52l-1.92-0.23l-2.5,0.35l-1.16,0.35
            l-1.16,0.76l-2.44,0.23v0.64l-0.12,1.4l0.64,2.44l1.51,3.2l1.16,1.51l0.99,1.4l0.17,1.05l-0.41,2.97v1.92l1.28,1.92l0.58,1.45
            l-0.58,1.45l-1.1,1.22l-0.52,1.45l0.47,2.15l0.12,1.22l0.06,1.69l-0.17,1.34l-0.23,2.62l-0.64,1.63l1.28,1.22l1.34,1.63l0.52,1.16
            l0.17,1.74l0.47,1.86l1.86-0.23l2.04,0.12l1.4,0.47l0.41,1.74l0.76,2.15l0.12,1.34l-0.87,1.86l-1.22,1.98l-0.47,1.98l-0.64,1.22
            l-1.34,1.4l-2.15-0.23l-1.16,1.1l-1.51,0.81l-1.69,1.34l1.05,0.76l0.58,1.22l-0.06,2.97l-0.7,1.45l-2.04-0.06l0.23,4.19l0.76,2.09
            l0.58,1.22l3.37,2.44l3.2,1.86l3.66,3.08l2.33,2.73l2.09,3.31l1.69-0.81l3.84-1.1L292.8,217.68L292.8,217.68z"></path>
                </a>
                <a href="#a">
                    <path id="AG" data-nom="Argovie" class="departement-argovie" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M340.66,67.47l-0.76,1.22l0.35,0.41l-0.17,2.27l-1.34,3.43
            l-2.38,2.38l-1.98,1.63v2.38l-1.05,1.98l-1.22,3.78l1.05,3.14l0.93,0.76l0.23,0.99l0.29,1.63l0.52,2.91l0.17,0.52l1.28,0.58
            l2.09,1.22l0.35,1.8l-0.47,1.05l-3.55,4.19l0.23,1.28l4.01,2.09l-0.35,1.51l0.29,4.54l0.99,1.22l0.81,0.64l1.57,0.29l1.16-1.63
            l0.58,0.23l-1.05,1.74l-1.05,1.86l-1.4,1.57l-1.4,0.64l-1.92,0.41l0.93,1.4l0.64,1.8l0.35,1.16l0.64,1.8l0.17,1.8l-0.81,1.45
            l-0.64,1.63l0.99,2.15l0.47,1.34l0.17,2.15v2.27l0.47,1.63l0.35,1.63l0.64,1.34l-0.64,1.45l-0.35,2.44l-2.85,0.87l-3.14,0.76
            l-1.34,0.17l-0.87-1.45l-1.22-2.44l-1.16-2.44l-1.28-3.37l-0.47-2.62l-1.05-3.08l-1.22-3.95l-0.58-2.68l-0.12-1.92l-0.41-1.22
            l-0.41-0.23l-2.5-0.7l-0.58-1.05l-1.98-0.47l-1.28,0.06l-2.62,3.37l-1.45,0.81l-0.58,1.51l-0.47,2.33l-0.17,1.4l-0.64,1.28
            l-1.1,0.87l-1.16,0.17l-1.34-0.41l-1.05-0.87l-0.12-0.76v-0.87l1.45-0.7l-0.17-0.81l-1.05,0.23l-2.97,0.35l-3.08,0.23l-1.51-0.35
            l-0.06-1.69l-0.52-1.28l-0.17-0.35l-0.99-0.17l-1.45-0.35l-1.45,0.47l-0.7,0.52l-0.35,1.28l-0.47,1.34l-1.51,0.47l-1.45,0.12h-1.51
            h-1.1l0.12-0.7l0.12-2.15v-1.63l-0.41-1.16l-0.87-1.69l-1.05,0.41l-1.74,0.52h-0.81h-1.1l-0.76-0.7l-0.76-0.12l-0.06,1.22v5.06
            l-0.35,0.64l-0.52,0.58l-0.76,0.47l-2.33-0.12l-1.1-0.52l-1.92-0.23l-2.5,0.35l-1.16,0.35l-1.16,0.76l-2.44,0.17l-0.23-2.04
            l-0.06-3.2l0.47-1.92l0.29-0.64l1.22-1.22l1.34-2.27l0.7-1.34l1.28-1.28l0.47-1.05l1.34-1.16l0.81-1.45l-0.47-2.04l0.52-1.16
            l1.1,0.76l1.1,0.87l1.4,0.52l1.74,0.41l3.37,0.29l2.21,0.17l0.99-0.17l0.76-0.29l0.7-1.05l0.58-2.04l1.1-3.2l1.1-2.21l1.1-2.62
            l-0.23-1.22l-1.63-1.51l-1.4-0.23l-1.05-0.47l-1.16-0.7l-1.92-1.05l-1.1-1.05l1.4-0.81l-0.06-1.51l-0.41-1.74l-0.93-0.23l-0.41-1.4
            l-0.06-1.05l-1.22-0.12l-0.64-0.12l-1.57-1.05l-0.35-2.04l0.12-1.34l-1.69-0.17l-1.4-0.06l-1.1-0.64l-1.4-1.86l-0.64-2.38l-1.8-3.2
            l-1.45-1.98l-1.22-1.51l-0.58-0.7l-0.99-0.64l-0.87-0.06l-0.81,0.52l-0.47,0.81l-0.35,1.4l-0.35,1.16l-0.47,1.4l-1.28,1.22
            l-1.34,0.99l-1.98,0.12l-0.12-1.34l0.17-0.87l-0.41-0.7l-0.87-0.47l-1.92-1.69l-1.69-0.87l-1.69-0.58l-0.17-0.93l1.57-0.29
            l2.15-0.47l1.63-0.64l2.27-0.64l1.63-0.81l1.34-1.45l0.64-1.8l0.47-1.16l0.47-0.47h0.81l1.34,0.64l1.16,0.17l0.99-0.17l0.81-0.35
            l0.81-0.47l1.45-0.17l0.99,0.17l1.16,0.64l0.64,1.16l0.47,1.16l0.35,0.81l0.17,1.16l0.35,1.16l0.64,0.81l1.63,0.64l0.47,0.64
            l1.45-0.35l0.64-0.99l0.81-1.16h1.45l1.98,0.17l1.98,0.17l0.99,0.47l1.34,0.17h2.15l1.34-0.35l0.81-0.64l0.81-0.64l0.64-0.81
            l0.64-0.17l0.81,0.47l0.64,0.47h1.63h0.64l0.47-0.81l0.47-0.99v-1.16v-0.35l0.81-0.99h0.81l1.34-0.35l0.35-0.17l1.45-1.34
            l0.81-0.64h1.45l0.64-0.17l1.34-0.64l0.99-0.47l0.17-0.64l1.8-1.63l0.99-0.64l0.64-0.81l0.99,0.17l0.35,0.64l1.16,0.81l0.64,0.17
            h0.64l1.8-0.35H321l0.99,0.35h1.45l1.34,0.35l0.47,0.81l0.17,1.63l1.45,1.45l1.8,1.8l1.16,0.81l1.98,1.16l2.15,0.35h1.98h1.8
            l0.17-0.64l0.99-0.99h0.64L340.66,67.47L340.66,67.47z"></path>
                </a>
                <a href="#a">
                    <path id="BL" data-nom="Bâle-Campagne" class="departement-bale-campagne" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M208.19,98.17l0.23,1.16l0.64,1.1l3.02,2.73l0.93,1.4
            l1.69,0.29l1.1-0.17l0.12-0.99l0.52-1.16l0.93-0.58l1.86-0.12l2.09,0.06l0.29,1.28l1.98,1.34l1.63-1.34l2.09-0.64l0.29-1.05
            l0.7-1.98l4.42-0.64l0.64-2.27l4.19-0.29l0.12-1.74l0.99-1.69l0.7-2.15l-0.35-1.51l-1.16-1.51l0.12-2.09l2.79-0.12l1.51-0.12
            l1.28-1.45l0.7,0.29l1.16,1.74l2.5,0.41l1.92-0.17l1.69,0.76l-0.29,0.7l-1.28,2.5l-1.05,1.34l-1.45,1.45l-0.29,1.8l-0.12,2.38
            l-0.58,1.45l-1.34,0.7l-1.1,0.52l-2.97,0.17l0.12,2.97l0.35,2.15l0.52,2.38h2.15l3.2-0.17l3.55-0.52l1.34,0.81l0.64,1.34l1.05,1.4
            l1.28,1.16l1.05,0.87l1.45,0.64l1.51,0.23l1.34-0.12v-1.34l0.23-1.4l1.8-1.34l2.79-1.05l2.04-0.87l1.74-1.16l2.15-2.15l1.51-1.86
            l1.63-0.35l2.62,0.29l1.98-0.93l2.38-1.74l0.17-1.51l-0.76-1.22l-0.87-1.1l0.17-1.74l0.58-1.34l0.41-1.34l-1.57-0.99l-0.35-2.04
            l0.12-1.34l-1.69-0.17l-1.4-0.06l-1.1-0.64l-1.4-1.86l-0.64-2.38l-1.8-3.2l-1.45-1.98l-1.22-1.51l-0.58-0.7l-0.99-0.64l-0.87-0.06
            l-0.81,0.52l-0.47,0.81l-0.35,1.4l-0.35,1.16l-0.47,1.4l-1.28,1.22l-1.34,0.99L259.18,81l-0.12-1.34l0.17-0.87l-0.41-0.7
            l-0.87-0.47l-1.92-1.69l-1.69-0.87l-1.69-0.58l-0.23-0.93l-1.8,0.47l-0.99,0.64l-2.15,0.64l-1.63,0.47l-1.45-0.47l-1.63-0.81
            l-0.99-1.16l-1.16-1.45l-0.7-1.63l-1.51,1.16l0.35,2.79l-0.99,0.99l-1.92,0.35l-1.1-1.34l-1.34,0.17l-0.29-2.56l-1.69-0.76
            l-1.63,0.81l-1.63,0.17l-1.86,0.41l-2.09,0.7l-1.57,2.09l0.35,2.56l1.1,1.34v2.21l-1.4,1.98l1.1,0.06l1.22,0.76l0.12,0.93
            l0.12,0.81l-0.87,1.34l-0.47,0.93l-0.7,0.76l-0.7-0.12l-0.81,0.12l-1.1-0.12l-1.74,0.7l-1.22,0.17l-1.16-0.41l-0.81-0.29
            l-0.47-0.87l-0.93,0.76l-0.87,0.87l-1.1,2.33l0.64,0.41l0.99-0.41l0.64,0.7l1.63,1.22l1.51,1.51l0.7,1.34l-0.12,1.4l-0.47,1.1
            l-0.52,0.52l-1.34,0.12l-1.63-0.81l-2.21-0.52L208.19,98.17L208.19,98.17z M207.84,95.15l0.41,3.02l-3.26-0.29l-2.38-2.21
            l0.06-1.63l1.98,0.58l2.44,0.23L207.84,95.15L207.84,95.15z"></path>
                </a>
                <a href="#a">
                    <path id="VS" data-nom="Valais" class="departement-valais" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M336.88,280.37l0.93-3.66l0.06-1.69l-0.12-2.5l1.16,0.29
            h2.27l1.74,0.17l0.93-0.29l0.7-1.34l0.52-1.51l2.15-1.98l0.93-1.98l-1.63-0.29l-1.34-0.7l-1.34-0.76l-0.76-1.1l-0.7-1.57
            l-0.52-1.28l-1.45-2.38l-0.52-1.16l0.99-2.91l1.28-3.31l0.29-6.22l-0.17-1.34l-1.34-0.87l-1.05-0.29l-2.27,2.56l-1.45,1.98
            l-1.34,2.38l-0.7,3.26v3.08l-0.47,1.8l-2.04,1.98l-1.8,1.28l-2.09,1.1l-0.81,1.34l-4.36,2.73l-2.79,0.99l-5.99,1.51l-3.08,0.52
            l-2.09-1.98l-3.72-0.7l-3.43-2.27l-2.62-0.99l-2.27,0.17l-2.91-1.34l-2.15-1.16l-1.8,0.12l-1.63,1.1l-2.27,1.16l-2.56,0.99
            l-0.47,5.82l-4.07,1.98l-1.28,1.74l-3.08,2.56l-3.37,0.52l-5.52,0.29l-7.5,6.51l-8.61,7.09l-2.62-4.01l-4.54-3.26l-3.26-0.64
            l-1.51,1.51l-1.28,2.38l-1.74,2.15l-2.91-0.12h-2.62l-1.34,0.7l-1.1,1.1l2.62,1.74l-0.64,0.99l-1.51,1.63l-2.44,1.16l-2.56,0.81
            l-4.71-1.51l-2.79-0.64l-5,1.34l-3.9,2.91l-2.62,1.8l-2.62,1.63l-1.63-0.64l-0.81-1.28v-3.72l-2.38-0.47l-2.27,1.45l-1.51,1.16
            l-0.47,2.56l-0.7,2.27l-1.74,1.16l-3.43-0.06l-2.44,1.69l-1.63,1.57l1.22,2.68l-1.05,1.86l-1.1,2.15l-2.27,3.31l-2.79,2.56
            l-3.49,3.37l-3.2,2.56l-4.19,2.5l-3.37,2.38l-0.41,0.41l-1.63-3.84l-0.17-1.45l-0.47-3.08l-1.92-2.73l-1.28-1.74l-0.99-0.64
            l-0.99-1.92l-0.64-1.74v-1.92v-1.45l-0.47-1.63l-0.99-2.09l-0.81-1.63l-0.99-1.1l-0.99-2.09l-1.63-1.92l-1.45-0.99l-0.47-1.1
            l-0.81-1.92l-0.35-1.28l-1.1-1.1l-1.1-1.28l-0.64-0.93l-1.92-4.71l-7.85-0.58l0.52,5l0.47,3.2l-0.87,1.45l-1.34,1.34l-2.33,0.76
            l0.47,1.22l1.45,1.86l0.99,2.09l0.76,1.1l0.99,0.23l2.09,1.45l0.87,1.22l0.87,1.1l1.74,0.47l1.1,1.57v2.97l-0.47,2.73l-1.63,2.73
            l-2.44,3.31l-1.74,3.43l0.35,3.08l0.23,3.31l-2.09,1.22l-1.74,2.44l-0.47,1.34l1.22,0.99l1.34,1.57l3.31-0.12l1.74-0.23l1.74-0.23
            l2.44,0.99l2.97,0.76l0.99,1.74l-0.87,1.45l0.35,3.55l-0.23,1.86l-1.22,0.99l-0.35,2.73l0.12,1.74l1.45-0.23l0.87-0.99l0.87-1.74
            l0.35-0.87l2.09-0.12l1.1,0.35l1.1,2.21l1.1,0.35l1.57,2.33l2.09,3.43l2.73,3.31l1.98,3.55l0.64,2.56l-0.87,2.33l1.98,0.47
            l1.98,0.47l0.23,2.85v2.73l1.57,1.74l2.56,3.55l1.34,2.33l1.34,2.21l0.87,2.44l0.47,1.1l0.99-0.12l1.22-2.33l1.45-1.57l2.85-0.23
            l2.44,1.98l1.34,1.74l1.1,0.23v-2.56l0.12-1.63l1.45-1.34h1.63l2.21-0.23l1.34-0.17l1.74-0.35l1.05-1.05l1.4-2.09l0.7-1.57
            l2.62,0.35l2.97,0.64l2.33-0.12l2.56,0.99l2.27,1.05l1.05-0.87l1.05-0.52l1.57-0.35l0.87-1.74l2.27-1.05l2.79-1.57l1.22-0.52
            l-0.35-0.52l0.87-2.62l1.22-0.17l1.22-0.87l1.22-0.52l2.09-0.35h1.57l1.57-1.05l-0.35-1.4l1.05-2.09l0.93-0.23l1.1-0.47l1.86,0.87
            l1.98,2.21l2.21,0.35l3.55-0.64l2.97,0.35l1.74,1.1l0.87,1.1l1.74,1.22l1.98,1.22l0.76,3.08l0.99,0.47l0.64-0.23l2.85-1.34
            l1.86-0.12l2.44,0.76l2.73,2.56l2.33-1.63l2.56,0.47l2.21,0.12l1.57-0.87v-0.64l-0.35-4.42l0.76-2.73l2.33-2.56l2.44-1.63
            l10.06-0.64l1.63-1.45l1.45-3.08l1.22-2.73l1.74-1.45l-1.1-2.09l0.12-4.65l0.76-1.22l2.21-2.09l3.31-1.74l2.56-0.23h2.21l0.35-1.74
            l1.22-2.09l1.86-1.63l1.74-0.47l0.12-0.99l-0.47-2.73l1.86-1.74l-0.35-2.33l-1.34-1.34l-0.87-2.97l-0.23-2.21l-1.86-2.56
            l-2.33-1.98l-3.2-1.63l0.23-2.09l1.74-1.63l2.09-3.2l1.98-1.98l1.86-0.76l2.21,0.23l2.21,0.87l2.33-0.64l2.73-3.43l1.1-1.86v-0.64
            l1.1-0.87l2.21-0.76l1.34-2.21l1.98-1.22l4.42-1.86l0.99-1.98l-0.64-1.74l-1.98-0.47l-1.45-1.34l0.64-2.44l1.1-1.45l2.56-0.64
            l2.85-1.98L336.88,280.37L336.88,280.37z"></path>
                </a>
                <a href="#a">
                    <path id="BE" data-nom="Berne" class="departement-berne" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M188.76,261.35l1.63-2.09l2.79-2.15l2.04-1.1l3.08,0.29
            l2.04-1.22l-1.98-3.08l0.23-4.01l0.23-3.08l0.29-1.57l1.74-1.1l2.15,0.93l0.93-0.23l1.74,0.12l0.29-2.91l-0.12-4.65l-1.57-1.57
            l-2.44-2.15l-1.63-1.05l-2.91-1.05l-1.45-0.81v-1.63l1.1-1.63l0.35-1.28l-1.1-1.45l-0.99-2.38l0.17-1.45l1.63-1.1l0.17-1.45
            l0.17-1.74l0.99-1.63l0.47-1.63l0.99-1.92l1.1-1.45l-0.41-0.29l-1.34-0.81l-1.45-1.63l0.52-1.34l1.1-1.57l0.41,0.93l1.45,1.1
            l0.52,0.81l2.31-2.13l0.35-0.64l-0.81-0.81l-0.17-1.45v-1.45l-1.28-1.28l-1.63-0.47l-1.63,0.35l-0.47,0.81l-1.45-0.64l-0.99-0.47
            l-1.45,0.35l-0.47,0.35l-1.74-0.35l-2.27-1.63l-0.99,0.17l-0.81-0.47l-0.81-1.1l-2.44-0.17l0.64-4.71l-0.23-3.37l-0.93-3.37
            l1.05-1.34l2.38-1.57l-0.41-2.04l-2.04-2.27l-1.34,0.81l-5.23,2.44l-5.64,0.93l-2.56,0.12l-4.01,1.16l-0.41-0.23l-2.27-0.7
            l-3.02-1.57l-3.02-2.85l0.76-1.57l0.76-1.45l0.76-1.63l1.1-1.1l1.45-0.99l1.45-0.87l1.34-0.47l1.34-0.12l1.34-0.23l1.69-0.81
            l0.52-2.79l0.17-2.15l-0.52-1.92l-3.78-2.56l-4.07-2.15l-0.99-0.64l-3.43,0.12l-4.88,0.64l-2.97,1.45l-2.56,1.28l-1.98,0.93
            l-2.09,0.93l-0.35-2.15l1.28-1.63l0.64-2.44l-0.29-3.43l-1.05-2.21l3.37-0.41l1.92-1.22l2.79-2.44l1.57-1.51l3.43,0.35l1.8-0.17
            l0.93-1.45l0.17-1.45l3.43-0.52l2.15-2.91l1.8-4.01l0.35-1.98l4.36,0.93l7.62-0.52l-0.7-3.78l2.15-1.28l-0.17-2.56l0.93-1.98
            l2.15-0.35h2.38l1.8,1.98l3.43,0.7l4.19-0.17l3.61-0.7l3.08-1.63l3.08-2.56l2.15-2.91l0.93,0.35l0.52,2.91l2.56-0.17l5.23,0.52
            l3.08,0.35l3.61,1.28l1.98-1.45l1.8-2.15h3.78l1.05,0.12l-1.34,2.04l-1.16,1.05l-0.87,1.28l-1.34,0.93l-3.55,0.99l-1.69,0.64
            l-1.45,1.22l-0.41,1.69l-0.35,0.64l-0.81,0.29l-2.5,0.52l-2.15,0.29l-0.06,1.8l-2.04,1.74l-2.33,1.4l-3.49,1.57l-3.14,1.28
            l0.52,4.01l0.93,1.1l1.98,0.58l0.76,0.35l0.7,2.79l0.52,0.99l0.99-0.47l0.64-0.64l1.45-0.64l0.99-1.1l0.35-1.28l0.64-0.64
            l1.45,0.17l1.28-0.47l0.99-0.81l1.45-0.81l1.34-0.35l0.17,2.44l0.17,2.38l1.74,2.73l-1.1,2.15l-0.93,0.29l-1.66-0.13l-2.38-0.12
            l-1.16,1.51l-0.87,1.28v1.69l-0.41,1.22l-2.68,0.17l-1.34,0.12l-0.81-0.7l-1.69-0.29l-0.64,0.47l-0.12,1.34l0.58,1.4l0.76,1.69
            l1.34,2.21l0.29,0.41l0.52-0.35l1.74-1.28l1.4-0.76l1.4-0.41l-0.06,1.34l-0.12,1.05l0.76,1.05l1.63-0.12l1.69-0.64l0.99-0.76
            l0.23-1.22l-0.64-0.93l-0.58-1.1l0.29-0.64l2.15-1.05l1.8-1.05l1.74-1.16l1.22-2.33l0.64-2.56l0.29-1.98l1.74-0.52l1.22-0.47
            l1.51,0.29l1.51,0.93l1.28,1.22l3.14,0.58l3.14,0.17l1.74-0.52l2.15-1.8l1.34-1.8l0.06-1.34l-0.23-1.69l-1.34-1.34l-1.45-0.7
            l-1.1-1.1l-0.93-1.4l-1.51-2.97l0.12-0.7l-0.29-1.16l-1.22-0.7l-0.81-0.64l-1.1,0.06l-1.1-0.23v-1.57l-0.52-1.51l0.23-1.34
            l-0.06-0.93l-0.12-1.1l1.4,0.12l4.42,0.47l1.16-0.17l1.74-0.7l1.74-0.58l1.16-0.7l1.98,0.23l0.64,0.76l1.63,2.27l1.05,2.56
            l1.98,0.29l2.04-0.23l2.09-0.99l0.76-0.52l1.05,1.63l1.1-1.05l0.99-0.7l0.7-0.81l0.7-0.23l2.15,0.23l1.57-0.12h1.45l-0.29,0.58
            l-0.47,1.92l0.06,3.2l0.23,2.04v0.64l-0.12,1.4l0.64,2.44l1.51,3.2l1.16,1.51l0.99,1.4l0.17,1.05l-0.41,2.97v1.92l1.28,1.92
            l0.58,1.45l-0.58,1.45l-1.1,1.22l-0.52,1.45l0.47,2.15l0.12,1.22l0.06,1.69v1.16l-0.23,2.62l-0.64,1.63l1.28,1.22l1.34,1.63
            l0.52,1.16l0.17,1.74l0.47,1.86l1.86-0.23l2.04,0.12l1.4,0.47l0.41,1.74l0.76,2.15l0.12,1.34l-0.87,1.86l-1.22,1.98l-0.47,1.98
            l-0.64,1.22l-1.34,1.4l-2.15-0.23l-1.16,1.1l-1.51,0.81l-1.69,1.34l1.05,0.76l0.58,1.22l-0.06,2.97l-0.7,1.45l-2.04-0.06l0.23,4.19
            l0.76,2.09l0.58,1.22l3.37,2.44l3.2,1.86l3.66,3.08l2.33,2.73l2.09,3.31l1.69-0.81l3.84-1.1l2.62-0.41l1.16,0.17l4.54,0.64
            l1.63,0.47l4.07,3.26l3.61,1.28l3.2-1.34l1.74-0.52l3.26-0.12l1.98-0.35l2.73,1.1l2.79,1.8l3.72-2.73l1.98-1.8l2.09-0.87l2.33-0.99
            l0.41-0.64l3.31,2.09l0.81,0.81l0.87,1.1l2.38-1.86l3.31,1.57l-1.22,2.33l-0.12,1.1l0.29,3.08l1.05,1.98l0.7,2.21l0.12,1.74v1.74
            l-0.55,0.94l-1.1,0.7l-1.51-0.17l-1.52-0.53l-1.8-0.29l-1.22-0.12l0.12,1.1l0.35,2.04l0.52,1.4l1.16,1.86l-2.27,2.56l-1.45,1.98
            l-1.34,2.38l-0.7,3.26v3.08l-0.47,1.8l-2.15,1.69l-1.8,1.28l-2.09,1.1l-0.81,1.34l-4.36,2.73l-2.79,0.99l-5.99,1.51l-3.08,0.52
            l-2.09-1.98l-3.72-0.7l-3.43-2.27l-2.62-0.99l-2.27,0.17l-2.91-1.34l-2.15-1.16l-1.8,0.12l-1.63,1.1l-2.27,1.16l-2.56,0.99
            l-0.47,5.82l-4.07,1.98l-1.28,1.74l-3.08,2.56l-3.37,0.52l-5.52,0.29l-7.5,6.51l-8.61,7.09l-2.62-4.01l-4.54-3.26l-3.26-0.64
            l-1.51,1.51l-1.28,2.38l-1.74,2.15l-2.91-0.12h-2.62l-1.34,0.7l-1.1,1.1l2.62,1.74l-0.64,0.99l-1.51,1.63l-2.44,1.16l-2.56,0.81
            l-4.71-1.51l-2.79-0.64l-5,1.34l-3.9,2.91l-2.62,1.8l-2.62,1.63l-1.63-0.64l-0.81-1.28v-3.72l-2.38-0.47l-2.27,1.45l-1.51,1.16
            l-0.47,2.56l-0.7,2.27l-1.74,1.16l-3.43-0.06l0.64-1.69l-0.81-3.72l0.12-1.63l-1.98-1.74v-4.3l1.05-1.86l-0.12-1.98l-1.22-1.74
            l-0.12-2.04l0.7-0.93l2.15-0.29l1.45-1.45v-2.56l-0.29-3.08l1.86-2.38l1.34-1.98l-0.23-3.31l-0.41-3.61L188.76,261.35
            L188.76,261.35z M245.52,147.49l0.76-0.64l0.93-0.52l0.76,0.12l0.87,0.87l-0.06,0.64l-0.52,1.1l-0.81,0.81l-1.28,0.52l-0.81-0.06
            l-0.41-0.58v-1.22L245.52,147.49L245.52,147.49z" class="mapplic-clickable defaultstyle"></path>
                </a>
                <a href="#a">
                    <path id="SO" data-nom="Soleure" class="departement-soleure" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M231.86,116.67l-1.34,2.04l-1.16,1.05l-0.87,1.28l-1.34,0.93
            l-3.55,0.99l-1.69,0.64l-1.45,1.22l-0.41,1.69l-0.35,0.64l-0.81,0.29l-2.5,0.52l-2.15,0.29l-0.06,1.8l-2.04,1.74l-2.33,1.4
            l-3.49,1.57l-3.14,1.28l0.52,4.01l0.93,1.1l1.98,0.58l0.76,0.35l0.7,2.79l0.52,0.99l0.99-0.47l0.64-0.64l1.45-0.64l0.99-1.1
            l0.35-1.28l0.64-0.64l1.45,0.17l1.28-0.47l0.99-0.81l1.45-0.81l1.34-0.35l0.17,2.44l0.17,2.38l1.74,2.73l-1.1,2.15l-0.93,0.29
            l-1.69-0.12l-2.38-0.12l-1.16,1.51l-0.87,1.28v1.69l-0.41,1.22l-2.68,0.17l-1.34,0.12l-0.81-0.7l-1.69-0.29l-0.64,0.47l-0.12,1.34
            l0.58,1.4l0.76,1.69l1.34,2.21l0.29,0.41l0.52-0.35l1.74-1.28l1.4-0.76l1.4-0.41l-0.06,1.34l-0.12,1.05l0.76,1.05l1.63-0.12
            l1.69-0.64l0.99-0.76l0.23-1.22l-0.64-0.93l-0.58-1.1l0.29-0.64l2.15-1.05l1.8-1.05l1.74-1.16l1.22-2.33l0.64-2.56l0.29-1.98
            l1.74-0.52l1.22-0.47l1.51,0.29l1.51,0.93l1.28,1.22l3.14,0.58l3.14,0.17l1.74-0.52l2.15-1.8l1.34-1.8l0.06-1.34l-0.23-1.69
            l-1.34-1.34l-1.45-0.7l-1.1-1.1l-0.93-1.4l-1.51-2.97l0.12-0.7l-0.29-1.16l-1.22-0.7l-0.81-0.64l-1.1,0.06l-1.1-0.23v-1.57
            l-0.52-1.51l0.23-1.34l-0.06-0.93l-0.12-1.1l1.4,0.12l4.42,0.47l1.16-0.17l1.74-0.7l1.74-0.58l1.16-0.7l1.98,0.23l0.64,0.76
            l1.63,2.27l1.05,2.56l1.98,0.29l2.04-0.23l2.09-0.99l0.76-0.52l1.05,1.63l1.1-1.05l0.99-0.7l0.7-0.81l0.7-0.23l2.15,0.23l1.57-0.12
            h1.45l1.28-1.28l1.34-2.27l0.7-1.34l1.28-1.28l0.47-1.05l1.34-1.16l0.81-1.45l-0.47-2.04l0.52-1.16l1.1,0.76l1.1,0.87l1.4,0.52
            l1.74,0.41l3.37,0.29l2.21,0.17l0.99-0.17l0.76-0.29l0.7-1.05l0.58-2.04l1.1-3.2l1.1-2.21l1.1-2.62l-0.23-1.22l-1.63-1.51
            l-1.4-0.23l-1.05-0.47l-1.16-0.7l-1.92-1.05l-1.1-1.05l1.4-0.81l-0.06-1.51l-0.41-1.74l-0.93-0.23l-0.41-1.4l-0.06-1.05l-1.22-0.12
            l-0.64-0.12l-0.41,1.34l-0.58,1.34l-0.17,1.74l0.87,1.1l0.76,1.22l-0.17,1.51l-2.38,1.74l-1.98,0.93l-2.62-0.29l-1.63,0.35
            l-1.51,1.86l-2.15,2.15l-1.74,1.16l-2.04,0.87l-2.79,1.05l-1.8,1.34l-0.23,1.4v1.34l-1.34,0.12l-1.51-0.23l-1.45-0.64l-1.05-0.87
            l-1.28-1.16l-1.05-1.4l-0.64-1.34l-1.34-0.81l-3.55,0.52l-3.2,0.17h-2.15l-0.52-2.38l-0.35-2.15l-0.12-2.97l2.97-0.17l1.1-0.52
            l1.34-0.7l0.58-1.45l0.12-2.38l0.29-1.8l1.45-1.45l1.05-1.34l1.28-2.5l0.29-0.7l-1.69-0.76l-1.92,0.17l-2.5-0.41l-1.16-1.74
            l-0.7-0.29l-1.28,1.45l-1.51,0.12l-2.79,0.12l-0.12,2.09l1.16,1.51l0.35,1.51l-0.7,2.15l-0.99,1.69l-0.12,1.74l-4.19,0.29
            l-0.64,2.27l-4.42,0.64l-0.7,1.98l-0.29,1.05l-2.09,0.64l-1.63,1.34l-1.98-1.34l-0.29-1.28l-2.09-0.06l-1.86,0.12l-0.93,0.58
            l-0.52,1.16l-0.17,0.93l1.69,2.85l3.61,0.81l3.2-0.81l2.56,0.29v2.56l0.23,1.74l0.87,2.09l0.41,0.93l3.95-0.06l-0.23,1.63
             M212.32,92.07l0.64,0.41l0.99-0.41l0.64,0.7l1.63,1.22l1.51,1.51l0.7,1.34l-0.12,1.4l-0.47,1.1l-0.52,0.52l-1.34,0.12l-1.63-0.81
            l-2.21-0.52l-3.95-0.58l-0.35-2.97l0,0l2.15-1.1L212.32,92.07L212.32,92.07z M245.52,147.49l0.76-0.64l0.93-0.52l0.76,0.12
            l0.87,0.87l-0.06,0.64l-0.52,1.1l-0.81,0.81l-1.28,0.52l-0.81-0.06l-0.41-0.58v-1.22L245.52,147.49L245.52,147.49z M223.13,83.34
            l1.16,0.06l1.22,0.76l0.12,0.93l0.12,0.81l-0.87,1.34l-0.47,0.93l-0.7,0.76l-0.7-0.12l-1.28,0.12l-1.1-0.12l-1.74,0.7l-1.22,0.17
            l-1.16-0.41l-0.81-0.29l-0.47-0.81l0.29-0.35l0.99-0.99l-1.45-1.34l-1.34-0.87l-1.1-0.35l1.34-1.63l1.1-0.12l1.1,0.64l1.45,1.45
            l1.22,1.1l2.97-0.76L223.13,83.34L223.13,83.34z"></path>
                </a>
                <a href="#a">
                    <path id="JU" data-nom="Jura" class="departement-jura" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M202.61,93.99l-3.43,0.12l-2.09,0.23l-1.28,0.35l-1.4,0.35
            l-1.51,0.58l-1.16,0.7l-0.76,0.87l-1.92-1.1l-0.99-1.34l-2.44,0.23l-2.44-1.1l-2.33-0.76l-0.76-0.64v-2.44l0.87-1.98l1.22-1.86
            v-1.98l-1.86,0.76l-1.98-0.64l-0.99-1.22l-1.86-1.34h-1.74l-2.09,0.87l-2.33,1.1l-3.43-0.76l-3.08-0.76l-2.09-0.99l-3.08,0.23
            l-1.22,0.76l-0.64,1.1l-0.35,1.57l1.45,2.33l0.87,2.21l-0.64,1.22l-1.74,0.47l-2.09,1.45l-1.1,0.99l-1.45,0.35l-0.76,1.1
            l-0.64,2.73l-0.99,0.47l-1.45,1.22l-0.35,2.33l-1.63,1.45l-0.76,1.86l0.47,2.33l5.41,0.23l2.33,0.12l2.21-0.87l1.86-0.87l2.73-0.76
            l2.73,0.23l1.1,0.99l1.34,1.34l1.45,2.73l-0.87,0.99l-0.12,1.22l-0.76,1.22l-2.56,0.64l-1.34,1.22l-0.76,1.74l-0.29,1.57
            l-1.45,0.87l-1.28,0.47h-1.45l-1.28,0.99l-0.99,0.47l-1.63,0.17l-0.17,0.47v0.64l0.81,0.81v2.44l-0.17,1.92l0.17,1.28l-0.17,0.99
            l-1.1,0.81l-0.99,1.1l-2.56,2.09l-2.38,1.63l-1.92,2.44l-0.81,1.45l-1.28,1.74l-1.28,0.64h-0.99l-0.81,0.81l0.81,0.81l0.81-0.35
            l0.17,0.99v0.99l2.68-0.06l1.45,1.57l3.37-0.41l1.92-1.22l2.79-2.44l1.57-1.51l3.43,0.35l1.8-0.17l0.93-1.45l0.17-1.45l3.43-0.52
            l2.15-2.91l1.8-4.01l0.35-1.98l4.36,0.93l7.62-0.52l-0.7-3.78l2.15-1.28l-0.17-2.56l0.93-1.98l2.15-0.35h2.38l1.8,1.98l3.43,0.7
            l4.19-0.17l3.61-0.7l3.08-1.63l3.08-2.56l2.15-2.91l0.93,0.35l0.52,2.91l2.56-0.17l5.23,0.52l3.08,0.35l3.61,1.28l1.98-1.45
            l1.8-2.15h3.78l1.28,0.17l0.17-1.63l-3.95,0.06l-0.41-0.93l-0.87-2.09l-0.23-1.74v-2.56l-2.56-0.29l-3.2,0.81l-3.61-0.81
            l-1.69-2.79l-1.05,0.17l-1.69-0.29l-0.93-1.4l-3.02-2.73l-0.64-1.1l-0.23-1.22l-3.26-0.29l-2.38-2.21L202.61,93.99L202.61,93.99z"></path>
                </a>
                <a href="#a">
                    <path id="VD" data-nom="Vaud" class="departement-vaud" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M160.85,178.54l3.02,1.51l2.27,0.7l0.47,0.23l-0.52,2.21v3.2
            l0.7,0.93l2.56,4.54l1.63,3.37l-1.74,1.57l-2.15,1.63l-0.29,3.08l-0.93,1.98l-1.74,1.63l-1.05,1.22l-1.1-0.7l0.93-2.38l-0.12-2.85
            l-1.45-1.05l-1.34-1.45l-2.38-1.98l-0.93-2.44l-0.7-2.79l-1.86-0.93l-0.12-0.12l-3.49-2.91l0,0L160.85,178.54L160.85,178.54z
             M127.82,223.73l-1.1,1.86l0.29,1.63l1.34,1.05l1.05-0.93l0.52-2.04l-0.12-1.74L127.82,223.73L127.82,223.73z M134.8,224.77
            l2.27-2.85l1.22-2.15l-0.41-0.93l0.93-0.52l1.34,1.74l1.86,1.86l0.64,0.93l-1.63,3.08l-1.1,1.74l-1.22-0.23l-1.34-1.34
            L134.8,224.77L134.8,224.77z M132.94,225.3l1.57,0.23l1.34,0.93l-1.1,1.63l-1.34,0.64l-0.64-0.93L132.94,225.3L132.94,225.3z
             M54.14,301.07l3.43,1.98l-3.61,7.09l-0.41-0.17l-2.62-1.57l-2.97-1.74l-2.44-1.63h-0.7l1.57-2.73l1.45-2.33l0.12-2.33l-0.87-1.98
            l-3.84-3.95l-3.95-2.85L36.46,287l1.22-2.09l0.47-2.44l-0.23-4.3l1.45-2.56l2.09-3.2l1.74-2.56l1.63-1.74l2.21-1.86l-0.76-3.43
            l-1.22-1.57l-3.31-3.66l1.45-2.09l2.85-2.56l5.93-5.41l7.39-6.75l2.44-2.56l2.56-2.33l2.97-1.22l5.93-3.95l4.3-3.95l0.35-1.57
            l1.1-0.64l2.85-0.64l2.09-1.22l1.74-1.86l1.74-2.44l-0.76-1.86l-1.98-0.99l-0.87-0.99l-0.47-1.22l1.22-0.87l0.23-2.97l0.12-1.34
            l1.22-1.1l1.86-2.21l9.54-1.34l5.38-3.51l3.31-1.57l4.54-1.22l2.15-2.79l3.78-2.44l3.08-2.85l1.86-0.7l1.34,3.2l-0.81,2.38
            l1.86,1.1l0.41,4.19l1.57,1.1l1.45,4.54l0.29,6.45l1.1,0.93l2.38,1.74l-0.93,0.64l2.68,1.98l2.85,1.22l1.22,0.23l1.34-0.7
            l1.34-1.45l1.63,1.05l2.27,0.93h1.74l1.22-1.22l0.64-2.27v-2.27l0.52-1.34l-0.7-0.41l-1.05,0.12l-0.29,1.05l-1.45-0.12l1.05-2.79
            l0.12-1.1l1.34-3.2l1.57-1.34l-1.98-2.97l-1.98,0.81l-0.12-0.64l2.97-1.63l-1.45-1.57l-1.22,0.12l-3.02-2.73l4.48-3.66l3.08,4.36
            l2.79,3.08l2.38,1.98l1.22,0.52v3.08l0.93,2.04l-0.12,3.61l-2.38,1.74l-0.52,2.44l-0.93,3.31l-1.45,1.63l-2.56,2.91l-0.52,1.57
            l1.57,1.34l-0.29,2.15l-4.83,5.99l-3.61,3.9l-0.23,2.68l-0.81,1.57l-1.98,0.12l-0.93-0.81l-1.22-0.12l-1.58,1.11l-2.04,1.98
            l-0.93,0.29v3.61l0.52,3.31v5.12l0.41,1.22l1.86-0.81l1.05-0.41l0.81,1.45l1.98-1.05l1.63-0.29l1.86,1.63l1.86,0.81l1.74,0.41
            l0.87,0.64l-0.52,0.87l-1.74,1.57l-1.05,1.45l-0.7,0.93l-0.93,0.12l-0.52,1.05l0.12,1.57l-2.04-0.64l-1.86-1.74l-2.27-0.12
            l-0.52,1.34l-0.29,1.74l1.74,1.1l0.52,1.1l0.93,1.98l2.04,0.29l2.27-1.22l1.1-1.74l2.27-1.98l0.81,0.29l1.45,1.45l2.56,2.27
            l2.38,1.1l2.68,0.7l0.23,2.15l0.93,4.01l0.7,2.97l-0.41,1.22l2.44-0.81l1.86-1.57l1.74-2.68l1.86-2.56l1.98-1.86l2.15-0.52
            l3.61-0.41l2.15-1.34l2.38-2.56l1.57-2.44l1.98-1.05l1.63-0.93l1.98-1.63l2.15,1.1l3.84-2.04l0.7,2.44l0.41,3.61l0.23,3.31
            l-1.34,1.98l-1.86,2.38l0.29,3.08v2.56l-1.45,1.45l-2.15,0.29l-0.7,0.93l0.12,2.04l1.22,1.74l0.12,1.98l-1.05,1.86v4.3l1.98,1.74
            l-0.12,1.63l0.81,3.72l-0.64,1.69l-2.44,1.74l-1.63,1.57l1.22,2.68l-1.05,1.86l-1.1,2.15l-2.27,3.31l-2.79,2.56l-3.49,3.37
            l-3.2,2.56l-4.19,2.5l-3.37,2.38l-0.41,0.41l-1.63-3.84l-0.17-1.45l-0.47-3.08l-1.92-2.73l-1.28-1.74l-0.99-0.64l-0.99-1.92
            l-0.64-1.74v-1.92v-1.45l-0.47-1.63l-0.99-2.09l-0.81-1.63l-0.99-1.1l-0.99-2.09l-1.63-1.92l-1.45-0.99l-0.47-1.1l-0.81-1.92
            l-0.35-1.28l-1.1-1.1l-1.1-1.28l-0.64-0.93l-1.89-4.69l-7.79-0.64l-19.54-4.3l-19.95,0.99l-21.63,7.73l-10.35,8.49l-4.13-1.8
            l-3.08-1.74l-2.79-0.81l-0.64,2.38l1.45,0.64l2.27,1.05l-0.23,1.86L54.14,301.07"></path>
                </a>
                <a href="#a">
                    <path id="FR" data-nom="Fribourg" class="departement-fribourg" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M150.56,186.8l3.49,2.91l0.12,0.12l1.86,0.93l0.7,2.79
            l0.93,2.44l2.38,1.98l1.34,1.45l1.45,1.05l0.12,2.85l-0.93,2.38l1.1,0.7l1.05-1.22l1.74-1.63l0.93-1.98l0.29-3.08l2.15-1.63
            l1.74-1.57l-1.63-3.37l-2.56-4.54l-0.7-0.93v-3.2l0.52-2.21l4.01-1.16l2.56-0.12l5.64-0.93l5.23-2.44l1.34-0.81l2.04,2.27
            l0.41,2.04l-2.38,1.57l-1.05,1.34l0.93,3.37l0.23,3.37l-0.64,4.71l2.44,0.17l0.81,1.1l0.81,0.47l0.99-0.17l2.27,1.63l1.74,0.35
            l0.47-0.35l1.45-0.35l0.99,0.47l1.45,0.64l0.47-0.81l1.63-0.35l1.63,0.47l1.28,1.28v1.45l0.17,1.45l0.81,0.81l-0.35,0.64
            l-2.27,2.09l-0.52-0.81l-1.45-1.1l-0.41-0.93l-1.1,1.57l-0.52,1.34l1.45,1.63l1.34,0.81l0.41,0.29l-1.1,1.45l-0.99,1.92l-0.47,1.63
            l-0.99,1.63l-0.17,1.74l-0.17,1.45l-1.63,1.1l-0.17,1.45l0.99,2.38l1.1,1.45l-0.35,1.28l-1.1,1.63v1.63l1.45,0.81l2.91,1.05
            l1.63,1.05l2.44,2.15l1.57,1.57l0.12,4.65l-0.29,2.91l-1.74-0.11l-0.93,0.23l-2.15-0.93l-1.74,1.1l-0.29,1.57l-0.23,3.08
            l-0.23,4.01l1.98,3.08l-2.04,1.22l-3.08-0.29l-2.04,1.1l-2.79,2.15l-1.63,2.09l-3.84,2.04l-2.15-1.1l-1.98,1.63l-1.63,0.93
            l-1.98,1.05l-1.57,2.44l-2.38,2.56l-2.15,1.34l-3.61,0.41l-2.15,0.52l-1.98,1.86l-1.86,2.56l-1.74,2.68l-1.86,1.57l-2.44,0.81
            l0.41-1.22l-0.7-2.97l-0.93-4.01l-0.23-2.15l-2.68-0.7l-2.38-1.1l-2.56-2.27l-1.45-1.45l-0.81-0.29l-2.27,1.98l-1.1,1.74
            l-2.27,1.22l-2.04-0.29l-0.93-1.98l-0.52-1.1l-1.74-1.1l0.29-1.74l0.52-1.34l2.27,0.12l1.86,1.74l2.04,0.64l-0.12-1.57l0.52-1.05
            l0.93-0.12l0.7-0.93l1.05-1.45l1.74-1.57l0.52-0.87l-0.87-0.64l-1.76-0.41l-1.86-0.81l-1.86-1.63l-1.63,0.29l-1.98,1.05l-0.81-1.45
            l-1.05,0.41l-1.86,0.81l-0.41-1.22v-5.12l-0.52-3.31v-3.62l0.93-0.29l2.04-1.98l1.57-1.1l1.22,0.12l0.93,0.81l1.98-0.12l0.81-1.57
            l0.23-2.68l3.61-3.9l4.83-5.99l0.29-2.15l-1.57-1.34l0.52-1.57l2.56-2.91l1.45-1.63l0.93-3.31l0.52-2.44l2.38-1.74l0.12-3.61
            l-0.93-2.04v-3.08l-1.22-0.52l-2.38-1.98l-2.79-3.07l-3.14-4.36L150.56,186.8L150.56,186.8z M141.66,194.24l3.02,2.73l1.22-0.12
            l1.45,1.57l-2.97,1.63l0.12,0.64l1.98-0.81l1.98,2.97l-1.57,1.34l-1.34,3.2l-0.12,1.1l-1.05,2.79l1.45,0.12l0.29-1.05l1.05-0.12
            l0.7,0.41l-0.52,1.34v2.27l-0.64,2.27l-1.22,1.22h-1.74l-2.27-0.87l-1.63-1.05l-1.34,1.45l-1.34,0.7l-1.22-0.23l-2.85-1.22
            l-2.68-1.98l0.93-0.64l-2.38-1.74l-1.1-0.93l-0.29-6.51L141.66,194.24L141.66,194.24z M127.82,223.73l-1.1,1.86l0.29,1.63
            l1.34,1.05l1.05-0.93l0.52-2.04l-0.12-1.74L127.82,223.73L127.82,223.73z M132.94,225.3l1.57,0.23l1.34,0.93l-1.1,1.63l-1.34,0.64
            l-0.64-0.93L132.94,225.3L132.94,225.3z M134.8,224.77l2.27-2.85l1.22-2.15l-0.41-0.93l0.93-0.52l1.34,1.74l1.86,1.86l0.64,0.93
            l-1.63,3.08l-1.1,1.74l-1.22-0.23l-1.34-1.34L134.8,224.77L134.8,224.77z"></path>
                </a>
                <a href="#a">
                    <path id="BS" data-nom="Bâle-Ville" class="departement-bale-ville" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M231.86,70.96l1.69,0.76l0.29,2.56l1.34-0.17l1.1,1.34
            l1.92-0.35l0.99-0.99l-0.35-2.79l1.51-1.16l0.93-1.05l0.47-1.22l0.35-0.76l1.22,0.12l1.1-0.87v-0.64l-0.23-0.47l-0.99-0.35
            l-0.12-1.34l1.1-1.1l0.12-0.76l-0.87-0.12l-1.34,0.99l-1.22,0.64l-1.63,0.64l-1.8,0.17l-1.45,0.7l-1.98,2.15l-0.41,2.44
            L231.86,70.96L231.86,70.96z"></path>
                </a>
                <a href="#a">
                    <path id="GE" data-nom="Genève" class="departement-geneve" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M55.54,297.11l4.13,1.8l-2.15,4.07L54.09,301l-1.57-0.64
            l0.23-1.86l-2.27-1.05l-1.45-0.64l0.64-2.38l2.79,0.81L55.54,297.11L55.54,297.11z M45.53,304.96h-0.7l-1.45,1.34l-0.35,3.08
            l-0.76,0.87L41.41,312v1.98l0.99,1.22l0.12,2.09l-0.64,1.22l-1.34,0.64l-2.09,0.76l-2.21,0.35l-1.1,0.35l-1.1,0.99l-1.22,0.12
            l-1.86-0.12l-0.87-0.12l-1.1,0.35l-0.87,0.99l-0.76,1.1l-0.64,0.87l-1.57,0.35l-1.25,1.98l-0.35,1.1l1.1,0.64l1.1,0.35l0.35,0.87
            l-0.1,2.1l-0.76,1.86l-0.87,1.98l-0.23,1.34l2.44-0.12l2.44,0.47l2.44,0.64l1.1-1.86l0.99-0.87l0.87-0.12l1.58,0.46l2.73,0.12
            l2.21,0.47l1.98,0.23l1.34-0.64l1.1-0.99l1.74-0.99l1.57-0.76l1.57-1.1l1.74-1.98l1.45-1.74l1.74-1.98l1.22-1.22l1.98-0.47
            l1.74-0.87l2.09-0.87l1.74-0.87l0.99-1.45l0.87-0.99l-0.12-1.45l-0.12-1.1l-1.1-0.64H63.7l-0.23,0.76l-1.1,0.35h-1.74l-1.1-1.1
            l-1.86-1.34l-1.1-2.33l-2.68-2.97l-0.41-0.17l-2.62-1.57l-2.97-1.74L45.53,304.96L45.53,304.96z"></path>
                </a>
                <a href="#a">
                    <path id="NE" data-nom="Neuchâtel" class="departement-neuchatel" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M168.18,167.2l-1.34,0.23l-1.34,0.12l-1.34,0.47l-1.45,0.87
            l-1.45,0.99l-1.1,1.1l-0.76,1.63l-0.76,1.45l-0.76,1.57l3.02,2.79l-10.29,8.32l-4.48,3.84l-4.42,3.66l-14.19,10.64l-1.45-4.59
            l-1.57-1.1l-0.4-4.19l-1.86-1.1l0.81-2.38l-1.34-3.2l-1.86,0.7l-3.08,2.85l-3.78,2.44l-2.15,2.79l-4.54,1.22l-3.31,1.57l-5.35,3.49
            l-9.54,1.34l0.06-3.95l0.35-3.55l-1.45-1.34l-1.57-2.21l-1.45-1.86l2.21-3.31l3.31-3.66l1.86-1.98l0.99,0.23l1.63-0.64l2.73-0.99
            l3.31-1.22l3.55-1.34l1.57-0.87l3.31-0.12l1.1-0.76l1.74-2.73l1.74-3.43l1.98-1.1l1.45-0.12l1.45-0.64l0.12-1.1l-0.35-1.1
            l-1.45-0.47v-1.1l0.47-1.1h1.98l0.64-0.99l0.47-0.99l0.23-1.74l0.64-0.47l2.21,0.12l1.98-0.47l0.47-1.1l-1.1-2.33l0.52-0.17
            l1.1-0.81l0.81-1.1l0.81-0.47l2.09,0.17l1.74-1.28l2.44-1.63l2.09-1.74l3.37-3.2l2.68-0.06l1.51,1.63l0.99,2.15l0.29,3.43
            l-0.64,2.44l-1.28,1.63l0.35,2.15l2.09-0.93l1.98-0.93l2.56-1.28l2.97-1.45l4.88-0.64l3.43-0.12l0.99,0.64l4.07,2.15l3.78,2.56
            l0.52,1.92l-0.17,2.15l-0.52,2.79L168.18,167.2L168.18,167.2z"></path>
                </a>
                <a href="#a">
                    <path id="GR" data-nom="Grisons" class="departement-grisons" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M400.44,212.15l1.98,0.23l2.21,0.47l0.7,1.63h2.21l2.38-1.05
            l1.8-0.52l4.13-0.81l2.27-0.81l1.51-1.63l0.41-1.8l0.76-2.85l1.16-2.33l0.47-1.8l1.63-0.99l1.69-0.17l1.69,0.81l1.22,1.92
            l0.76,1.34l1.05,0.58l0.99-0.76l1.57-1.34l1.51-1.69l1.1-1.05l1.51-0.47l2.91-0.12l1.4,0.41l0.7-1.98l0.93-1.22l1.57-1.8l1.57-1.63
            l1.8-0.41l2.21,2.38l0.64-0.35l1.05-0.76l1.16-0.17l1.45,0.06l1.63,0.58l2.21,0.52l3.31,0.41l3.78,0.23l2.5,0.58l1.8,0.7l2.85,1.51
            l1.98,0.99l0.41-0.35l0.52-0.87l0.12-1.1l-0.41-1.4l2.04-0.06l-0.06-1.28l-0.58-1.16l0.17-1.74l0.99-2.5l2.21-2.44l2.33-4.01
            l0.7-1.57l1.22-0.58l1.98-1.05l-1.4-1.63l-0.93-1.63l-1.4-3.72l-2.09-3.49l-0.41-1.63l1.57,0.76l2.09-0.06l0.7-0.76l0.7-1.1
            l2.15,0.06l1.57,1.1l0.52,1.05l1.63,0.17l2.15-0.7l0.76-0.7l0.93-0.41l2.15,0.52l2.15,0.23l1.98-0.76l4.71,1.05l3.31,1.92l4.19,0.7
            l3.14,0.35l3.14,1.57l2.09,2.09l2.27,1.05l2.09,0.52l3.66-1.74l0.35,1.92l0.87,1.57l0.52,1.92l-1.05,1.4l-1.05,3.66l0.52,1.4
            l0.17,2.62l-0.17,1.22l0.87,0.87l2.44,1.22l3.49,2.27l2.09,1.22l4.36-0.52l2.44,2.62l2.27,0.35l3.49,2.09l1.74,3.49l1.4,1.57
            l2.62-0.17l1.4,2.44l6.63,0.35l2.97-1.22l2.44-2.27l2.27-1.22l4.19,0.17l0.17-6.11l0.87-1.74l0.35-2.27l1.22-1.22l1.4,0.87
            l1.92,0.35h2.97l1.74-1.22l0.17-2.09l-0.35-1.57l1.22-0.17l1.4-2.09l1.05-2.79l0.52-2.79l2.44-1.05l2.62-0.7l1.22,0.35l3.31,3.66
            l0.06,2.44l1.22,0.17l1.98,1.8l2.44,0.17l1.34,0.81l1.16,1.45l0.35,1.45l0.35,1.63l0.12,0.12l-0.41,0.87l-0.99,0.81l-0.81,1.63
            l-0.64,1.63l-0.47,1.98l-0.17,1.34l0.64,1.45l-0.23,1.92l0.35,1.1l-0.17,1.4l-0.52,2.27l-1.05,1.8l-0.58,1.74l0.06,1.45l-0.93,1.28
            l-1.28,0.87l-1.05,0.93l-0.23,1.28l0.35,1.98l0.93,1.4l1.1,1.8l-0.06,0.87l-1.74,0.93l-2.27,1.4l-1.45,1.28l-0.35,0.93l0.52,1.28
            l1.05,0.76l0.41,1.28l-3.84,3.66l-0.76,0.96l0.23,3.66l0.7,0.93l0.87,3.31l0.52,1.8l1.05,0.7l1.63-0.23l2.79-0.7l2.68,1.05l1.1,1.4
            l1.92,2.09l0.06,4.01l-0.52,3.02l-0.93,1.98l-0.58,2.15l-1.57,2.15l-1.57-0.17l-1.1-0.7l-2.09-0.52l-3.02,0.23l-1.63-0.52
            l-3.55-0.17l-1.63,0.58l-4.36,0.06l-0.35-1.1l-0.7-1.28l-0.76-1.74l-1.63-0.93l-2.44-0.17l-0.93-0.35l-1.05-0.94l0.17-1.57l1.4-1.1
            l-0.06-1.98l-0.23-0.93l-1.22-1.57l-0.58-1.63l-0.23-0.76l-1.57-0.06l-0.52,1.1v0.58l-0.52,0.93h-0.87l-1.45-0.58l-1.28-0.06
            l-1.92,0.52l-0.52,1.22l-1.45,0.41l-0.93,0.93l-2.27,0.7l-0.58,0.35l-1.57-0.35l-1.92,0.35l-0.87,1.92l0.41,2.79l-1.74,0.76
            l-1.28,1.1l-0.52,1.8l-2.67,2.79l-0.35,1.57v2.68l-0.17,2.15l-0.57,0.94l-1.05,1.98l0.41,3.37l0.41,1.4l-0.41,1.4l-0.17,2.5
            l1.28,1.92l1.05,1.98l1.1,0.23l1.63,0.76l1.28-0.17l2.33-0.23l1.63-0.41l1.98-0.76l0.41,1.1l0.58,1.28l1.57,1.74l0.41,1.28
            l-0.35,0.76l-2.27,1.74l-1.63,0.7L562,294.5l-0.06,0.35l-0.47,2.09l-0.64,2.33l-0.76,2.33l0.35,1.98l1.22,2.56l1.74,2.33l1.45,1.22
            l1.74,2.21l1.1,1.98l1.22,2.21l-2.09,2.21l-2.56,3.31l-1.1,0.23l-1.98-0.12l-2.21-0.64l-1.98,0.12l-0.97,1.33l-0.64,0.76
            l-0.76-0.87l-1.22-0.87l0.12-2.21l0.35-3.08l-0.64-2.21l-2.91-1.22l-3.2-1.34l-0.99-0.64l0.23-2.44v-1.86l-0.87-1.1l-0.12-2.44
            l0.87-0.35l-0.22-2.75l-2.21-2.09l-1.1-1.57l-1.1-1.63l-1.22-1.1l-1.45,0.76l-1.57,0.87l-2.09-0.47l-1.98,0.47l-1.74,0.87
            l-1.1,0.64l-1.45,0.64h-3.66l-2.33,0.76l-0.99,1.86l-1.45,0.99l-1.34,0.87l-1.37,0.22l-2.73-1.34l-1.98-1.22l-1.98,1.22l-0.87,1.34
            l-0.23,3.43l0.12,1.86l-0.64,1.74l-1.1,0.87l-0.87-0.35l-2.33-0.47l-2.56,0.99l-2.73,0.76l-1.86,0.23l-1.45-0.47l-2.85-0.12
            l-1.98-1.1l-3.55-1.74l-1.86-1.86l-1.57-2.21l-0.47-1.63l-0.99-2.85l-1.63-1.1l-2.09-1.34l-2.04-1.28l0.47-1.74l0.23-2.85
            l-1.57-3.31l-0.64-2.09v-2.73l0.23-1.98l0.99-2.56l0.64-3.31l-0.12-2.09l-1.1-1.45l-2.85-0.25l-0.99,0.87l-1.57,1.86l-0.23,1.86
            l-0.99,1.45l-0.23,0.64l-1.57-0.35l-0.99-1.1l-2.21-1.86v-1.57l-0.12-1.74l-2.09-0.76l-3.55,0.47l-2.97,0.47l-2.73,1.1l-1.86,1.98
            l0.12,2.09l0.35,3.08l-0.64,1.34l-1.98,1.22l-1.34,1.22l0.12,2.85l4.3,3.84v5.29l0.35,3.43l1.1,1.98l0.23,3.84l-1.45,2.97
            l-2.33,4.77l-2.33,2.85l-0.23,4.19l-0.12,1.34l-1.22,0.64l-1.86,1.45l-0.23,1.34l-1.1,1.74l-0.87,0.76l-1.34,2.33l-0.35,1.98
            l-0.12,1.63l-2.91,0.52l-2.27-2.15l-2.38-3.37l-2.09-1.98l-2.85-2.09l-0.47-2.21l0.47-2.97l-1.1-2.97l-1.74-2.97l-0.76-2.09
            l0.99-1.74l0.99-2.85l-0.12-3.08l0.64-1.74l1.34-1.1l1.22-1.98l-0.64-3.37l0.12-2.5l0.87-2.33l0.35-1.74l-1.63-1.98l-0.47-1.98
            l1.1-2.21l0.29-3.08l-1.92-2.15l-2.04-0.64l-1.28-0.12l-1.92-1.92l-1.4-2.15l-1.57-3.61l-0.23-2.91l0.47-4.19l1.28-0.93l1.74-1.86
            l-0.35-1.22l-0.58-0.35l-2.27-0.52l-1.8-2.33l-1.1-1.1l-2.62,0.76l-2.21-0.23l-0.35-1.4l-0.23-1.86l-0.29-2.73l-0.35-1.86
            l-0.41,0.47l-0.99,0.7l-3.43,0.29l-1.92,1.51l-0.64,1.4l1.16,2.33l0.47,0.99l-0.06,1.51l-1.45,1.4l-1.57,1.1l-1.57,0.7l-2.27,0.41
            l-2.27,0.58h-1.16l-0.87-0.47l-2.21,1.63l-1.98-0.35l-1.92-1.1l-1.34-0.7l-2.68-0.47l-2.09,0.47l-2.09-0.12l-2.38-1.1l-2.27-0.52
            l0.76-3.61l-1.98-2.97l-1.62-2.25v-3.6l1.4-1.98l1.1-0.64l-1.22-2.62l-0.23-1.34l0.99-2.09l1.63-0.99l2.97-0.12l1.98-2.09
            l2.38-1.34l0.87-2.97l0.35-1.51l1.98-0.23l1.1,1.86l2.09,0.12l1.63-1.51l0.52-2.5l1.86-1.86l0.87-2.5l-0.76-2.85l1.22-0.99
            l1.63-0.76l1.64-0.23L400.44,212.15"></path>
                </a>
                <a href="#a">
                    <path id="SG" data-nom="Saint-Gall" class="departement-saint-gall" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M503.55,103.99l-0.35-0.64l-1.16-1.45l-0.47-0.35v-1.16
            l0.35-1.45l-0.17-2.62l-0.99-2.97l0.81-1.8l-0.47-0.81l-0.64-0.81l-1.63-0.35l-1.34-0.99l-0.81-0.64l-0.47,0.17l-0.81,0.35h-0.17
            h-0.81l-0.81-1.16l-0.35-0.47l-0.99-1.8l-1.16-1.16l-0.99-1.16l-0.29-1.1l-4.59-8.72l-6.63-4.01l-6.75,9.36l-0.93,0.76l-1.69,1.57
            l-1.8,0.76l-0.58,1.98l-0.41,1.86l-0.93-0.35l-1.74-0.52l-0.29-1.45l-1.51-2.09l-1.34-0.23l-1.63-1.45l0.17-0.17l0.52-1.1
            l-0.99-0.23l0.7-1.4l-1.57-0.87l-0.64,0.64l-1.51,0.17L454,76.42l-1.28,0.23l-0.7,1.22l-1.22,0.64l-0.64,0.29l-0.12,0.7l1.63,0.35
            l0.93-0.47l1.51-0.12l1.45,1.69l0.52,2.56l0.23,1.22l-1.63,0.7l-2.44,0.29l-2.44,0.93l-1.63,0.7l-1.92-0.17l-2.21-1.51l-1.16-0.7
            l-2.56,0.23l-0.81-0.87l-0.41-1.05l-0.87-0.06l-1.28-0.35l-2.21-1.8l-0.64,1.86l-2.09,1.98l-1.57,0.52l-3.14,0.29l-1.69-0.99
            l-1.1-1.16l-2.62-1.22l-1.69-0.29l-1.63,0.76l-2.27,0.52l-0.99,1.05l-0.06,1.4l1.1,1.92l1.05,0.76l2.27,1.74l0.87,0.58l-0.29,2.38
            l-0.76,1.28h-2.33l-3.02,0.35l-0.64,0.87l-0.52,2.91l-1.16,0.99l-0.64,1.86l-0.35,1.22l-0.7,0.29l-0.81,1.05l-1.1,0.64l0.58,1.4
            l1.51,3.2l1.8,2.85l0.47,3.37l-0.52,2.27l-2.44,0.41l-1.69,1.57l-1.16,1.34l0.35,1.16l0.81-0.23l0.23,0.64l-0.99,2.15l0.06,1.74
            l-3.31,0.87l-2.73,0.93l-1.28,0.93l-0.93,0.52h-1.34l-2.33-0.35l-1.34-0.76l-1.51-0.35l-1.4,0.47l-1.1,1.16l-0.76,1.22l0.29,0.99
            l0.06,2.62l4.83,1.98h7.21l4.54-0.81l3.2-1.16l1.05,1.05l0.93,0.58l0.12,4.65l0.41,1.34l1.45-0.23l1.69,0.41l2.62,2.97l6.4,4.59
            l1.34,0.99l1.98,0.99l2.21-0.64l1.86-0.52l7.39,2.27v1.74l0.12,1.98l0.23,4.48l0.12,1.57l-1.8,2.38l-1.45,0.52l-2.04,0.64
            l-0.58,0.35l-0.17,1.1l0.41,1.16l0.76,0.99l1.51,0.47l3.08,0.17l1.28-0.58l1.22-0.64l1.34-0.41l1.16,0.41l1.57,1.1l0.58,2.91
            l0.76,4.19l0.23,5.99l-1.28,1.51l-0.47,0.52l1.22,1.05l1.05,1.22l0.93,2.09l-0.41,1.92l2.27,2.38l0.64-0.35l1.05-0.76l1.16-0.17
            l1.45,0.06l1.63,0.58l2.21,0.52l3.31,0.41l3.78,0.23l2.5,0.58l1.8,0.7l2.85,1.51l1.98,0.99l0.41-0.35l0.52-0.87l0.12-1.1l-0.41-1.4
            l2.04-0.06l-0.06-1.28l-0.58-1.16l0.17-1.74l0.99-2.5l2.21-2.44l2.33-4.01l0.7-1.57l1.22-0.58l1.98-1.05l-1.4-1.63l-0.93-1.63
            l-1.4-3.72l-2.09-3.49l-0.47-1.63l-1.16-0.93l0.23-1.28l1.34-0.81l1.16-1.8l1.45-1.8l0.47-1.63l0.35-1.45v-1.8l-0.81-2.27
            l-0.64-1.63l-0.81-2.27l-0.99-2.15l-0.17-1.16l-0.47-1.98l-0.35-1.63l-0.35-1.98l-0.17-2.15l0.35-1.16l1.34-1.63l1.16-1.63
            l1.63-2.27l1.16-2.15l0.17-1.45l0.17-1.8l1.16-1.45l1.16-0.47l1.16-1.16l0.64-2.15l0.35-1.16l0.81-0.99l0.99-0.35l1.8-1.98
            l0.81-2.15l1.16-1.98l0.99-2.27l1.16-1.63l0.64-1.16l0.64-1.34l0.81,0.17h1.98l1.16-0.17l1.34-0.81L503.55,103.99L503.55,103.99z
             M472.2,80.67l0.99-1.8l1.28-0.93l1.4,0.52l1.63,1.28l-0.23,0.93l-0.87,1.8l-1.57,1.22l-1.45-0.29l-1.22-1.05L472.2,80.67
            L472.2,80.67z M492.73,96.08l-1.05,0.87l-2.09,0.76l-1.51,1.16l-2.33,0.52l-1.05,1.1l-0.93,0.58l-1.57-0.23l-1.51-0.17l-1.57-0.06
            l-0.64,0.41l-0.7,1.86l-0.93,2.38v1.34l0.76,1.45l0.23,1.34l0.52,2.5l-0.06,2.85l-0.76,4.25l-1.22,3.31l-2.09,2.85l-3.66,3.55
            l-1.63,1.22l-2.56,1.51l-0.87,0.52l-1.98-0.06l-1.69-0.64l-3.61-2.21l-1.57,1.28l-2.38-1.22l-2.91-1.92l-1.45-1.16l-1.4,0.87
            l-1.74,0.29l-1.98-0.29l-1.74-0.87l-1.8-1.1l1.63-3.43l-1.1-0.52l-0.64-3.14l0.23-1.51l1.92-1.51l0.87-0.87l-1.74-1.45l-1.4,1.05
            l-0.47-0.35v-1.45l-1.34-1.4l-0.06-0.93l1.51-0.81l1.51-1.63l0.35-1.74l0.17-1.1l1.74-1.16l1.63-1.63l2.5-0.47l3.14-0.23l3.14-0.81
            l2.04-1.45l2.62-0.47l2.62,0.06h0.93l2.91-0.52l2.21-1.05h1.4l0.81-2.68l2.56-0.52l2.79-0.81l2.91-1.34l1.92-2.09l1.63-1.51
            l2.04,0.06l1.92,1.4l2.38,1.34l2.62,0.87l2.91,1.63l1.22,0.76L492.73,96.08L492.73,96.08z"></path>
                </a>
                <a href="#a">
                    <path id="SZ" data-nom="Schwytz" class="departement-schwytz" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M407.07,192.26l-5.35,2.97l-3.37,1.05l-0.87,0.64l-0.64,1.1
            l-0.93,0.7l-0.41-4.83l-1.63,1.05l-0.58-1.28l0.52-1.92l0.23-1.8l-0.7-1.16l-1.86-0.58l-1.45,0.23l-0.64,0.52l-1.1,0.87l-0.81,0.12
            l-1.16-1.1l-0.64-0.23l-2.09,0.64l-1.51,0.81l-1.92,1.86l-1.16,0.47l-1.45,0.7l-0.87-1.57l0.23-1.4l-0.52-4.13l-3.37,0.87
            l-1.63,0.23l-0.93-0.12l-1.86-0.7l-2.85,0.23l-0.29-3.37l-0.23-3.14l-1.22-1.92l-1.4,0.47l-4.19,1.57l-4.48,0.7l-5.35-1.63
            l-0.29-1.51l1.05-0.52l1.92,0.23l0.76-0.23l0.64-0.64l-0.12-3.9l-0.93-0.47l-0.93-0.58l-0.93-1.05l-1.74-1.57l-0.93-1.16
            l-0.99-0.29l-0.81,0.17l-1.51,0.06l-1.8-0.35l-2.33-0.52l-1.34-0.93l-0.29-0.35l0.87-0.93l0.81-0.93l0.58-1.45l0.06-0.41l2.09-1.92
            l2.27-2.85l0.99-0.76l1.1-0.76l1.51-0.76l1.63-0.93l0.99-0.23l0.81,2.85l0.52,1.28l0.99,0.35l2.33,0.93l1.45-0.58l1.74-0.17
            l2.09-0.06l0.47,1.98l1.57,0.06l1.51-0.76l1.22-0.93l1.34-0.47l0.81-0.52l2.04,0.52l1.63,0.29l0.7-0.47l0.06-0.76l0.17-1.57
            l0.76-0.99l1.1-0.81l0.76-1.28l0.47-2.38l1.1-2.79l-0.17-0.76l-0.47-1.57l-0.29-0.93l-0.7-1.4l0.12-1.1l1.22-0.87l1.22-1.51
            l0.81-1.57l0.47-0.93l1.34-0.17l5.52-1.8l3.9-0.23l4.77,1.98h7.21l4.54-0.81l3.2-1.16l1.05,1.05l0.93,0.58l0.12,4.65l0.41,1.34
            l1.45-0.23l1.69,0.41l-0.52,1.05l-4.13,8.96l1.22,1.28l0.47,1.69l-0.35,0.93l-0.93,0.47l-1.22,1.1l-0.23,0.87l0.81,0.7l1.1,0.23
            l0.87,0.23l-1.28,3.49l-1.63,2.97l-2.5,2.27l-1.51-0.12l-1.1-0.23l-1.1,0.12l0.17,2.85l-0.81,0.64l0.76,0.99l0.81,0.81l0.81,1.51
            l0.35,0.7l0.52-0.17l0.23,0.76l1.28,1.51l0.76,0.76l-0.76,0.93l0.52,0.87l1.4,1.86l1.8,1.63l0.99,0.64l-1.1,0.93l-0.64,1.1
            l-0.12,0.93l0.17,0.76l0.35,0.93l0.41,0.41l-1.45,0.64l-0.47,0.76L407.07,192.26L407.07,192.26z" class="mapplic-clickable defaultstyle"></path>
                </a>
                <a href="#a">
                    <path id="AI" data-nom="Appenzell-Rhodes-Intérieures" class="departement-appenzell-rhodes-interieures" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M458.19,129.05l-0.47-2.79l-1.1-2.68l-1.4-1.16l-1.22-2.5
            l0.64-3.72l0.47-3.43l1.8-2.04l2.38-2.09l1.05-1.63l-0.64-0.87l-0.87-2.09l1.45-0.47l2.04-0.47l2.27,0.93l3.66,1.45l2.97,1.34
            l1.16,2.33l1.63,0.76l1.98-0.06l1.98-0.47l0.52,2.5l-0.06,2.85l-0.76,4.25l-1.22,3.31l-2.09,2.85l-3.66,3.55l-1.63,1.22l-2.56,1.51
            l-0.87,0.52l-1.98-0.06l-1.69-0.64L458.19,129.05L458.19,129.05z M492.73,96.08l-1.74-1.45l-1.98-1.57l-1.63-0.64l-2.21,0.64
            l0.17,1.86l1.63,1.1l1.28,0.87l1.4,0.81l2.09-0.76L492.73,96.08L492.73,96.08z M483.83,101.08l-0.12-1.63L486.5,98l-1.22-1.05
            L484,95.03l-0.64-1.16l-0.93,0.41l-1.63,0.52l-0.76,0.58l-0.7,0.93l1.63,1.1l-0.64,0.81l-1.4,0.7l-0.93,1.16l0.47,1.1l0.64-0.41
            l1.57,0.06l1.51,0.17L483.83,101.08L483.83,101.08z"></path>
                </a>
                <a href="#a">
                    <path id="AR" data-nom="Appenzell-Rhodes-Extérieures" class="departement-appenzell-rhodes-exterieures" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M492.73,96.08l-1.74-1.45l-1.98-1.57l-1.63-0.64l-2.21,0.64
            l0.17,1.86l1.63,1.1l1.28,0.87l1.4,0.81l-1.51,1.16l-2.33,0.52l-1.05,1.1l-0.93,0.58l-0.12-1.63l2.79-1.45l-1.22-1.05L484,95.01
            l-0.64-1.16l-0.93,0.41l-1.63,0.52l-0.76,0.58l-0.7,0.93l1.63,1.1l-0.64,0.81l-1.4,0.7l-0.93,1.16l0.47,1.1l-0.7,1.8l-0.93,2.38
            v1.34l0.76,1.45l0.23,1.34l-1.98,0.47l-1.98,0.06l-1.63-0.76l-1.16-2.33l-2.97-1.34l-3.66-1.45l-2.27-0.93l-2.04,0.47l-1.45,0.47
            l0.87,2.09l0.64,0.87l-1.05,1.63l-2.38,2.09l-1.8,2.04l-0.47,3.43l-0.64,3.72l1.22,2.5l1.4,1.16l1.1,2.68l0.52,2.79l-1.57,1.22
            l-2.38-1.22l-2.91-1.92l-1.45-1.16l-1.4,0.87l-1.74,0.29l-1.98-0.29l-1.74-0.87l-1.8-1.1l1.63-3.43l-1.1-0.52l-0.64-3.14l0.23-1.51
            l1.92-1.51l0.87-0.87l-1.74-1.45l-1.4,1.05l-0.47-0.35v-1.45l-1.34-1.4l-0.06-0.93l1.51-0.81l1.51-1.63l0.35-1.74l0.17-1.1
            l1.74-1.16l1.63-1.63l2.5-0.47l3.14-0.23l3.14-0.81l2.04-1.45l2.62-0.47L462,98h0.93l2.91-0.52l2.21-1.05h1.4l0.81-2.68l2.56-0.52
            l2.79-0.81l2.91-1.34l1.92-2.09l1.63-1.51l2.04,0.06l1.92,1.4l2.38,1.34l2.62,0.87l2.91,1.63l1.22,0.76L492.73,96.08L492.73,96.08z
            "></path>
                </a>
                <a href="#a">
                    <path id="TG" data-nom="Thurgovie" class="departement-thurgovie" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M407.54,52.81l-1.34,0.58l-1.63,0.17l-1.16-0.35l-1.8-1.16
            l-1.63-0.47l-1.45-0.47l-0.99-0.81l-1.16-0.99l-0.81-0.64l-0.64-0.47l-1.34-0.35l-1.34,0.17h-1.63l-1.8-0.47l-1.45-0.64l-0.99-0.81
            l-1.16-0.17l-1.16-0.35l-1.16-0.47l-0.47-0.17l-2.15,0.17l-1.16,0.17l-0.81-0.47l-1.16-0.17l-1.16,0.99l-0.81,0.35l-0.81,0.47
            l-1.22,1.63l-0.23,1.1l0.87,1.98l1.1,1.69l1.05,0.58l1.16,0.64l2.56,0.52l2.44,0.06l1.69-1.1l0.93-0.93l0.58-0.47l0.58-0.87
            l0.35-0.64l0.35,0.12l2.27,0.23v0.52l1.45,0.76l1.8,0.64l1.63,0.47l0.41,0.52l-2.5,4.54l-2.27,3.14l-1.16-0.76l0.06-0.47
            l-2.73-0.47L384.03,60l-0.7,0.58l-0.12,1.05l0.23,0.81l0.52,1.45l1.45-0.47l0.99-0.17l2.62,0.64l0.17,2.5l1.69,1.1l2.21,0.7
            l1.63,1.45l0.76,0.93l-0.17,0.58l-2.09,0.06l0.29,1.51l0.58,1.34l0.93,0.58l1.51-0.06l1.16-0.35l1.4,0.76l2.56,1.16l0.35,2.04
            l-0.64,3.72l-1.05,2.33l-0.35,2.5l1.51,2.85l-0.12,1.69l0.64,1.69l1.05,0.93l0.81,0.64l-1.57,0.58l-0.7,1.92l-1.05,1.63l3.02,0.93
            l1.16,0.7l2.09,0.7l1.22,3.78l1.1-0.64l0.81-1.05l0.7-0.29l0.35-1.22l0.64-1.86l1.16-0.99l0.52-2.91l0.64-0.87l3.02-0.35h2.33
            l0.76-1.28l0.29-2.38l-0.87-0.58l-2.27-1.74l-1.05-0.76l-1.1-1.92l0.06-1.4l0.99-1.05l2.27-0.52l1.63-0.76l1.69,0.29l2.62,1.22
            l1.1,1.16l1.69,0.99l3.14-0.29l1.57-0.52l2.09-1.98l0.64-1.86l2.21,1.8l1.28,0.35l0.87,0.06l0.41,1.05l0.81,0.87l2.56-0.23
            l1.16,0.7l2.21,1.51l1.92,0.17l1.63-0.7l2.44-0.93l2.44-0.29l1.63-0.7l-0.23-1.22l-0.52-2.56l-1.45-1.69l-1.51,0.12L451.47,80
            l-1.63-0.35l0.12-0.7l0.64-0.29l1.22-0.64l0.7-1.22l1.28-0.23l1.69-0.29l1.51-0.17l0.64-0.64l1.57,0.87l-0.7,1.4l0.99,0.23
            l-0.52,1.1l-0.17,0.17l1.63,1.45l1.34,0.23l1.51,2.09l0.29,1.45l1.74,0.52l0.93,0.35l0.41-1.86l0.58-1.98l1.8-0.76l1.69-1.57
            l0.93-0.76l6.75-9.36l-28.67-16.57l-8.37-0.17l-2.62,0.06l-1.98-0.52l-1.63-0.52l-0.35-0.93l-1.22-0.41l-4.07-1.92l-9.42-1.34
            l-3.37,1.22L407.54,52.81L407.54,52.81z M477.55,79.74l-0.23,0.93l-0.87,1.8l-1.57,1.22l-1.45-0.29l-1.22-1.05l0.06-1.69l0.99-1.8
            l1.28-0.93l1.4,0.52L477.55,79.74L477.55,79.74z"></path>
                </a>
                <a href="#a">
                    <path id="ZH" data-nom="Zurich" class="departement-zurich" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M375.84,145.45l-0.29-0.93l-0.7-1.4l0.12-1.1l1.22-0.87
            l1.22-1.51l0.81-1.57l0.47-0.93l1.34-0.17l5.52-1.8l3.9-0.23v-0.06l-0.06-2.5l-0.29-0.99l0.76-1.22l1.1-1.16l1.4-0.47l1.51,0.35
            l1.34,0.76l2.33,0.35h1.34l0.93-0.52l1.28-0.93l2.73-0.93l3.31-0.87l-0.06-1.74l0.99-2.15l-0.23-0.64l-0.81,0.23l-0.35-1.16
            l1.16-1.34l1.69-1.57l2.44-0.41l0.52-2.27l-0.47-3.37l-1.8-2.85l-1.51-3.2l-0.64-1.4l-1.22-3.78l-2.09-0.7l-1.16-0.7l-3.02-0.93
            l1.05-1.63l0.7-1.92l1.57-0.58L403.08,94l-1.05-0.93l-0.64-1.69l0.12-1.69L400,86.84l0.35-2.5l1.05-2.33l0.64-3.72l-0.35-2.04
            l-2.56-1.16l-1.4-0.76l-1.16,0.35l-1.51,0.06l-0.93-0.58l-0.58-1.34l-0.29-1.51l2.09-0.06l0.17-0.58l-0.76-0.93l-1.63-1.45
            l-2.21-0.7l-1.69-1.1l-0.17-2.5l-2.62-0.64l-0.99,0.17L384,63.99l-0.52-1.45l-0.23-0.81l0.12-1.05l0.7-0.58l1.51-0.12l2.73,0.47
            l-0.06,0.47l1.16,0.76l2.27-3.14l2.5-4.54l-0.41-0.52l-1.63-0.47l-1.8-0.64l-1.45-0.76v-0.52l-2.27-0.23l-0.35-0.12l-0.35,0.64
            l-0.58,0.87l-0.58,0.47l-0.93,0.93l-1.69,1.1l-2.44-0.06l-2.56-0.52l-1.16-0.64l-1.05-0.58l-1.1-1.69l-0.87-1.98l0.23-1.1
            l1.22-1.63l-0.35-0.35l-0.99-0.81l-0.81-0.64l-0.64-0.47l-0.81-0.17l-1.34,0.17l-0.99,0.17v0.47l-0.17,1.34l-0.17,0.99l-0.64,0.81
            l-0.17,1.34l0.29,1.51l0.99,0.76l0.35,1.34l-0.17,1.63l-1.16,0.81l-0.64-0.17l-0.47-0.17l-0.17-0.81L366,53.31l-0.47,1.34
            l-0.17,1.16l0.17,1.45l0.35,0.81l0.17,1.45l-0.17,1.63l-0.64,1.16l-1.22,1.16l-1.45,1.8l-0.64,2.15l-1.16,0.64l0.17,1.45
            l-0.35,1.16l-0.64,0.81l-0.64,0.17l-0.47-1.34l-0.47-1.34l-1.16-1.16l-1.16-0.47l-1.34-0.47l-1.45-0.47h-1.34l-1.1-0.17l-0.64,0.81
            l-2.62,0.64l-1.98,0.47l-2.44,0.17l-1.45-0.17l-0.99-0.52l-0.76,1.22l0.35,0.41l-0.17,2.27l-1.34,3.43l-2.38,2.38l-1.98,1.63v2.38
            l-1.05,1.98l-1.22,3.78l1.05,3.14l0.93,0.76l0.23,0.99l0.29,1.63l0.52,2.91l0.17,0.52l1.28,0.58l2.09,1.22l0.35,1.8l-0.47,1.05
            l-3.55,4.19l0.23,1.28l4.01,2.09l-0.35,1.51l0.29,4.54l0.99,1.22l0.81,0.64l1.57,0.29l1.16-1.63l0.58,0.23l-1.05,1.74l-1.05,1.86
            l-1.4,1.57l-1.4,0.64l-1.92,0.41l0.93,1.4l0.64,1.8l0.35,1.16l0.64,1.8l0.17,1.8l0.17,0.52l0.64,1.63l0.99,1.63l0.99,2.15l2.5-0.06
            l0.81,0.7l2.27,0.7l1.8-0.17l2.73-0.17l1.8-0.7l1.28-1.1l1.22-0.47l1.86,0.17l2.38-0.17l0.58,0.58l0.76,0.99l1.45-0.23l0.58,1.45
            l0.81-0.17l0.76,0.29l0.06,1.22l0.29,1.34l0.35,1.22l0.06,1.28l0.47,0.81l0.76,0.29l2.09,0.23l0.52,0.06l0.47,1.63l0.47,0.52
            l1.8,0.17L375.84,145.45"></path>
                </a>
                <a href="#a">
                    <path id="SH" data-nom="Schaffhouse" class="departement-schaffhouse" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M363.98,63.22l-1.4,1.74l-0.64,2.15l-1.16,0.64l0.17,1.45
            l-0.35,1.16l-0.64,0.81l-0.64,0.17L358.85,70l-0.47-1.34l-1.16-1.16l-1.16-0.47l-1.34-0.47l-1.45-0.47h-1.34l-1.1-0.17l0.35-1.34
            l-1.57,0.23l-1.74-0.47l-0.64-0.76l0.35-1.34l0.23-1.1l0.64-1.34l1.34-0.87l1.1-0.64l1.57-0.87l1.98-0.99l1.57-0.12l0.87,0.76
            l1.22,0.87l1.1,0.35l1.22,0.64l0.64,0.99l0.35,0.99l-0.47,0.87l0.47,0.76l1.1,0.47l0.87,0.12L363.98,63.22L363.98,63.22z
             M373.98,45.89l-0.87-0.7l-0.81-0.64l-0.64-0.47l-0.81-0.17l-1.34,0.17l-0.99,0.17v0.47l-0.17,1.34l-0.17,0.99l-0.64,0.81
            l-0.17,1.34l0.29,1.51l-0.81-0.87l-0.47-0.47l-0.93-0.58l-0.87-0.29l-0.64,0.17l-0.87,0.41l-1.57-0.06l-2.04-0.06l-0.93,0.23
            l-0.23,0.47l-0.81,0.41l-0.52,0.58L356.04,51l-0.35,1.22l0.35,0.52l-0.17,0.23l-3.72-0.06l-1.92,0.41l-0.41,0.58l-0.23,0.41
            l-0.58-0.17l-0.17-0.58l0.17-0.87l-0.17-1.22l-0.58-0.35h-1.45h-1.8l-0.93-0.87l-1.1-0.87l-1.05-0.23l0.17-1.4l0.76-1.57l0.17-1.05
            l-0.52-1.63l0.7-1.4l1.28-1.22l1.22-1.1l1.05-1.05l0.7-1.22l0.35-1.28l0.58-1.4l0.52-1.28l0.81-1.05l0.93-0.87l1.1-0.87l1.4-0.7
            l1.57-0.35h1.1l0.93-0.23l1.05-0.7l1.05-0.52l1.57,0.35l1.1-0.06l0.76-0.76l-0.17-1.1l-0.35-0.93l-0.58-0.52l0.17-1.1l0.93-0.23
            h1.63l1.98,0.52l0.93,0.41l1.92,0.76l-0.23,0.93l-0.06,0.87l0.06,1.22l0.41,0.99l0.52,1.4l0.87,0.76l1.22,0.23l0.52-0.58l0.76-1.45
            l-0.7-2.44l-0.17-1.22l0.17-0.87l1.22,1.05l1.1,1.05l0.93,0.87l0.7,0.7l0.23,0.7v1.05l-0.17,1.74l0.17,0.7l1.1-0.06l0.41-0.58
            l1.1-0.52l1.1-0.06l1.45,0.7l0.52,1.57l-0.52,0.41l-0.93,1.4L380,37.44l0.23,1.28l1.1,0.93l0.76,1.1l-0.17,1.22l-0.93,0.17
            l-0.87-0.17l-0.7-0.87l-0.58-0.41l-1.63-0.17l-1.22,0.12l-1.1,0.17l-0.52,0.52l-0.58,0.87l0.17,0.93l-0.23,1.1l-0.17,0.93
            L373.98,45.89L373.98,45.89z M401.6,52.06l-1.63-0.47l-1.45-0.47l-0.99-0.81l-1.16-0.99l-0.81-0.64l-0.64-0.47l-1.34-0.35
            l-1.34,0.17h-1.63l0.52-1.05l0.35-0.93l0.58-1.1l0.23-0.87l-0.58-0.7l-0.87-0.52l-1.05-0.17l-0.87-0.35l-0.52-0.7l0.23-0.7
            l-0.06-0.87l0.76-0.58l0.87-0.7l0.7-0.41l0.58-0.17l0.87,0.17l0.06,0.41l0.41,0.93l0.58,0.23l1.05,0.52l1.45,0.52l0.7,0.17
            l1.4,0.41l1.22,0.93l0.93,0.52l0.23,0.87l-0.41,0.35l-0.7,0.17l-0.76-0.17l-0.7,0.7v1.05l1.1,1.28l0.7,1.57l0.35,0.52l0.76,0.87
            l0.52,0.87L401.6,52.06L401.6,52.06z"></path>
                </a>
                <a href="#a">
                    <path id="GL" data-nom="Glaris" class="departement-glaris" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M414.86,142.78l2.62,2.97l6.4,4.59l1.34,0.99l1.98,0.99
            l2.21-0.64l1.86-0.52l7.39,2.27v1.74l0.12,1.98l0.23,4.48l0.12,1.57l-1.8,2.38l-1.45,0.52l-2.04,0.64l-0.58,0.35l-0.17,1.1
            l0.41,1.16l0.76,0.99l1.51,0.47l3.08,0.17l1.28-0.58l1.22-0.64l1.34-0.41l1.16,0.41l1.57,1.1l0.58,2.91l0.76,4.19l0.23,5.99
            l-1.28,1.51l-0.47,0.52l1.22,1.05l1.05,1.22l0.93,2.09l-0.41,1.92l-1.8,0.41l-1.57,1.63l-1.57,1.8l-0.93,1.22l-0.7,1.98l-1.4-0.41
            l-2.91,0.12l-1.51,0.47l-1.1,1.05l-1.51,1.69l-1.57,1.34l-0.99,0.76l-1.05-0.58l-0.76-1.34l-1.22-1.92l-1.69-0.81l-1.69,0.17
            l-1.63,0.99l-0.47,1.8l-1.16,2.33l-0.76,2.85l-0.41,1.8l-1.51,1.63l-2.27,0.81l-4.13,0.81l-1.8,0.52l-2.38,1.05h-2.21l-0.7-1.63
            l-2.21-0.47l-1.98-0.23l-0.47-2.15l-0.87-2.38l-0.23-0.87v-0.76l2.15-0.64l2.5-0.81l2.97-1.22l2.27-1.57l1.34-1.63l0.06-1.69
            l-0.41-2.09l-1.57-2.56l-1.22-1.57l1.92-0.93l0.47-0.76l1.45-0.64l-0.41-0.41l-0.35-0.93l-0.17-0.76l0.12-0.93l0.64-1.1l1.1-0.93
            l-0.99-0.64l-1.8-1.63l-1.4-1.86l-0.52-0.87l0.76-0.93l-0.76-0.76l-1.28-1.51l-0.23-0.76l-0.52,0.17l-0.35-0.7l-0.81-1.51
            l-0.83-0.81l-0.76-0.99l0.81-0.64l-0.17-2.85l1.1-0.12l1.1,0.23l1.51,0.12l2.5-2.27l1.63-2.97l1.28-3.49l-0.87-0.23l-1.1-0.23
            l-0.81-0.7l0.23-0.87l1.22-1.1l0.93-0.47l0.35-0.93l-0.47-1.69l-1.22-1.28l4.13-8.96L414.86,142.78L414.86,142.78z"></path>
                </a>
                <a href="#a">
                    <path id="UR" data-nom="Uri" class="departement-uri" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M400.5,212.15l-2.38,2.44l-1.63,0.23l-1.63,0.76l-1.22,0.99
            l0.76,2.85l-0.87,2.5l-1.86,1.86l-0.52,2.5l-1.63,1.51l-2.09-0.12l-1.1-1.86l-1.98,0.23l-0.35,1.51l-0.87,2.97l-2.38,1.34
            l-1.98,2.09l-2.97,0.12l-1.63,0.99l-0.99,2.09l0.23,1.34l1.22,2.62l-1.1,0.64l-1.4,1.98v3.61l1.63,2.21l1.98,2.97l-0.76,3.61
            l-0.87,1.51l-1.74,1.45l-2.5,0.17l-0.64-0.99l-1.51-0.64l-4.3-0.47l-1.22-0.87l-2.5-0.58l-3.08,0.58l-1.92,1.86l-0.81,1.98
            l0.41,2.44l-0.17,1.45l-0.7,0.87l-2.91,0.93l-2.15,0.12l-1.63-0.29l-1.34-0.7l-1.34-0.76l-0.76-1.1l-0.7-1.57l-0.52-1.28
            l-1.45-2.38l-0.52-1.16l0.99-2.91l1.28-3.31l0.29-6.22l-0.17-1.34l-1.34-0.87l-1.05-0.29l-1.1-1.86l-0.52-1.4l-0.35-2.04l-0.12-1.1
            l1.22,0.12l1.8,0.29l1.51,0.52l1.51,0.17l1.1-0.7l0.52-0.93v-1.74l-0.12-1.74l-0.7-2.21l-1.05-1.98l-0.29-3.08l0.12-1.1l1.22-2.33
            l1.63-0.17l0.87,0.12l1.05,0.29l0.64,0.41l1.74-1.63l-0.12-0.52l-0.87-1.4l-0.87-0.76l0.23-1.1l-2.44-0.58l0.06-0.64l1.05,0.06
            l0.7-0.29l0.29-0.93l-0.52-0.87l-0.7-0.64l0.93-2.62l1.51-1.57l2.21-1.16l-0.25-1.53l-1.22-0.35l-0.76-0.29h-2.5v-3.9l0.93-2.38
            l-0.41-0.7l-0.41,0.12l-0.12-0.87l-1.05,0.06l1.4-1.98l1.4-0.7l2.21-0.81l1.92-1.16l1.28-1.05l0.76-0.35l1.8-1.22l1.4-1.8
            l2.09-1.51l0.7-0.87l-0.17-1.63l0.12-1.4l0.93-1.1l0.81-0.81l-0.17-0.64l-0.35-1.16l1.4-0.47l1.22,1.92l0.23,3.14l0.29,3.37
            l2.85-0.23l1.86,0.7l0.93,0.12l1.63-0.23l3.37-0.87l0.52,4.13l-0.23,1.4l0.87,1.57l1.45-0.7l1.16-0.47l1.92-1.86l1.51-0.81
            l2.09-0.64l0.64,0.23l1.16,1.1l0.81-0.12l1.1-0.87l0.64-0.52l1.45-0.23l1.86,0.58l0.7,1.16l-0.23,1.8l-0.52,1.92l0.58,1.28
            l1.63-1.05l0.41,4.83l0.93-0.7l0.64-1.1l0.87-0.64l3.37-1.05l5.35-2.97l1.22,1.57l1.57,2.56l0.41,2.09l-0.06,1.69l-1.34,1.63
            l-2.27,1.57l-2.97,1.22l-2.5,0.81l-2.15,0.64v0.76l0.23,0.87l0.87,2.38L400.5,212.15"></path>
                </a>
                <a href="#a">
                    <path id="TI" data-nom="Tessin" class="departement-tessin" fill="#DDDDDD" stroke="#FFFFFF" stroke-width="0.75" d="M374.91,256.06l-0.87,1.51l-1.74,1.45l-2.5,0.17l-0.64-0.99
            l-1.51-0.64l-4.3-0.47l-1.22-0.87l-2.5-0.58l-3.08,0.58l-1.92,1.86l-0.81,1.98l0.41,2.44l-0.17,1.45l-0.7,0.87l-2.91,0.93
            l-2.15,0.12l-0.93,1.98l-2.15,1.98l-0.52,1.51l-0.7,1.34l-0.93,0.29l-1.74-0.17h-2.27l-1.16-0.29l0.12,2.5l-0.06,1.69l-0.96,3.67
            l3.55-1.74l2.97-0.47l2.44,0.87l1.98,3.66l0.23,1.57l-0.23,3.2v3.43v3.84l0.35,4.19l-0.47,3.2l-1.57,3.08l-1.74,2.09l-0.47,2.85
            l2.09,2.85l0.76,2.21l-0.23,1.22l0.47,1.74l2.73,2.33l3.43,1.98l3.43,1.86l1.98,2.97l3.31,4.94l1.98,1.86l0.23,2.21l2.44,2.62
            l1.1,2.33l1.4,0.17l1.74,0.35l1.22,1.05l1.63,0.93l2.27,0.23l1.28,0.93l0.99,0.47l1.69,0.76l3.31-2.85l2.04,1.4l1.8,0.93l1.74,1.45
            l0.93-0.52l1.28-1.1l0.58-0.7l0.87,0.23l2.97,3.02l2.09,2.5l1.22,1.74l0.17,1.8l-1.1,1.22l-0.93,0.7l-0.47,0.12l-0.12,0.93
            l-0.29,2.09l-0.93,0.81l-2.33,1.45l-1.45,1.28l-0.58,1.51l0.76,1.57h0.81l1.57,0.23l2.15,0.81l1.4,1.51l1.8,1.51l1.4,1.51
            l1.28,0.29l1.34,0.76l0.23,1.69l0.23,3.14l1.63,2.27l0.99,1.28l0.76,0.93v1.22l0.99,2.56l1.74,2.85l-0.23,1.63l-1.57,1.45
            l-1.45,2.33v1.22l0.87,0.12l1.45-1.45l1.98,0.12l1.45,1.45l1.74,0.35l1.86-0.12l1.1,0.47l0.23,1.86l1.57,0.47l2.21-1.1l0.47-2.97
            l0.35-1.74l0.99-2.09l0.64-2.44l1.86-1.22l1.22-1.34l0.47-1.74l-0.47-0.35l-1.86-2.33l-1.98-1.45h-2.73l-1.22-0.99l-0.35-1.34
            l0.23-1.86l-0.87-1.45l-0.99-1.22l-0.76-2.09l-0.23-0.99l0.87-1.1l1.1-1.1l1.34-0.35l0.06-1.28l-0.17-3.02l-0.64-0.76l-0.76-1.45
            l0.12-2.44l0.99-2.56l1.34-0.87l2.33-0.87l2.44-0.87l1.1-0.76l0.87-1.34l0.47-1.86l-0.12-1.98l-0.99-2.09l-0.35-1.45l0.87-2.09
            l3.55-1.45l2.44-2.33l1.45-1.45l1.1-0.47l1.22-2.09l1.28-0.58l-2.27-2.15l-2.38-3.37l-2.09-1.98l-2.85-2.09l-0.47-2.21l0.47-2.97
            l-1.1-2.97l-1.74-2.97l-0.76-2.09l0.99-1.74l0.99-2.85l-0.12-3.08l0.64-1.74l1.34-1.1l1.22-1.98l-0.64-3.37l0.12-2.5l0.87-2.33
            l0.35-1.74l-1.63-1.98l-0.47-1.98l1.1-2.21l0.29-3.08l-1.92-2.15l-2.04-0.64l-1.28-0.12l-1.92-1.92l-1.4-2.15l-1.57-3.61
            l-0.23-2.91l0.47-4.19l1.28-0.93l1.74-1.86l-0.35-1.22l-0.58-0.35l-2.27-0.52l-1.8-2.33l-1.1-1.1l-2.62,0.76l-2.21-0.23l-0.35-1.4
            l-0.23-1.86l-0.29-2.73l-0.35-1.86l-0.41,0.47l-0.99,0.7l-3.43,0.29l-1.92,1.51l-0.64,1.4l1.16,2.33l0.47,0.99l-0.06,1.51
            l-1.45,1.4l-1.57,1.1l-1.57,0.7l-2.27,0.41l-2.27,0.58h-1.16l-0.87-0.47l-2.21,1.63l-1.98-0.35l-1.92-1.1l-1.34-0.7l-2.68-0.47
            l-2.09,0.47l-2.09-0.12l-2.38-1.1L374.91,256.06L374.91,256.06z M413.41,368.76l0.64,0.64l0.64-0.12l0.47-0.64l0.47-0.76
            l-0.12-0.93l-0.47-0.17l-0.99,0.99L413.41,368.76L413.41,368.76z"></path>
                </a>
            </g>
        </svg>
        <?php

        foreach ($departement as $dp) {

            if ($dp['visite'] == "1") {

                echo '<script>visited("' . $dp['departement_slug'] . '",' . $dp['id'] . ')</script>';
            }
        }
        ?>
    </div>
</section>

<section class="presentation p-5">
    <div class="container d-flex justify-content-between presentation">
        <div class="textePresentation text-light slideinLeftAnim p-5">
            <h3 class="text-light text-center"><?= htmlentities($accueil['titre']) ?></h3>
            <p class="mt-3"><?php
                            if (strlen(htmlentities($accueil['contenu'])) > 270) {
                                echo nl2br(utf8_encode(substr(htmlentities($accueil['contenu']), 0, strpos(htmlentities($accueil['contenu']), ' ', 270)))) . ' . . .';
                            } else {
                                echo nl2br(utf8_encode(htmlentities($accueil['contenu'])));
                            }
                            ?></p>
            <button class="boutonAccueil" onclick="window.location.href='<?= Conf::apropos ?>'">Voir plus &xrarr;</button>
        </div>
        <div class="videoPresentation slideinRightAnim">
            <iframe class="rounded" width="600" height="340" src="https://www.youtube.com/embed/<?= htmlentities($accueil['media']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<div class="container">
    <section class="sectionMasonry p-3 ">
        <div class="masonry ">
            <?php
            foreach ($images as $img) {
            ?>
                <div class="mItem mt-3 ">
                    <div data-bs-toggle="modal" data-bs-target="#exampleModal<?= $img['id'] ?>">
                        <img style="box-shadow: 10px 11px 15px -3px rgba(0,0,0,0.58)" alt="Image Accueil" class="rounded-3 revealAnim imageMasonry" src='<?= Conf::index ?>assets/image/<?= $img['nom_image'] ?>'>
                    </div>
                    <div class="modal fade" id="exampleModal<?= $img['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-accueil">
                            <div class="modal-content">
                                <div class="modal-body modal-accueil-body">
                                    <img alt="Image Accueil" class="rounded-3" src='<?= Conf::index ?>assets/image/<?= $img['nom_image'] ?>'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
    </section>
    <button class="my-4 boutonAccueil" onclick="window.location.href='<?= Conf::departement ?>'">Voir plus &xrarr;</button>

</div>

<?php


include("./vue/commun/footer.php");

?>