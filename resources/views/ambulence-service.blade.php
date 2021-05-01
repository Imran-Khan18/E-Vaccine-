@extends('layouts.master')
@section('main-content')

 <!-- ======= Hero Section ======= -->
  <section id="" class="custom_id" style="background-color: #3fbbc0;">
   <div class="container">
     <div class="text-center page_title">
       <h2>Ambulance Service</h2>
     </div>
   </div>
  </section><!-- End Hero -->

  <main id="main" class="hospitaly_service">

        <section id="" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="near_box">
                            <h3>Ambulance Service</h3>
                            <div class="service_form appointment">
                                <form action="{{route("request-ambulance")}}" method="post" role="form" class="php-email-form">
                                    <div class="form-row">
                                        <div class="col-md-4 form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validate"></div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input data-rule="minlen:1" type="text" class="form-control" name="age" id="age" placeholder="Age" data-msg="Please enter a valid age">
                                            <div class="validate"></div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validate"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 form-group">
                                            <input type="text" name="address" class="form-control" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validate"></div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validate"></div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                        <!--<input type="text" name="payment" class="form-control" id="payment" placeholder="Payment" data-rule="minlen:4" data-msg="Please enter at least 4 chars">-->
                                            <select required name="payment" id="payment" class="form-control">
                                                <option value="">Select Price</option>
                                                @foreach ($ambulance  as $amb)*/
                                                    <option value="{{ $amb->id }}">{{ $amb->area }} - {{ $amb->price }}</option>
                                                @endforeach
                                            </select>
                                            <div class="validate"></div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="mb-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>

                                    <div class="text-center"><button type="submit" class="booking_ambulance">booking Ambulance</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="near_box">
                            <h3>Hospitalzed Service</h3>
                            <div class="service_form appointment">
                                <form action="{{route("request-hospitalzed")}}" method="post" role="form" class="php-email-form">
                                    <div class="form-row">
                                        <div class="col-md-4 form-group">
                                            <input type="text" name="hospital" class="form-control" id="hos_name" placeholder="Hospital Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validate"></div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input type="text" class="form-control" name="doctor" id="refarance" placeholder="Doctors Name" data-rule="Refarance" data-msg="Please enter a valid Refarance">
                                            <div class="validate"></div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input type="tel" class="form-control" name="cabin" id="cabin" placeholder="Cabin No" data-msg="Please enter at least 4 chars">
                                            <div class="validate"></div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="mb-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Hospitalzed Success !!!</div>
                                    </div>

                                    <div class="text-center"><button type="submit" class="booking_ambulance">Admin Entry</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->


@endsection
