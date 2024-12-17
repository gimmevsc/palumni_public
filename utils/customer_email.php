<?php
$languages = json_decode(file_get_contents('./customer_message.json'))->{$_POST['lang']};


$subject = $languages->subject;
$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
$main_message = $languages->message;



$customer_email = '
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color: rgba(0, 0, 0, 0);
            }
            h2{
                color: black;
            }
            .email-container {
                font-family: Arial, Helvetica, sans-serif;
                background-color: #369a8a8a; /* Light green background */
                padding: 20px;
            }
            
            .email-content {
                padding-left: 50px;
                background-color: #ffffff;
                padding: 10px;
            }
            .email-header {
                display: flex;
                align-items: center;
                margin-bottom: 50px;
            }
            .logo {
                height: 50px;
                width:50px;
                flex-shrink:0;
                margin-right: 10px;
            }
            .title {
                font-size: 30px;
                color: #2d8073;
                font-weight: bold;
            }
            .email-body {
                font-weight: bold;
                font-size: 16px;
                color: #4e4e4e;
                margin-bottom: 20px;
            }
            .verification-code {
                font-size: 18px;
                color: rgba(0, 117, 125, 0.90);
                font-weight: bold;
            }
            .footer {
                font-size: 12px;
                color: #666666;
                margin-top: 20px;
                text-align: center;
            }
            .email-description{
                color: rgb(75, 75, 75);
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <div class="email-container">
            <div class="email-content">
                <div class="email-header">
                    <img src="https://i.ibb.co/s9rFrzn/IMG-8171.png" alt="Palumni Logo" class="logo">
                    <div class="title">Palumni</div>
                </div>
                
                <div class="email-body">
                        '.$main_message.'
                </div>
            </div>
            <div class="footer">
                &copy; 2024 Palumni. All rights reserved.
            </div>
        </div>
    </body>
    </html>

'

?>