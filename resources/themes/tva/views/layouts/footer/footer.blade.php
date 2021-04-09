<footer>
    <?php
        $categories = [];
        foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id) as $category){
            if ($category->slug)
                array_push($categories, $category);
        }
    ?>
    {!! DbView::make(core()->getCurrentChannel())->field('footer_content')->render() !!}

    @if(core()->getConfigData('customer.settings.newsletter.subscription'))

    <div class="footer-newsletter-panel">
            <div class="newsletter-heading">
                <h2>Registrieren Sie sich für unseren Newsletter</h2>
                <p class="medium">
                    Haben Sie Interesse, mitzumachen? Lassen Sie uns in Kontakt
                    bleiben Große Dinge sind in Arbeit. Bleiben Sie in Verbindung,
                    um zu erfahren, was als Nächstes kommt.
                </p>
            </div>
            <div class="form-group">
            <form action="{{ route('shop.subscribe') }}">
                <div class="newsletter-subheading">
                    <h4>Wie lautet Ihr Name?
                    </h4>
                </div>
                <div class="control-group">
                    <input type="name"
                           class="form-control subscribe-field form-sub"
                           name="FirstName"
                           placeholder="{{ __('shop::app.customer.signup-form.firstname') }}">
                </div>
                <div class="control-group" >
                    <input type="name"
                           class="form-control subscribe-field form-sub"
                           name="LastName"
                           placeholder="{{ __('shop::app.customer.signup-form.lastname') }}">
                </div>
                <div class="newsletter-subheading">
                    <h4>Wie lautet Ihre E-Mail?</h4>
                </div>
                <div class="control-group"
                     :class="[errors.has('email') ? 'has-error' : '']">
                     <span class="control-error"
                        v-if="errors.has('email')">
                        @{{ errors.first('email') }}
                    </span>
                    <input type="email"
                        placeholder="{{ __('shop::app.customer.signup-form.email') }}"
                        class="form-control subscribe-field form-sub"
                        name="email"
                        v-validate="'required|email'"
                        value="{{ old('email') }}"
                        data-vv-as="&quot;{{ __('shop::app.customer.signup-form.email') }}&quot;"
                        required>
                </div>
                <div class="newsletter-info">
                    <h4>
                        Sind Sie ein Clayroom-Mitglied?
                    </h4>
                    <div class="control-group-radio">
                        <input type="checkbox" id="clayroom" value="clayroom">
                        <label for="clayroom" class="checkbox-view"></label>
                        <span class="medium">
                            Ja!
                        </span>
                    </div>
                </div>
                <div class="btn-grid form-grid btn-grid-black">
                    <a class="btn-hover">
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
    </div>
    @endif
    {{-- MENU --}}
    <div class="footer-menu">
        <div class="btn-grid btn-grid-neutral border-r">
            <a class="btn-hover" href="@php echo route('shop.cms.page', 'about-us') @endphp"><span class="text">Impressum</span></a>
        </div>
        <div class="btn-grid btn-grid-neutral border-r">
            <a class="btn-hover" href="@php echo route('shop.cms.page', 'about-us') @endphp"><span class="text">Kontakt</span></a>
        </div>

        <div class="btn-grid btn-grid-neutral">
            <a class="btn-hover" href="@php echo route('shop.cms.page', 'about-us') @endphp">
                <span class="text">Instagram</span>
            </a>
        </div>
    </div>
    {{-- Newsletter --}}
    @if(core()->getConfigData('customer.settings.newsletter.subscription'))
    <div class="footer-newsletter">
        <div class="newsletter-cta btn-grid btn-grid-primary">
            <a class="btn-hover" :class="[errors.has('subscriber_email') ? 'has-error' : '']">
                <span class="text">Newsletter abonnieren</span>
            </a>
        </div>
    </div>
    @endif
    <?php
        $term = request()->input('term');
        if (! is_null($term)) {
            $serachQuery = 'term='.request()->input('term');
        }
    ?>
    {{-- Credentials --}}
    <div class="footer-trade-mark medium">
        <div class="rights">
            <p>©2020 alle Rechte vorbehalten</p>
        </div>
        <div class="philo">
            <p>två studio - Keramik handgefertigt in Deutschland</p>
        </div>
    </div>
</footer>

