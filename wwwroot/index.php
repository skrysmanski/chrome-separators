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

      <?php
      function generateRandomId($length = 10): string {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $id = '';

        for ($i = 0; $i < $length; $i++) {
          $id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $id;
      }

      $randomId = generateRandomId();
      ?>

      <p>
        I'm a <b><?php echo $isHorz ? '— horizontal' : '| vertical'; ?></b> separator.
        Drag <a class="me" href="<?php echo $isHorz ? "/?horz&tag=$randomId" : "/?vert&tag=$randomId"; ?>" title="Drag me!"><?php echo $isHorz ? '───────────' : ''; ?></a><br/>
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

</html>
