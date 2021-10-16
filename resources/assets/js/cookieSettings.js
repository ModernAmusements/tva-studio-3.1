/*
 */

// obtain cookieconsent plugin
var cc = initCookieConsent();

// run plugin with config object
cc.run({
    autorun: true,
    delay: 9000,
    current_lang: 'de',
    auto_language: false,
    autoclear_cookies: true,
    cookie_expiration: 365,
    theme_css: '/themes/tva/assets/css/index.css',
    force_consent: false,

    /* New options from v2.4 (everything is optional) */
    // remove_cookie_tables: false              // default: false (if set to true, cookie table's html will not be generated)

     cookie_domain: 'http://127.0.0.1:8000/',       	// default: current domain
    // cookie_path: "/",                        // default: root
     cookie_same_site: "Lax",

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

    onAccept: function() {
        // if analytics category has been accepted
        if (cc.allowedCategory('analytics')) {
            cc.loadScript('https://www.googletagmanager.com/gtag/js?id=G-5482042Z22', function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-MCQYE5C158');
            });
        }


    },
    onChange: function() {
        window['ga-disable-UA-XXXXX-Y'] = true;

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
                    },
                    cookie_table: [{
                        col1: 'tva-session',
                        col2: 'www.tva-studio.de',
                        col3: getSession(),
                    },
                    {
                        col1: 'XSRF-TOKEN',
                        col2: 'www.tva-studio.de',
                        col3: gettva_session(),
                    },
                    {
                        col1: 'tva_cookie_consent',
                        col2: 'www.tva-studio.de',
                        col3: gettva_session(),
                    },
                ]
                }, {
                    title: "Analyse- und Leistungscookies",
                    description: analytics(),
                    toggle: {
                        value: 'analytics',
                        enabled: true,
                        readonly: false
                    },
                    cookie_table: [{
                            col1: '_ga',
                            col2: '.google.com',
                            col3: gettva_session(),
                        },
                        {
                            col1: 'NIA',
                            col2: '.google.com',
                            col3: gettva_session(),
                        },
                        {
                            col1: '_ga_MCQYE5C15',
                            col2: '.google.com',
                            col3: gettva_session(),
                        },
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

function gettva_session() {
    return '6 Monate';
}

function getSession() {
    return 'Session';
}

