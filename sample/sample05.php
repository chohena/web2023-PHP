<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://webfontworld.github.io/onestore/OneMobilePop.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            padding: 20px;
        }
        li {
            list-style: none;
            margin: 4px 0;
        }
        a {
            text-decoration : none;
            color: #000;
            font-family: 'OneMobilePop';
        }
        main {
            display: flex;
            justify-content: space-between;
        }
        aside {
            width: 30%;
            background-color: #f5f5f5;
        }
        section {
            width: 70%;
        }
    </style>
</head>
<body>
    <main> 
        <aside>
            <?php
                include "aside.php";
            ?>
        </aside>
        <section>section5</section>
    </main>
</body>
</html>