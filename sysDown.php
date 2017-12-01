<?php
/* the file i use when i need to hault a server for a little bit.*/
$link = $_SERVER['HTTP_HOST'];
$reasons = ['maintenance','optimization','updates'];
$reason = $reasons[0] . ' & ' . $reasons[1];
$e='';

$e.="
        <html>
                <head>
                        <title>System Offline</title>
                </head>
                <style>
                        @import url('https://fonts.googleapis.com/css?family=Poppins:300,400');
                        body{
                                padding:0px;
                                margin:0px;
                        }
                        .title{
                                font-family:'Poppins',sans-serif;
                        }
                        .detail{
                                font-family:'Poppins',sans-serif;
                                font-weight:300;
                        }
                        .holder{
                                padding:25px;
                                border:2px solid rgba(0,0,0,0.5);
                                border-radius:10px;
                        }
                        .center{
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                        }
                </style>
                        <div class='center holder'>
                                <h3 class='title'><i>$link</i></h3><hr /><span class='detail'>Down for $reason<br />The site will be back soon</span>
                        </div>
                        <script>
                                window.setTimeout(function(){
                                        location.reload();
                                },5000);
                        </script>
        </html>
";

echo $e;
