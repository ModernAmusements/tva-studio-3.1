@extends('shop::layouts.masterBreadCrumb')

@section('page_title')
    {{ $page->page_title }}
@endsection

@section('seo')
    <meta name="title" content="{{ $page->meta_title }}" />

    <meta name="description" content="{{ $page->meta_description }}" />

    <meta name="keywords" content="{{ $page->meta_keywords }}" />
@endsection

@section('content-wrapper')


<div class="container-fluid">
    <div class="col-left">
    <div class="about-intro box">
    <p class="medium">Hallo, wir sind tv&aring; studio</p>
    <h2>ein multidisziplin&auml;res Keramik Design Duo aus M&uuml;nster. tv&aring; studio ist eine neue Plattform f&uuml;r handgefertigte und einzigartige Keramik mit Fokus auf Respekt f&uuml;r die Sch&ouml;nheit im Unvollkommenen.</h2>
    </div>
    <div class="about-nav box">
    <div class="btn-toggle" data-toggle="#refundPolicy">
    <h3>Tva-Studio</h3>
    </div>
    <div class="btn-toggle" data-toggle="#faq">
    <h3>FAQ</h3>
    </div>
    <div class="btn-toggle" data-toggle="#contact">
    <h3>Kontakt</h3>
    </div>
    <div class="btn-toggle" data-toggle="#returnPolicy">
    <h3>Versand &amp; R&uuml;ckgabe</h3>
    </div>
    <div class="btn-toggle" data-toggle="#datenschutz">
    <h3>Datenschutz</h3>
    </div>
    <div class="btn-toggle" data-toggle="#agb">
    <h3>AGB</h3>
    </div>
    </div>
    <div id="faq" class="popup popup-50">
    <div class="btn-close">close</div>
    <h2 class="singe-line">FAQ</h2>
    <div class="popup-content">
    <div class="col">
    <div class="tabs">
    <div class="tab"><input type="radio" id="rd1" name="rd" /> <label class="tab-label" for="rd1">Wann wird es neue tv&aring; Objekte geben?</label>
    <div class="tab-content">Ein Restock der Keramiken erfolgt Saisonal &ndash; es gibt eine Fr&uuml;hjahr, Sommer, Herbst &amp; Winter Kollektion.</div>
    </div>
    <div class="tab"><input type="radio" id="rd2" name="rd" /> <label class="tab-label" for="rd2">Der Artikel, den ich m&ouml;chte, ist ausverkauft. Wird es diesen nochmal geben?</label>
    <div class="tab-content">tv&aring; studio hat es sich zum Ziel gesetzt, die Einzigartigkeit der Keramik Objekte zu manifestieren, daher wird keines der Objekte 1:1 reproduziert. Jedes tv&aring; studio Objekt ist ein Unikat.<br />Tipp: Wenn du dich f&uuml;r den Newsletter anmeldest, erh&auml;ltst du E-Mail-Updates zum Launch der neuen Kollektionen und Aktionen. Somit wirst du nichts verpassen!</div>
    </div>
    <div class="tab"><input type="radio" id="rd3" name="rd" /> <label class="tab-label" for="rd3">Wie pflege ich meine Keramik?</label>
    <div class="tab-content">Wir fordern unsere Kunden/Kundinnen dringend auf, ihre Keramik von Hand in lauwarmem Wasser zu waschen. Sie sind zwar Sp&uuml;lmaschinenfest, jedoch ist das Waschen per Hand schonender als ein Geschirrsp&uuml;ler. Ein Geschirrsp&uuml;ler kann Glasuren dauerhaft besch&auml;digen und Verf&auml;rbungen verursachen. Wir empfehlen, Keramik bei kalten Temperaturen nicht im Freien zu lassen oder in Gefrierschr&auml;nke zu legen, da sie rei&szlig;en oder abplatzen kann. Alle Tassen, Schalen und Teller sind mikrowellengeeignet.</div>
    </div>
    <div class="tab"><input type="radio" id="rd4" name="rd" /> <label class="tab-label" for="rd4">Sind die Keramiken lebensmittelecht?</label>
    <div class="tab-content">Ja! Alle Tassen, Schalen, Teller und Tassen sind lebensmittelecht und du kannst sowohl hei&szlig;e, als auch kalte Getr&auml;nke daraus trinken. Unsere einzigen nicht lebensmittelechten Keramiken werden in der Produktinfo kenntlich gemacht und sind nur f&uuml;r dekorative Zwecke bestimmt.</div>
    </div>
    <div class="tab"><input type="radio" id="rd5" name="rd" /> <label class="tab-label" for="rd5">Kann ich meine Bestellung nach Abschluss der Transaktion nochmal &auml;ndern?</label>
    <div class="tab-content">Wenn du sofort eine E-Mail an hello@tva-studio.de sendest, k&ouml;nnen wir deine Bestellung in der Regel rechtzeitig vor dem Versand bearbeiten. Wenn wir deine E-Mail nicht rechtzeitig vor dem Versand erhalten, haften wir nicht f&uuml;r den Versand des urspr&uuml;nglich bestellten Artikels.</div>
    </div>
    <div class="tab"><input type="radio" id="rd6" name="rd" /> <label class="tab-label" for="rd6">Kann ich meine Bestellung verfolgen?</label>
    <div class="tab-content">Sobald deine Bestellung aus unserem Studio versendet wurde, solltest du eine E-Mail mit Tracking-Informationen erhalten. Wenn du innerhalb von 5 Werktagen nach deiner Bestellung keine Versandbest&auml;tigungs-E-Mail erhalten hast, wende dich bitte an hello@tva-studio.de</div>
    </div>
    <div class="tab"><input type="radio" id="rd7" name="rd" /> <label class="tab-label" for="rd7">Ich habe bei Erhalt der Sendung einen zerbrochenen/kaputten Artikel in meiner Bestellung erhalten. Wie soll ich vorgehen?</label>
    <div class="tab-content">Wir verpacken jede Sendung mit &auml;u&szlig;erster Sorgfalt, aber w&auml;hrend des Transports k&ouml;nnen immer noch Br&uuml;che auftreten, obwohl dies selten vorkommt. Wenn du einen kaputten Artikel erhalten hast, senden Sie sofort eine E-Mail an hello@tva-studio.de damit wir einen Ersatz f&uuml;r dich erstellen und einen Anspruch beim entsprechenden Versand-Dienstleister geltend machen k&ouml;nnen. * Wichtig: Bitte mache unbedingt Fotos des besch&auml;digten Artikels und der Verpackung (Innen- und Au&szlig;enfotos) *. Bitte beachte Au&szlig;erdem, dass du m&ouml;glicherweise Z&ouml;lle / Steuern f&uuml;r den Ersatz zur&uuml;ckzahlen m&uuml;ssen.</div>
    </div>
    <div class="tab"><input type="radio" id="rd8" name="rd" /> <label class="tab-label" for="rd8">Warum sind die Versandkosten h&ouml;her als erwartet?</label>
    <div class="tab-content">F&uuml;r den Versand zerbrechlicher, schwerer Keramiken sind zus&auml;tzliche Schutzverpackungsmaterialien sowie gr&ouml;&szlig;ere Kartons erforderlich. Die Versandkosten werden basierend auf dem Bestimmungsort, der Kartongr&ouml;&szlig;e und dem Gesamtgewicht des Pakets generiert. Diese Kosten ber&uuml;cksichtigen auch die Zeit, die zum sorgf&auml;ltigen Verpacken jeder Bestellung ben&ouml;tigt wird, und die Kosten f&uuml;r den Kauf lokaler Verpackungsmaterialien.</div>
    </div>
    <div class="tab"><input type="radio" id="rd9" name="rd" /> <label class="tab-label" for="rd9">Muss ich zus&auml;tzlich zu meiner Bestellung Z&ouml;lle oder Steuern zahlen?</label>
    <div class="tab-content">tv&aring; studio befindet sich in Deutschland. Je nachdem, wo du wohnst, musst m&ouml;glicherweise Z&ouml;lle oder Steuern zahlen. Wir haften nicht f&uuml;r diese Geb&uuml;hren und sie k&ouml;nnen von tv&aring; studio nicht erstattet werden.</div>
    </div>
    <div class="tab"><input type="radio" id="rd10" name="rd" /> <label class="tab-label" for="rd10">Auf meinem Paket steht "geliefert", aber ich habe es noch nicht erhalten?</label>
    <div class="tab-content">Es gibt einige Schritte, mit denen du feststellen kannst, wo sich dein Paket befindet: Wende dich an deinen &ouml;rtlichen Postdienst und bitte um ein direktes Gespr&auml;ch mit jemandem. Sie haben m&ouml;glicherweise weitere Informationen dar&uuml;ber, wo es zur&uuml;ckgelassen wurde. Hat einer der Nachbarn eventuell das Paket entgegengenommen? Ist dein Postablagebereich sicher? Werden Pakete bei dir unbeaufsichtigt gelassen? Wenn du die oben genannten Schritte ohne Erfolg ausgef&uuml;hrt hast, kontaktiere uns bitte unter hello@tva-studio.de damit wir auf unserer Seite einen Anspruch geltend machen k&ouml;nnen. Bitte beachte, dass tv&aring; studio nicht f&uuml;r gestohlene oder unbeaufsichtigte Pakete haftet oder verantwortlich ist. Erst nachdem wir eine R&uuml;ckerstattung von dem Versanddienstleister erhalten haben, k&ouml;nnen wir dir einen Ersatz zusenden.</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id="returnPolicy" class="popup popup-50">
    <div class="btn-close">close</div>
    <h2 class="singe-line">Versand &amp; R&uuml;ckgabe</h2>
    <div class="popup-content-text">
    <h3>Bitte Beachten Sie (Covid-19.Ank&uuml;ndigung):</h3>
    <p>Im Rahmen unserer COVID-19-Antwort erlauben wir derzeit keinen Umtausch oder R&uuml;ckgabe. Bestellungen, die w&auml;hrend dieser Zeit gekauft wurden, k&ouml;nnen sich aufgrund von Betriebsunterbrechungen aufgrund lokaler Vorschriften in Bezug auf Covid-19 verz&ouml;gern. Wir bedanken uns f&uuml;r Ihre Geduld und Ihr Verst&auml;ndnis zu diesem Zeitpunkt.</p>
    <h3>Internationaler Versand / Zoll</h3>
    <p>Wir versenden weltweit! Die internationalen Versandpreise variieren je nach Land und Gewicht Ihrer Bestellung. Die Zollgeb&uuml;hren sind f&uuml;r jedes Land unterschiedlich.</p>
    <p>1. Der K&auml;ufer erkl&auml;rt sich damit einverstanden, dass er f&uuml;r alle Z&ouml;lle, Steuern und Kosten verantwortlich ist, die mit dem Import von Produkten verbunden sind, die bei internationalem Versand bei uns gekauft wurden. Alle Steuern und Abgaben liegen in der alleinigen Verantwortung des K&auml;ufers. Diese Geb&uuml;hren sind nicht in den Versandkosten enthalten.</p>
    <p>2. Alle Bestellungen innerhalb Deutschlands werden per DHL verschickt. Alle internationalen Bestellungen k&ouml;nnen je nach Land variieren</p>
    <p>3. Die Bearbeitungszeit f&uuml;r alle versandfertigen Standardbestellungen betr&auml;gt ca. 1-3 Werktage.</p>
    <p>4. Nachverfolgungsinformationen und Versicherungen werden mit jeder Bestellung bereitgestellt, obwohl der K&auml;ufer alle Verantwortung &uuml;bernimmt, sobald die Bestellung unsere R&auml;umlichkeiten verlassen hat.</p>
    <p>5. Wenn ein Paket beim Versand verloren geht, gestohlen oder besch&auml;digt wird, muss eine Reklamation beim verwendeten Versanddienstleister eingereicht werden und nicht bei tv&aring; studio. Wenn ein Paket anzeigt, dass es &uuml;ber die Sendungsverfolgungsnummer geliefert wurde und der Kunde sein Paket nicht finden kann, ist tv&aring; studio nicht verantwortlich und stellt keine R&uuml;ckerstattung oder Gutschrift aus. Die von jedem Vertrag abgedeckten Produkte (d. H. Akzeptierte Bestellungen) unterliegen Ihrem Risiko bei Lieferung der Bestellung an den Spediteur. tv&aring; studio kann nicht f&uuml;r versp&auml;tete oder fehlende Lieferungen verantwortlich gemacht werden.</p>
    <p>6. In dem unwahrscheinlichen Fall, dass ein Artikel w&auml;hrend des Versands besch&auml;digt wird, senden Sie bitte direkt bei der Ankunft eine E-Mail, um eine R&uuml;ckerstattung oder einen Ersatz zu arrangieren. Alle R&uuml;cksendekosten gehen zu Lasten des K&auml;ufers. Sollten Sie feststellen, dass Ihr Artikel bei Ihrer Ankunft besch&auml;digt ist, machen Sie bitte ein Foto, das zeigt, wie er Ihnen geliefert wurde, bevor Sie uns schreiben.</p>
    <p>7. Pakete, die abgelehnt oder zur&uuml;ckgesandt werden, unterliegen unserer Wiederauff&uuml;llungsgeb&uuml;hr von 10% pro Artikel. Als kleines Unternehmen sind Zeit, Arbeit und Material, die zur Erf&uuml;llung eines Auftrags beitragen, wichtige Ressourcen. Die Wiederauff&uuml;llungsgeb&uuml;hr tr&auml;gt zur Bearbeitung von Bestellungen und zum sorgf&auml;ltigen und zeitnahen Kundenservice bei.</p>
    </div>
    </div>
    <div id="refundPolicy" class="popup popup-50">
    <div class="btn-close">close</div>
    <h2 class="singe-line">Tva-Studio</h2>
    <div class="popup-content-text">
    <h3>Hallo, wir sind två studio – ein multidisziplinäres Keramik Design Studio aus Münster.</h3>
    <p>två studio ist eine neue Plattform für handgefertigte und einzigartige Keramik mit Fokus auf</p>
    <p>Respekt für die Schönheit im Unvollkommenen. Wir sind davon überzeugt, dass der Gedanke, etwas zu besitzen, dass es nur ein einziges Mal gibt, das Leben im Zeitalter der Reproduzierbarkeit berühren und bereichern kann.</p>
    <p>Deshalb wird jedes unserer handgefertigten Stücke ein Unikat. Da Ton ein Teil der Natur ist, möchten wir Bewusstsein für den Ursprung dieser Handwerkskunst und die einzigartigen und zeitlosen Eigenschaften, die darin liegen, schaffen.</p>
    </div>
    </div>
    <div id="contact" class="popup popup-50 text-s">
    <div class="btn-close">close</div>
    <h2 class="singe-line">Kontakt</h2>
    <div class="popup-content-text">
    <h3>Tva-Studio Münster</h3>
    <p>Tva Studio<br /> Diepenbrockstra&szlig;e 11-13<br /> 48145 M&uuml;nster Germany<br /> T: +49 171 283 38 483<br /> @: hello@tva-studio.de</p>
    </div>
    </div>
    <div id="datenschutz" class="popup popup-50">
    <div class="btn-close">close</div>
    <h2 class="singe-line">Datenschutz</h2>
    <div class="popup-content-text">
    <p>Wir freuen uns über Ihr Interesse an unserer Website. Der Schutz Ihrer Privatsphäre ist für uns sehr wichtig. Nachstehend informieren wir Sie ausführlich über den Umgang mit Ihren Daten.</p>
    <h3>Speicherung von Zugriffdaten in Server-Logfiles</h3>
    <p>Sie können unsere Webseiten besuchen, ohne Angaben zu Ihrer Person zu machen. Wir speichern lediglich Zugriffsdaten in sogenannten Server-Logfiles, wie z.B. den Namen der angeforderten Datei, Datum und Uhrzeit des Abrufs, übertragene Datenmenge und den anfragenden Provider. Diese Daten werden ausschließlich zur Sicherstellung eines störungsfreien Betriebs der Seite und zur Verbesserung unseres Angebots ausgewertet und erlauben uns keinen Rückschluss auf Ihre Person.</p>
    <h3>Datenerhebung und ‑Verwendung zur Vertragsabwicklung und bei Eröffnung eines Kundenkontos</h3>
    <p>Wir erheben, speichern und verarbeiten Ihre Daten für die Bestellabwicklung Ihres Kaufs und eventuelle spätere Gewährleistungsabwicklung. Personenbezogene Daten werden erhoben, wenn Sie uns diese im Rahmen Ihrer Warenbestellung oder bei Eröffnung eines Kundenkontos oder bei der Registrierung zum Newsletter freiwillig mitteilen.</p>
    <p>Welche Daten erhoben werden, ist aus den jeweiligen Eingabeformularen ersichtlich.</p>
    <p>Bei Anmeldung zum Newsletter wird Ihre E‑Mail-Adresse für eigene Werbezwecke genutzt, bis Sie sich vom Newsletter abmelden. Die Abmeldung ist jederzeit über einen dafür vorgesehenen Link im Newsletter möglich.</p>
    <p>Eine Weitergabe Ihrer personenbezogenen Daten erfolgt von uns im Rahmen der Ausführung des Auftrags eingesetzte Dienstleister (Transporteur, Logistiker, Zahlungsdienstleister, Banken).</p>
    <p>Nach vollständiger Abwicklung des Vertrages oder Löschung Ihres Kundenkontos werden Ihre Daten für die weitere Verwendung gesperrt und nach Ablauf der steuer- und handelsrechtlichen Aufbewahrungsfristen gelöscht, sofern Sie nicht ausdrücklich in eine weitere Nutzung Ihrer Daten eingewilligt haben oder wir uns eine darüber hinausgehende Datenverwendung vorbehalten, die gesetzlich erlaubt ist und über die wir Sie nachstehend informieren. Die Löschung Ihres Kundenkontos ist jederzeit möglich und kann über eine dafür vorgesehene Funktion im Kundenkonto erfolgen.</p>
    <h3>Anmeldung zum E‑mail-Newsletter</h3>
    <p>Wenn Sie sich gesondert zum Newsletter angemeldet haben, wird Ihre E‑Mail-Adresse für eigene Werbezwecke genutzt. Ihnen wird regelmäßig ein E‑Mail-Newsletter zugesandt, bis Sie sich vom Newsletter abmelden. Die Abmeldung ist jederzeit möglich, ohne dass Ihnen hierfür andere als die Übermittlungskosten nach den Basistarifen Ihres Zugangsanbieters entstehen.</p>
    <h3>Verwendung von Cookies</h3>
    <p>Um den Besuch unserer Website attraktiv zu gestalten und die Nutzung bestimmter Funktionen zu ermöglichen, verwenden wir auf verschiedenen Seiten sogenannte Cookies. Hierbei handelt es sich um kleine Textdateien, die auf Ihrem Endgerät abgelegt werden. Einige der von uns verwendeten Cookies werden nach dem Ende der Browser-Sitzung, also nach Schließen Ihres Browsers, wieder gelöscht (sog. Sitzungs-Cookies). Andere Cookies verbleiben auf Ihrem Endgerät und ermöglichen uns oder unseren Partnerunternehmen, Ihren Browser beim nächsten Besuch wiederzuerkennen (persistente Cookies).</p>
    <p>Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und einzeln über deren Annahme entscheiden oder die Annahme von Cookies für bestimmte Fälle oder generell ausschließen. Bei der Nichtannahme von Cookies kann die Funktionalität unserer Website eingeschränkt sein.</p>
    <h3>Datensicherheit</h3>
    <p>Ihre Zahlungsdaten werden im Bestellprozess verschlüsselt über das Internet übertragen. Wir sichern unsere Website und sonstigen Systeme durch technische und organisatorische Maßnahmen gegen Verlust, Zerstörung, Zugriff, Veränderung und Verbreitung Ihrer Daten durch unbefugte Personen. Sie sollten Ihre Zugangsinformationen stets vertraulich behandeln und das Browserfenster schließen, wenn Sie die Kommunikation mit uns beendet haben, insbesondere wenn Sie den Computer gemeinsam mit anderen nutzen. Wir speichern den Vertragstext und senden Ihnen die Bestelldaten und unsere AGB per E‑Mail zu. Die AGB können Sie jederzeit auch hier einsehen. Ihre vergangenen Bestellungen können Sie in unserem Kunden-Login-Bereich einsehen.</p>
    <h3>Einsatz von Google Analytics zur Webanalyse</h3>
    <p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (“ Google”). Google Analytics verwendet sog. “Cookies “, Textdateien, die auf Ihrem Computer gespeichert werden, um die Benutzung der Website analysieren zu können. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) werden an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung wird Google abschneiden / anonymisieren das letzte Oktett der IP-Adresse für die Mitgliedstaaten der Europäischen Union sowie in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum. Nur in Ausnahmefällen wird die volle IP-Adresse gesendet und Server von Google in den USA verkürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen zum Zwecke der Auswertung Ihrer Websitenutzung benutzen, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere Dienstleistungen im Zusammenhang mit der Websitenutzung und der Internetnutzung an den Anbieter der Website zu leiten. Google wird Ihre IP-Adresse nicht mit anderen Daten von Google zusammenführen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern. Beachten Sie jedoch, dass, wenn Sie dies tun, sind Sie nicht in der Lage, die volle Funktionalität dieser Website nutzen können. Darüber hinaus können Sie die Google-Sammlung und Nutzung von Daten (Cookies und IP-Adresse) durch das Herunterladen und die Installation der Browser-Plug-in unter [https://tools.google.com/dlpage/gaoptout?hl=en-GB](https://tools.google.com/dlpage/gaoptout?hl=en-GB) verhindern.</p>
    <p>Bitte beachten Sie, dass auf dieser Webseite Google Analytics um den Code ergänzt ” gat._anonymizeIp ();”, um eine anonymisierte Erfassung von IP-Adressen (sog. IP-Masking) zu gewährleisten.</p>
    <h3>Auskunftsrecht und Kontaktmöglichkeit</h3>
    <p>Sie haben ein Recht auf unentgeltliche Auskunft über die bei uns zu Ihrer Person gespeicherten Daten sowie ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Bei Fragen zur Erhebung, Verarbeitung oder Nutzung Ihrer personenbezogenen Daten, bei Auskünften, Berichtigung, Sperrung oder Löschung von Daten sowie Widerruf erteilter Einwilligungen oder Widerspruch gegen eine bestimmte Datenverwendung wenden Sie sich bitte direkt an uns über die Kontaktdaten in unserem Impressum.</p>
    </div>
    </div>
    <div id="agb" class="popup popup-50">
    <div class="btn-close">close</div>
    <h2 class="singe-line">AGB</h2>
    <div class="popup-content-text">
    <p>Für alle Bestellungen über unseren Online-Shop gelten die nachfolgenden AGB.</p>
    <h3>Geltung, Begriffsdefinitionen</h3>
    <p>(1) två studio vertreten durch Sina Folwaczny (im Folgenden: „wir“ oder „två studio“) betreibt unter der Webseite https://www.tva-studio.com einen Online-Shop für keramische Erzeugnisse. Die nachfolgenden allgemeinen Geschäftsbedingungen gelten für alle Leistungen zwischen uns und unseren Kunden (im Folgenden: „Kunde“ oder „Sie“) in ihrer zum Zeitpunkt der Bestellung gültigen Fassung, soweit nicht etwas anderes ausdrücklich vereinbart wurde.</p>
    <h3>Vertragspartner, Vertragsschluss</h3>
    <p>Der Kaufvertrag kommt zustande mit två studio. Mit Einstellung der Produkte in den Online-Store geben wir ein verbindliches Angebot zum Vertragsschluss über diese Artikel ab.</p>
    <h3>Hinweis</h3>
    <p>Die in unserem Online-Store angebotenen Waren sind auf digitalen Fotografien von den real existierenden Waren dargestellt. Geringfügige Abweichungen zwischen Darstellung und Wirklichkeit stellen keinen Mangel der bestellten Ware dar. Unsere Waren sind handgefertigt. Somit sind Abweichungen in Form, Größe und Farbe fester Bestandteil der Waren und stellen keinen Mangel der bestellten Ware dar.<br/>Sie können unsere Produkte zunächst unverbindlich in den Warenkorb legen und Ihre Eingaben vor Absenden Ihrer verbindlichen Bestellung jederzeit korrigieren, indem Sie die hierfür im Bestellablauf vorgesehenen und erläuterten Korrekturhilfen nutzen. Der Vertrag kommt zustande, indem Sie durch Anklicken des Bestellbuttons das Angebot über die im Warenkorb enthaltenen Waren annehmen. Unmittelbar nach dem Absenden der Bestellung erhalten Sie noch einmal eine Bestätigung per E‑Mail.</p>
    <h3>Vertragssprache, Vertragstextspeicherung</h3>
    <p>Die für den Vertragsschluss zur Verfügung stehenden Sprache ist Deutsch. Wir speichern den Vertragstext und senden Ihnen die Bestelldaten und unsere AGB per E‑Mail zu. Die AGB können Sie jederzeit auch hier auf dieser Seite einsehen.</p>
    <h3>Lieferbedingungen</h3>
    <p>Zuzüglich zu den angegebenen Produktpreisen in Euro inkl. MwSt. kommen noch Versandkosten hinzu. Näheres zur Höhe der Versandkosten erfahren Sie unter Versand und Retouren.</p>
    <h3>Lieferbedingungen</h3>
    <p>Alle auf der Website angegebenen Preise sind in Euro (€) angegebn</p>
    <p>PayPal: Im Bestellprozess werden Sie auf die Webseite des Online-Anbieters PayPal weitergeleitet. Um den Rechnungsbetrag über PayPal bezahlen zu können, müssen Sie dort registriert sein bzw. sich erst registrieren, mit Ihren Zugangsdaten legitimieren und die Zahlungsanweisung an uns bestätigen. Nach Abgabe der Bestellung im Shop fordern wir PayPal zur Einleitung der Zahlungstransaktion auf. Weitere Hinweise erhalten Sie beim Bestellvorgang. Die Zahlungstransaktion wird durch PayPal unmittelbar danach automatisch durchgeführt.</p>
    <h3>Eigentumsvorbehalt</h3>
    <p>Die Ware bleibt bis zur vollständigen Bezahlung unser Eigentum.</p>
    <h3>Transportschäden</h3>
    <p>Werden Waren mit offensichtlichen Transportschäden angeliefert, so reklamieren Sie solche Fehler bitte sofort beim jeweiligen Zusteller und nehmen Sie bitte unverzüglich Kontakt zu uns auf. Die Versäumung einer Reklamation oder Kontaktaufnahme hat für Ihre gesetzlichen Ansprüche und deren Durchsetzung, insbesondere Ihre Gewährleistungsrechte, keinerlei Konsequenzen. Sie helfen uns aber, unsere eigenen Ansprüche gegenüber dem Frachtführer bzw. der Transportversicherung geltend machen zu können. Ebenso verpflichten Sie sich, Fotos vom entstandenen Schaden an hello@tva-studio.com zu senden.</p>
    <h3>Gewährleistung und Garantien</h3>
    <p>Soweit nicht nachstehend ausdrücklich anders vereinbart, gilt das gesetzliche Mängelhaftungsrecht. Die Verjährungsfrist für Mängelansprüche beträgt bei gebrauchten Sachen ein Jahr ab Ablieferung der Ware. Die vorstehenden Einschränkungen und Fristverkürzungen gelten nicht für Ansprüche aufgrund von Schäden, die durch uns, unsere gesetzlichen Vertreter oder Erfüllungsgehilfen verursacht wurden bei Verletzung des Lebens, des Körpers oder der Gesundheit, bei vorsätzlicher oder grob fahrlässiger Pflichtverletzung sowie Arglist, bei Verletzung wesentlicher Vertragspflichten, deren Erfüllung die ordnungsgemäße Durchführung des Vertrages überhaupt erst ermöglicht und auf deren Einhaltung der Vertragspartner regelmäßig vertrauen darf (Kardinalpflichten) im Rahmen eines Garantieversprechens, soweit vereinbart oder soweit der Anwendungsbereich des Produkthaftungsgesetzes eröffnet ist. Informationen zu gegebenenfalls geltenden zusätzlichen Garantien und deren genaue Bedingungen finden Sie jeweils beim Produkt und auf besonderen Informationsseiten im Onlineshop.</p>
    <h3>Haftung</h3>
    <p>Für Ansprüche aufgrund von Schäden, die durch uns, unsere gesetzlichen Vertreter oder Erfüllungsgehilfen verursacht wurden, haften wir stets unbeschränkt bei Verletzung des Lebens, des Körpers oder der Gesundheit, bei vorsätzlicher oder grob fahrlässiger Pflichtverletzung, bei Garantieversprechen, soweit vereinbart, oder soweit der Anwendungsbereich des Produkthaftungsgesetzes eröffnet ist. Bei Verletzung wesentlicher Vertragspflichten, deren Erfüllung die ordnungsgemäße Durchführung des Vertrages überhaupt erst ermöglicht und auf deren Einhaltung der Vertragspartner regelmäßig vertrauen darf, (Kardinalpflichten) durch leichte Fahrlässigkeit von uns, unseren gesetzlichen Vertretern oder Erfüllungsgehilfen ist die Haftung der Höhe nach auf den bei Vertragsschluss vorhersehbaren Schaden begrenzt, mit dessen Entstehung typischerweise gerechnet werden muss. Im Übrigen sind Ansprüche auf Schadensersatz ausgeschlossen.</p>
    <h3>Streitbeilegung</h3>
    <p>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die Sie hier finden http://ec.europa.eu/consumers/odr/. Zur Teilnahme an einem Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle sind wir nicht verpflichtet und nicht bereit.</p>
    <h3>Datenschutz</h3>
    <p>Sie stimmen unserer Datenschutzerklärung ausdrücklich zu.</p>
    <h3>Widerrufsbelehrung</h3>
    <p>Sie haben unsere Widerrufsbelehrung gelesen.</p>
    <h3>Schlussbestimmung</h3>
    <p>Es gilt ausdrücklich deutsches Recht, auch im grenzüberschreitenden Lieferverkehr.</p>
    </div>
    </div>
    </div>
    <div class="col-right">
    <div class="box main-about">
    <div class="about-heading">
    <h1 class="singe-line">Hallo, wir sind das Tva-Studio</h1>
    </div>
    <img class="border-t border-b" src="../../../themes/tva/assets/images/tva-team.png" /></div>
    </div>
    </div>


@endsection