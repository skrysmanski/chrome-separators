<!doctype html>
<?php
$isHorz = (@$_GET['t'] == 'horz');
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Chrome Bookmarks Separator</title>
    <link rel="icon" href="<?php echo $isHorz ? 'horz' : 'vert'; ?>-favicon.ico" type="image/x-icon">
    <style>
        html,
        body {
            width:100%;
            height:100%;
            margin:0px;
            padding:0px;
            font-family:Helvetica, Arial;
        }

        body {
            background:#ececec;
        }

        #outer {
            position: absolute;
            top: 50%;
            left: 0px;
            width: 100%;
            height: 1px;
            overflow: visible;
        }

        #inner {
            width: 500px;
            height: 480px;
            margin-left: -250px;  /***  width / 2   ***/
            position: absolute;
            display:block;
            vertical-align:middle;
            font-size:29px;
            color:#535559;
            text-align:center;
            text-shadow:0px 2px 1px #fff;
            top: -240px;          /***  height / 2   ***/
            left: 50%;
        }

        #inner a.me,
        #inner a.me:active,
        #inner a.me:visited,
        #inner a.me:hover {
            display:inline-block;
            width:60px;
            height:28px;

            font-size: 0;
            text-shadow: none;
            color: #294995;

            background: url("me.png") no-repeat;
            background-size: 60px 28px;

            vertical-align:middle;
            text-decoration:none;
        }

        #inner b, #inner a {
            font-weight:bold;
            color:#335fa1;
        }

        p {
            color:#a4a4a4;
            font-size:13px;
        }

        p a {
          text-decoration:none;
        }

        .alert {
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 2px solid transparent;
            border-radius: .25rem;
            font-size: 70%;
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }

        .twitter-share-button {
            opacity:0.5;
            margin-left:9px;
            margin-top:5px;
        }

        .twitter-share-button:hover {
            opacity:1;
        }

    </style>

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