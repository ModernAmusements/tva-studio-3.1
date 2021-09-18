@php
    $isRendered = false;
    $advertisementTwo = null;
@endphp

@if ($velocityMetaData && $velocityMetaData->advertisement)
    @php
        $advertisement = json_decode($velocityMetaData->advertisement, true);

        if (isset($advertisement[2]) && is_array($advertisement[2])) {
            $advertisementTwo = array_values(array_filter($advertisement[2]));
        }
    @endphp

    @if ($advertisementTwo)
        @php
            $isRendered = true;
        @endphp

        <div class="product-grid-2-homepage">
            <div class="product-subpage-information">
                <div class="description medium">
                    <h1 class="large">Rollercoaster</h1>
                    Eine kollektive Achterbahnfahrt, die unser emotionales Spektrum erweitert.
                    Die två studio Frühjahr/Sommer Kollektion ist inspiriert durch die Corona Pandemie und die damit einhergehende Abwendung von der Normalität. Die Rollercoaster Kollektion beschäftigt sich formal und inhaltlich mit Emotionen, die durch die Pandemie geprägt sind.
                    Die Stärken und Schwächen des Materials Ton werden auf eine menschliche Ebene gestellt,
                    Die aufzeigt, welche Flexibilität und Leistung davon ausgeht, sich ständig neu anpassen zu müssen.
                    Diese Kollektion ist ein Aufschwung – eine Sicht auf etwas Neues, etwas Aufregendes.
                    <br>
                    <br>
                    <a class="left disabled" href="#!">Zur Kollektion</a>
                </div>
                @if ( isset($advertisementTwo[0]))
                    <a class="homepage-img">
                        <img src="{{ asset('/storage/' . $advertisementTwo[0]) }}" class=" " alt="" />
                    </a>
                @endif
            </div>
            <div class="product-subpage-information">
                <div class="description medium">
                    <h1 class="large">Hallo, wir sind två studio</h1>
                    ein multidisziplinäres Keramik Design Duo aus Münster. två studio ist eine neue Plattform für handgefertigte und einzigartige Keramik mit Fokus auf Respekt für die Schönheit im Unvollkommenen.
                    <br>
                    <br>
                    <a class="left" href="/page/about-us">Mehr erfahren</a>
                </div>
                @if ( isset($advertisementTwo[1]))
                <a class="homepage-img">
                    <img src="{{ asset('/storage/' . $advertisementTwo[1]) }}" class=" " alt="" />
                </a>
                @endif
            </div>
        </div>

    @endif
@endif

@if (! $isRendered)
    <div class="">
        <div class="">
            <a class="">
                <img src="{{ asset('/themes/velocity/assets/images/toster.webp') }}" class=" " alt="" />
            </a>

            <a class="">
                <img src="{{ asset('/themes/velocity/assets/images/trimmer.webp') }}" class=" " alt="" />
            </a>
        </div>
    </div>
@endif