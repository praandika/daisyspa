<!-- Carousel Start -->
<div class="container-fluid carousel-header px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
        @for ($i = 0; $i <= $count; $i++)
            <li data-bs-target="#carouselId" data-bs-slide-to="{{ $i }}" class="{{ $o->id == $active[0] ? 'active' : '' }}"></li>
        @endfor
        </ol>
        
        <div class="carousel-inner" role="listbox">
        @forelse($data as $o)
            <div class="carousel-item {{ $o->id == $active[0] ? 'active' : '' }}">
                <img src="{{ asset('img/'.$o->$image.'') }}" class="img-fluid" alt="{{ $o->alt }}">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-primary text-uppercase mb-3">{{ $o->subtitle }}</h4>
                        <h1 class="display-1 text-capitalize text-dark mb-3">{{ $o->title }}</h1>
                        <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">{{ $o->description }}</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                Start</a>
                            <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="carousel-item {{ $o->id == $active[0] ? 'active' : '' }}">
                <img src="{{ asset('img/banner.jpg') }}" class="img-fluid" alt="{{ $o->alt }}">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-primary text-uppercase mb-3">Spa & Beauty Center</h4>
                        <h1 class="display-1 text-capitalize text-dark mb-3">Massage Treatment</h1>
                        <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">Balinese massage is a very relaxing massage method to rest the mind, relax tense muscles, stimulate lymphatics, and improve blood circulation. Shiatsu massage is a dry massage, manual pressure applied to specific points to relieve tension and pain.</p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                Start</a>
                            <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
