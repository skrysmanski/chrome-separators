<!doctype html>
<?php
$VERSION = '1.2';
$isHorz = isset($_GET['horz']);
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

    // This method exists so that this site can be used for bookmarks in Edge. Edge doesn't allow the user
    // to place multiple bookmarks to the same URL into the same bookmarks folder (unlike Chrome which allows
    // this). So, to work around this problem, this method changes the bookmark URL so that no two separator
    // bookmarks have the same URL.
    function refreshHash() {
      const randomKey = crypto.randomUUID();

      link.setAttribute('href', `?${mode}#${randomKey}`);

      // NOTE: We use "location.replace()" here - instead of "location.hash" - so that
      //   the browser doesn't create a new browser history item for each new key.
      // NOTE 2: We need to change the current page's location or else the browser won't pre-cache
      //   the page's favicon. I.e. without this, if the user drags the "me" button to their
      //   bookmarks bar, the bookmark's icon will be a generic icon - and not the actual favicon
      //   of this page (until the user clicks on the bookmark).
      window.location.replace(`#${randomKey}`);
    }

    refreshHash();

    link.addEventListener("mousedown", (event) => {
      if (event.button === 0) {
        refreshHash();
      }
    });
  });
</script>

</html>
