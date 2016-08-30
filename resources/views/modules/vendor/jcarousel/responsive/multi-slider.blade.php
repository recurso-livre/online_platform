<div class="margin-tb-40">
    <div class="jcarousel-wrapper">
        <div class="jcarousel">
            <ul>
                @foreach ($slides as $slide)
                    <li>
                        <a href="{{ isset($slide['link'])?$slide['link']:'#' }}">
                            <img src="{{ $slide['img'] }}" alt="{{ $slide['alt'] }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        
        @if(!isset($config['control']) || $config['control'])
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
        @endif
            
        @if(isset($config['pagination']) && $config['pagination'])
            <p class="jcarousel-pagination"></p>
        @endif
    </div>
</div>