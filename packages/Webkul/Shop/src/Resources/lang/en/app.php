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
            'submit' => 'E-Mail zum Zurücksetzen des Passworts senden',
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
                    'price' => 'Price',
                    'total' => 'Total',
                    'subtotal' => 'Subtotal',
                    'shipping-handling' => 'Shipping & Handling',
                    'tax' => 'Tax',
                    'discount' => 'Discount',
                    'tax-percent' => 'Tax Percent',
                    'tax-amount' => 'Tax Amount',
                    'discount-amount' => 'Discount Amount',
                    'grand-total' => 'Grand Total',
                    'total-paid' => 'Total Paid',
                    'total-refunded' => 'Total Refunded',
                    'total-due' => 'Total Due',
                    'shipping-address' => 'Lieferadresse',
                    'billing-address' => 'Rechnungsadresse',
                    'shipping-method' => 'Shipping Method',
                    'payment-method' => 'Payment Method',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Shipment #:shipment_id',
                    'print' => 'Print',
                    'invoice-id' => 'Invoice Id',
                    'order-id' => 'Order Id',
                    'order-date' => 'Order Date',
                    'bill-to' => 'Bill to',
                    'ship-to' => 'Ship to',
                    'contact' => 'Contact',
                    'refunds' => 'Refunds',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Adjustment Refund',
                    'adjustment-fee' => 'Adjustment Fee',
                    'cancel-btn-title' => 'Cancel',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Delete All',
                'moveall' => 'Move All Products To Cart',
                'move-to-cart' => 'Move To Cart',
                'error' => 'Cannot add product to wishlist due to unknown problems, please checkback later',
                'add' => 'Item successfully added to wishlist',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Item successfully moved To cart',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Item cannot be moved to wishlist, Please try again later',
                'success' => 'Item successfully added to wishlist',
                'failure' => 'Item cannot be added to wishlist, Please try again later',
                'already' => 'Item already present in your wishlist',
                'removed' => 'Item successfully removed from wishlist',
                'remove-fail' => 'Item cannot Be removed from wishlist, Please try again later',
                'empty' => 'You do not have any items in your wishlist',
                'remove-all-success' => 'All the items from your wishlist have been removed',
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
            'subject' => 'New Order Confirmation',
            'heading' => 'Order Confirmation!',
            'dear' => 'Dear :customer_name',
            'dear-admin' => 'Dear :admin_name',
            'greeting' => 'Thanks for your Order :order_id placed on :created_at',
            'greeting-admin' => 'Order Id :order_id placed on :created_at',
            'summary' => 'Summary of Order',
            'shipping-address' => 'Lieferadresse',
            'billing-address' => 'Rechnungsadresse',
            'contact' => 'Contact',
            'shipping' => 'Shipping Method',
            'payment' => 'Payment Method',
            'price' => 'Price',
            'quantity' => 'Menge',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Shipping & Handling',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'grand-total' => 'Grand Total',
            'final-summary' => 'Thanks for showing your interest in our store we will send you tracking number once it shipped',
            'help' => 'If you need any kind of help please contact us at :support_email',
            'thanks' => 'Thanks!',
            'cancel' => [
                'subject' => 'Order Cancel Confirmation',
                'heading' => 'Order Cancelled',
                'dear' => 'Dear :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Summary of Order',
                'shipping-address' => 'Lieferadresse',
                'billing-address' => 'Rechnungsadresse',
                'contact' => 'Contact',
                'shipping' => 'Shipping Method',
                'payment' => 'Payment Method',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Shipping & Handling',
                'tax' => 'Tax',
                'discount' => 'Discount',
                'grand-total' => 'Grand Total',
                'final-summary' => 'Thanks for showing your interest in our store',
                'help' => 'If you need any kind of help please contact us at :support_email',
                'thanks' => 'Thanks!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Summary of Invoice',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Summary of Shipment',
            'carrier' => 'Carrier',
            'tracking-number' => 'Tracking Number',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Customer Reset Password',
            'dear' => 'Dear :name',
            'info' => 'You are receiving this email because we received a password reset request for your account',
            'reset-password' => 'Reset Password',
            'final-summary' => 'If you did not request a password reset, no further action is required',
            'thanks' => 'Thanks!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'New Customer Registration',
                'password' => 'Passwort',
                'summary' => 'Your account has been created.
                Your account details are below: ',
                'thanks' => 'Thanks!',
            ],

            'registration' => [
                'subject' => 'New Customer Registration',
                'customer-registration' => 'Customer Registered Successfully',
                'dear' => 'Dear :customer_name',
                'greeting' => 'Welcome and thank you for registering with us!',
                'summary' => 'Your account has now been created successfully and you can login using your email address and password credentials. Upon logging in, you will be able to access other services including reviewing past orders, wishlists and editing your account information.',
                'thanks' => 'Thanks!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verification',
                'subject' => 'Verification Mail',
                'verify' => 'Verify Your Account',
                'summary' => 'This is the mail to verify that the email address you entered is yours.
                Kindly click the Verify Your Account button below to verify your account.'
            ],

            'subscription' => [
                'subject' => 'Subscription Email',
                'greeting' => ' Welcome to ' . config('app.name') . ' - Email Subscription',
                'unsubscribe' => 'Unsubscribe',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name created successfully.',
        'update-success' => ':name updated successfully.',
        'delete-success' => ':name deleted successfully.',
        'submit-success' => ':name submitted successfully.'
    ],
];
