<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <style>
        .display_blog{
            display: grid;
            width: 700px;
            margin: 0 auto;
            /*border: 1px solid red;*/
            /*padding: 15px;*/
        }
        .display_blog .binsidetitle{
            color: #2b6699;
        }
        .display_blog .btitle{
            font-size: 25px;
            font-family: "Lora", serif;
        }
        .display_blog .bdate{
            font-size: 13px;
            color: #2c3137;
            margin-top: -2px;
        }
        .display_blog .bcontent{
            width: 650px;
            margin: 0 auto;
            font-size: 15px;
            text-align: justify;
            line-height: 20px;
        }
        .display_blog .bauthor{
            margin-top: 12px;
            font-size: 20px;
            font-family: "Lora", serif;
            color: #6e66de;
        }
        .display_blog .bauthorname{
            font-size: 18px;
            font-family: "Sedan", serif;
            letter-spacing: 2px;
        }
        .display_blog .line{
            width: 730px;
            border: 1px solid black;
            margin-left: -25px;
        }
    </style>
</head>
<body>
    <div class="display_blog">
        <h1 style="text-align: center; font-family: 'Sedan', serif;">
            BLOG
        </h1>
        <?php
            $servername = "localhost";
            $username = "dckap";
            $password = "Dckap2023Ecommerce";
            $dbname = "blogdb";
            $con = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * FROM post WHERE blog_status = 'Updated'";
            $data = $con->query($sql);
            if ($data->num_rows > 0){
                while ($blogpage = $data->fetch_assoc()){
                    echo "<b class='btitle'>" . "<b class='binsidetitle'>Title: </b>" . $blogpage["blog_title"] . "</b>" .
                         "<p class='bdate'>" . $blogpage["blog_update"] . "</p>"  .
                         "<p class='bcontent'>" . $blogpage["blog_content"] . "</p>" .
                         "<b class='bauthor'>Written by</b>" . "<b class='bauthorname'>" . $blogpage["blog_author"] . "</b>".
                         "<hr class='line'>";
                }
            }
            else{
                echo  "0 results";
            }
        ?>
    </div>
</body>
</html>