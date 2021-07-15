<link rel="stylesheet" href="{{ asset('themes/velocity/assets/css/bootstrap.min.css') }}" />

@if (core()->getCurrentLocale() && core()->getCurrentLocale()->direction == 'rtl')
    <link href="{{ asset('themes/velocity/assets/css/bootstrap-flipped.css') }}" rel="stylesheet">
@endif

<link rel="stylesheet" href="{{ asset('themes/velocity/assets/css/velocity.css?v=1.03') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

<style>
    .brands {
        width: 100%;
        padding-bottom: 40px
    }
    .brands_slider_container { 
        height: 130px;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        padding-left: 97px;
        padding-right: 97px;
        background: #fff
    }
    .brands_slider {
        height: 100%;
        margin-top: 50px
    }
    .brands_item {
        height: 100%
    }
    .brands_item img {
        max-width: 100%
    }
    .brands_nav {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        padding: 5px;
        cursor: pointer
    }
    .brands_nav i {
        color: #e5e5e5;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }
    .brands_nav:hover i {
        color: #676767
    }
    .brands_prev {
        left: 40px
    }
    .brands_next {
        right: 40px
    }
</style>

@stack('css')

<style>
    {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
</style>

