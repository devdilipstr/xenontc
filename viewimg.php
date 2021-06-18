<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
    <title><?php echo $_GET['id']?></title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
@media not print {
  .shrinkToFit {
    cursor: zoom-in;
  }

  .overflowingVertical, .overflowingHorizontalOnly {
    cursor: zoom-out;
  }
}

@media print {
  /* We must declare the image as a block element. If we stay as
  an inline element, our parent LineBox will be inline too and
  ignore the available height during reflow.
  This is bad during printing, it means tall image frames won't know
  the size of the paper and cannot break into continuations along
  multiple pages. */
  img {
    display: block;
  }
}

@media not print {
  body {
    margin: 0;
  }

  img {
    text-align: center;
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  img.overflowingVertical {
    /* If we're overflowing vertically, we need to set margin-top to
       0.  Otherwise we'll end up trying to vertically center, and end
       up cutting off the top part of the image. */
    margin-top: 0;
  }

  .completeRotation {
    transition: transform 0.3s ease 0s;
  }
}

@media not print {
  /* N.B.: Remember to update ImageDocument.css in the tree or reftests may fail! */

  body {
    color: #eee;
    background-image: url("chrome://global/skin/media/imagedoc-darknoise.png");
  }

  img.transparent {
    background: hsl(0,0%,90%) url("chrome://global/skin/media/imagedoc-lightnoise.png");
    color: #222;
  }
}

    </style>
</head>
<body>
    <div class="container">
        <img src="upload/<?php echo $_GET['id'];?>" alt="">
    </div>
</body>
</html>