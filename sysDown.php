<?php
/* the file i use when i need to hault a server for a little bit.
$link = $_SERVER['HTTP_HOST'];
$reasons = ['maintenance','optimization'];
$reason = $reasons[0] . ' & ' . $reasons[1];
$e='';

$e.="
        <html>
                <head>
                        <title>System Offline</title>
                </head>
                <center>
                        <div style='width:80%; background-color:#95a5a6; border:2px solid black; border-radius:10px; padding:10px; font-size:20px;'>
                                <h3>$link</h3> is down for $reason<br /><br />The site will be back up soon
                        </div>
                        <script>
                                window.setTimeout(function(){
                                        location.reload();
                                },5000);
                        </script>
                </center>
        </html>
";

echo $e;

