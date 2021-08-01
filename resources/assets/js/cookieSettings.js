/*
 */

// obtain cookieconsent plugin
var cc = initCookieConsent();

// run plugin with config object
cc.run({
    autorun: true,
    delay: 5000,
    current_lang: 'de',
    auto_language: false,
    autoclear_cookies: true,
    cookie_expiration: 365,
    theme_css: '/themes/tva/assets/css/index.css',
    force_consent: false,

    /* New options from v2.4 (everything is optional) */
    // remove_cookie_tables: false              // default: false (if set to true, cookie table's html will not be generated)

    // cookie_domain: location.hostname,       	// default: current domain
    // cookie_path: "/",                        // default: root
    // cookie_same_site: "Lax",

    /* Manage existing <scripts> tags (check readme.md) */
    page_scripts: true, // default: false (by default don't manage existing script tags)

    /* Basic gui options */
    gui_options: {
        consent_modal: {
            layout: 'cloud', // box(default),cloud,bar
            position: 'bottom center', // bottom(default),top + left,right,center:=> examples: 'bottom' or 'top right'
            transition: 'slide' // zoom(default),slide
        },
        settings_modal: {
            layout: 'box', // box(default),bar
            // position: 'left',            // right(default),left (available only if bar layout selected)
            transition: 'slide' // zoom(default),slide
        }
    },

    /* End new options added in v2.4 */

    onAccept: function(cookie) {
        console.log("onAccept fired ...");
    },

    onChange: function(cookie) {
        console.log("onChange fired ...");
        // do something ...
    },

    languages: {
        'de': {
            consent_modal: {
                title: "Cookie-Einwilligung<br><br>Diese Website verwendet Cookies.",
                description: 'Es ist... das Krümelmonster! Nur ein Scherz, es ist eigentlich Tva-Studio (ja, der Besitzer dieser Website). Aber wir verwenden Cookies, um Informationen zu sammelndamit unsere Website ordnungsgemäß und sicher funktioniert. Und natürlich respektieren wir Ihre Privatsphäre, <a href="/page/about-us" class="cc-link">hier ist sie.</a>',
                primary_btn: {
                    text: 'Akzeptieren',
                    role: 'accept_all' //'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: 'Einstellungen anpassen',
                    role: 'settings' //'settings' or 'accept_necessary'
                }
            },
            settings_modal: {
                title: '<div>Cookie-Voreinstellungen</div><div aria-hidden="true" style="font-size: .8em; font-weight: 200; color: #687278; margin-top: 5px;"></div>',
                save_settings_btn: "Aktuelle Auswahl speichern",
                accept_all_btn: "Alle übernehmen",
                close_btn_label: "Schließen",
                cookie_table_headers: [
                    { col1: "Name" },
                    { col2: "Domain" },
                    { col3: "Expiration" }
                ],
                blocks: [{
                    title: "Verwendung von Cookies",
                    description: getLoremIpsum() + ' <a href="#" class="cc-link">Privacy Policy</a>.'
                }, {
                    title: "Streng notwendige Cookies",
                    description: necessaryCookies(),
                    toggle: {
                        value: 'necessary',
                        enabled: true,
                        readonly: true //cookie categories with readonly=true are all treated as "necessary cookies"
                    }
                }, {
                    title: "Analyse- und Leistungscookies",
                    description: analytics(),
                    toggle: {
                        value: 'analytics',
                        enabled: false,
                        readonly: false
                    },
                    cookie_table: [{
                            col1: '_ga',
                            col2: 'yourdomain.com',
                            col3: getLoremIpsum(),
                        },
                        {
                            col1: '_gat',
                            col2: 'yourdomain.com',
                            col3: getLoremIpsum(),
                        },
                        {
                            col1: '_gat_UA-46747204-9',
                            col2: 'yourdomain.com',
                            col3: getLoremIpsum(),
                        },
                        {
                            col1: '_gid',
                            col2: 'yourdomain.com',
                            col3: 'description ...',
                        },
                        {
                            col1: '_my_cookie',
                            col2: 'yourdomain.com',
                            col3: 'test cookie with custom path ...',
                            path: '/demo' // needed for autoclear cookies
                        }
                    ]
                }, {
                    title: "Weitere Informationen",
                    description: getLoremIpsum() + ' <a class="cc-link" href="/page/about-us">Kontakt aufnehmen</a>.',
                }]
            }
        }
    }
});

function getLoremIpsum() {
    return 'Sie können alle Cookies akzeptieren, aber auch auswählen, welche Sie aktivieren oder nach Ihren Präferenzen konfigurieren möchten. Für weitere Informationen können Sie unsere';
}

function necessaryCookies() {
    return 'Diese Cookies gewährleisten die technische Stabilität der Seite. Diese Website kann ohne diese Cookies nicht richtig funktionieren.';
}

function analytics() {
    return 'Diese Cookies helfen uns, unsere Website zu verbessern, indem sie Informationen über Ihre Nutzung unserer Website sammeln.';
}
