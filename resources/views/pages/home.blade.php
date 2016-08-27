@extends('pages.master')

{{-- PLUGIN --}}

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('vendor/slippry/css/slippry.css') }}" type="text/css" />
    
    <link rel="stylesheet" href="{{ asset('vendor/jcarousel/responsive/css/jcarousel.responsive.css') }}" type="text/css" />
@endpush

@push('posscripts')
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-migrate-3.0.0.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('vendor/slippry/js/slippry.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/slippry/js/init.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('vendor/jcarousel/jquery.jcarousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jcarousel/responsive/js/jcarousel.responsive.js') }}"></script>
@endpush

{{--  PAGE  --}}

@section('title', 'Início')

@section('header')
    @include('modules.header.navbar')
@endsection

@section('content')
    @include('modules.vendor.slippry.slider', [
        'slides' => [
            [
                'link' => '#slide1',
                'img' => asset('img/home-slider/001.png')
            ],
            [
                'link' => '#slide2',
                'img' => 'https://placehold.it/1600x340'
            ]
        ]
    ])
    
    @include('modules.content.generic.horizontal-line', [
        'backgroundColor' => '#5099ca',
        'textColor' => '#e6e6e6',
        'text' => 'RECURSOS A UM CLIQUE DE DISTÂNCIA'
    ])
    
    @include('modules.content.generic.horizontal-text-line', [
        'texts' => [
            [
                'title' => 'Pague online',
                'image' => 'http://resources.mlstatic.com/homes/images/information-mp_mlb__v1d5ad91f43e.png',
                'description' => 'Use o Mercado Pago, a solução do Mercado Livre para pagar com segurança em até 12 parcelas e com o meio de pagamento que preferir.',
                'link' => '#'
            ],
            [
                'title' => 'Receba o produto',
                'image' => 'http://resources.mlstatic.com/homes/images/information-shipping__v1d5ad91f43e.png',
                'description' => 'Calcule o custo e o tempo de entrega com Mercado Envios em cada anúncio. Pague com Mercado Pago, o envio é mais barato e você está protegido!',
                'link' => '#'
            ],
            [
                'title' => 'Proteja a sua compra',
                'image' => 'http://resources.mlstatic.com/homes/images/information-bpp__v1d5ad91f43e.png',
                'description' => 'Receba o produto que está esperando ou devolvemos o dinheiro. Pague através do Mercado Pago e aproveite a tranquilidade de comprar seguro.',
                'link' => '#'
            ]
        ]
    ])
    
    <div class="container">
        @include('modules.content.resource.multi-slider', [
            'title' => 'Recentes',
            'products' => [
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ]
            ]
        ])
        
        @include('modules.content.resource.multi-slider', [
            'title' => 'Produtos',
            'products' => [
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ]
            ]
        ])
    </div>
    
    @include('modules.content.generic.horizontal-text-line', [
        'texts' => [
            [
                'title' => 'Cadastre-se agora!',
                'image' => 'http://2.bp.blogspot.com/-vwAYMI_H5F8/UpINiWTF9II/AAAAAAAACgw/34ifXntPoL8/s1600/Facebook_like_thumb.png',
                'description' => 'Cadastre-se no nosso site, é grátis! Cadastre seu endereço para que possa adquirir produtos rapidamente.',
                'link' => '/usuario/cadastrar'
            ]
        ]
    ])
    
    <div class="container">
        @include('modules.content.resource.multi-slider', [
            'title' => 'Impressoras 3D',
            'products' => [
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ]
            ]
        ])
        
        @include('modules.content.resource.multi-slider', [
            'title' => 'Chaveiros',
            'products' => [
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ],
                [
                    'img' => 'https://placehold.it/400x200',
                    'name' => 'product',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nisl ut tristique tincidunt.',
                    'link' => '#'
                ]
            ]
        ])
    </div>
    
@endsection

@section('footer')
    @include('modules.footer.master')
@endsection