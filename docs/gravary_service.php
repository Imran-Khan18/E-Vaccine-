<?php $title = 'Gravary Services' ;?>
<?php include 'inc/header.php';?>
 
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
                       
                        <form action="forms/appointment.php" method="post" role="form" class="gravary_form php-email-form">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Hospital Name</label>
                                        <input id="name" name="name" type="text" placeholder="Hospital Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Patient NID</label>
                                        <input id="" name="text" type="text" placeholder="Patient NID" class="form-control input-md">
                                    </div>
                                </div>
                               
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Name of Grave</label>
                                        <select id="time" name="time" class="form-control">
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

<?php include 'inc/footer.php';?>
