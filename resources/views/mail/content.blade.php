<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    </head>
    <body class="body">
        
        <div style="background-color: #ff9e1e; width: 100%; height: 100px; margin: 0px;">
        </div>
        
        <div style="padding: 20px; font-size:16px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; ">
            Ciao, sei stato contattato da <span style="font-weight: 700">{{ $content['name'] }}</span>, con la email <span style="font-weight: 700">{{ $content['email'] }}</span>.
        </div>
        <div style="padding: 20px; font-size:16px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; ">
            Il suo messaggio è: <span style="font-style: italic; font-weight: 200">{{ $content['description'] }}</span>
        </div>
    </body>
    </html>