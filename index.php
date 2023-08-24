<?php
include('beats.inc.php');
$languageCode = 'de';
$title = 'Kostenlose Musik, Beats & Instrumentale | Toxz Beats';
$metaDescription = 'Kostenlose Downloads von Gema freien Beats & Instrumentals für deine Videos oder Rap Tracks.';
$language = '<a class="language" href="en">english version</a>';
$intro = '
    <h2>Toxz</h2>
    <p>
        Geboren am Rande von Berlin verfiel Toxz ca. 1993 der Musik. Überraschend talentfrei veröffentlicht er konstant erfolglos seitdem Beats auf dieser Seite.
    </p>
    <p>
        Aber überzeuge dich doch selbst und drücke einfach mal auf Play! Falls dir was gefällt und die Beats in irgend einer Form nutzen möchtest: keine Problem. Der Download ist aktiviert und kostenlos.
        Beachte dann noch die Lizenzbedingungen und wir sind beste Homies / Bros / Diggas / Brüder / etc.
    </p>
    <p>
        Toxz - Beats made in Berlin since 1993!
    </p>
    ';
$seo = '
  <h1>Download Free Beats</h1>
  <p>
    <strong>Kostenlose Instrumentale und Beats</strong> für deine <strong>Videos</strong> auf YouTube, Instagram oder Tik Tok kannst du dir hier kostenlos herunterladen.
     Oder suchst du einen <strong>Gema freien</strong> Beat für deinen nächsten Rap Track?
  </p>
  <p>
     Egal, ob als Intro oder Hintergrundmusik für ein <strong>Graffiti Video</strong> oder <strong>Let\'s Play Stream</strong>, Toxz Beats bietet eine eigene actiongeladene Mischung aus dem Bereich <strong>Electro Breakbeat</strong> und Hip Hop.
     Lade dir einfach die Musik, die dir gefällt im <strong>High Quality WAV</strong> und MP3 Format auf dein Device.
  </p>
  <p>
     <strong>Ohne Anmeldung oder Abo</strong>! Content Creator und Rapper laden ihren Sound auf TOXZ.DE - jetzt!
  </p>
';
$license = '
  <h2>Lizenz</h2>
  <p>
    Die auf dieser Webseite zum <strong>Download</strong> angebotene Musik wird unter der <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.de">Attribution-NonCommercial-ShareAlike</a>-Lizenz veröffentlicht.
    Bitte beachte diese Lizenzbedingungen, falls du die Musik verwenden möchtest.
  </p>
  <p>
    Ohne Zustimmung von meiner Seite, darf die Musik für <strong>kommerzielle Projekte</strong> <u>nicht</u> verwendet werden!
    Kontaktiere mich dafür einfach auf <a href="https://www.instagram.com/toxzbeats/">Instagram</a>.
  </p>
';

if (isset($_GET['en'])) {
  $languageCode = 'en';
  $title = 'royalty free beats, music & instrumentals | Toxz Beats';
  $metaDescription = 'Royalty free downloads of beats & instrumentals for your videos or rap tracks.';
  $language = '<a class="language" href="/">german version</a>';
  $intro = '
    <h2>Toxz</h2>
    <p>
      Born on the outskirts of Berlin, Toxz fell in love with music around 1993. Surprisingly talentless, he\'s been releasing beats on this site ever since, unsuccessfully.
    </p>
    <p>
      But convince yourself and just press play! If you like something and want to use the beats in any way: no problem. The download is activated and for free.
      Then pay attention to the license conditions and we are best homies / bros / etc.
    </p>
    <p>
      Toxz - Beats made in Berlin since 1993!
    </p>
  ';
  $seo = '
    <h1>Download Free Beats</h1>
    <p>
      <strong>Download free instrumentals and beats</strong> for your <strong>videos</strong> on YouTube, Instagram or Tik Tok here.
      Or are you looking for a <strong>royalty free</strong> beat for your next rap track?
    </p>
    <p>
      Whether as an intro or background music for a <strong>graffiti video</strong> or <strong>Let\'s Play stream</strong>, Toxz Beats offers its own action-packed mix of electro breakbeat and hip hop.
      Simply download the music you like to your device in <strong>high quality WAV and MP3 format</strong>.
    </p>
    <p>
    <strong>Without registration or subscription</strong>! Content creators and rappers download their sound on TOXZ.DE - now!
    </p>
  ';
  $license = '
    <h2>License</h2>
    <p>
      The music on this website is published under the <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Attribution-NonCommercial-ShareAlike</a> license.
      Please be aware of the licence conditions if you want to use this music.
    </p>
    <p>
      Without permission you are <u>not</u> allowed to use the music in <strong>commercial projects</strong>!
      Please contact me via <a href="https://www.instagram.com/toxzbeats/">Instagram</a>.
    </p>
  ';
}

