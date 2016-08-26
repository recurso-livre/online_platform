<div class="margin-tb-40">
    <h4 style="width: 100%; border-bottom: 1px solid #ccc;">{{ $title }}</h4>
    <div class="jcarousel-wrapper">
        <div class="jcarousel">
            <ul>
                @foreach ($products as $product)
                    <li>
                        <div class="fluid-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><h4><b>{{ $product['name'] }}</b></h4></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">{{ mb_strimwidth($product['description'], 0, 70, "...") }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><a class="pull-right" style="margin-right: 20px;" href="{{ $product['link'] }}">Ler mais...</a></div>
                            </div>
                        </div>
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