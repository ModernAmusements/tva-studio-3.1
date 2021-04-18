<?php

return [
    'invalid_vat_format' => 'The given vat id has a wrong format',
    'security-warning' => 'Suspicious activity found!!!',
    'nothing-to-delete' => 'Nothing to delete',

    'layouts' => [
        'my-account' => 'Mein Konto',
        'profile' => 'Profile',
        'address' => 'Adresse',
        'reviews' => 'Bewertungen',
        'wishlist' => 'Wishlist',
        'orders' => 'Bestellungen',
        'downloadable-products' => 'Produkte zum Herunterladen'
    ],

    'common' => [
        'error' => 'Etwas ist schief gelaufen, bitte versuchen Sie es später noch einmal.',
        'no-result-found' => 'Wir konnten keine Aufzeichnungen finden.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Home',
        'featured-products' => 'Produkte der Sommerkollektion 2021',
        'new-products' => 'Produkte der Winterkollektion 2021',
        'verify-email' => 'Überprüfen Sie Ihr E-Mail-Konto',
        'resend-verify-email' => 'Verifizierungs-E-Mail erneut senden'
    ],

    'header' => [
        'title' => 'Konto',
        'dropdown-text' => 'Manage Cart, Orders & Wishlist',
        'sign-in' => 'Anmelden',
        'sign-up' => 'Registrieren',
        'account' => 'Account',
        'cart' => 'Warenkorb',
        'profile' => 'Profile',
        'wishlist' => 'Wishlist',
        'cart' => 'Cart',
        'logout' => 'Abmelden',
        'search-text' => 'Search products here'
    ],

    'minicart' => [
        'view-cart' => 'Warenkorb anzeigen',
        'checkout' => 'Kasse',
        'cart' => 'Cart',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Newsletter abonnieren',
        'subscribe' => 'Abonnieren',
        'locale' => 'Locale',
        'currency' => 'Currency',
    ],

    'subscription' => [
        'unsubscribe' => 'Abbestellen',
        'subscribe' => 'Abonnieren',
        'subscribed' => 'Sie sind nun für Abonnement-E-Mails angemeldet.',
        'not-subscribed' => 'Sie können keine Abonnement-E-Mails erhalten, bitte versuchen Sie es später noch einmal.',
        'already' => 'Sie sind bereits in unserer Abonnentenliste eingetragen.',
        'unsubscribed' => 'Sie sind von den Abo-Mails abgemeldet.',
        'already-unsub' => 'Sie sind bereits abgemeldet.',
        'not-subscribed' => 'Fehler! Mail kann derzeit nicht gesendet werden, bitte versuchen Sie es später noch einmal.'
    ],

    'search' => [
        'no-results' => 'Keine Ergebnisse gefunden',
        'page-title' => config('app.name') . ' - Search',
        'found-results' => 'Suchergebnisse gefunden',
        'found-result' => 'Suchergebnis gefunden'
    ],

    'reviews' => [
        'title' => 'Title',
        'add-review-page-title' => 'Add Review',
        'write-review' => 'Write a review',
        'review-title' => 'Give your review a title',
        'product-review-page-title' => 'Product Review',
        'rating-reviews' => 'Rating & Reviews',
        'submit' => 'SUBMIT',
        'delete-all' => 'All Reviews has deleted Succesfully',
        'ratingreviews' => ':rating Ratings & :review Reviews',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Name',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Sie haben bereits ein Konto',
            'title' => 'Anmelden - Tva Studio'
        ],

        'signup-form' => [
            'page-title' => 'Neues Kundenkonto anlegen',
            'title' => 'Anmelden',
            'firstname' => 'Vorname',
            'lastname' => 'Nachname',
            'email' => 'Email',
            'password' => 'Passwort',
            'confirm_pass' => 'Passwort bestätigen',
            'button_title' => 'Registrieren',
            'agree' => 'Zustimmen',
            'terms' => 'Bedingungen',
            'conditions' => 'Konditionen',
            'using' => 'der Nutzung dieser Website',
            'agreement' => 'Vereinbarung',
            'success' => 'Konto erfolgreich erstellt.',
            'success-verify' => 'Konto erfolgreich erstellt, eine E-Mail zur Verifizierung wurde gesendet.',
            'success-verify-email-unsent' => 'Konto erfolgreich erstellt, aber Bestätigungs-E-Mail nicht gesendet.',
            'failed' => 'Fehler! Ihr Konto kann nicht erstellt werden, bitte versuchen Sie es später erneut.',
            'already-verified' => 'Ihr Konto ist bereits verifiziert Oder versuchen Sie bitte erneut, eine Verifizierungs-E-Mail zu senden.',
            'verification-not-sent' => 'Fehler! Problem beim Senden der Bestätigungs-E-Mail, bitte versuchen Sie es später erneut.',
            'verification-sent' => 'Verifizierungs-E-Mail gesendet',
            'verified' => 'Ihr Konto wurde verifiziert, versuchen Sie jetzt, sich anzumelden.',
            'verify-failed' => 'Wir können Ihr Mailkonto nicht verifizieren.',
            'dont-have-account' => 'Sie haben kein Konto bei uns.',
            'customer-registration' => 'Kunde erfolgreich registriert',
            'invalid-email' => 'Diese Email ist ungültig',
            'invalid-name' => 'Das Feld Vorname ist erforderlich',
            'invalid-lastname' => 'Das Feld Nachname ist erforderlich',
            'invalid-password' => 'Das Feld Passwort ist erforderlich',
            'invalid-match' => 'Die Passwörter stimmen NICHT überein!',
            'invalid-agreement' => 'Das Feld Vereinbarung ist erforderlich',
        ],

        'login-text' => [
            'no_account' => 'Sie haben kein Konto?',
            'title' => 'Hier registrieren!',
        ],

        'login-form' => [
            'page-title' => 'Kunden-Login - Tva Studio',
            'title' => 'Anmelden',
            'email' => 'Email',
            'password' => 'Passwort',
            'forgot_pass' => 'Passwort vergessen?',
            'button_title' => 'Anmelden',
            'remember' => 'Passwort merken',
            'footer' => '©',
            'invalid-creds' => 'Bitte überprüfen Sie Ihre Anmeldedaten und versuchen Sie es erneut',
            'verify-first' => 'Überprüfen Sie zunächst Ihr E-Mail-Konto',
            'not-activated' => 'Ihre Aktivierung bedarf der Genehmigung durch den Administrator',
            'resend-verification' => 'Bestätigungsmail erneut senden',
            'invalid-email' => 'Diese Email ist ungültig',
            'invalid-name' => 'Das Feld Vorname ist erforderlich',
            'invalid-lastname' => 'Das Feld Nachname ist erforderlich',
            'invalid-password' => 'Das Feld Passwort ist erforderlich',
            'invalid-match' => 'Die Passwörter stimmen NICHT überein!',
            'invalid-agreement' => 'Das Feld Vereinbarung ist erforderlich',
        ],

        'forgot-password' => [
            'title' => 'Passwort wiederherstellen',
            'email' => 'Email',
            'submit' => 'Passwort jetzt zurücksetzen',
            'page_title' => 'Haben Sie Ihr Passwort vergessen?'
        ],

        'reset-password' => [
            'title' => 'Passwort zurücksetzen',
            'email' => 'Registrierte E-Mail',
            'password' => 'Passwort',
            'confirm-password' => 'Bestätigen Sie das Passwort',
            'back-link-title' => 'Zurück zur Anmeldung',
            'submit-btn-title' => 'Passwort zurücksetzen'
        ],

        'account' => [
            'dashboard' => 'Konto bearbeiten',
            'menu' => 'Menü',

            'profile' => [
                'index' => [
                    'page-title' => 'Konto - Tva Studio',
                    'title' => 'Profilformular',
                    'edit' => 'Bearbeiten',
                ],

                'edit-success' => 'Profil erfolgreich aktualisiert.',
                'edit-fail' => 'Fehler! Profil kann nicht aktualisiert werden, bitte versuchen Sie es später erneut.',
                'unmatch' => 'Das alte Passwort stimmt nicht überein.',

                'fname' => 'Vorname',
                'lname' => 'Nachname',
                'gender' => 'Geschlecht',
                'other' => 'Divers',
                'male' => 'Männlich',
                'female' => 'Weiblich',
                'dob' => 'Geburtsdatum',
                'phone' => 'Telefonnummer',
                'email' => 'Telefon',
                'opassword' => 'Altes Passwort',
                'password' => 'Passwort',
                'cpassword' => 'Passwort bestätigen',
                'submit' => 'Profil aktualisieren',

                'edit-profile' => [
                    'title' => 'Konto bearbeiten',
                    'page-title' => 'Profilformular bearbeiten'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Adresse - Tva Studio',
                    'title' => 'Anschrift',
                    'add' => 'Anschrift hinzufügen',
                    'edit' => 'Bearbeiten',
                    'empty' => 'Sie haben hier keine gespeicherten Adressen, bitte versuchen Sie, diese über den unten stehenden Link anzulegen',
                    'create' => 'Adresse anlegen',
                    'delete' => 'Löschen',
                    'make-default' => 'Als Standard festlegen',
                    'default' => 'Standard',
                    'contact' => 'Kontakt',
                    'confirm-delete' =>  'Möchten Sie diese Adresse wirklich löschen?',
                    'default-delete' => 'Die Standardadresse kann nicht geändert werden.',
                    'enter-password' => 'Geben Sie Ihr Passwort ein',
                ],

                'create' => [
                    'page-title' => 'Anschrift hinzufügen - Tva Studio',
                    'company_name' => 'Firmenname',
                    'first_name' => 'Vorname',
                    'last_name' => 'Nachname',
                    'vat_id' => 'Umsatzsteuer-Identifikationsnummer',
                    'vat_help_note' => '[Note: Use Country Code with VAT Id. Eg. INV01234567891]',
                    'title' => 'Adresse hinzufügen',
                    'street-address' => 'Straße und Hausnummer',
                    'country' => 'Land',
                    'state' => 'Bundesland',
                    'select-state' => 'Wählen Sie eine Region, ein Bundesland oder eine Provinz',
                    'city' => 'City',
                    'postcode' => 'Postleitzahl',
                    'phone' => 'Telefonnummer',
                    'submit' => 'Adresse speichern',
                    'success' => 'Address have been successfully added.',
                    'error' => 'Address cannot be added.'
                ],

                'edit' => [
                    'page-title' => 'Edit Address',
                    'company_name' => 'Firmenname',
                    'first_name' => 'Vorname',
                    'last_name' => 'Nachname',
                    'vat_id' => 'Umsatzsteuer-Identifikationsnummer',
                    'title' => 'Edit Address',
                    'street-address' => 'Straße und Hausnummer',
                    'submit' => 'Adresse speichern',
                    'success' => 'Adresse erfolgreich aktualisiert.',
                ],
                'delete' => [
                    'success' => 'Adresse erfolgreich gelöscht',
                    'failure' => 'Adresse kann nicht gelöscht werden',
                    'wrong-password' => 'Falsches Passwort!'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Bestellungen - Tva Studio ',
                    'title' => 'Bestellungen',
                    'order_id' => 'Auftrags-ID',
                    'date' => 'Datum',
                    'status' => 'Status',
                    'total' => 'Insgesamt',
                    'order_number' => 'Bestellnummer',
                    'processing' => 'Verarbeitung',
                    'completed' => 'Abgeschlossen',
                    'canceled' => 'Storniert',
                    'closed' => 'Abgeschlossen',
                    'pending' => 'Ausstehend',
                    'pending-payment' => 'Ausstehende Zahlung',
                    'fraud' => 'Betrug'
                ],

                'view' => [
                    'page-tile' => 'Order #:order_id',
                    'info' => 'Information',
                    'placed-on' => 'Placed On',
                    'products-ordered' => 'Products Ordered',
                    'invoices' => 'Invoices',
                    'shipments' => 'Shipments',
                    'SKU' => 'SKU',
                    'product-name' => 'Name',
                    'qty' => 'Qty',
                    'item-status' => 'Item Status',
                    'item-ordered' => 'Ordered (:qty_ordered)',
                    'item-invoice' => 'Invoiced (:qty_invoiced)',
                    'item-shipped' => 'shipped (:qty_shipped)',
                    'item-canceled' => 'Canceled (:qty_canceled)',
                    'item-refunded' => 'Refunded (:qty_refunded)',
                    'price' => 'Preis',
                    'total' => 'Total',
                    'subtotal' => 'Zwischensumme',
                    'shipping-handling' => 'Versand & Bearbeitung',
                    'tax' => 'Steuer',
                    'discount' => 'Rabatt',
                    'tax-percent' => 'Tax Percent',
                    'tax-amount' => 'Tax Amount',
                    'discount-amount' => 'Discount Amount',
                    'grand-total' => 'Gesamtsumme',
                    'total-paid' => 'Total Paid',
                    'total-refunded' => 'Total Refunded',
                    'total-due' => 'Total Due',
                    'shipping-address' => 'Lieferadresse',
                    'billing-address' => 'Rechnungsadresse',
                    'shipping-method' => 'Versandart',
                    'payment-method' => 'Zahlungsmethode',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Shipment #:shipment_id',
                    'print' => 'Print',
                    'invoice-id' => 'Invoice Id',
                    'order-id' => 'Order Id',
                    'order-date' => 'Order Date',
                    'bill-to' => 'Bill to',
                    'ship-to' => 'Ship to',
                    'contact' => 'Kontakt',
                    'refunds' => 'Refunds',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Adjustment Refund',
                    'adjustment-fee' => 'Adjustment Fee',
                    'cancel-btn-title' => 'Cancel',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wunschzettel',
                'title' => 'Wunschzettel',
                'deleteall' => 'Alle löschen',
                'moveall' => 'Alle Produkte in den Warenkorb legen',
                'move-to-cart' => 'In den Warenkorb legen',
                'error' => 'Produkt kann wegen unbekannter Probleme nicht zur Wunschliste hinzugefügt werden, bitte später wiederkommen',
                'add' => 'Artikel erfolgreich zum Wunschzettel hinzugefügt',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Artikel erfolgreich in den Warenkorb verschoben',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Artikel kann nicht in den Wunschzettel verschoben werden, bitte versuchen Sie es später noch einmal',
                'success' => 'Artikel erfolgreich zum Wunschzettel hinzugefügt',
                'failure' => 'Artikel kann nicht zur Wunschliste hinzugefügt werden, bitte versuchen Sie es später erneut',
                'already' => 'Artikel bereits in Ihrer Wunschliste vorhanden',
                'removed' => 'Artikel erfolgreich vom Wunschzettel entfernt',
                'remove-fail' => 'Artikel kann nicht vom Wunschzettel entfernt werden, bitte versuchen Sie es später erneut',
                'empty' => 'Sie haben keine Artikel in Ihrem Wunschzettel',
                'remove-all-success' => 'Alle Artikel aus Ihrer Wunschliste wurden entfernt',
            ],

            'downloadable_products' => [
                'title' => 'Downloadable Products',
                'order-id' => 'Order Id',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'Pending',
                'available' => 'Available',
                'expired' => 'Expired',
                'remaining-downloads' => 'Remaining Downloads',
                'unlimited' => 'Unlimited',
                'download-error' => 'Download link has been expired.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Reviews',
                    'page-title' => 'Reviews'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Einkaufen nach',
        'price-label' => 'As low as',
        'remove-filter-link-title' => 'Entfernen',
        'sort-by' => 'Sort By',
        'from-a-z' => 'From A-Z',
        'from-z-a' => 'From Z-A',
        'newest-first' => 'Newest First',
        'oldest-first' => 'Oldest First',
        'cheapest-first' => 'Cheapest First',
        'expensive-first' => 'Expensive First',
        'show' => 'Show',
        'pager-info' => 'Showing :showing of :total Items',
        'description' => 'Description',
        'specification' => 'Specification',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'We found other products you might like!',
        'related-product-title' => 'Related Products',
        'cross-sell-title' => 'More choices',
        'reviews-title' => 'Ratings & Reviews',
        'write-review-btn' => 'Write Review',
        'choose-option' => 'Choose an option',
        'sale' => 'Sale',
        'new' => 'New',
        'empty' => 'Keine Produkte in dieser Kategorie verfügbar',
        'add-to-cart' => 'In den Warenkorb',
        'buy-now' => 'Jetzt kaufen',
        'whoops' => 'Whoops!',
        'quantity' => 'Menge',
        'in-stock' => 'Auf Lager',
        'out-of-stock' => 'Out Of Stock',
        'view-all' => 'View All',
        'select-above-options' => 'Please select above options first.',
        'less-quantity' => 'Quantity can not be less than one.',
        'samples' => 'Samples',
        'links' => 'Links',
        'sample' => 'Sample',
        'name' => 'Name',
        'qty' => 'Qty',
        'starting-at' => 'Starting at',
        'customize-options' => 'Customize Options',
        'choose-selection' => 'Choose a selection',
        'your-customization' => 'Your Customization',
        'total-amount' => 'Total Amount',
        'none' => 'None',
        'available' => 'Available'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Please select options before buying this product.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Some required fields missing for this product.',
                'missing_options' => 'Options are missing for this product.',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Atleast one product should have more than 1 quantity.',
                'qty_impossible' => 'Cannot add more than one of these products to cart.'
            ],
            'create-error' => 'Encountered some issue while making cart instance.',
            'title' => 'Einkaufswagen',
            'empty' => 'Ihr Einkaufswagen ist leer',
            'update-cart' => 'Warenkorb aktualisieren',
            'continue-shopping' => 'Weiter einkaufen',
            'proceed-to-checkout' => 'Zur Kasse gehen',
            'remove' => 'Entfernen',
            'remove-link' => 'Entfernen',
            'move-to-wishlist' => 'Move to Wishlist',
            'move-to-wishlist-success' => 'Item moved to wishlist successfully.',
            'move-to-wishlist-error' => 'Cannot move item to wishlist, please try again later.',
            'add-config-warning' => 'Please select option before adding to cart.',
            'quantity' => [
                'quantity' => 'Menge',
                'success' => 'Warenkorb Artikel erfolgreich aktualisiert.',
                'illegal' => 'Die Anzahl kann nicht kleiner als eins sein.',
                'inventory_warning' => 'Die gewünschte Menge ist nicht verfügbar, bitte versuchen Sie es später noch einmal.',
                'error' => 'Kann den/die Artikel im Moment nicht aktualisieren, bitte versuchen Sie es später noch einmal.'
            ],

            'item' => [
                'error_remove' => 'Keine Artikel zum Entfernen aus dem Warenkorb.',
                'success' => 'Artikel wurde erfolgreich in den Warenkorb gelegt.',
                'success-remove' => 'Artikel wurde erfolgreich aus dem Warenkorb entfernt.',
                'error-add' => 'Artikel kann nicht in den Warenkorb gelegt werden, bitte versuchen Sie es später noch einmal.',
            ],
            'quantity-error' => 'Angeforderte Menge ist nicht verfügbar.',
            'cart-subtotal' => 'Warenkorb Zwischensumme',
            'cart-remove-action' => 'Wollen Sie das wirklich tun?',
            'partial-cart-update' => 'Nur ein Teil des/der Produkte(s) wurde aktualisiert',
            'link-missing' => '',
            'event' => [
                'expired' => 'Dieses Ereignis ist abgelaufen.'
            ]
        ],

        'onepage' => [
            'title' => 'Kasse',
            'information' => 'Information',
            'shipping' => 'Versand',
            'payment' => 'Zahlung',
            'complete' => 'Komplett',
            'billing-address' => 'Rechnungsadresse',
            'sign-in' => 'Anmelden',
            'company-name' => 'Firmenname',
            'first-name' => 'Vorname',
            'last-name' => 'Nachname',
            'email' => 'Email',
            'address1' => 'Straße Adresse',
            'city' => 'Stadt',
            'state' => 'Bundesland',
            'select-state' => 'Wählen Sie eine Region, ein Bundesland oder eine Provinz',
            'postcode' => 'Postleitzahl',
            'phone' => 'Telefon',
            'country' => 'Land',
            'order-summary' => 'Zusammenfassung der Bestellung',
            'shipping-address' => 'Lieferadresse',
            'use_for_shipping' => 'Versand an diese Adresse',
            'continue' => 'Weiter',
            'shipping-method' => 'Versandart wählen',
            'payment-methods' => 'Zahlungsmethode auswählen',
            'payment-method' => 'Zahlungsmethode',
            'summary' => 'Zusammenfassung der Bestellung',
            'price' => 'Preis',
            'quantity' => 'Menge',
            'billing-address' => 'Rechnungsadresse',
            'shipping-address' => 'Lieferadresse',
            'contact' => 'Kontakt',
            'place-order' => 'Bestellung aufgeben',
            'new-address' => 'Neue Adresse hinzufügen',
            'save_as_address' => 'Diese Adresse speichern',
            'apply-coupon' => 'Coupon anwenden',
            'amt-payable' => 'Zu zahlender Betrag',
            'got' => 'Erhalten',
            'free' => 'Gratis',
            'coupon-used' => 'Coupon verwendet',
            'applied' => 'Angewandt',
            'back' => 'Zurück',
            'cash-desc' => 'Nachnahme',
            'money-desc' => 'Geldüberweisung',
            'paypal-desc' => 'Paypal Standard',
            'free-desc' => 'Dies ist ein kostenloser Versand',
            'flat-desc' => 'Dies ist ein Pauschalbetrag',
            'password' => 'Passwort',
            'login-exist-message' => 'Sie haben bereits ein Konto bei uns, melden Sie sich an oder fahren Sie als Gast fort.',
            'enter-coupon-code' => 'Gutscheincode eingeben'
        ],

        'total' => [
            'order-summary' => 'Zusammenfassung der Bestellung',
            'sub-total' => 'Artikel',
            'grand-total' => 'Gesamtbetrag',
            'delivery-charges' => 'Kosten der Lieferung',
            'tax' => 'Steuern',
            'discount' => 'Rabatt',
            'price' => 'Preis',
            'disc-amount' => 'Ermäßigter Betrag',
            'new-grand-total' => 'Neue Gesamtsumme',
            'coupon' => 'Gutschein',
            'coupon-applied' => 'Angewandter Gutschein',
            'remove-coupon' => 'Gutschein entfernen',
            'cannot-apply-coupon' => 'Gutschein kann nicht angewendet werden',
            'invalid-coupon' => 'Dieser Gutschein-Code ist nicht gültig',
            'success-coupon' => 'Gutschein-Code erfolgreich angewendet',
            'coupon-apply-issue' => 'Gutschein-Code kann nicht angewendet werden'
        ],

        'success' => [
            'title' => 'Auftrag erfolgreich erteilt',
            'thanks' => 'Vielen Dank für Ihre Bestellung!',
            'order-id-info' => 'Ihre Bestellnummer lautet #:order_id',
            'info' => 'Wir senden Ihnen eine E-Mail mit den Details Ihrer Bestellung und Informationen zur Sendungsverfolgung'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Neue Bestellbestätigung',
            'heading' => 'Auftragsbestätigung',
            'dear' => 'Hallo :customer_name',
            'dear-admin' => 'Hallo :admin_name',
            'greeting' => 'Danke für Ihre Bestellung :order_id aufgesetzt am :created_at',
            'greeting-admin' => 'Bestellnummer :order_id placed aufgesetzt am :created_at',
            'summary' => 'Zusammenfassung der Bestellung',
            'shipping-address' => 'Lieferadresse',
            'billing-address' => 'Rechnungsadresse',
            'contact' => 'Kontakt',
            'shipping' => 'Versandart',
            'payment' => 'Zahlungsmethode',
            'price' => 'Preis',
            'quantity' => 'Menge',
            'subtotal' => 'Zwischensumme',
            'shipping-handling' => 'Versand & Bearbeitung',
            'tax' => 'Steuer',
            'discount' => 'Rabatt',
            'grand-total' => 'Gesamtsumme',
            'final-summary' => 'Vielen Dank für Ihr Interesse an unserem Shop, wir werden Ihnen eine Tracking-Nummer senden, sobald die Ware versandt wurde',
            'help' => 'Wenn Sie Hilfe benötigen, kontaktieren Sie uns bitte unter :support_email',
            'thanks' => 'Danke!',
            'cancel' => [
                'subject' => 'Auftrags stornierungs Bestätigung',
                'heading' => 'Auftrag storniert',
                'dear' => 'Hallo :customer_name',
                'greeting' => 'Ihre Bestellung id #:order_id aufgesetzt am :created_at wurde storniert',
                'summary' => 'Summary of Order',
                'shipping-address' => 'Lieferadresse',
                'billing-address' => 'Rechnungsadresse',
                'contact' => 'Kontakt',
                'shipping' => 'Versandart',
                'payment' => 'Zahlungsmethode',
                'subtotal' => 'Zwischensumme',
                'shipping-handling' => 'Versand & Bearbeitung',
                'tax' => 'Steuer',
                'discount' => 'Rabatt',
                'grand-total' => 'Gesamtsumme',
                'final-summary' => 'Vielen Dank für Ihr Interesse an unserem Shop',
                'help' => 'Wenn Sie Hilfe benötigen, kontaktieren Sie uns bitte unter :support_email',
                'thanks' => 'Danke',
            ]
        ],

        'invoice' => [
            'heading' => 'Ihre Rechnung #:invoice_id für Bestellung #:order_id',
            'subject' => 'Rechnung zu Ihrer Bestellung #:order_id',
            'summary' => 'Zusammenfassung der Rechnung',
        ],

        'shipment' => [
            'heading' => 'Versand #:shipment_id wurde für den Auftrag #:order_id erzeugt',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Versand für Ihre Bestellung #:order_id',
            'inventory-subject' => 'Neue Sendung wurde für Auftrag #:order_id erzeugt',
            'summary' => 'Zusammenfassung des Versands',
            'carrier' => 'Transporteur',
            'tracking-number' => 'Verfolgungsnummer',
            'greeting' => 'Eine Bestellung :order_id würde am :created_at aufgegeben',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Kunden Passwort zurücksetzen',
            'dear' => 'Hallo :name',
            'info' => 'Sie erhalten diese E-Mail, weil wir eine Anfrage zum Zurücksetzen des Passworts für Ihr Konto erhalten haben',
            'reset-password' => 'Passwort zurücksetzen',
            'final-summary' => 'Wenn Sie kein Zurücksetzen des Kennworts angefordert haben, sind keine weiteren Maßnahmen erforderlich',
            'thanks' => 'Danke!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Hallo :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'Registrierung von Neukunden',
                'password' => 'Passwort',
                'summary' => 'Ihr Konto wurde erstellt. Ihre Kontodaten finden Sie unten: ',
                'thanks' => 'Danke!',
            ],

            'registration' => [
                'subject' => 'Registrierung von Neukunden',
                'customer-registration' => 'Kunde erfolgreich registriert',
                'dear' => 'Hallo :customer_name',
                'greeting' => 'Herzlich willkommen und danke, dass Sie sich bei uns registriert haben!',
                'summary' => 'Ihr Konto wurde nun erfolgreich erstellt und Sie können sich mit Ihrer E-Mail-Adresse und Ihrem Passwort anmelden. Nach dem Einloggen können Sie auf weitere Dienste zugreifen, wie z. B. die Überprüfung vergangener Bestellungen, Wunschlisten und die Bearbeitung Ihrer Kontoinformationen.',
                'thanks' => 'Danke!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verifizierung',
                'subject' => 'Verifizierungs Mail',
                'verify' => 'Überprüfen Sie Ihr Konto',
                'summary' => 'Dies ist die E-Mail, mit der Sie bestätigen, dass die eingegebene E-Mail-Adresse die Ihre ist.
                Bitte klicken Sie auf die Schaltfläche "Verify Your Account" unten, um Ihr Konto zu verifizieren.'
            ],

            'subscription' => [
                'subject' => 'E-Mail-Abonnement',
                'greeting' => ' Willkommen bei ' . config('app.name') . ' - E-Mail-Abonnement',
                'unsubscribe' => 'Abmelden',
                'summary' => 'Danke, dass ich in Ihrem Posteingang gelandet bin. Es ist schon eine Weile her, dass Sie gelesen haben ' . config('app.name') . ' E-Mail, und wir möchten Ihren Posteingang nicht überfüllen. Wenn Sie immer noch keine Lust haben
                die neuesten E-Mail-Marketing-Nachrichten erhalten möchten, dann klicken Sie auf jeden Fall auf die Schaltfläche unten.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '©2020 alle Rechte vorbehalten',
    ],

    'response' => [
        'create-success' => ':name created successfully.',
        'update-success' => ':name updated successfully.',
        'delete-success' => ':name deleted successfully.',
        'submit-success' => ':name submitted successfully.'
    ],
];
