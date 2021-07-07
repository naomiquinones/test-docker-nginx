<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buddy Guide - Hello World</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet">
    <style type="text/css">
        html {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            height: 100%;
        }
        body {
            font-family: 'Droid Sans Mono', Consolas, "Courier New", monospace;
            box-sizing: border-box;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            color: #000;
            font-size: 16px;
        }
        .bg-black {
            background-color: #000;
            color: #fff;
        }
        .bg-blue {
            background-color: #003366;
            color: #fff;
        }
        .hello-world {
            font-size: 92px;
        }
        .hello-world span:first-child {
            color: #f92672;
        }
        .hello-world span:last-child {
            color: #a6e22e;
        }
    </style>
</head>
<body class="bg-blue">
    <p class="hello-world">&lt;<span>hello</span><span>-world</span> /&gt;</p>
    <?php echo "<p>".date("F j, Y, g:i a")."</p>"; ?>
</body>
</html>
