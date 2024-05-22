@extends('welcome')
@section('content')
    <link href="/css/adminpanel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/ph1.jpg" class="d-block w-100" style="max-height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to my teeth</h5>
                    <a href="{{ route('search.index') }}" class="btn btn-danger btn-lg" data-toggle="modal"
                        data-target="#exampleModal">Search now</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/ph2.jpg" class="d-block w-100" style="max-height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to my teeth</h5>
                    <a href="{{ route('search.index') }}" class="btn btn-danger btn-lg" data-toggle="modal"
                        data-target="#exampleModal">Search now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ph3.jpg" class="d-block w-100" style="max-height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to my teeth</h5>
                    <a href="{{ route('search.index') }}" class="btn btn-danger btn-lg" data-toggle="modal"
                        data-target="#exampleModal">Search now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
        <br>
        <div class="container-fluid text-light info">
            <div class="row bottom-banner">
                <div class="col-sm text-center">
                    <h5>600+dentist <img src="images/info1.png" alt=""></h5>
                </div>
                <div class="col-sm text-center">
                    <h5>all over the world <img src="images/info2.png" alt=""></h5>
                </div>
                <div class="col-sm text-center">
                    <h5>From your site <img src="images/info3.png" alt=""></h5>
                </div>
                <div class="col-sm text-center">
                    <h5>With one click <img src="images/info4.png" alt=""></h5>
                </div>
                {{-- pluinfo --}}
                <div class="mt-20 mb-n20 position-relative z-index-2">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Heading-->
                        <div class="text-center mb-17">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-dark mb-5" id="clients"
                                data-kt-scroll-offset="{default: 125, lg: 150}">Useful information about teeth</h3>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="fs-5 text-muted fw-bold">Teeth are important they require regular cleaning and
                                <br /> frequent visits to the dentist for proper maintenance.
                            </div>
                            <!--end::Description-->
                        </div>

                        <!--end::Heading-->
                        <!--begin::Row-->
                        <div class="row g-lg-10 mb-10 mb-lg-20">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Testimonial-->
                                <div
                                    class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                    <!--begin::Wrapper-->
                                    <div class="mb-7">
                                        <!--begin::Rating-->
                                        <div class="rating mb-6">
                                            <img src="images/info5.png" class="" alt="">
                                        </div>
                                        <!--end::Rating-->
                                        <!--begin::Title-->
                                        <div class="fs-2 fw-bolder text-dark mb-3">The importance of diapers on dental
                                            health
                                            <br />and how to maintain them
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Feedback-->
                                        <div class="text-gray-500 fw-bold fs-4">Regular dental care, like brushing,
                                            flossing, and check-ups, is crucial for oral health, preventing cavities, gum
                                            disease, and boosting confidence. These habits ensure ongoing dental hygiene .
                                        </div>
                                        <!--end::Feedback-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Author-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-circle symbol-50px me-5">
                                            <img src="assets/media/avatars/150-2.jpg" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <div class="flex-grow-1">
                                            <a href="https://www.nidcr.nih.gov/health-info/oral-hygiene"
                                                class="text-dark fw-bolder text-hover-primary fs-6">for more
                                                information</a>

                                        </div>
                                        <!--end::Name-->
                                    </div>
                                    <!--end::Author-->
                                </div>
                                <!--end::Testimonial-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Testimonial-->
                                <div
                                    class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                    <!--begin::Wrapper-->
                                    <div class="mb-7">
                                        <!--begin::Rating-->
                                        <div class="rating mb-6">
                                            <img src="images/info6.png" class="" alt="">
                                        </div>
                                        <!--end::Rating-->
                                        <!--begin::Title-->
                                        <div class="fs-2 fw-bolder text-dark mb-3">The importance of visiting the dentist
                                            <br />In the diaper on the teeth
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Feedback-->
                                        <div class="text-gray-500 fw-bold fs-4">Regular dental visits are crucial for oral
                                            health, detecting issues early, and maintaining a healthy smile. Professional
                                            cleanings and check-ups prevent dental problems, ensuring long-term well-being
                                            and confidence in your oral hygiene.</div>
                                        <!--end::Feedback-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Author-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-circle symbol-50px me-5">
                                            <img src="assets/media/avatars/150-3.jpg" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <div class="flex-grow-1">
                                            <a href="https://kidshealth.org/en/kids/go-dentist.html"
                                                class="text-dark fw-bolder text-hover-primary fs-6">for more
                                                information</a>

                                        </div>
                                        <!--end::Name-->
                                    </div>
                                    <!--end::Author-->
                                </div>
                                <!--end::Testimonial-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Testimonial-->
                                <div
                                    class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                    <!--begin::Wrapper-->
                                    <div class="mb-7">
                                        <!--begin::Rating-->
                                        <div class="rating mb-6">
                                            <img src="images/info7.png" class="" alt="">
                                        </div>
                                        <!--end::Rating-->
                                        <!--begin::Title-->
                                        <div class="fs-2 fw-bolder text-dark mb-3">How to choose the right doctor
                                            <br />For healthy teeth
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Feedback-->
                                        <div class="text-gray-500 fw-bold fs-4">Choosing the right dentist involves
                                            researching qualifications, experience, and patient reviews. Look for a
                                            practitioner who listens, communicates well, and offers comprehensive dental
                                            care tailored to your needs.</div>
                                        <!--end::Feedback-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Author-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->

                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <div class="flex-grow-1">
                                            <a href="https://health.clevelandclinic.org/how-to-choose-the-best-toothpaste-for-you"
                                                class="text-dark fw-bolder text-hover-primary fs-6">for more
                                                information</a>

                                        </div>
                                        <!--end::Name-->
                                    </div>
                                    <!--end::Author-->
                                </div>
                                <!--end::Testimonial-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Highlight-->
                        <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
                            style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                            <!--begin::Content-->
                            <div class="my-2 me-5">
                                <!--begin::Title-->
                                <div class="fs-1 fs-lg-2qx fw-bolder text-white mb-2">We offer you the service of searching
                                    for a dentist,
                                    <br/>
                                    <span class="fw-normal">Free</span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="fs-6 fs-lg-5 text-white fw-bold opacity-75">More than 600 users visit us daily
                                    30 dentists are added daily</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Link-->
                           
                            <a href="{{ route('search.index') }}"
                                class="btn btn-outline btn-lg ">Search now <img src="images/info11.gif" alt=""></a>
                            
                        </div>
                        
                    </div>
                    <!--end::Container-->
                </div>
                {{--  --}}

            </div>




        </div>



    

    <br>
@endsection
