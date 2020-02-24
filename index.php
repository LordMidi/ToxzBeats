<?php
include('beats.inc.php');
$languageCode = 'de';
$title = 'Toxz Beats - kostenlose Musik, Beats & Instrumentale';
$metaDescription = 'Kostenlose, Gema freie Musik für dein YouTube Video oder deinen eigenen Rap Tracks.';
$language = '<a class="language" href="en">english version</a>';
$intro = '
        <h1>Toxz Beats</h1>
        <p>
            Ob für das nächste <strong>Fortnite Let\'s Play</strong>, <strong>Graffiti Video</strong>  oder das <strong>Mixtape</strong>, alles funktioniert nur mit den richtigen Beats.
        </p>
        <p>
            Du suchst dafür nach <strong>kostenloser Hip Hop- und Elektro-Musik</strong>?
            Dann bist du hier richtig.
        </p>
        <p>
            <strong>Gema freie Musik</strong> als Untermalung für deine <strong>YouTube-Videos</strong> oder als <strong>Instrumental</strong> für deinen Rap-Track.
        </p>
        <p>
            Made in Berlin since 1993!
        </p>
    ';
$license = '
        <h2>Lizenz</h2>
        <p>
            Die auf dieser Webseite zum <strong>Download</strong> angebotenen MP3s werden unter der <strong>Creative Commons Lizenz</strong> "<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.de">Attribution-NonCommercial-ShareAlike</a>" angeboten.
            Bitte beachte diese Lizenzbedingungen, wenn du meine Musik verwenden möchtest.
        </p>
        <p>
            Aber keine Angst! Ingesamt musst du nur z.B. bei der <strong>Verwendung auf YouTube</strong> Credits in der Form <span class="text-warning">music: www.toxz.de</span> in der Videobeschreibung mit einfügen. Das ist schon alles.
        </p>
        <p>
            Du willst mit werbeunterstützten Videos oder mit deinem Album finanziell voll durchstarten?
            Kontaktiere mich einfach über <a href="https://www.instagram.com/toxzbeats/">Instagram</a>.
            Ohne Zustimmung von meiner Seite, darf <strong>die Musik für kommerzielle Projekte</strong> <u>nicht</u> verwendet werden!
        </p>
    ';

if (isset($_GET['en'])) {
    $languageCode = 'en';
    $title = 'Toxz Beats - free beats, music & instrumentals';
    $metaDescription = 'free music for your YouTube video or rap tracks.';
    $language = '<a class="language" href="/">german version</a>';
    $intro = '
        <h1>Toxz Beats</h1>
        <p>
            Your next <strong>Fortnite Let\'s Play</strong>, <strong>graffiti video</strong> or <strong>mixtape</strong>, everything needs its music.
        </p>
        <p>
            You are searching for <strong>royalty free hip hop- and electro-music</strong>?
            So here is your source.
        </p>
        <p>
            <strong>Free music</strong> as background for your <strong>YouTube video</strong> or as <strong>instrumental beat</strong> for your own rap tracks.
        </p>
        <p>
            Made in Berlin since 1993!
        </p>
    ';
    $license = '
        <h2>License</h2>
        <p>
            The MP3s on this website are published under the <strong>creative commons licence</strong> "<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Attribution-NonCommercial-ShareAlike</a>".
            Please be aware of the licence conditions if you want to download and use this music.
        </p>
        <p>
            But don\'t be afraid! All I want is you (e.g. if you use my <strong>music on YouTube</strong>) to give credits like <span class="text-warning">music: www.toxz.de</span> in the video description. That\'s it.
        </p>
        <p>
            You want to <strong>make some money with your Videos</strong> or go up in the billboard charts with your next album?
            Contact me via <a href="https://www.instagram.com/toxzbeats/">Instagram</a>.
            Without permission you are <u>not</u> allowed to use the music in <strong>commercial projects</strong>!
        </p>
    ';
}

/**
 * Format the beat name of display purposes.
 * @param $name
 * @return string
 */
function formatBeatName($name) {
    $name = str_replace('Toxz - ', '', $name);
    $name = preg_split('/(?=_)/', $name, -1, PREG_SPLIT_NO_EMPTY)[0];
    return $name;
}
?>
<!doctype html>
<html lang="<?=$languageCode; ?>">
<head>
    <title><?=$title; ?></title>
    <meta name="Description" content="<?=$metaDescription; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <meta property="og:title" content="Toxz Beats">
    <meta property="og:description" content="<?=$metaDescription; ?>">
    <meta property="og:image" content="http://www.toxz.de/images/ogimage.jpg">
</head>
<body>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<div class="container text-right">
    <?=$language; ?>
    <div class="social">
        <a class="instagram" href="https://www.instagram.com/toxzbeats/">
            <img src="images/instagram.svg" alt="Instagram">
        </a>
        <a class="youtube" href="https://www.youtube.com/channel/UCU5_FIDO1V0nH0NUJisMx9g">
            <img src="images/youtube.svg" alt="YouTube">
        </a>
        <a class="soundcloud" href="https://soundcloud.com/toxz-beats">
            <img src="images/soundcloud.svg" alt="Soundcloud">
        </a>
        <a class="facebook" href="https://www.facebook.com/ToxzBeats">
            <img src="images/facebook.svg" alt="Facebook">
        </a>
    </div>
</div>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 text-center">
                <img class="toxz" src="images/toxz.svg" alt="Toxz Beats">
            </div>
            <div class="col-md-6">
                <?=$intro; ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="jumbotron">
        <?=$license; ?>
    </div>
</div>
<div class="container">
</div>
<div class="beats container">
    <div class="jumbotron">
        <h2>Beats</h2>
        <div class="row">
            <? foreach($beats as $beat): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="play" background-image="beats/<?=rawurlencode($beat); ?>.jpg">
                            <a class="inline-playable btn btn-default" href="beats/<?=rawurlencode($beat); ?>.mp3" role="button" aria-label="play"></a>
                        </div>
                        <p class="caption clearfix">
                            <a class="download inline-exclude btn btn-success" href="download.php?file=<?=rawurlencode($beat); ?>" role="button" aria-label="download" target="_blank"></a>
                            <?=formatBeatName($beat); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container">
    <img class="piece" src="images/piece.svg" alt="Toxz Graffiti">
</div>
<script src="soundmanager2/min.js"></script>
<script>
    // lazy loading of beat images
    var handler = function() {
        var elements = document.getElementsByClassName('play');
        for (var property in elements) {
            (function() {
                if (!elements.hasOwnProperty(property)) return;
                var element = elements[property];
                var rect = element.getBoundingClientRect();
                if (
                    rect.top >= -150 &&
                    rect.left >= -150 &&
                    rect.bottom <= (window.innerHeight + 150 || document.documentElement.clientHeight  + 150) &&
                    rect.right <= (window.innerWidth + 150 || document.documentElement.clientWidth  + 150)
                ) {
                    var backgroundImageUrl = element.getAttribute('background-image');
                    var image = new Image();
                    image.onload = function() {
                        element.style.backgroundImage = 'url(' + backgroundImageUrl +')';
                    };
                    image.src = backgroundImageUrl;
                }
            })();
        }
    };
    if (window.addEventListener) {
        addEventListener('DOMContentLoaded', handler, false);
        addEventListener('load', handler, false);
        addEventListener('scroll', handler, false);
        addEventListener('resize', handler, false);

    // IE9+ :(
    } else if (window.attachEvent)  {
        attachEvent('onDOMContentLoaded', handler);
        attachEvent('onload', handler);
        attachEvent('onscroll', handler);
        attachEvent('onresize', handler);
    }
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-51452412-9', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>