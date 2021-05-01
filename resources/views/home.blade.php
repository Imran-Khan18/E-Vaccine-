@extends('layouts.master')

@section('main-content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="container">
                        <h2>Do you want to test <span>Covid?</span></h2>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn-get-started scrollto">Register now</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2>Do you want to test <span>Covid?</span></h2>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn-get-started scrollto">Register now</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="container">
                        <h2>Do you want to test <span>Covid?</span></h2>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn-get-started scrollto">Register now</a>
                    </div>
                </div>

            </div>

            <!--  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>

             <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a> -->

        </div>
    </section><!-- End Hero -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="icofont-heart-beat"></i></div>
                        <h4 class="title"><a href="">Ambulence</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="icofont-drug"></i></div>
                        <h4 class="title"><a href="">Hospitalzed</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="icofont-thermometer-alt"></i></div>
                        <h4 class="title"><a href="">Gravary Details</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>In an emergency? Need help now?</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
            </div>

        </div>
    </section><!-- End Cta Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="icofont-heart-beat"></i></div>
                    <h4 class="title"><a href="">Ambulence Service</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="icofont-drug"></i></div>
                    <h4 class="title"><a href="">Hospitalzed Service</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="icofont-dna-alt-2"></i></div>
                    <h4 class="title"><a href="">Gravary Details</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Make an Appointment</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <form action="{{route('make_appointment')}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <input autocomplete="off" type="datetime" name="appointment_date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <select required name="department_id" id="department" class="form-control">
                            <option value="">Select Department</option>
                            @foreach ($departments  as $department) 
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <select required name="doctor_id" id="doctor" class="form-control">
                            <option value="">Select Doctor</option>
                            
                            @foreach ($doctors  as $doctor) 
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach


                        </select>
                        <div class="validate"></div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="comment" rows="5" placeholder="Message (Optional)"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="text-center"><button type="submit">Make an Appointment</button></div>
            </form>

        </div>
    </section><!-- End Appointment Section -->
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Departments</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                <h4>Cardiology</h4>
                                <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">
                                <h4>Neurology</h4>
                                <p>Voluptas vel esse repudiandae quo excepturi.</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">
                                <h4>Hepatology</h4>
                                <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-toggle="tab" href="#tab-4">
                                <h4>Pediatrics</h4>
                                <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <h3>Cardiology</h3>
                            <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                            <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                            <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <h3>Neurology</h3>
                            <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                            <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                            <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <h3>Hepatology</h3>
                            <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                            <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                            <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <h3>Pediatrics</h3>
                            <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                            <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                            <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Departments Section -->

    <div class="container_bdg"></div>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
                <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.jpg" alt=""></a>
                <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.jpg" alt=""></a>
                <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.jpg" alt=""></a>
                <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.jpg" alt=""></a>
                <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.jpg" alt=""></a>
                <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.jpg" alt=""></a>
                <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.jpg" alt=""></a>
                <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.jpg" alt=""></a>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">

            <div class="row mt-5">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="{{route('make_contact')}}" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule=" minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>

                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
