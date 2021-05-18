<header class="sticky-header">
    <div class="row remove-padding-margin velocity-divide-page">
        <div class="container" style="padding-left:0;padding-right: 0px;">
        <a href="{{ url('/') }}" aria-label="Logo" class="left navbar-brand">
            <img src="{{ url('/') }}/themes/velocity/assets/images/logo-text.png"  class="logo">
        </a>
        <searchbar-component></searchbar-component>
        </div>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        (() => {
            document.addEventListener('scroll', e => {
                scrollPosition = Math.round(window.scrollY);

                if (scrollPosition > 50){
                    document.querySelector('header').classList.add('header-shadow');
                } else {
                    document.querySelector('header').classList.remove('header-shadow');
                }
            });
        })()
    </script>
@endpush
