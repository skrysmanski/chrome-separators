<!doctype html>
<?php
$VERSION = '1.1';
$isHorz = (@$_GET['t'] == 'horz');
?>
<html>
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

      <p>
        I'm a <b><?php echo $isHorz ? 'horizontal' : 'vertical'; ?></b> separator.
        Drag <a class="me" href="" title="Drag me!"><?php echo $isHorz ? '───────────' : ''; ?></a><br/>
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
          <a href="https://twitter.com/share" class="twitter-share-button" data-text="Do you want separators in your Chrome bookmarks? Check this out! #tweettip" data-count="horizontal" data-via="manski83" data-url="https://separator.mayastudios.com/">Tweet</a><script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
        </p>
        </p>
      </div>
    </div>
  </div>
</body>

</html>
