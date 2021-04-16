@component('shop::emails.layouts.master')

<!-- START CENTERED WHITE CONTAINER -->
<table
class="main"
style="
  border-collapse: separate;
  mso-table-lspace: 0pt;
  mso-table-rspace: 0pt;
  width: 100%;
"
>
<!-- START MAIN CONTENT AREA -->
<tr>
  <td
    class="wrapper"
    style="
      font-family: sans-serif;
      font-size: 14px;
      vertical-align: top;
      box-sizing: border-box;
      padding: 20px;
      border-bottom: 1px solid #2a2920;
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
          style="
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
          "
        >
        <div style="text-align: center;">
        @include ('shop::emails.layouts.logo')
        </div>

          <p
            style="
              font-family: sans-serif;
              font-size: 22px;
              margin: 0;
              margin-bottom: 15px;
              text-align: center;
            "
          >
          {!! __('shop::app.mail.customer.verification.heading') !!}
          </p>
          <table
            border="0"
            cellpadding="0"
            cellspacing="0"
            class="btn btn-primary"
            style="
              border-collapse: separate;
              mso-table-lspace: 0pt;
              mso-table-rspace: 0pt;
              width: 100%;
              box-sizing: border-box;
            "
          >
            <tbody>
              <tr>
                <td
                  align="center"
                  style="
                    font-family: sans-serif;
                    font-size: 14px;
                    vertical-align: top;
                    padding-bottom: 15px;
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
                      width: auto;
                    "
                  >
                    <tbody>
                      <tr>
                        <td
                          style="
                            font-family: sans-serif;
                            font-size: 14px;
                            vertical-align: top;
                            background-color: #2a2920;
                            text-align: center;
                          "
                        >
                          <a
                            href="{{ route('customer.verify', $data['token']) }}"
                            target="_blank"
                            style="
                              width: 240px;
                              display: inline-block;
                              color: #e9e9e1;
                              background-color: #2a2920;
                              border: solid 1px #2a2920;
                              box-sizing: border-box;
                              cursor: pointer;
                              text-decoration: none;
                              font-size: 14px;
                              margin: 0;
                              justify-content: center;
                              padding: 12px 25px;
                              text-transform: capitalize;
                              border-color: #2a2920;
                            "
                            > {!! __('shop::app.mail.customer.verification.verify') !!}</a
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <p
            style="
              font-family: sans-serif;
              font-size: 14px;
              margin: 0;
              margin-bottom: 15px;
            "
          >
            Sie können auf diese E-Mail nicht antworten. Wenn Sie
            uns kontaktieren möchten, finden Sie unsere Daten
            hier. Für weitere Informationen über Ihre Bestellungen
            melden Sie sich bitte an Ihr Konto. Weitere
            Informationen über Ihre Bestellung erhalten Sie unter
            Datenschutzerklärung und Allgemeine
            Geschäftsbedingungen oder unter Kundenservice. Weitere
            Informationen über uns finden Sie unter
            Firmeninformationen. Wenn Sie mit Ihrem Kauf nicht
            ganz zufrieden sind, können Sie die Artikel innerhalb
            von 14 Tagen zurückschicken. Die Rücksendegebühr
            beträgt Always free returns. Weitere Informationen zur
            Rücksendung finden Sie unter Rückgabe- und
            Rückerstattungsbedingungen.
          </p>
          <p
            style="
              font-family: sans-serif;
              font-size: 14px;
              margin: 0;
              margin-bottom: 15px;
            "
          >
            Dein två studio Team :)
          </p>
        </td>
      </tr>
    </table>
  </td>
</tr>

<!-- END MAIN CONTENT AREA -->
</table>

@endcomponent





