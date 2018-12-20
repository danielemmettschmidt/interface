<html>
    <head>
        <title>Interface Demo</title>
        <style type="text/css" media="screen">
            body {
                background-color: #f8f8f8;
            }
        </style>
        <style>
        table.a {
          width: 100%;
          border-collapse: collapse;
          border: 0;
          font-family: "Neutral", Arial, Helvetica, sans-serif;
        }

        div.main
        {
          text-align: center;
        }
        div.center
        {
          text-align: center;
        }

        th {text-align: left;}
        form
        {
           font-family: "Neutral", Arial, Helvetica, sans-serif;
           display: inline;
        }
        </style>

        <style type="text/css">
            @font-face
            {
                font-family: "Neutral";
                src: url(https://s3.amazonaws.com/daniel.emmettschmidt.com/neutral.otf) format("opentype");
            }
            p.neutralfont
            { 
                font-family: "Neutral", Arial, Helvetica, sans-serif;
                display: inline;
            }
            p.a { 
                font-family: "Neutral", Arial, Helvetica, sans-serif;
                vertical-align: middle;
                padding:0;
                border:0;
                margin:0;
            }
            p.b { 
                font-family: "Neutral", Arial, Helvetica, sans-serif;
                display: inline;
                font-size:30px;
                line-height:35px;
                text-align: center;
                vertical-align: middle;
                padding:0;
                border:0;
                margin:0;
            }
            p.c { 
                font-family: "Neutral", Arial, Helvetica, sans-serif;
                display: inline;
                font-size:15px;
                line-height:35px;
                vertical-align: middle;
                padding:0;
                border:0;
                margin:0;
            }
            p.d { 
                font-family: "Neutral", Arial, Helvetica, sans-serif;
                display: inline;
                font-size:40px;
                line-height:50px;
                vertical-align: middle;
                padding:0;
                border:0;
                margin:0;
            }
            a:link { color: #000000; border-bottom: 1px dashed; text-decoration: none; }
        </style>
    </head>
    <body>
      <div class = "main">
        <div class = "center">
          <p class = "b">
            <b> 
              A GENERIC INTERFACE DEMO
            </b>
            <br> 
          </p>
        </div>
      <div class = "main">
        <div class = "center">
          <p class = "c">
            <?php
              include 'mainf.php';
              mainf();
            ?>
            <br> 
          </p>
        </div>
      </div>
    </body>
