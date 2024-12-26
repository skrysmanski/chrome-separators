<!doctype html>
<?php
$VERSION = '1.2';
$isHorz = isset($_GET['horz']) || @$_GET['t'] == 'horz';
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

      <p>
        I'm a <b><?php echo $isHorz ? '— horizontal' : '| vertical'; ?></b> separator.
        Drag <a class="me" href="<?php echo $isHorz ? "/?horz" : "/?vert"; ?>" title="Drag me!"><?php echo $isHorz ? '───────────' : ''; ?></a><br/>
        to your bookmarks <span class="target-name"><?php echo $isHorz ? 'folder' : 'toolbar'; ?></span>.
      </p>

      <p>
        For a <b><?php echo $isHorz ? '| vertical' : '— horizontal'; ?></b> separator, click <a href="<?php echo $isHorz ? '/?vert' : '/?horz'; ?>">here</a>.
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

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    if(typeof crypto.randomUUID === 'undefined') {
      return;
    }

    const urlParams = new URLSearchParams(window.location.search);
    const mode = (urlParams.get('horz') !== null) ? 'horz' : 'vert';
    const link = document.querySelector(".me");

    function refreshHash() {
      const key = crypto.randomUUID();
      link.setAttribute('href', `?${mode}#${key}`);
      window.location.hash = key;
    }

    refreshHash();

    window.setInterval(refreshHash, 1000);
  });
</script>

</html>
