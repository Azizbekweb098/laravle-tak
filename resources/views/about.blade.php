<x-layout.main>
    <x-slot:title>
        Biz haqimizda
    </x-slot:title>
    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                        <h2 class="text-white m-0">Years Experience</h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">We Provide The Best Cleaning Services</h1>
                    <h5 class="text-muted font-weight-normal mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos</h5>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <div class="d-flex align-items-center pt-4">
                        <a href="" class="btn btn-primary mr-5">Learn More</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Why Choose Us</h6>
                    <h1 class="mb-4 section-title">25 Years Experience In Cleaning Industry</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Our Cleaners</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Projects Done</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

</x-layout.main>
