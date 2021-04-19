@if ($logo = core()->getCurrentChannel()->logo_url)
    <img src="{{ tva_asset('images/logo.svg') }}" alt="{{ config('app.name') }}" style="height: 40px; width: 110px;"/>
@else
    <img src="{{ tva_asset('images/logo.svg') }}">
@endif