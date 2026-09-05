<?php
$languageCode = 'de';
$title = 'Kostenlose Musik, Free Beats & Instrumentale | Toxz Beats';
$metaDescription = 'Kostenlose Downloads von Gema freien Free Beats & Instrumentals für deine Videos oder Rap Tracks.';
$language = '<a class="language" href="en">english version</a>';
$intro = '
    <h2>Toxz - Beats made in Berlin!</h2>
    <p>
        Geboren am Rande von Berlin verfiel Toxz ca. 1993 der Musik. Überraschend talentfrei veröffentlicht er konstant erfolglos seitdem Beats auf dieser Seite.
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
     Lade dir einfach die Musik, die dir gefällt im <strong>High Quality WAV</strong> auf dein Device.
  </p>
  <p>
     <strong>Ohne Anmeldung oder Abo</strong>! Content Creator und Rapper laden ihren Sound auf TOXZ.DE - jetzt!
  </p>
';
$license = '
  <h2>Lizenz</h2>
  <p>
    Die auf dieser Webseite zum <strong>Download</strong> angebotene Musik wird unter der <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.de">Attribution-NonCommercial-ShareAlike-Lizenz</a> veröffentlicht.
    Bitte beachte diese Lizenzbedingungen, falls du die Musik verwenden möchtest. Einfachste Variante ist eine Erwähnung - "Musik: toxz.de".
  </p>
';
$download = '<p>Klicke den Download Button zum herunterladen<p>';

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
      Simply download the music you like to your device in <strong>high quality WAV format</strong>.
    </p>
  ';
  $license = '
    <h2>License</h2>
    <p>
      The music on this website is published under the <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Attribution-NonCommercial-ShareAlike license</a>.
      Please be aware of the licence conditions if you want to use this music. The simplest way to give credits is: "music: toxz.de/en".
    </p>
  ';
  $download = '<p>Click the download button for downloading<p>';
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
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <meta property="og:title" content="Toxz Beats">
  <meta property="og:description" content="<?= $metaDescription; ?>">
  <meta property="og:image" content="http://www.toxz.de/images/ogimage.jpg">
</head>

<body>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <div class="container social">
    <?= $language; ?>
    <a href="https://soundcloud.com/toxz-beats">
      <img src="images/soundcloud.svg" alt="Soundcloud">
    </a>
    <a href="https://open.spotify.com/artist/46hYC3wABVTZ75uKiyahQt">
      <img src="images/spotify.svg" alt="Spotify">
    </a>
    <a href="https://www.instagram.com/toxzbeats/">
      <img src="images/instagram.svg" alt="Instagram">
    </a>
  </div>

  <div class="container">
    <?= $seo; ?>
  </div>

  <div class="container piece">
    <img src="images/piece.svg" alt="Toxz Graffiti">
  </div>

  <div class="container">
    <?= $intro; ?>
  </div>

  <div class="container">
    <?= $license; ?>
  </div>

  <div class="container">
    <h2>Downloads</h2>
  </div>

  <?php foreach (json_decode(file_get_contents('downloads.json'), true) as $download) : ?>
    <div class="container">
      <?php if ($download['type'] === 'track'): ?>
        <iframe tabindex="-1" height="166" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/soundcloud%253Atracks%<?= $download['soundcloudId']; ?>&color=%23ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
      <?php endif; ?>
      <?php if ($download['type'] === 'album'): ?>
        <iframe tabindex="-1" height="400" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/soundcloud%253Aplaylists%<?= $download['soundcloudId']; ?>&color=%23ff5500&auto_play=false&hide_related=true&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
      <?php endif; ?>
      <a class="download" href="download.php?file=<?= rawurlencode($download['file']); ?>" role="button" aria-label="download <?= $download['title']; ?>" title="download <?= $download['title']; ?>" target="_blank" rel="nofollow">
        <img src="images/download.svg" alt=""> <?= $download['title']; ?>
      </a>
    </div>
  <?php endforeach; ?>

  <div class="container logo">
    <img src="images/toxz.svg" alt="Toxz Beats">
  </div>

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