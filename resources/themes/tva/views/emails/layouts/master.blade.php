<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="https://fonts.googleapis.com/css?family=Inter:400,500" rel="stylesheet" type="text/css">
    </head>

    <style type="text/css">
        a,
        a:visited {
            color: #2A29201;
            text-decoration: none;
        }

        a:active,
        a:hover {
            color: #2A29201;
            // text-decoration: underline;
        }

        .touch a:active,
        .touch a:hover {
            text-decoration: none;
        }

    </style>

   <body style="font-family: Inter, Helvetica, Arial sans-serif;
                background: #e9e9e1!important;
                color: #2A29201!important;
                font-display: swap;
                font-size: 14px;
                letter-spacing: -0.01em;
                text-size-adjust: 100%;
                font-variant-ligatures: contextual common-ligatures;
                font-feature-settings: 'kern' 1, 'liga' 1, 'calt' 1, 'cv10' 1;
                scroll-behavior: smooth;
                overflow-x: hidden;
                font-weight: 500;
                text-transform: uppercase;">
        <div style="max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div style="text-align: center;">
                {{ $header ?? '' }}
            </div>

            <div>
                {{ $slot }}

                {{ $subcopy ?? '' }}
            </div>
        </div>
    </body>
</html>
