@php
    $op_notice = get_field('op_notice', 'option');
@endphp
@if ($op_notice['enable_notice'])
    <section class="section-discount">
        <a href="/book-now" class="discount-link">
            <h2 class="heading-small mb-0">{!! $op_notice['notice_details'] !!}
            </h2>
        </a>
        <div class="section-discount-bg"></div>
    </section>
@endif
