<div id="jssor_1" class="jssor-slider">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssor-slider-loading">
        <div style="background-image:url('{{ asset('vendor/jssor/slider/img/loading.gif') }}');"></div>
    </div>
    <div data-u="slides">
        @foreach ($slides as $slide)
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="{{ $slide['background'] }}" />
                @foreach ($slide['items'] as $item)
                    @if (isset($item['img']))
                        <img style="position: absolute; {{ $item['style'] }}" src="{{ $item['img'] }}" />
                    @else
                        <div style="position: absolute; {{ $item['style'] }}">{{ $item['txt'] }}</div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb05" data-autocenter="1">
        <!-- bullet navigator item prototype -->
        <div data-u="prototype" style="background-image: url({{ asset('vendor/jssor/slider/img/navigator.png') }})"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora22l" style="background-image: url({{ asset('vendor/jssor/slider/img/arrows.png') }})" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora22r" style="background-image: url({{ asset('vendor/jssor/slider/img/arrows.png') }})" data-autocenter="2"></span>
</div>