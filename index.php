<!doctype html>
<?php
$isHorz = (@$_GET['t'] == 'horz');
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Chrome Bookmarks Separator</title>
  <link rel="icon" href="<?php echo $isHorz ? 'horz' : 'vert'; ?>-favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="index.css" />

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/browser-detect/dist/browser-detect.umd.js"></script>
</head>

<body>
<div id="outer">
  <div id="inner">
        <div id="alert-container"></div>

    I'm a <b><?php echo $isHorz ? 'horizontal' : 'vertical'; ?></b> separator.
    Drag <a class="me" href="" title="Drag me!"><?php echo $isHorz ? '───────────' : ''; ?></a> to your bookmarks <em><?php echo $isHorz ? 'folders' : 'toolbar'; ?></em>.<br><br>

    For a <b><?php echo $isHorz ? 'vertical' : 'horizontal'; ?></b> separator, click <a href="<?php echo $isHorz ? 'index.php' : 'index.php?t=horz'; ?>">here</a>.

    <br><br><b>:)</b><br><br><br>

    <p>
      Made by <a href="https://www.twitter.com/manski83" target="_blank">@manski83</a>
      (on <a href="https://github.com/skrysmanski/chrome-separators" target="_blank">GitHub</a>),<br>
      based on work by <a href="https://www.twitter.com/VorteXLP" target="_blank">@VorteXLP</a>
      <br/><br/>
      <a href="https://twitter.com/share" class="twitter-share-button" data-text="Do you want separators in your Chrome bookmarks? Check this out! #tweettip" data-count="horizontal" data-via="manski83" data-url="https://separator.mayastudios.com/">Tweet</a><script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
    </p>
  </div>
</div>

    <script>
        const detectedBrowser = browserDetect();
        if (detectedBrowser.name === "chrome" && detectedBrowser.versionNumber >= 69 && detectedBrowser.versionNumber < 70) {
            $('#alert-container').html(`
<div class="alert alert-warning" role="alert">
  Unfortunately, due to <a href="https://productforums.google.com/forum/#!topic/chrome/sHG5ntLrdwQ" target="_blank">a bug in Chrome 69</a> you can't drag the "me" button to your bookmarks toolbar.
</div>`);
        }
    </script>
</body>

</html>
