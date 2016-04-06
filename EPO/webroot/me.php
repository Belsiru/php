<?php
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Anax container.
$epo['title'] = "Min Me-sida";

$epo['header'] = <<<EOD
<img class='sitelogo' src='img/epo.png' alt='Epo Logo'/>
<span class='sitetitle'>Me-sida</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$epo['main'] = <<<EOD
<h1>Hej</h1>
<p>Hej, mitt namn är Erik Sternheden. Jag är bosatt i Halmstad med min sambo och dotter. Jag har bott i Halmstad hela mitt liv och det var på kattegattgymnasiet i Halmstad som mitt intresse för programmering först väcktes då jag pluggade It-programmet. Efter skolan jobbade jag några år på företaget Dormer Tools AB för att sen ta tjänstledigt för att plugga lite webbprogrammering. Då programmerade jag mest C# men även en del javascript, html och css. Efter att ha pluggat ett tag så kände jag att jag behövde jobba lite igen så jag gick tillbaka till Dormer.

Tyvärr så lades Dormer Tools ner nyligen så bestämde jag mig för att börja plugga lite igen. På min fritid så gillar jag att spela spel och att sitta med mina egna spelprojekt. Jag har lärt mig lite unity för att göra mina spel.

I övrigt så umgås jag så mycket jag har tid med min sambo och dotter. Min dotter har precis börjat simskola nu så det blir att jag får vara i Halmstads badhus varje vecka för tillfället</p>
EOD;

$epo['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Erik Sternheden | <a href='https://github.com/mosbth/Anax-base'>Epo på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(EPO_THEME_PATH);
