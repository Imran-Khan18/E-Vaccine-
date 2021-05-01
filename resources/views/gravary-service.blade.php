@extends('layouts.master')

@section('main-content')
    <!-- ======= Hero Section ======= -->
    <section id="" class="custom_id" style="background-color: #3fbbc0;">
        <div class="container">
            <div class="text-center page_title">
                <h2>Gravary Details</h2>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main" class="hospitaly_service">

        <!-- ======= Appointment Section ======= -->
        <section id="appointment" class="appointment section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gravary Form</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint </p>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2 d-flex align-items-stretch">
                        <div class="well-block">

                            <form action="{{route("request-grave")}}" method="post" role="form" class="gravary_form php-email-form">
                                <!-- Form start -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="hospital">Hospital Name</label>
                                            <input required id="name" name="hospital" type="text" placeholder="Hospital Name" class="form-control input-md">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="patient">Patient NID</label>
                                            <input required id="patient" name="patient" type="text" placeholder="Patient NID" class="form-control input-md">
                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="graveyard">Name of Grave</label>
                                            <select required id="graveyard" name="graveyard" class="form-control">
                                                <option value="--select--">--select--</option>
                                                <option value="Azimpur">Azimpur</option>
                                                <option value="Mirpur">Mirpur</option>
                                                <option value="kolabagan">kolabagan</option>
                                                <option value="Utttora">Utttora</option>
                                                <option value="Bonani">Bonani</option>
                                                <option value="Kodomtola">Kodomtola</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">


                                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                                        <div class="mb-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Travel Appointment Success !!!</div>
                                        </div>

                                            <button type="submit" class="booking_ambulance Vaccine">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- form end -->
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Appointment Section -->

    </main><!-- End #main -->

@endsection
