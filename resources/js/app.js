import './bootstrap';
import '../css/app.css';

import 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.1.0/dist/cookieconsent.umd.js';

document.documentElement.classList.add('cc--darkmode');

CookieConsent.run({
    guiOptions: {
        consentModal: {
            layout: "cloud inline",
            position: "bottom left",
            equalWeightButtons: true,
            flipButtons: false
        },
        preferencesModal: {
            layout: "box",
            position: "right",
            equalWeightButtons: true,
            flipButtons: false
        }
    },
    categories: {
        necessary: {
            readOnly: true
        },
        functionality: {},
        analytics: {},
        marketing: {}
    },
    language: {
        default: "cs",
        translations: {
            cs: {
                consentModal: {
                    title: "Tento web používá cookies",
                    description: "Používáme cookies k zajištění správné funkce webu, analýze návštěvnosti a personalizaci obsahu a reklam. Můžete si vybrat, které cookies chcete povolit.",
                    acceptAllBtn: "Přijmout vše",
                    acceptNecessaryBtn: "Odmítnout volitelné",
                    showPreferencesBtn: "Nastavení cookies",
                    footer: "<a href=\"#link\">Zásady ochrany osobních údajů</a>\n<a href=\"#link\">Obchodní podmínky</a>"
                },
                preferencesModal: {
                    title: "Centrum předvoleb cookies",
                    acceptAllBtn: "Přijmout vše",
                    acceptNecessaryBtn: "Odmítnout volitelné",
                    savePreferencesBtn: "Uložit nastavení",
                    closeIconLabel: "Zavřít okno",
                    serviceCounterLabel: "Služba|Služby",
                    sections: [
                        {
                            title: "Používání cookies",
                            description: "Na tomto webu používáme cookies k zajištění jeho funkčnosti, k analýze návštěvnosti a k přizpůsobení obsahu a reklam."
                        },
                        {
                            title: "Nezbytně nutné cookies <span class=\"pm__badge\">Vždy povoleno</span>",
                            description: "Tyto cookies jsou nezbytné pro správné fungování webu a nelze je vypnout v našich systémech.",
                            linkedCategory: "necessary"
                        },
                        {
                            title: "Funkční cookies",
                            description: "Tyto cookies umožňují vylepšenou funkcionalitu a přizpůsobení, například zapamatování preferencí.",
                            linkedCategory: "functionality"
                        },
                        {
                            title: "Analytické cookies",
                            description: "Tyto cookies nám pomáhají porozumět, jak návštěvníci používají naše webové stránky, a zlepšovat je.",
                            linkedCategory: "analytics"
                        },
                        {
                            title: "Reklamní cookies",
                            description: "Používají se k zobrazování relevantních reklam a sledování efektivity marketingových kampaní.",
                            linkedCategory: "marketing"
                        },
                        {
                            title: "Další informace",
                            description: "V případě dotazů ohledně používání cookies nás <a class=\"cc__link\" href=\"#yourdomain.com\">kontaktujte</a>."
                        }
                    ]
                }
            }
        }
    },
    onConsent: function (cookie) {
        const grantedCategories = cookie.acceptedCategories || [];

        const analyticsConsent = grantedCategories.includes('analytics') ? 'granted' : 'denied';
        const adsConsent = grantedCategories.includes('marketing') ? 'granted' : 'denied';
        const functionalityConsent = grantedCategories.includes('functionality') ? 'granted' : 'denied';

        gtag('consent', 'update', {
            'ad_storage': adsConsent,
            'analytics_storage': analyticsConsent,
            'functionality_storage': functionalityConsent
        });
    }
});
