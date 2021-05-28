{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>TeamImmob</title>
      
      <link rel="shortcut icon" href="{{ asset('theme/images/favicon.ico') }}" />
      
      <link rel="stylesheet" href="{{ asset('theme/css/backend.minf700.css?v=1.0.1') }}">
      <link rel="stylesheet" href="{{ asset('theme/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('theme/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('theme/vendor/remixicon/fonts/remixicon.css') }}">  </head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <body class=" ">
  
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
 <div class="wrapper">
      <div class="iq-top-navbar">
          <div class="container">
              <div class="iq-navbar-custom">
                  <div class="d-flex align-items-center justify-content-between">
                      <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                          <i class="ri-menu-line wrapper-menu"></i>
                          <a href="index.html" class="header-logo">
                              <img src="{{asset('theme')}}/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                              <img src="{{asset('theme')}}/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                          </a>
                      </div>
                      <div class="iq-menu-horizontal">
                          <nav class="iq-sidebar-menu">
                              <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                                  <a href="index.html" class="header-logo">
                                      <img src="{{asset('theme')}}/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                                  </a>
                                  <div class="iq-menu-bt-sidebar">
                                      <i class="las la-bars wrapper-menu"></i>
                                  </div>
                              </div>
                              <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                                                      <li class="active">
                                                          <a href="{{URL('categories')}}" class="">
                                                              <span>Catégories</span>
                                                          </a>
                                                      </li>
                                                      <li class=" ">
                                                          <a href="{{URL('departements')}}" class="">
                                                              <span>Départements</span>
                                                          </a>
                                                      </li>
                                                      <li class=" ">
                                                          <a href="{{URL('immobilisations')}}" class="">
                                                              <span>Immobilisations</span>
                                                          </a>
                                                      </li>
                                                      <li class=" ">
                                                          <a href="{{URL('users')}}" class="">
                                                              <span>Utilisateurs</span>
                                                          </a>
                                                      </li>
                                                      
                                                      
                                                      <li class=" ">
                                                          <a href="#pages" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                              <span>Extra Pages</span>
                                                              <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                          </a>
                                                          <ul id="pages" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                                              <li class=" ">
                                                                  <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                                      <span>UI Elements</span>
                                                                      <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                                  </a>
                                                                  <ul id="ui" class="iq-submenu iq-submenu-data collapse"
                                                                      data-parent="#pages">
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-avatars.html">
                                                                              <span>Avatars</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-alerts.html">
                                                                              <span>Alerts</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-badges.html">
                                                                              <span>Badges</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-breadcrumb.html">
                                                                              <span>Breadcrumb</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-buttons.html">
                                                                              <span>Buttons</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-buttons-group.html">
                                                                              <span>Buttons Group</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-boxshadow.html">
                                                                              <span>Box Shadow</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-colors.html">
                                                                              <span>Colors</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-cards.html">
                                                                              <span>Cards</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-carousel.html">
                                                                              <span>Carousel</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-grid.html">
                                                                              <span>Grid</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-helper-classes.html">
                                                                              <span>Helper classes</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-images.html">
                                                                              <span>Images</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-list-group.html">
                                                                              <span>list Group</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-media-object.html">
                                                                              <span>Media</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-modal.html">
                                                                              <span>Modal</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-notifications.html">
                                                                              <span>Notifications</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-pagination.html">
                                                                              <span>Pagination</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-popovers.html">
                                                                              <span>Popovers</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-progressbars.html">
                                                                              <span>Progressbars</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-typography.html">
                                                                              <span>Typography</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-tabs.html">
                                                                              <span>Tabs</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-tooltips.html">
                                                                              <span>Tooltips</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="ui-embed-video.html">
                                                                              <span>Video</span>
                                                                          </a>
                                                                      </li>
                                                                  </ul>
                                                              </li>
                                                              
                                                              <li class=" ">
                                                                  <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                                      <span>Authentication</span>
                                                                      <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                                  </a>
                                                                  <ul id="auth" class="iq-submenu iq-submenu-data collapse"
                                                                      data-parent="#pages">
                                                                      <li
                                                                          class=" ">
                                                                          <a href="auth-sign-in.html">
                                                                              <span>Login</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="auth-sign-up.html">
                                                                              <span>Register</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="auth-recoverpw.html">
                                                                              <span>Recover Password</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="auth-confirm-mail.html">
                                                                              <span>Confirm Mail</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="auth-lock-screen.html">
                                                                              <span>Lock Screen</span>
                                                                          </a>
                                                                      </li>
                                                                  </ul>
                                                              </li>
                                                              <li class=" ">
                                                                  <a href="#contact" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                                      <span>Contact</span>
                                                                      <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                                  </a>
                                                                  <ul id="contact" class="iq-submenu iq-submenu-data collapse"
                                                                      data-parent="#pages">
                                                                      <li
                                                                          class=" ">
                                                                          <a href="contact-list.html">
                                                                              <span>Contact List</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="contact-detail.html">
                                                                              <span>Contact Details</span>
                                                                          </a>
                                                                      </li>
                                                                  </ul>
                                                              </li>
                                                              <li class=" ">
                                                                  <a href="#timeline" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                                      <span>Timeline</span>
                                                                      <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                                  </a>
                                                                  <ul id="timeline" class="iq-submenu iq-submenu-data collapse"
                                                                      data-parent="#pages">
                                                                      <li
                                                                          class=" ">
                                                                          <a href="timeline.html">
                                                                              <span>Timeline 1</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="timeline-1.html">
                                                                              <span>Timeline 2</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="timeline-2.html">
                                                                              <span>Timeline 3</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="timeline-3.html">
                                                                              <span>Timeline 4</span>
                                                                          </a>
                                                                      </li>
                                                                  </ul>
                                                              </li>
                                                              <li class=" ">
                                                                  <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                                      <span>Pricing</span>
                                                                      <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                                  </a>
                                                                  <ul id="pricing" class="iq-submenu iq-submenu-data collapse"
                                                                      data-parent="#pages">
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pricing.html">
                                                                              <span>Pricing 1</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pricing-1.html">
                                                                              <span>Pricing 2</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pricing-2.html">
                                                                              <span>Pricing 3</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pricing-3.html">
                                                                              <span>Pricing 4</span>
                                                                          </a>
                                                                      </li>
                                                                  </ul>
                                                              </li>
                                                              <li class=" ">
                                                                  <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                                      <span>Error</span>
                                                                      <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                                  </a>
                                                                  <ul id="pages-error" class="iq-submenu iq-submenu-data collapse"
                                                                      data-parent="#pages">
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-error.html">
                                                                              <span>Error 404</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-error-500.html">
                                                                              <span>Error 500</span>
                                                                          </a>
                                                                      </li>
                                                                  </ul>
                                                              </li>
                                                              <li class=" ">
                                                                  <a href="#others" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                                                      <span>Others</span>
                                                                      <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                                                  </a>
                                                                  <ul id="others" class="iq-submenu iq-submenu-data collapse"
                                                                      data-parent="#pages">
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-invoice.html">
                                                                              <span>Invoice</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-subscribers.html">
                                                                              <span>Subscribers</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-faq.html">
                                                                              <span>Faq</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-blank-page.html">
                                                                              <span>Blank Page</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-maintenance.html">
                                                                              <span>Maintenance</span>
                                                                          </a>
                                                                      </li>
                                                                      <li
                                                                          class=" ">
                                                                          <a href="pages-comingsoon.html">
                                                                              <span>Coming Soon</span>
                                                                          </a>
                                                                      </li>
                                                                  </ul>
                                                              </li>
                                                          </ul>
                                                      </li>
                              </ul>
                          </nav>
                      </div>
                      <nav class="navbar navbar-expand-lg navbar-light p-0">
                          <div class="change-mode">
                              <div class="custom-control custom-switch custom-switch-icon custom-control-indivne">
                                  <div class="custom-switch-inner">
                                      <p class="mb-0"> </p>
                                      <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                      <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                          <span class="switch-icon-left"><i class="a-left ri-moon-clear-line"></i></span>
                                          <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <button class="navbar-toggler" type="button" data-toggle="collapse"
                              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-label="Toggle navigation">
                              <i class="ri-menu-3-line"></i>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                  <li class="nav-item nav-icon dropdown ml-3">
                                      <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="las la-envelope"></i>
                                          <span class="badge badge-primary count-mail rounded-circle">2</span>
                                          <span class="bg-primary"></span>
                                      </a>
                                      <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                          <div class="card shadow-none m-0">
                                              <div class="card-body p-0 ">
                                                  <div class="cust-title p-3">
                                                      <h5 class="mb-0">All Messages</h5>
                                                  </div>
                                                  <div class="p-2">
                                                      <a href="#" class="iq-sub-card">
                                                          <div class="media align-items-center cust-card p-2">
                                                              <div class="">
                                                                  <img class="avatar-40 rounded-small" src="{{asset('theme')}}/images/user/u-1.jpg" alt="01">
                                                              </div>
                                                              <div class="media-body ml-3">
                                                                  <h6 class="mb-0">Barry Emma Watson</h6>
                                                                  <small class="mb-0">We Want to see you On..</small>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="#" class="iq-sub-card">
                                                          <div class="media align-items-center cust-card p-2">
                                                              <div class="">
                                                                  <img class="avatar-40 rounded-small" src="{{asset('theme')}}/images/user/u-2.jpg" alt="02">
                                                              </div>
                                                              <div class="media-body ml-3">
                                                                  <h6 class="mb-0">Lorem Ipsum Watson</h6>
                                                                  <small class="mb-0">Can we have a Call?</small>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="#" class="iq-sub-card">
                                                          <div class="media align-items-center cust-card p-2">
                                                              <div class="">
                                                                  <img class="avatar-40 rounded-small" src="{{asset('theme')}}/images/user/u-3.jpg" alt="03">
                                                              </div>
                                                              <div class="media-body ml-3">
                                                                  <h6 class="mb-0">Why do we use it?</h6>
                                                                  <small class="mb-0">Thank You but now we Don't...</small>
                                                              </div>
                                                          </div>
                                                      </a>
                                                  </div>
                                                  <a class="right-ic btn-block position-relative p-3 border-top text-center" href="#" role="button">
                                                      View All
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="nav-item nav-icon dropdown">
                                      <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="las la-bell"></i>
                                          <span class="badge badge-primary count-mail rounded-circle">2</span>
                                          <span class="bg-primary"></span>
                                      </a>
                                      <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <div class="card shadow-none m-0">
                                              <div class="card-body p-0 ">
                                                  <div class="cust-title p-3">
                                                      <h5 class="mb-0">Notifications</h5>
                                                  </div>
                                                  <div class="p-2">
                                                      <a href="#" class="iq-sub-card">
                                                          <div class="media align-items-center cust-card p-2">
                                                              <div class="">
                                                                  <img class="avatar-40 rounded-small" src="{{asset('theme')}}/images/user/u-1.jpg" alt="01">
                                                              </div>
                                                              <div class="media-body ml-3">
                                                                  <div class="d-flex align-items-center justify-content-between">
                                                                      <h6 class="mb-0">Anne Effit</h6>
                                                                      <small class="mb-0">02 Min Ago</small>
                                                                  </div>
                                                                  <small class="mb-0">Manager</small>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="#" class="iq-sub-card">
                                                          <div class="media align-items-center cust-card p-2">
                                                              <div class="">
                                                                  <img class="avatar-40 rounded-small" src="{{asset('theme')}}/images/user/u-2.jpg" alt="02">
                                                              </div>
                                                              <div class="media-body ml-3">
                                                                  <div class="d-flex align-items-center justify-content-between">
                                                                      <h6 class="mb-0">Eric Shun</h6>
                                                                      <small class="mb-0">05 Min Ago</small>
                                                                  </div>
                                                                  <small class="mb-0">Manager</small>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="#" class="iq-sub-card">
                                                          <div class="media align-items-center cust-card p-2">
                                                              <div class="">
                                                                  <img class="avatar-40 rounded-small" src="{{asset('theme')}}/images/user/u-3.jpg" alt="03">
                                                              </div>
                                                              <div class="media-body ml-3">
                                                                  <div class="d-flex align-items-center justify-content-between">
                                                                      <h6 class="mb-0">Ken Tucky</h6>
                                                                      <small class="mb-0">10 Min Ago</small>
                                                                  </div>
                                                                  <small class="mb-0">Employee</small>
                                                              </div>
                                                          </div>
                                                      </a>
                                                  </div>
                                                  <a class="right-ic btn-block position-relative p-3 border-top text-center" href="#" role="button">
                                                      See All Notification
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="caption-content">
                                      <a href="#" class="search-toggle dropdown-toggle d-flex align-items-center" id="dropdownMenuButton3" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <img src="{{asset('theme')}}/images/user/01.jpg" class="avatar-40 img-fluid rounded" alt="user">
                                          <div class="caption ml-3">
                                              <h6 class="mb-0 line-height">Rick O'shea<i class="las la-angle-down ml-3"></i></h6>
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div class="content-page">
      @yield('contents')
    <div class="modal fade create-workform" id="create-event" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">Create a Workflow</h4>
                        <div class="mb-3">
                            <h5>When this happens</h5>
                            <div class="content">
                                <div class="form-group mb-0">
                                    <select name="type" class="selectpicker form-control" data-style="py-0">
                                        <option>Select..</option>
                                        <option>New event is scheduled</option>
                                        <option>Before event starts</option>
                                        <option>Event starts</option>
                                        <option>Event ends</option>
                                        <option>Event is canceled</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <h5 class="mb-3">Do this</h5>                             
                            <div class="form-group  mb-0">
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select..</option>
                                    <option>Send email to invitee</option>
                                    <option>Send email to host</option>
                                    <option>Send text to invitee</option>
                                    <option>Send text to host</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="popup text-left" id="popup">
                <h4 class="mb-3">Add Action</h4>
                <div class="content create-workform">
                    <div class="form-group">
                      <h6 class="form-label mb-3">Copy Your Link</h6>
                      <div class="input-group">
                        <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"><i class="las la-link"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <h6 class="form-label mb-3">Email Your Link</h6>
                      <div class="input-group">
                        <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <h6 class="form-label mb-3">Add to Your Website</h6>
                      <div class="input-group">
                        <input type="text" class="form-control" readonly value="calendly.com/rickoshea1234">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon4"><i class="las la-code"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                            <button type="submit" data-dismiss="modal" class="btn btn-primary mr-4">Cancel</button>
                            <button type="submit" data-dismiss="modal" class="btn btn-outline-primary">Save</button>
                        </div>
                    </div>  
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="http://teamdev.tn/" >Team Dev</a></li>
                        <li class="list-inline-item"><a href="http://teamdev.tn/#services">Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                <li class="list-inline-item"> <a href="http://teamdev.tn/#latest-post">Technologies</a>  </li>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('theme')}}/js/backend-bundle.min.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('theme')}}/js/customizer.js"></script>
    
    
    <!-- app JavaScript -->
    <script src="{{asset('theme')}}/js/app.js"></script>
    @yield('scripts')
  </body>

</html> --}}
@extends('layouts.main')

@section('contents')

<div class="card-header">{{ __('Admin Dashboard') }}</div>

@endsection