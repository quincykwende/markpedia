<header class="sticky-header">
    <div class="row remove-padding-margin velocity-divide-page">
        <div class="container" style="padding-left:0;padding-right: 0px;">
            <div class="header-menu pull-right">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <a href="{{ url('/') }}" aria-label="Logo" class="left navbar-brand">
                            <img src="{{ url('/') }}/themes/velocity/assets/images/logo-text2.png"  class="logo">
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="material-icons-outlined x">perm_phone_msg</span>
                                    </div>
                                    <div class="media-body">
                                        <p>
                                            +8613360045990 <br />
                                            <span>Call us anytime</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="material-icons-outlined y">local_shipping</span>
                                    </div>
                                    <div class="media-body">
                                        <p>
                                           Express Delivery<br />
                                            <span>To Cameroon</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media">
                                    <div class="media-left">
                                    <span class="material-icons-outlined z">contact_support</span>
                                    </div>
                                    <div class="media-body">
                                        <p>
                                            Contact<br />
                                            <span>Leave us a message</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
                <searchbar-component></searchbar-component>
            -->
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
