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

        .twitter-share-button {
            opacity:0.5;
            margin-left:9px;
            margin-top:5px;
        }

        .twitter-share-button:hover {
            opacity:1;
        }

    </style>

</head>

<body>
<div id="outer">
  <div id="inner">
    I'm a <b><?php echo $isHorz ? 'horizontal' : 'vertical'; ?></b> separator.
    Drag <a class="me" href="" title="Drag me!"><?php echo $isHorz ? '───────────' : ''; ?></a> to your bookmarks <em><?php echo $isHorz ? 'folders' : 'toolbar'; ?></em>.<br><br>

    For a <b><?php echo $isHorz ? 'vertical' : 'horizontal'; ?></b> separator, click <a href="<?php echo $isHorz ? 'index.php' : 'index.php?t=horz'; ?>">here</a>.

    <br><br><b>:)</b><br><br><br>

    <p>
      Made by <a href="http://www.twitter.com/manski83" target="_blank">@manski83</a>,<br>
      based on work by <a href="http://www.twitter.com/VorteXLP" target="_blank">@VorteXLP</a><br>
      <a href="http://twitter.com/share" class="twitter-share-button" data-text="Do you want separators in your Chrome bookmarks? Check this out! #tweettip" data-count="horizontal" data-via="manski83" data-url="http://separator.mayastudios.com/">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    </p>
  </div>
</div>
</body>

</html>