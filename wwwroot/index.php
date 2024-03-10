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
          Version <?php echo $VERSION; ?><br/>
          Made by <a href="https://hachyderm.io/@manski" target="_blank">@manski</a><br/>
          (on <a href="https://github.com/skrysmanski/chrome-separators" target="_blank">GitHub</a>)
        </p>
      </div>
    </div>
  </div>
</body>

</html>
