<div class="full-width padding-tb-30 rl-shadow-2" style="background-color: #efefef">
    <div class="container">
        <div class="row">
            
            
            @if(count($texts) === 1)
                <div class="col-sm-4"></div>
            @elseif(count($texts) === 2)
                <div class="col-sm-1"></div>
            @endif
            
            
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <div class="col-sm-12"><span class='text-title'>{{ $texts[0]['title'] }}</span></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive" src="{{ $texts[0]['image'] }}" border="0">
                    </div>
                    <div class="col-sm-8 text-description">{{ $texts[0]['description'] }}</div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><a href="{{ $texts[0]['link'] }}">Ler mais...</a></div>
                </div>
            </div>
            

            @if(count($texts) === 2)
                <div class="col-sm-2"></div>
            @endif
            
            
            @if(count($texts) > 1)
                <div class="col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-sm-12"><span class='text-title'>{{ $texts[1]['title'] }}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" src="{{ $texts[1]['image'] }}" border="0">
                        </div>
                        <div class="col-sm-8 text-description">{{ $texts[1]['description'] }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"><a href="{{ $texts[1]['link'] }}">Ler mais...</a></div>
                    </div>
                </div>
            @endif
            
            
            @if(count($texts) === 1)
                <div class="col-sm-4"></div>
            @elseif(count($texts) === 2)
                <div class="col-sm-1"></div>
            @else
                <div class="col-md-4 col-sm-6">
                    <div class="row">
                        <div class="col-sm-12"><span class='text-title'>{{ $texts[2]['title'] }}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" src="{{ $texts[2]['image'] }}" border="0">
                        </div>
                        <div class="col-sm-8 text-description">{{ $texts[2]['description'] }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"><a href="{{ $texts[2]['link'] }}">Ler mais...</a></div>
                    </div>
                </div>
            @endif
            
        </div>
    </div>
</div>