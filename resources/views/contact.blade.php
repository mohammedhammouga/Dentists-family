@extends('welcome')
@section('content')
    <div class="content">
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <h3 class="heading mb-4">Contact us, we are happy to do so</h3>
                            <p>Your message will be processed. We will reply you in your email. Thank you
                            </p>
                            <p><img src="images/contact.png" alt="Image" class="img-fluid"></p>
                        </div>
                        <div class="col-md-6">
                            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="fv-row mb-7">
                                    <label class="form-label fw-bolder text-dark fs-6 "for="telephone">name</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="name" id="name" placeholder="Your name">
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="form-label fw-bolder text-dark fs-6" for="email">Email</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="email" id="email" placeholder="Email">
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="form-label fw-bolder text-dark fs-6" for="message">Message</label>
                                    <textarea class="form-control form-control-lg form-control-solid" name="message" id="message" cols="30"
                                        rows="7" placeholder="Write your message"></textarea>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>  
@endsection
