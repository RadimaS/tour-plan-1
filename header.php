<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour plan - Hotel booking</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> 
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;800&display=swap"   
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css" />
    
  </head>

  <body>
    <header class="navbar navbar--mobile_fixed">
      <div class="container">
        <div class="navbar-top" >
          <a href="index.php" class="logo"   data-aos="fade-right" data-aos-delay="100">
            <img
              src="img/horizontal.svg"
              alt="logo: Best tour plan"
              class="logo__image"
            />
          </a>

          <form
          data-aos="fade-right" data-aos-delay="200"
            action="#"
            class="search navbar__search navbar__search--mobile_hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="icon: search" />
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile_hidden" data-aos="fade-right"
            data-aos-delay="300">
            <img
              src="img/user-avatar.jpg"
              alt="avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li
              class="
                navbar-menu__item
                navbar-menu__user
                navbar-menu__item--mobile_visible
              "
            >
              <a
                href="#"
                class="user navbar__user navbar__user--mobile_visible"
              >
                <img
                  src="img/user-avatar.jpg"
                  alt="avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name--light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile_visible">
              <form
                action="#"
                class="search navbar__search navbar__search--mobile_visible"
              >
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar-bottom -->
    </header>