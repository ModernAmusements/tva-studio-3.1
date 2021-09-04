<div class="is-visible modal-overlay-employed">
    <div class="modal-employed">
        <div class="modal-employed-header">
            <svg width="139" height="135" viewBox="0 0 139 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M60.2 66.7C59.8 69.6 64.1 75.5 70.6 75.6C74.8 75.6 79 76 83.1 76.2C92.7 76.6 93.3 76 93 66C93 65.8 93 65.7 93 65.5C92.6 62.1 92.1 59.2 87.9 58C85.8 57.4 84.4 54.1 82.5 52.4C80.7 50.8 78.4 48.4 76.5 48.5C73.7 48.7 70.1 50.1 68.5 52.3C65.3 56.5 60.2 60 60.2 66.7ZM119.9 60C124.3 62.5 128.5 65.1 132.8 67.4C137.3 69.8 138.9 73.4 137.6 78.3C133 95 127 101.7 110.1 101.3C108.9 101.3 107.1 101.5 106.6 102.3C103.7 106.7 100.4 111.1 98.6 116C95.3 125.2 89.7 131.4 80.2 133.9C72.5 135.9 65.6 132.3 64.2 124.3C63.2 118.5 62.9 112.5 62.2 106C61 106.5 59.4 107 57.8 107.7C51.1 110.5 44.2 111.7 36.9 110.5C28.8 109.1 22.6 103.2 21.6 96.1C20.9 90.7 21.9 86.2 26.8 83.1C29.5 81.4 31.7 78.9 33.7 77.2C26.3 72.5 18.9 68.3 12 63.2C8.30001 60.5 5.50001 56.6 2.70001 52.9C-0.799991 48.5 -0.799992 44 2.90001 39.3C6.00001 35.4 9.90001 35.6 14.1 35.8C21.7 36.2 29.3 36.5 36.9 36.6C40.8 36.7 42 34.3 41.4 30.6C40.7 26.5 40.1 22.3 39.9 18.2C39.7 14.3 41.5 11.7 45.4 10.2C52.6 7.60001 59.9 5.10001 66.8 1.90001C75.9 -2.29999 87.6 5.60001 88.5 13.9C88.8 16.7 90.3 17.6 92.8 17.5C95.4 17.4 98.1 17.5 100.7 17.4C110.3 17 118.9 19.6 126.4 26C129.6 28.7 130.3 32.1 129.2 35.5C126.9 42.6 124 49.6 121.3 56.6C121 57.6 120.5 58.7 119.9 60Z" fill="#1D1D1B"/>
            </svg>
        </div>
        <h1>getting ready to bloom for you<br/>två studio - opening soon</h1>
        <p class="subheading">två wird bald seine Pforten für euch öffnen! Damit ihr nichts verpasst,
            folgt uns auf Instagram und Facebook! Für <strong>kostenlosen Versand</strong> einfach den Newsletter abonnieren und die neuesten Infos über unsere Kollektion erhalten</p>
        @if(core()->getConfigData('customer.settings.newsletter.subscription'))
                <div class="form-group">
                <form action="{{ route('shop.subscribe') }}">
                    <div class="control-group border-r border-l" :class="[errors.has('subscriber_email') ? 'has-error' : '']">
                        <input type="email" class="form-control subscribe-field form-sub" name="subscriber_email" placeholder="{{ __('shop::app.customer.signup-form.email') }}" required>
                    </div>
                    <div class="newsletter-info">
                        <p class="small">
                            Ich habe die <a class="left" href="@php echo route('shop.cms.page', 'about-us') @endphp">Datenschutzbestimmungen</a> sowie die <a class="left" href="@php echo route('shop.cms.page', 'about-us') @endphp">Widerrufsbelehrung</a> gelesen und stimme hiermit zu.
                        </p>
                    </div>
                    <div class="btn-grid form-grid btn-grid-black border-r border-l border-b">
                        <a class="btn-hover" :class="[errors.has('subscriber_email') ? 'has-error' : '']">
                            <button class="">{{ __('shop::app.subscription.subscribe') }}</button>
                        </a>
                    </div>
                </form>
                </div>
                <?php
                    $term = request()->input('term');
                    if (! is_null($term)) {
                        $serachQuery = 'term='.request()->input('term');
                    }
                ?>
            <div class="social-media-links">
                <a class="" href="https://www.instagram.com/tva.studio/" target="_blank">
                    <svg class="" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12ZM12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7Z" fill="rgba(51, 51, 51, 1)"></path><path d="M15.7514 7.00054C15.7514 7.68984 16.3102 8.24862 16.9995 8.24862C17.6887 8.24862 18.2475 7.68984 18.2475 7.00054C18.2475 6.31125 17.6887 5.75247 16.9995 5.75247C16.3102 5.75247 15.7514 6.31125 15.7514 7.00054Z" fill="rgba(51, 51, 51, 1)"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16 4H8C5.79086 4 4 5.79086 4 8V16C4 18.2091 5.79086 20 8 20H16C18.2091 20 20 18.2091 20 16V8C20 5.79086 18.2091 4 16 4ZM8 2C4.68629 2 2 4.68629 2 8V16C2 19.3137 4.68629 22 8 22H16C19.3137 22 22 19.3137 22 16V8C22 4.68629 19.3137 2 16 2H8Z" fill="rgba(51, 51, 51, 1)"></path>
                    </svg>
                </a>
                <a class="" href="https://www.facebook.com/tva.studio.ceramics/" target="_blank">
                    <svg class="" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4ZM6 2C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6Z" fill="rgba(51, 51, 51, 1)">
                        </path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9167 10C11.9167 8.34315 13.2598 7 14.9167 7H17V9H14.9167C14.3644 9 13.9167 9.44772 13.9167 10V12H17V14H13.9167V20H11.9167V14H10V12H11.9167V10Z" fill="rgba(51, 51, 51, 1)">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        @endif
    </div>
</div>