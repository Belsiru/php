<?php
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Anax container.
$epo['title'] = "Hello World";

$epo['header'] = <<<EOD
<img class='sitelogo' src='img/epo.png' alt='Epo Logo'/>
<span class='sitetitle'>Epo webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$epo['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Epo ser ut och fungerar.</p>
EOD;

$epo['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Erik Sternheden | <a href='https://github.com/mosbth/Anax-base'>Epo på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(EPO_THEME_PATH);
