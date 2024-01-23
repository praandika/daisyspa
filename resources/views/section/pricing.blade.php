<!-- Pricing Start -->
<div class="container-fluid pricing py-5">
    <div class="container py-5">
        <div class="owl-carousel pricing-carousel">
            @foreach($data as $o)
            <div class="pricing-item">
                <div class="rounded pricing-content">
                    <div
                        class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                        <h1 class="display-4 mb-0">
                            <small class="align-top text-muted"
                                style="font-size: 22px; line-height: 45px;">Rp</small>{{ $o->price }}<small class="text-muted"
                                style="font-size: 16px; line-height: 40px;">K</small>
                        </h1>
                        <h5 class="text-primary text-uppercase m-0">{{ $o->package }}</h5>
                    </div>
                    <div class="p-4">
                        <p>{{ $o->description }}</p>
                        <a href="{{ $o->link }}" class="btn btn-primary btn-primary-outline-0 rounded-pill my-2 px-4">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Pricing End -->
