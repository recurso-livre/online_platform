<ul class="slippry-slider" style='{{ isset($style)?$style:'' }}'>
    @foreach ($slides as $slide)
    	<li>
    	    <a href="{{ isset($slide['link'])?$slide['link']:'#' }}">
                <img src="{{ $slide['img'] }}" alt="{{ isset($slide['txt'])?$slide['txt']:'' }}">
            </a>
    	</li>
	@endforeach
</ul>

<style>
    .sy-box.sy-loading {
        background-image: url({{ asset('vendor/slippry/img/sy-loader.gif') }});
    }
    
    .sy-pager {
        position: absolute;
        margin-top: -30px;
        z-index: 200;
        /*display: none !important;*/
    }
    
    .sy-controls li a:after {
        background-image: url({{ asset('vendor/slippry/img/arrows.svg') }});
    }
</style>