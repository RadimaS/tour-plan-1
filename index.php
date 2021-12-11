    <?php @include('header.php') ?>
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars hotel__stars">
                <img class="stars__star" src="img/star.svg" alt="star" />
                <img class="stars__star" src="img/star.svg" alt="star" />
                <img class="stars__star" src="img/star.svg" alt="star" />
                <img class="stars__star" src="img/star.svg" alt="star" />
                <img class="stars__star" src="img/star.svg" alt="star" />
              </div>
              <h1 class="hotel-name hotel-info__name">grand hilton hotel</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">
              Half-Board / All Inclusive + Complimentary Activities + Child
              Stays Free
            </p>
          </div> 
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/<span class="rating__small-number">5</span></span>
          </div>
          <!-- /.hotel-info__rating -->
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
          <!-- Slider main container -->
          <div class="swiper hotel-slider hotel__slider" data-aos="fade-up"
            data-aos-delay="100">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__img"
                  src="img/slide.jpg"
                  alt="hotel-slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__img"
                  src="img/slide-third.jpg"
                  alt="hotel-slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__img"
                  src="img/slide-second.jpg"
                  alt="hotel-slide"
                />
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <button
              class="hotel-slider__button hotel-slider__button--prev"
            ></button>
            <button
              class="hotel-slider__button hotel-slider__button--next"
            ></button>
          </div>
          <!-- /.swiper-->
          <div class="hotel-right">
            <div class="booking" data-aos="fade-up" data-aos-delay="200">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /.booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="booking__icon"
                    />
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <!-- /.booking__text -->
                  <div class="booking__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="booking__icon"
                    />
                    <span class="booking__description">1 x Room</span>
                  </div>
                  <!-- /.booking__text -->
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:12100">
                  <img src="img/phone-call.svg" alt="icon: phone" />
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /call-center -->
              <button data-toggle="modal" class="booking__button">
                View Other Options
              </button>
            </div>
            <!-- /.booking -->
            <div class="map" data-aos="fade-up" data-aos-delay="200">
              <iframe
                class="map__iframe"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.6670163373474!2d44.506173215256254!3d40.17196697939438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abc563de1b3ef%3A0x58644258dc216173!2sDoubleTree%20by%20Hilton%20Hotel%20Yerevan%20City%20Centre!5e0!3m2!1sru!2sru!4v1637961299772!5m2!1sru!2sru"
                style="border: 0"
                loading="lazy"
              >
              </iframe>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-right -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <section class="newsletter">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title" data-aos="fade-right">
          subscribe to our
          <strong class="newsletter-title__strong">Newsletter</strong>
        </h2>
        <form action="#" method="POST" class="subscribe newsletter__subscribe" data-aos="fade-left">
          <input
            type="email"
            name="newsletterEmail"
            class="subscribe__input"
            placeholder="Your email address"
          />
          <button class="subscribe__button">Send</button>
        </form>
      </div>
    </section>
    <!-- /.newsletter -->
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews/reviews-avatar.jpg"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="stars">
                    <img class="stars__star" src="img/star.svg" alt="star" />
                    <img class="stars__star" src="img/star.svg" alt="star" />
                    <img class="stars__star" src="img/star.svg" alt="star" />
                    <img class="stars__star" src="img/star.svg" alt="star" />
                    <img class="stars__star" src="img/star.svg" alt="star" />
                  </div>
                  <!-- /.reviews-star-->
                </div>
                <!-- /.reviews-slider__profile -->
                <div class="reviews-slider__container">
                  <p class="reviews-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lift was not in working and we were allotted to 3rd
                    floor and amenities articles were in corner of gallery which
                    were giving bad feeling. Breakfast was good and support of
                    the staff was also very nice. Location is not good as per
                    atmosphere, it is very nearby most of the popular places but
                    self location in a narrow street is not good. Overall it was
                    a good experience and could recommend.
                  </p>
                </div>
              </div>
              <!-- /.reviews-slider__item-->
            </div>
            <!-- /.swiper-slide-->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews/reviews-avatar-2.jpg"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Johnny Dep</h3>
                  <span class="reviews-slider__date">Stayed 20 Dec, 2020</span>
                  <div class="reviews-slider__rating">
                    <img class="reviews__star" src="img/star.svg" alt="star" />
                    <img class="reviews__star" src="img/star.svg" alt="star" />
                    <img class="reviews__star" src="img/star.svg" alt="star" />
                    <img class="reviews__star" src="img/star.svg" alt="star" />
                    <img class="reviews__star" src="img/star.svg" alt="star" />
                  </div>
                  <!-- /.reviews-star-->
                </div>
                <!-- /.reviews-slider__profile -->
                <div class="reviews-slider__container">
                  <p class="reviews-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lift was not in working and we were allotted to 3rd
                    floor and amenities articles were in corner of gallery which
                    were giving bad feeling. Breakfast was good and support of
                    the staff was also very nice. Location is not good as per
                    atmosphere, it is very nearby most of the popular places but
                    self location in a narrow street is not good. Overall it was
                    a good experience and could recommend.
                  </p>
                </div>
              </div>
              <!-- /.reviews-slider__item-->
            </div>
            <!-- /.swiper-slide-->
          </div>
          <!-- /.swiper-wrapper-->
          <button
            class="reviews-slider__button reviews-slider__button--prev"
          ></button>
          <button
            class="reviews-slider__button reviews-slider__button--next"
          ></button>
        </div>
        <!-- /.reviews-slider-->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card activities__first" data-aos="fade-up"
            data-aos-delay="100">
            <img
              src="img/activities/activity-1.jpg"
              alt="The curious corner 
          of chamarel"
              class="card__image"
            />
            <h3 class="card__title">The curious corner<br />of chamarel</h3>
            <!-- /.card__title -->
            <button class="card__button" data-toggle="modal">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
          <div class="card activities__card activities__second"  data-aos="fade-up"
            data-aos-delay="300">
            <img
              src="img/activities/activity-2.jpg"
              alt="Gymkhana club golf
          course"
              class="card__image"
            />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <!-- /.card__title -->
            <button class="card__button" data-toggle="modal">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
          <div class="card activities__card activities__third" data-aos="fade-up"
            data-aos-delay="500">
            <img
              src="img/activities/activity-3.jpg"
              alt="Tamarind falls hiking
          trip - full day"
              class="card__image"
            />
            <h3 class="card__title">
              Tamarind falls hiking<br />trip - full day
            </h3>
            <!-- /.card__title -->
            <button class="card__button" data-toggle="modal">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
          <div class="card activities__card activities__four" data-aos="fade-up"
            data-aos-delay="700">
            <img
              src="img/activities/activity-4.jpg"
              alt="The blue marine discovery
          quest"
              class="card__image"
            />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <!-- /.card__title -->
            <button class="card__button" data-toggle="modal">Book Now</button>
            <!-- /.card__button -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.activities-wrapper -->
      </div>
    </section>
    <?php @include('footer.php') ?>
