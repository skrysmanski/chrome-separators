<!doctype html>
<?php
$VERSION = '1.2';
$isHorz = (@$_GET['t'] == 'horz');
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Chrome Bookmarks Separator</title>

  <!-- See: https://css-tricks.com/svg-favicons-and-all-the-fun-things-we-can-do-with-them/ -->
  <link rel="icon" href="favicon-<?php echo $isHorz ? 'horz' : 'vert'; ?>.svg" type="image/svg+xml">

  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <div id="outer">
    <div id="inner">

      <?php
      function generateRandomHashtag($length = 10): string {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $hashtag = '#';

        for ($i = 0; $i < $length; $i++) {
          $hashtag .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $hashtag;
      }

      $randomHashtag = generateRandomHashtag();
      ?>

      <p>
        I'm a <b><?php echo $isHorz ? 'horizontal' : 'vertical'; ?></b> separator.
        Drag <a class="me" href="/<?php echo $randomHashtag; ?>" title="Drag me!"><?php echo $isHorz ? '───────────' : ''; ?></a><br/>
        to your bookmarks <span class="target-name"><?php echo $isHorz ? 'folders' : 'toolbar'; ?></span>.
      </p>

      <p>
        For a <b><?php echo $isHorz ? 'vertical' : 'horizontal'; ?></b> separator, click <a href="<?php echo $isHorz ? 'index.php' : 'index.php?t=horz'; ?>">here</a>.
      </p>

      <p>
        <b>:)</b>
      </p>

      <div class="footer">
        <p>
          Version <?php echo $VERSION; ?> made by <a href="https://www.twitter.com/manski83" target="_blank">@manski83</a>
          (on <a href="https://github.com/skrysmanski/chrome-separators" target="_blank">GitHub</a>),<br>
          based on work by <a href="https://www.twitter.com/VorteXLP" target="_blank">@VorteXLP</a>
        </p>
        <p>
          <!-- See:
               - https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview
               - https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/guides/parameter-reference1
           -->
          <a class="twitter-share-button"
             href="https://twitter.com/intent/tweet"
             data-text="Do you want separators in your Chrome bookmarks? Check this out!"
             data-hashtags="tweettip"
             data-via="manski83"
             data-url="https://separator.mayastudios.com">
            Tweet
          </a>
          <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
        </p>
      </div>
    </div>
  </div>
</body>

</html>
