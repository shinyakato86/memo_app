<?php

function getHeader($title) {
  return <<<EOF
  <head>
    <meta charset="utf-8" />
    <title>Memo App | {$title}</title>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="../public/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/main.css" />
    <script defer src="../public/js/all.js"></script>
  </head>
EOF;
}

?>
