<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="logo">
                    <a href="{{ home_url('/') }}" title="{!! $siteName !!}" class="" rel="home"
                        aria-current="page"><img
                            src="https://www.wpcustom.in/wp-content/uploads/2020/05/wp-custom-logo.png" class="img-fluid"
                            alt="{!! $siteName !!}" /></a>
                </div>
            </div>
            <div class="col-auto ms-auto d-flex align-items-center">
                <div class="d-lg-block d-none">
                    <ul class="main-menu nav-menu" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                        {!! wp_nav_menu([
                            'theme_location' => 'primary_navigation',
                            'menu_class' => false,
                            'echo' => false,
                            'container' => false,
                            'items_wrap' => '%3$s',
                        ]) !!}
                        <li><a href="" class="book_now">Book Now</a></li>
                        <li><a href="" class="contact_number"><i class="fa fa-phone" aria-hidden="true"></i>
                                0879
                                1194 373</a></li>
                    </ul>
                </div>
                <div class="d-lg-none d-block">
                    <a href="" class="contact_number"><i class="fa fa-phone" aria-hidden="true"></i> 0879 1194
                        373</a>
                </div>
            </div>

        </div>
    </div>
</header>
@php $notice = get_field('notice', 'option'); @endphp
{{-- Notice Component --}}
<x-notice-component :notice="$notice" />
<x-modal-component modalid="1" buttonname="Lets Connect" buttonclasses="btn btn-primary"
    buttoncontent="Ispem Lorem Ispem" />
<x-modal-component modalid="2" buttonname="Learn More" buttonclasses="btn btn btn-success"
    buttoncontent="Lorem Ispem" />
<div class="d-flex">
    <x-button-component buttonlabel="Read More" buttonlink="#" buttonclass="button w-btn me-3" />
    <x-button-component buttonlabel="+91 8791194373" buttonlink="tel:08791194373" buttonclass="button-icon " />
</div>
<div class="row">
    @for ($i = 1; $i <= 3; $i++)
        <x-blogitem-component />
    @endfor
</div>