/**
 * Format the beat name of display purposes.
 * @param $name
 * @return string
 */
function formatBeatName($name)
{
  $name = str_replace('Toxz - ', '', $name);
  $name = preg_split('/(?=_)/', $name, -1, PREG_SPLIT_NO_EMPTY)[0];
  return $name;
}
?>
<!doctype html>
<html lang="<?= $languageCode; ?>">

<head>
  <title><?= $title; ?></title>
  <meta name="Description" content="<?= $metaDescription; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#000000">
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <meta property="og:title" content="Toxz Beats">
  <meta property="og:description" content="<?= $metaDescription; ?>">
  <meta property="og:image" content="http://www.toxz.de/images/ogimage.jpg">
</head>

<body>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <div class="container text-right">
    <?= $language; ?>
    <div class="social">
      <a class="soundcloud" href="https://soundcloud.com/toxz-beats">
        <img src="images/soundcloud.svg" alt="Soundcloud">
      </a>
      <a class="spotify" href="https://open.spotify.com/artist/46hYC3wABVTZ75uKiyahQt">
        <img src="images/spotify.svg" alt="Spotify">
      </a>
      <a class="instagram" href="https://www.instagram.com/toxzbeats/">
        <img src="images/instagram.svg" alt="Instagram">
      </a>
    </div>
  </div>
  <div class="container">
    <div class="jumbotron">
      <?= $seo; ?>
    </div>
  </div>
  <div class="container">
    <img class="toxz" src="images/toxz.svg" alt="Toxz Beats">
  </div>
  <div class="container">
    <div class="jumbotron">
      <?= $intro; ?>
    </div>
  </div>
  <div class="container">
    <div class="jumbotron">
      <?= $license; ?>
    </div>
  </div>
  <div class="container album" id="freshfromthetrash">
    <div class="jumbotron">
      <h2>Toxz - Fresh From The Trash (2023)</h2>
      <div class="row">
        <div class="col-md-6">
          <img class="cover" src="images/Toxz%20-%20Fresh%20From%20The%20Trash.jpg" alt="Toxz - Fresh From The Trash">
          <a class="btn btn-success mb-1" href="download/Toxz%20-%20Fresh%20From%20The%20Trash.zip">
            <img src="images/download.svg" alt="">
            Download (342MB)
          </a>
        </div>
        <div class="col-md-6">
          <iframe height="560" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1546064134&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
          <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/toxz-beats" title="Toxz" target="_blank" style="color: #cccccc; text-decoration: none;">Toxz</a> · <a href="https://soundcloud.com/toxz-beats/sets/fresh-from-the-trash" title="Fresh From The Trash" target="_blank" style="color: #cccccc; text-decoration: none;">Fresh From The Trash</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="jumbotron">
      <h2>single beats - WAV</h2>
      <div class="soundclouddownload">
        <img src="images/soundclouddownload.png" alt="">
      </div>
      <iframe height="650" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1232039722&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
      <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/toxz-beats" title="Toxz" target="_blank" style="color: #cccccc; text-decoration: none;">Toxz</a> · <a href="https://soundcloud.com/toxz-beats/sets/instrumentals" title="Instrumentals" target="_blank" style="color: #cccccc; text-decoration: none;">Instrumentals</a></div>
    </div>
  </div>
  <div class="beats container">
    <div class="jumbotron">
      <h2>single beats - MP3</h2>
      <div class="row">
        <? foreach ($beats as $beat) : ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="play" data-background-image="beats/<?= rawurlencode($beat); ?>.jpg">
                <a class="inline-playable btn btn-default" href="beats/<?= rawurlencode($beat); ?>.mp3" role="button" aria-label="play"></a>
              </div>
              <p class="caption clearfix">
                <a class="download btn btn-success" href="download.php?file=<?= rawurlencode($beat); ?>" role="button" aria-label="download" target="_blank"></a>
                <?= formatBeatName($beat); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="container">
    <img class="piece" src="images/piece.svg" alt="Toxz Graffiti">
  </div><script src="soundmanager2/min.js"></script>
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
            rect.bottom <= (window.innerHeight + 150 || document.documentElement.clientHeight + 150) &&
            rect.right <= (window.innerWidth + 150 || document.documentElement.clientWidth + 150)
          ) {
            var backgroundImageUrl = element.getAttribute('data-background-image');
            var image = new Image();
            image.onload = function() {
              element.style.backgroundImage = 'url(' + backgroundImageUrl + ')';
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
    } else if (window.attachEvent) {
      attachEvent('onDOMContentLoaded', handler);
      attachEvent('onload', handler);
      attachEvent('onscroll', handler);
      attachEvent('onresize', handler);
    }
  </script>
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-51452412-9', 'auto');
    ga('send', 'pageview');
  </script>
</body>

</html>