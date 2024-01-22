<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            @forelse($data as $o)
            <div class="col-lg-5">
                <div class="video">
                    <img src="" class="img-fluid rounded" alt="">
                    <div class="position-absolute rounded border-5 border-top border-start border-white"
                        style="bottom: 0; right: 0;;">
                        <img src="" class="img-fluid rounded" alt="">
                    </div>
                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                        data-src="{{ $o->video }}" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-7">
                <p class="fs-4 text-uppercase text-primary">About Us</p>
                <h1 class="display-4 mb-4">{{ $o->title }}</h1>
                <p class="mb-4">{{ $o->description }}
                </p>
            @empty
            <div class="col-lg-5">
                <div class="video">
                    <img src="" class="img-fluid rounded" alt="">
                    <div class="position-absolute rounded border-5 border-top border-start border-white"
                        style="bottom: 0; right: 0;;">
                        <img src="" class="img-fluid rounded" alt="">
                    </div>
                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-7">
                <p class="fs-4 text-uppercase text-primary">About Us</p>
                <h1 class="display-4 mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                <p class="mb-4">Daisy Spa Bali was founded on January 1 2013. Daisy Spa provides home services, where we
                    will come to the villa/hotel where you are staying, you can enjoy spa services at your home without
                    having to come and queue at the spa. We collaborate with several villa management, starting with 2
                    therapist staff, now we have recruited 17 female therapists. Welcome to Daisy Spa Bali and enjoy our
                    best massage services.
                </p>
            @endforelse
                <div class="row g-4">
                    @foreach($special as $o)
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <!-- fab fa-gitkraken -->
                            <i class="{{ $o->icon }} fa-3x text-primary"></i>
                            <div class="ms-4">
                                <h5 class="mb-2">Special Offers</h5>
                                <p class="mb-0">{{ $o->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @foreach($data as $o)
                <p class="my-4">{{ $o->text1 }}
                </p>
                <p class="mb-4">{{ $o->text2 }}
                </p>
                <a href="{{ $o->link }}" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore More</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            @foreach($data as $o)
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $o->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="{{ $o->video }}" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
