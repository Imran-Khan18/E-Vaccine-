@extends('layouts.master')
@section('main-content')
    <section id="" class="custom_id" style="background-color: #3fbbc0;">
        <div class="container">
            <div class="text-center page_title">
                <h2>Daily Info</h2>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main" class="hospitaly_service">

        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daily Info Report</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonial-item">
                    <div class="our-team-main">

                        <div class="team-front">
                            <h2>Today Bangladesh</h2>
                            <div class="report_covid">
                                <div class="sc_report">
                                    <strong>New Affected :</strong>
                                    <span id="new_affected_">{{ $covid_info_bd['todayCases'] }}</span>
                                </div>
                                <div class="sc_report">
                                    <strong>Recoverd :</strong>
                                    <span id="recovered_">{{ $covid_info_bd['todayRecovered'] }}</span>
                                </div>
                                <div class="sc_report">
                                    <strong>Death :</strong>
                                    <span id="death_">{{ $covid_info_bd['todayDeaths'] }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="team-front">
                            <h2>Total Bangladesh</h2>
                            <div class="report_covid">
                                <div class="sc_report">
                                    <strong>Affected :</strong>
                                    <span id="new_affected_">{{ $covid_info_bd['cases'] }}</span>
                                </div>
                                <div class="sc_report">
                                    <strong>Recoverd :</strong>
                                    <span id="recovered_">{{ $covid_info_bd['recovered'] }}</span>
                                </div>
                                <div class="sc_report">
                                    <strong>Death :</strong>
                                    <span id="death_">{{ $covid_info_bd['deaths'] }}</span>
                                </div>
                                <div class="sc_report">
                                    <strong>Test :</strong>
                                    <span id="death_">{{ $covid_info_bd['tests'] }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

{{--                <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">--}}


{{--                    <div class="testimonial-item">--}}
{{--                        <div class="our-team-main">--}}

{{--                            <div class="team-front">--}}
{{--                                <h2>Today Dhaka</h2>--}}
{{--                                <div class="report_covid">--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>New Affected :</strong>--}}
{{--                                        <span> 4850</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>Recoverd :</strong>--}}
{{--                                        <span> 1450</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>Death :</strong>--}}
{{--                                        <span> 65</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial-item">--}}
{{--                        <div class="our-team-main">--}}

{{--                            <div class="team-front">--}}
{{--                                <h2>Today Chittagong</h2>--}}
{{--                                <div class="report_covid">--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>New Affected :</strong>--}}
{{--                                        <span> 1230</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>Recoverd :</strong>--}}
{{--                                        <span> 850</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>Death :</strong>--}}
{{--                                        <span> 42</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial-item">--}}
{{--                        <div class="our-team-main">--}}

{{--                            <div class="team-front">--}}
{{--                                <h2>Today Syhlet</h2>--}}
{{--                                <div class="report_covid">--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>New Affected :</strong>--}}
{{--                                        <span> 4850</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>Recoverd :</strong>--}}
{{--                                        <span> 560</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="sc_report">--}}
{{--                                        <strong>Death :</strong>--}}
{{--                                        <span> 35</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

            </div>
        </section>

    </main><!-- End #main -->
@endsection

@section('scripts')
    <script src="assets/js/daily-info.js"></script>
@endsection
