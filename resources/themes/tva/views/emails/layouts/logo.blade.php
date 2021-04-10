@if ($logo = core()->getCurrentChannel()->logo_url)
    <img src="{{ $logo }}" alt="{{ config('app.name') }}" style="height: 40px; width: 110px;"/>
@else
    <img alt="Logo tva studio" title="Logo tva studio" src="{{ tva_asset('images/logo.png') }}" style="padding-top: 20px;">
@endif