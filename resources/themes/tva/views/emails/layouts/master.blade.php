<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Newsletter Email</title>
        <style>
            @media only screen and (max-width: 620px) {
              table[class="body"] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
              }
              table[class="body"] p,
              table[class="body"] ul,
              table[class="body"] ol,
              table[class="body"] td,
              table[class="body"] span,
              table[class="body"] a {
                font-size: 14px !important;
              }
              table[class="body"] .wrapper,
              table[class="body"] .article {
                padding: 10px !important;
              }
              table[class="body"] .content {
                padding: 0 !important;
              }
              table[class="body"] .container {
                padding: 0 !important;
                width: 100% !important;
              }
              table[class="body"] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
              }
              table[class="body"] .btn table {
                width: 100% !important;
              }
              table[class="body"] .btn a {
                width: 100% !important;
              }
              table[class="body"] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
              }
            }

            @media all {
              .ExternalClass {
                width: 100%;
              }
              .ExternalClass,
              .ExternalClass p,
              .ExternalClass span,
              .ExternalClass font,
              .ExternalClass td,
              .ExternalClass div {
                line-height: 100%;
                color: #1b2c13;
              }
              .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
              }
              #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
              }
              .btn-primary table td:hover {
                background-color: #e9e9e1 !important;
              }
              .btn-primary a:hover {
                background-color: #e9e9e1 !important;
                border-color: #1b2c13 !important;
                color: #1b2c13 !important;
              }
            }
            .im {
                    color: #242424;
                }
            span.im{
                color: #242424;
            }
          </style>
    </head>

    <body
    class=""
    style="
      background: #e9e9e1;
      font-family: sans-serif;
      -webkit-font-smoothing: antialiased;
      text-size-adjust: 100%;
      font-variant-ligatures: contextual common-ligatures;
      font-feature-settings: 'kern' 1, 'liga' 1, 'calt' 1, 'cv10' 1;
      scroll-behavior: smooth;
      line-height: 1.4;
      margin: 0;
      padding: 0;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    "
  >
    <span
      class="preheader"
      style="
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
      "
      >Willkommen bei Tva</span
    >
    <table
      border="0"
      cellpadding="0"
      cellspacing="0"
      class="body"
      style="
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
        background-color: #e9e9e1;
      "
    >
      <tr>
        <td
          style="font-family: sans-serif; font-size: 14px; vertical-align: top"
        >
          &nbsp;
        </td>
        <td
          class="container"
          style="
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
            width: 580px;
            margin-top: 20px;
          "
        >
          <div
            class="content"
            style="
              box-sizing: border-box;
              display: block;
              margin: 0 auto;
              max-width: 580px;
              padding: 10px;
            "
          >


          <!-- heading -->
          {{ $header ?? '' }}
          <!-- text -->
          {{ $slot }}
          <!-- cta -->
          {{ $subcopy ?? '' }}


            <!-- START FOOTER -->
            <div
              class="footer"
              style="
                clear: both;
                margin-top: 10px;
                text-align: center;
                width: 100%;
              "
            >
              <table
                border="0"
                cellpadding="0"
                cellspacing="0"
                style="
                  border-collapse: separate;
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  width: 100%;
                "
              >
                <tr>
                  <td
                    class="content-block"
                    style="
                      font-family: sans-serif;
                      vertical-align: top;
                      padding-bottom: 10px;
                      padding-top: 10px;
                      font-size: 12px;
                      color: #7d7d73;
                      text-align: center;
                    "
                  >
                    <span
                      class="apple-link"
                      style="
                        color: #7d7d73;
                        font-size: 14px;
                        text-align: center;
                        text-transform: uppercase;
                      "
                      >www.tva-studio.de
                    </span>
                    <br />
                    <br />
                    <span
                      class="apple-link"
                      style="
                        color: #7d7d73;
                        font-size: 12px;
                        text-align: center;
                      "
                      ><strong>två studio</strong><br />
                      Diepenbrockstraße 11-13, 48145 Münster
                      Germany
                    </span>
                    <br />
                    <span
                    class="apple-link"
                    style="
                      color: #7d7d73;
                      font-size: 12px;
                      text-align: center;
                    "
                    ><strong>Paypal:</strong> två studio<br />
                    hello@tva-studio.de
                    </span>
                    <br />
                    <span
                    class="apple-link"
                    style="
                        color: #7d7d73;
                        font-size: 12px;
                        text-align: center;
                    "
                    ><strong>Bankverbindung:</strong><br />
                    IBAN: DE55 1001 7997 3397 2553 29 BIC: HOLVDEB1
                    </span>
                    <br />
                    <span
                    class="apple-link"
                    style="
                        color: #7d7d73;
                        font-size: 12px;
                        text-align: center;
                    "
                    ><strong>Steuernummer:</strong><br />
                    337/5072/2856 Finanzamt Münster
                    </span>
                    <br />
                    <span
                      class="apple-link"
                      style="
                        color: #7d7d73;
                        font-size: 12px;
                        text-align: center;
                      "
                      ><strong>Angaben gemäß § 5 TMG</strong><br />
                      ©två studio vertreten von Sina Folwaczny
                    </span>
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->
            <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td
          style="font-family: sans-serif; font-size: 14px; vertical-align: top"
        >
          &nbsp;
        </td>
      </tr>
    </table>
  </body>
</html>
