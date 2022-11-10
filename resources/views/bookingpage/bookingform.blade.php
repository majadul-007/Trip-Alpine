@include('usersinclude.usersheader')


<body>

@include('usersinclude.usersnavbar')
@include('bookinglayout.bookingcontainer')


  <!-- <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Elements</h1>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  
  
  <div class="untree_co-section">
    <div class="container my-5">
     

      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
            <h1 class="">Book Now</h1>
            <hr>
            <form class="contact-form bg-white">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="fname">User Name</label>
                    <input type="text" class="form-control" id="fname">
                  </div>
                </div>
                
              </div>
              <div class="form-group">
                <label class="text-black" for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label class="text-black" for="password">Password</label>
                <input type="password" class="form-control" id="password">
              </div>
              <div class="form-group">
                <label class="text-black" for="message">Message</label>
                <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label class="text-black" for="select">Select</label>

                <select name="" id="select" class="custom-select">
                  <option value="">Untree.co</option>
                  <option value="">Offers high quality free template</option>
                </select>

              </div>
              <div class="form-group">
                <label class="control control--checkbox">
                  <span class="caption">Custom checkbox</span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

          

        </div>

        <div class="col-lg-4 ml-5">
          <!-- END .custom-block -->
          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title">Gallery</h2>
            <div class="row gutter-v2 gallery">
              <div class="col-4">
                <a href="images/gal_1.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_2.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_3.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_4.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_5.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_5.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/gal_6.jpg" class="gal-item" data-fancybox="gal"><img src="images/gal_6.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
          </div> <!-- END .custom-block -->

          
        </div>
        
      </div>

     

    </div>
  </div>

  <div class="py-5 cta-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
          <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
          <p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
        </div>
      </div>
    </div>
  </div>

  @include('mainlayouts.footer')

</body>

</html>
