<?php

    // beat file names
    $beats = [
        'Toxz - Team Up The Crew_93BPM',
        'Toxz - Blood From The Sky_85BPM',
        'Toxz - Es Wird Blut Geben_87BPM',
        'Toxz - Splash The Party Pool_96BPM',
        //'Toxz - This Is How We Do_109BPM',
        'Toxz - Ready For The End_90BPM',
        'Toxz - Ghettofeuer_105BPM',
        'Toxz - Leave This Town_83BPM',
        'Toxz - Beach Assault_120BPM',
        'Toxz - Red Light Bitches_100BPM',
        'Toxz - Jazzy Funky_60BPM',
        'Toxz - Desert Safari_82BPM',
        'Toxz - Life Is A Broken Dream_89BPM',
        'Toxz - Dear Hip Hop_87BPM',
        'Toxz - Get Up For A New World_85BPM',
        'Toxz - Bone Rider_97BPM',
        'Toxz - Graveyard Bouncer_91BPM',
        'Toxz - Krom_87BPM',
        'Toxz - Lands Of Hope_97BPM',
        'Toxz - Unicorn_102BPM',
        'Toxz - Piano Dreams_87BPM',
        'Toxz - Stand Up_97BPM',
        'Toxz - The Real Baseliner_90BPM'
    ];

    $languageCode = 'de';
    $title = 'Toxz Beats - kostenlose Beats & Instrumentals';
    $metaDescription = 'Kostenlose, Gema freie Musik aus Berlin für dein YouTube Video oder deinen eigenen Rap Tracks.';
    $language = '<a class="language" href="en">english version</a>';
    $intro = '
        <h1>Toxz Beats</h1>
        <p>
            Ob für das nächste <strong>Let\'s Play</strong> oder das <strong>Mixtape</strong>, alles funktioniert nur mit der richtigen Musik.
        </p>
        <p>
            Du suchst dafür nach <strong>kostenlosen Hip Hop- und Elektro-Beats</strong>?
            Dann bist du hier richtig.
        </p>
        <p>
            <strong>Gema freie Musik</strong> als Untermalung für deine <strong>YouTube-Videos</strong> oder als <strong>Instrumental</strong> für deinen Rap-Track.
        </p>
        <p>
            Made in Berlin since 1996!
        </p>
    ';
    $license = '
        <p>
            Die auf dieser Webseite verfügbare Musik wird unter der <strong>Creative Commons Lizenz</strong> "<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.de">Attribution-NonCommercial-ShareAlike</a>" angeboten.
            Bitte beachte diese Lizenzbedingungen, wenn du meine Musik verwenden möchtest.
        </p>
        <p>
            Aber keine Angst! Ingesamt musst du nur z.B. bei der <strong>Verwendung auf YouTube</strong> Credits in der Form <span class="text-warning">music: www.toxz.de</span> in der Videobeschreibung mit einfügen. Das ist schon alles.
        </p>
        <p>
            Du willst mit werbeunterstützten Videos oder mit deinem Album finanziell voll durchstarten?
            Kontaktiere mich einfach über <a href="https://www.facebook.com/ToxzBeats">Facebook</a>.
            Ohne Zustimmung von meiner Seite, darf <strong>die Musik für kommerzielle Projekte</strong> <u>nicht</u> verwendet werden!
        </p>
    ';

    if (isset($_GET['en'])) {
        $languageCode = 'en';
        $title = 'Toxz Beats - free beats & instrumentals';
        $metaDescription = 'free music from Berlin Citr for your YouTube video or your rap tracks.';
        $language = '<a class="language" href="/">german version</a>';
        $intro = '
        <h1>Toxz Beats</h1>
        <p>
            Your next <strong>Let\'s Play</strong> or <strong>mixtape</strong>, everything needs its music.
        </p>
        <p>
            You are searching for <strong>free Hip Hop- and Elektro-Beats</strong>?
            So here is your source.
        </p>
        <p>
            <strong>Free music</strong> as background for your <strong>YouTube video</strong> or as <strong>instrumental beat</strong> for your own rap tracks.
        </p>
        <p>
            Made in Berlin since 1996!
        </p>
    ';
        $license = '
        <p>
            The music on this website is published under the <strong>creative commons licence</strong> "<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Attribution-NonCommercial-ShareAlike</a>".
            Please be aware of the licence conditions if you want to use my music.
        </p>
        <p>
            But don\'t be afraid! All I want is you (e.g. if you use my <strong>music on YouTube</strong>) to give credits like <span class="text-warning">music: www.toxz.de</span> in the video description. That\'s it.
        </p>
        <p>
            You want to <strong>make some money with your Videos</strong> or go up in the billboard charts with your next album?
            Contact me via <a href="https://www.facebook.com/ToxzBeats">Facebook</a>.
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
        <meta name="robots" content="NOODP">
        <link rel="stylesheet" type="text/css" href="css/theme.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
    </head>
    <body>
        <div class="container text-right">
            <?=$language; ?>
            <a class="soundcloud" href="https://soundcloud.com/toxz-beats">
                <img src="images/soundcloud.svg" alt="Soundcloud">
            </a>
            <a class="facebook" href="https://www.facebook.com/ToxzBeats">
                <img src="images/facebook.svg" alt="Facebook">
            </a>
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
            <div class="jumbotron pulse">
                <?=$license; ?>
            </div>
        </div>
        <div class="beats container">
            <div class="jumbotron">
                <div class="row">
                    <? foreach($beats as $beat): ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <div class="play" style="background-image: url(beats/<?=rawurlencode($beat); ?>.jpg);">
                                    <a
                                        class="inline-playable btn btn-default"
                                        href="beats/<?=rawurlencode($beat); ?>.mp3"
                                        role="button"
                                        aria-label="play"
                                    ></a>
                                </div>
                                <p class="caption clearfix">
                                    <a
                                        class="download inline-exclude btn btn-success"
                                        href="beats/<?=rawurlencode($beat); ?>.mp3"
                                        role="button"
                                        aria-label="download"
                                    ></a>
                                    <?=formatBeatName($beat); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <img class="piece" src="images/brut.svg" alt="Toxz Graffiti">
        </div>
        <script src="soundmanager2/soundmanager2-nodebug-jsmin.js"></script>
        <script src="soundmanager2/inlineplayer.js"></script>
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