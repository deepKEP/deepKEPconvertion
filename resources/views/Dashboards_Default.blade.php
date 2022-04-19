<!DOCTYPE html>
<html lang="en" data-footer="true">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Default Dashboard</title>
    <meta name="description" content="Home screen that contains stats, charts, call to action buttons and various listing elements." />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('img/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('img/favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('img/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('img/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('img/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-128.png') }}" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('img/favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('img/favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('img/favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('img/favicon/mstile-310x310.png') }}" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/OverlayScrollbars.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/introjs.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/plyr.css') }}" />
    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="{{ asset('js/base/loader.js') }}"></script>
  </head>

  <body>
    <div id="root">
      <div id="nav" class="nav-container d-flex">
        <div class="nav-content d-flex">
          <!-- Logo Start -->
          <div class="logo position-relative">
            <a href="Dashboards.Default.html">
              <!-- Logo can be added directly -->
              <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

              <!-- Or added via css to provide different ones for different color themes -->
              <div class="img"></div>
            </a>
          </div>
          <!-- Logo End -->

          <!-- Language Switch Start -->
          <div class="language-switch-container">
            <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">DE</a>
              <a href="#" class="dropdown-item active">EN</a>
              <a href="#" class="dropdown-item">ES</a>
            </div>
          </div>
          <!-- Language Switch End -->

          <!-- User Menu Start -->
          <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="profile" alt="profile" src="img/profile/profile-9.jpg" />
              <div class="name">Lisa Jackson</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
              <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                  <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">User Info</a>
                    </li>
                    <li>
                      <a href="#">Preferences</a>
                    </li>
                    <li>
                      <a href="#">Calendar</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Security</a>
                    </li>
                    <li>
                      <a href="#">Billing</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-2 pt-2">
                  <div class="text-extra-small text-primary">APPLICATION</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Themes</a>
                    </li>
                    <li>
                      <a href="#">Language</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Devices</a>
                    </li>
                    <li>
                      <a href="#">Storage</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                  <div class="separator-light"></div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">
                        <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
                        <span class="align-middle">Help</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i data-cs-icon="document-full" class="me-2" data-cs-size="17"></i>
                        <span class="align-middle">Docs</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">
                        <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                        <span class="align-middle">Logout</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- User Menu End -->

          <!-- Icons Menu Start -->
          <ul class="list-unstyled list-inline text-center menu-icons">
            <li class="list-inline-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-cs-icon="search" data-cs-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" id="pinButton" class="pin-button">
                <i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
                <i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" id="colorButton">
                <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                <div class="position-relative d-inline-flex">
                  <i data-cs-icon="bell" data-cs-size="18"></i>
                  <span class="position-absolute notification-dot rounded-xl"></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                <div class="scroll">
                  <ul class="list-unstyled border-last-none">
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-1.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">Joisse Kaycee just sent a new comment!</a>
                      </div>
                    </li>
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-2.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">New order received! It is total $147,20.</a>
                      </div>
                    </li>
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-3.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">3 items just added to wish list by a user!</a>
                      </div>
                    </li>
                    <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-6.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">Kirby Peters just sent a new message!</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
          <!-- Icons Menu End -->

          <!-- Menu Start -->
          <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
              <li>
                <a href="#dashboards" data-href="Dashboards.html">
                  <i data-cs-icon="home" class="icon" data-cs-size="18"></i>
                  <span class="label">Dashboards</span>
                </a>
                <ul id="dashboards">
                  <li>
                    <a href="Dashboards.Default.html">
                      <span class="label">Default</span>
                    </a>
                  </li>
                  <li>
                    <a href="Dashboards.Visual.html">
                      <span class="label">Visual</span>
                    </a>
                  </li>
                  <li>
                    <a href="Dashboards.Analytic.html">
                      <span class="label">Analytic</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#apps" data-href="Apps.html">
                  <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                  <span class="label">Apps</span>
                </a>
                <ul id="apps">
                  <li>
                    <a href="Apps.Calendar.html">
                      <span class="label">Calendar</span>
                    </a>
                  </li>
                  <li>
                    <a href="Apps.Chat.html">
                      <span class="label">Chat</span>
                    </a>
                  </li>
                  <li>
                    <a href="Apps.Contacts.html">
                      <span class="label">Contacts</span>
                    </a>
                  </li>
                  <li>
                    <a href="Apps.Mailbox.html">
                      <span class="label">Mailbox</span>
                    </a>
                  </li>
                  <li>
                    <a href="Apps.Tasks.html">
                      <span class="label">Tasks</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#pages" data-href="Pages.html">
                  <i data-cs-icon="notebook-1" class="icon" data-cs-size="18"></i>
                  <span class="label">Pages</span>
                </a>
                <ul id="pages">
                  <li>
                    <a href="#authentication" data-href="Pages.Authentication.html">
                      <span class="label">Authentication</span>
                    </a>
                    <ul id="authentication">
                      <li>
                        <a href="Pages.Authentication.Login.html">
                          <span class="label">Login</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Authentication.Register.html">
                          <span class="label">Register</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Authentication.ForgotPassword.html">
                          <span class="label">Forgot Password</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Authentication.ResetPassword.html">
                          <span class="label">Reset Password</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#blog" data-href="Pages.Blog.html">
                      <span class="label">Blog</span>
                    </a>
                    <ul id="blog">
                      <li>
                        <a href="Pages.Blog.Home.html">
                          <span class="label">Home</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Blog.Grid.html">
                          <span class="label">Grid</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Blog.List.html">
                          <span class="label">List</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Blog.Detail.html">
                          <span class="label">Detail</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#miscellaneous" data-href="Pages.Miscellaneous.html">
                      <span class="label">Miscellaneous</span>
                    </a>
                    <ul id="miscellaneous">
                      <li>
                        <a href="Pages.Miscellaneous.Faq.html">
                          <span class="label">Faq</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Miscellaneous.KnowledgeBase.html">
                          <span class="label">Knowledge Base</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Miscellaneous.Error.html">
                          <span class="label">Error</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Miscellaneous.ComingSoon.html">
                          <span class="label">Coming Soon</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Miscellaneous.Pricing.html">
                          <span class="label">Pricing</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Miscellaneous.Search.html">
                          <span class="label">Search</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Miscellaneous.Mailing.html">
                          <span class="label">Mailing</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Miscellaneous.Empty.html">
                          <span class="label">Empty</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#portfolio" data-href="Pages.Portfolio.html">
                      <span class="label">Portfolio</span>
                    </a>
                    <ul id="portfolio">
                      <li>
                        <a href="Pages.Portfolio.Home.html">
                          <span class="label">Home</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Portfolio.Detail.html">
                          <span class="label">Detail</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#profile" data-href="Pages.Profile.html">
                      <span class="label">Profile</span>
                    </a>
                    <ul id="profile">
                      <li>
                        <a href="Pages.Profile.Standard.html">
                          <span class="label">Standard</span>
                        </a>
                      </li>
                      <li>
                        <a href="Pages.Profile.Settings.html">
                          <span class="label">Settings</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#blocks" data-href="Blocks.html">
                  <i data-cs-icon="grid-5" class="icon" data-cs-size="18"></i>
                  <span class="label">Blocks</span>
                </a>
                <ul id="blocks">
                  <li>
                    <a href="Blocks.Images.html">
                      <span class="label">Images</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.List.html">
                      <span class="label">List</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.TabularData.html">
                      <span class="label">Tabular Data</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.Thumbnails.html">
                      <span class="label">Thumbnails</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.Cta.html">
                      <span class="label">Cta</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.Gallery.html">
                      <span class="label">Gallery</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.Stats.html">
                      <span class="label">Stats</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.Steps.html">
                      <span class="label">Steps</span>
                    </a>
                  </li>
                  <li>
                    <a href="Blocks.Details.html">
                      <span class="label">Details</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="mega">
                <a href="#interface" data-href="Interface.html">
                  <i data-cs-icon="pocket-knife" class="icon" data-cs-size="18"></i>
                  <span class="label">Interface</span>
                </a>
                <ul id="interface">
                  <li>
                    <a href="#interfaceComponents" data-href="Interface.Components.html">
                      <span class="label">Components</span>
                    </a>
                    <ul id="interfaceComponents">
                      <li>
                        <a href="Interface.Components.Accordion.html">
                          <span class="label">Accordion</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Alerts.html">
                          <span class="label">Alerts</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Badge.html">
                          <span class="label">Badge</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Breadcrumb.html">
                          <span class="label">Breadcrumb</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Buttons.html">
                          <span class="label">Buttons</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.ButtonGroup.html">
                          <span class="label">Button Group</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Card.html">
                          <span class="label">Card</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Close.html">
                          <span class="label">Close Button</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Collapse.html">
                          <span class="label">Collapse</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Dropdowns.html">
                          <span class="label">Dropdowns</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.ListGroup.html">
                          <span class="label">List Group</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Modal.html">
                          <span class="label">Modal</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Navs.html">
                          <span class="label">Navs</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Offcanvas.html">
                          <span class="label">Offcanvas</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Pagination.html">
                          <span class="label">Pagination</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Popovers.html">
                          <span class="label">Popovers</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Progress.html">
                          <span class="label">Progress</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Spinners.html">
                          <span class="label">Spinners</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Toasts.html">
                          <span class="label">Toasts</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Components.Tooltips.html">
                          <span class="label">Tooltips</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#interfaceForms" data-href="Interface.Forms.html">
                      <span class="label">Forms</span>
                    </a>
                    <ul id="interfaceForms">
                      <li>
                        <a href="Interface.Forms.Layouts.html">
                          <span class="label">Layouts</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Forms.Validation.html">
                          <span class="label">Validation</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Forms.Wizard.html">
                          <span class="label">Wizard</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Forms.InputGroup.html">
                          <span class="label">Input Group</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Forms.InputMask.html">
                          <span class="label">Input Mask</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Forms.GenericForms.html">
                          <span class="label">Generic Forms</span>
                        </a>
                      </li>
                      <li>
                        <a href="#formControls" data-href="Interface.Forms.Controls.html">
                          <span class="label">Controls</span>
                        </a>
                        <ul id="formControls">
                          <li>
                            <a href="Interface.Forms.Controls.Autocomplete.html">
                              <span class="label">Autocomplete</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.CheckboxRadio.html">
                              <span class="label">Checkbox-Radio</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.DatePicker.html">
                              <span class="label">Date Picker</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.Dropzone.html">
                              <span class="label">Dropzone</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.Editor.html">
                              <span class="label">Editor</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.InputSpinner.html">
                              <span class="label">Input Spinner</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.Rating.html">
                              <span class="label">Rating</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.Select2.html">
                              <span class="label">Select2</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.Slider.html">
                              <span class="label">Slider</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.Tags.html">
                              <span class="label">Tags</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Forms.Controls.TimePicker.html">
                              <span class="label">Time Picker</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#interfacePlugins" data-href="Interface.Plugins.html">
                      <span class="label">Plugins</span>
                    </a>
                    <ul id="interfacePlugins">
                      <li>
                        <a href="Interface.Plugins.Carousel.html">
                          <span class="label">Carousel</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Charts.html">
                          <span class="label">Charts</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Clamp.html">
                          <span class="label">Clamp</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.ContextMenu.html">
                          <span class="label">Context Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="#pluginsDatatables" data-href="Interface.Plugins.Datatables.html">
                          <span class="label">Datatables</span>
                        </a>
                        <ul id="pluginsDatatables">
                          <li>
                            <a href="Interface.Plugins.Datatables.EditableRows.html">
                              <span class="label">Editable Rows</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Plugins.Datatables.EditableBoxed.html">
                              <span class="label">Editable Boxed</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Plugins.Datatables.RowsAjax.html">
                              <span class="label">Ajax Data</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Plugins.Datatables.RowsServerSide.html">
                              <span class="label">Server Side</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Plugins.Datatables.BoxedVariations.html">
                              <span class="label">Boxed Variations</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Lightbox.html">
                          <span class="label">Lightbox</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.List.html">
                          <span class="label">List</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Maps.html">
                          <span class="label">Maps</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Notify.html">
                          <span class="label">Notify</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Player.html">
                          <span class="label">Players</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Progress.html">
                          <span class="label">Progress</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Scrollbar.html">
                          <span class="label">Scrollbar</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Shortcuts.html">
                          <span class="label">Shortcuts</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Plugins.Sortable.html">
                          <span class="label">Sortable</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#interfaceContent" data-href="Interface.Content.html">
                      <span class="label">Content</span>
                    </a>
                    <ul id="interfaceContent">
                      <li>
                        <a href="#icons" data-href="Interface.Content.Icons.html">
                          <span class="label">Icons</span>
                        </a>
                        <ul id="icons">
                          <li>
                            <a href="Interface.Content.Icons.CSLineIcons.html">
                              <span class="label">CS Line Icons</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Content.Icons.CSLineInterfaceIcons.html">
                              <span class="label">CS Interface Icons</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Content.Icons.BootstrapIcons.html">
                              <span class="label">Bootstrap Icons</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="Interface.Content.Images.html">
                          <span class="label">Images</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Content.Tables.html">
                          <span class="label">Tables</span>
                        </a>
                      </li>
                      <li>
                        <a href="Interface.Content.Typography.html">
                          <span class="label">Typography</span>
                        </a>
                      </li>
                      <li>
                        <a href="#menuVarieties" data-href="Interface.Content.Menu.html">
                          <span class="label">Menu</span>
                        </a>
                        <ul id="menuVarieties">
                          <li>
                            <a href="Interface.Content.Menu.HorizontalStandard.html">
                              <span class="label">Horizontal</span>
                            </a>
                          </li>
                          <li></li>
                          <li>
                            <a href="Interface.Content.Menu.VerticalStandard.html">
                              <span class="label">Vertical</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Content.Menu.VerticalSemiHidden.html">
                              <span class="label">Vertical Hidden</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Content.Menu.VerticalNoSemiHidden.html">
                              <span class="label">Vertical No Hidden</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Content.Menu.MobileOnly.html">
                              <span class="label">Mobile Only</span>
                            </a>
                          </li>
                          <li>
                            <a href="Interface.Content.Menu.Sidebar.html">
                              <span class="label">Sidebar</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Menu End -->

          <!-- Mobile Buttons Start -->
          <div class="mobile-buttons-container">
            <!-- Scrollspy Mobile Button Start -->
            <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
              <i data-cs-icon="menu-dropdown"></i>
            </a>
            <!-- Scrollspy Mobile Button End -->

            <!-- Scrollspy Mobile Dropdown Start -->
            <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
            <!-- Scrollspy Mobile Dropdown End -->

            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
              <i data-cs-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
          </div>
          <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
      </div>

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-sm-6">
                <h1 class="mb-0 pb-0 display-4" id="title">Default Dashboard</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                  <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="Dashboards.html">Dashboards</a></li>
                  </ul>
                </nav>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
                <!-- Tour Button Start -->
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-end w-100 w-sm-auto" id="dashboardTourButton">
                  <span>Take a Tour</span>
                  <i data-cs-icon="flag"></i>
                </button>
                <!-- Tour Button End -->
              </div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row">
            <div class="col-12 col-xl-6">
              <!-- Sales & Stocks Charts Start -->
              <div class="mb-5" data-title="Fancy Charts" data-intro="Some charts over here!" data-step="1">
                <h2 class="small-title">Sales & Stocks</h2>
                <div class="card mb-2 h-auto sh-xl-24">
                  <div class="card-body">
                    <div class="row g-0 h-100 chart-container">
                      <!-- Contents for below are provided from js -->
                      <div class="col-12 col-sm-auto d-flex flex-column justify-content-between custom-tooltip pe-0 pe-sm-4">
                        <p class="heading title mb-1"></p>
                        <div>
                          <div>
                            <div class="cta-2 text-primary value d-inline-block align-middle sw-4"></div>
                            <i class="icon d-inline-block align-middle text-primary" data-cs-size="15"></i>
                          </div>
                          <div class="text-small text-muted mb-1 text"></div>
                        </div>
                        <div class="row">
                          <div class="col-auto">
                            <div class="cta-3 text-alternate">84</div>
                            <div class="text-small text-muted mb-1">THIS WEEK</div>
                          </div>
                          <div class="col">
                            <div class="cta-3 text-alternate">792</div>
                            <div class="text-small text-muted mb-1">THIS MONTH</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm sh-17">
                        <canvas id="largeLineChart1"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card h-auto sh-xl-24">
                  <div class="card-body">
                    <div class="row g-0 h-100 chart-container">
                      <!-- Contents for below are provided from js -->
                      <div class="col-12 col-sm-auto d-flex flex-column justify-content-between custom-tooltip pe-0 pe-sm-4">
                        <p class="heading title"></p>
                        <div>
                          <div>
                            <div class="cta-2 text-primary value d-inline-block align-middle sw-4"></div>
                            <i class="icon d-inline-block align-middle text-primary" data-cs-size="15"></i>
                          </div>
                          <div class="text-small text-muted mb-1 text"></div>
                        </div>
                        <div class="row">
                          <div class="col-auto">
                            <div class="cta-3 text-alternate">84</div>
                            <div class="text-small text-muted mb-1">THIS WEEK</div>
                          </div>
                          <div class="col">
                            <div class="cta-3 text-alternate">792</div>
                            <div class="text-small text-muted mb-1">THIS MONTH</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm sh-17">
                        <canvas id="largeLineChart2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Sales & Stocks Charts End -->

              <!-- Stats Start -->
              <h2 class="small-title">Stats</h2>
              <div class="row gx-2">
                <div class="col-12 p-0">
                  <div class="glide glide-small" id="statsCarousel">
                    <div class="glide__track" data-glide-el="track">
                      <div class="glide__slides">
                        <div class="glide__slide">
                          <div class="card mb-5 sh-20 hover-border-primary">
                            <div class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                              <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                <i data-cs-icon="alarm" class="text-white"></i>
                              </div>
                              <p class="mb-0 lh-1">Pending Orders</p>
                              <p class="cta-3 mb-0 text-primary">25</p>
                            </div>
                          </div>
                        </div>
                        <div class="glide__slide">
                          <div class="card mb-5 sh-20 hover-border-primary">
                            <div class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                              <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                <i data-cs-icon="navigate-diagonal" class="text-white"></i>
                              </div>
                              <p class="mb-0 lh-1">Shipped Orders</p>
                              <p class="cta-3 mb-0 text-primary">48</p>
                            </div>
                          </div>
                        </div>
                        <div class="glide__slide">
                          <div class="card mb-5 sh-20 hover-border-primary">
                            <div class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                              <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                <i data-cs-icon="check-circle" class="text-white"></i>
                              </div>
                              <p class="mb-0 lh-1">Delivered Orders</p>
                              <p class="cta-3 mb-0 text-primary">53</p>
                            </div>
                          </div>
                        </div>
                        <div class="glide__slide">
                          <div class="card mb-5 sh-20 hover-border-primary">
                            <div class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                              <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                <i data-cs-icon="arrow-bottom-left" class="text-white"></i>
                              </div>
                              <p class="mb-0 lh-1">Returned Orders</p>
                              <p class="cta-3 mb-0 text-primary">4</p>
                            </div>
                          </div>
                        </div>
                        <div class="glide__slide">
                          <div class="card mb-5 sh-20 hover-border-primary">
                            <div class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                              <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                <i data-cs-icon="warning-hexagon" class="text-white"></i>
                              </div>
                              <p class="mb-0 lh-1">Unconfirmed Orders</p>
                              <p class="cta-3 mb-0 text-primary">3</p>
                            </div>
                          </div>
                        </div>
                        <div class="glide__slide">
                          <div class="card mb-5 sh-20 hover-border-primary">
                            <div class="h-100 p-4 text-center align-items-center d-flex flex-column justify-content-between">
                              <div class="d-flex flex-column justify-content-center align-items-center sh-5 sw-5 rounded-xl bg-gradient-primary mb-2">
                                <i data-cs-icon="pin-error" class="text-white"></i>
                              </div>
                              <p class="mb-0 lh-1">Missing Orders</p>
                              <p class="cta-3 mb-0 text-primary">2</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Stats Start -->
            </div>

            <!-- Products Start -->
            <div class="col-12 col-xl-6 mb-5">
              <div class="d-flex justify-content-between">
                <h2 class="small-title">Products</h2>
                <button
                  class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  aria-haspopup="true"
                >
                  <i data-cs-icon="more-horizontal" data-cs-size="15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                  <a class="dropdown-item" href="#">Reload</a>
                  <a class="dropdown-item" href="#">Stats</a>
                  <a class="dropdown-item" href="#">Details</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </div>

              <div class="scroll-out">
                <div class="scroll-by-count" data-count="6">
                  <div class="card mb-2" data-title="Product Card" data-intro="Here is a product card with buttons!" data-step="2">
                    <div class="row g-0 sh-12">
                      <div class="col-auto">
                        <a href="Pages.Portfolio.Detail.html">
                          <img src="img/product/small/steirer-brot.jpg" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0 position-static">
                              <a href="Pages.Portfolio.Detail.html">Kommissbrot</a>
                              <div class="text-small text-muted text-truncate">Icing liquorice olegário jujubes oat cake.</div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Edit</span>
                              </button>
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="bin" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Delete</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2">
                    <div class="row g-0 sh-12">
                      <div class="col-auto position-relative">
                        <span class="badge rounded-pill bg-primary me-1 position-absolute e-n3 t-2">TREND</span>
                        <a href="Pages.Portfolio.Detail.html">
                          <img src="img/product/small/cornbread.jpg" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                              <a href="Pages.Portfolio.Detail.html">Yeast Karavai</a>
                              <div class="text-small text-muted text-truncate">Gummi liquorice olegário jujubes cookie.</div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Edit</span>
                              </button>
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="bin" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Delete</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2">
                    <div class="row g-0 sh-12">
                      <div class="col-auto">
                        <a href="Pages.Portfolio.Detail.html">
                          <img src="img/product/small/panettone.jpg" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                              <a href="Pages.Portfolio.Detail.html">Cholermüs</a>
                              <div class="text-small text-muted text-truncate">Marshmallow topping icing liquorice oat cake.</div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Edit</span>
                              </button>
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="bin" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Delete</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2">
                    <div class="row g-0 sh-12">
                      <div class="col-auto">
                        <a href="Pages.Portfolio.Detail.html">
                          <img src="img/product/small/michetta.jpg" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                              <a href="Pages.Portfolio.Detail.html">Cheesymite Scroll</a>
                              <div class="text-small text-muted text-truncate">Tootsie brownie ice cream marshmallow topping.</div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Edit</span>
                              </button>
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="bin" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Delete</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2">
                    <div class="row g-0 sh-12">
                      <div class="col-auto">
                        <a href="Pages.Portfolio.Detail.html">
                          <img src="img/product/small/barmbrack.jpg" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                              <a href="Pages.Portfolio.Detail.html">Bazlama</a>
                              <div class="text-small text-muted text-truncate">Tootsie roll cream marshmallow chocolate bar.</div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Edit</span>
                              </button>
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="bin" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Delete</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2">
                    <div class="row g-0 sh-12">
                      <div class="col-auto">
                        <a href="Pages.Portfolio.Detail.html">
                          <img src="img/product/small/zopf.jpg" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                              <a href="Pages.Portfolio.Detail.html">Soda Bread</a>
                              <div class="text-small text-muted text-truncate">Marshmallow topping icing liquorice oat cake.</div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Edit</span>
                              </button>
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="bin" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Delete</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2">
                    <div class="row g-0 sh-12">
                      <div class="col-auto">
                        <a href="Pages.Portfolio.Detail.html">
                          <img src="img/product/small/boule.jpg" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                              <a href="Pages.Portfolio.Detail.html">Chapati</a>
                              <div class="text-small text-muted text-truncate">Tootsie brownie ice cream marshmallow topping.</div>
                            </div>
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="edit-square" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Edit</span>
                              </button>
                              <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                <i data-cs-icon="bin" data-cs-size="15"></i>
                                <span class="d-none d-xxl-inline-block">Delete</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Products End -->
          </div>

          <div class="row">
            <!-- Logs Start -->
            <div class="col-lg-6 mb-5">
              <h2 class="small-title">Logs</h2>
              <div class="card sh-40 h-lg-100-card">
                <div class="card-body mb-n2 scroll-out h-100">
                  <div class="scroll h-100">
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="circle" class="text-primary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="circle" class="text-primary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="square" class="text-secondary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              Product out of stock:
                              <a href="#" class="alternate-link underline-link">Breadstick</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="square" class="text-secondary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Category page returned an error</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="circle" class="text-primary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="#" class="alternate-link underline-link">Steirer Brot</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="#" class="alternate-link underline-link">Soda Bread</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="#" class="alternate-link underline-link">Cholermüs</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="#" class="alternate-link underline-link">Bazlama</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived an email</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">
                              New sale:
                              <a href="#" class="alternate-link underline-link">Bazlama</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                          <div class="sh-3">
                            <i data-cs-icon="triangle" class="text-warning align-top"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                          <div class="d-flex flex-column">
                            <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                          <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Logs End -->

            <!-- Categories Start -->
            <div class="col-lg-6 mb-5">
              <div class="d-flex justify-content-between">
                <h2 class="small-title">Categories</h2>
                <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                  <span class="align-bottom">View All</span>
                  <i data-cs-icon="chevron-right" class="align-middle" data-cs-size="12"></i>
                </button>
              </div>
              <div class="row g-2">
                <div class="col-6 col-xl-4 sh-19" data-title="More Cards" data-intro="Category card with an icon!" data-step="3">
                  <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                      <i data-cs-icon="cupcake" class="text-primary"></i>
                      <p class="heading mt-3 text-body">Cupcakes</p>
                      <div class="text-extra-small fw-medium text-muted">14 PRODUCTS</div>
                    </a>
                  </div>
                </div>
                <div class="col-6 col-xl-4 sh-19">
                  <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                      <i data-cs-icon="loaf" class="text-primary"></i>
                      <p class="heading mt-3 text-body">Breads</p>
                      <div class="text-extra-small fw-medium text-muted">3 PRODUCTS</div>
                    </a>
                  </div>
                </div>
                <div class="col-6 col-xl-4 sh-19">
                  <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                      <i data-cs-icon="radish" class="text-primary"></i>
                      <p class="heading mt-3 text-body">Vegetables</p>
                      <div class="text-extra-small fw-medium text-muted">8 PRODUCTS</div>
                    </a>
                  </div>
                </div>
                <div class="col-6 col-xl-4 sh-19">
                  <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                      <i data-cs-icon="pear" class="text-primary"></i>
                      <p class="heading mt-3 text-body">Fruits</p>
                      <div class="text-extra-small fw-medium text-muted">9 PRODUCTS</div>
                    </a>
                  </div>
                </div>
                <div class="col-6 col-xl-4 sh-19">
                  <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                      <i data-cs-icon="mushrooms" class="text-primary"></i>
                      <p class="heading mt-3 text-body">Mushrooms</p>
                      <div class="text-extra-small fw-medium text-muted">3 PRODUCTS</div>
                    </a>
                  </div>
                </div>
                <div class="col-6 col-xl-4 sh-19">
                  <div class="card h-100 hover-scale-up">
                    <a class="card-body text-center" href="#">
                      <i data-cs-icon="water" class="text-primary"></i>
                      <p class="heading mt-3 text-body">Drinks</p>
                      <div class="text-extra-small fw-medium text-muted">4 PRODUCTS</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Categories End -->
          </div>

          <!-- Banners Start -->
          <h2 class="small-title">Extend Your Knowledge</h2>
          <div class="row">
            <div class="col-12 col-md-4 mb-5">
              <div class="card w-100 sh-18 sh-md-22 hover-img-scale-up">
                <img src="img/banner/cta-standard-1.jpg" class="card-img h-100 scale" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                  <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                    <div class="cta-3 text-black">
                      Introduction
                      <br />
                      to Bread Making
                    </div>
                    <a href="Pages.Blog.List.html" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                      <i data-cs-icon="chevron-right"></i>
                      <span>View</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 mb-5">
              <div class="card w-100 sh-18 sh-md-22 hover-img-scale-up">
                <img src="img/banner/cta-standard-2.jpg" class="card-img h-100 scale" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                  <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                    <div class="cta-3 text-black">
                      Basic Principles
                      <br />
                      of Cooking
                    </div>
                    <a href="Pages.Blog.List.html" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                      <i data-cs-icon="chevron-right"></i>
                      <span>View</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 mb-5">
              <div class="card w-100 sh-18 sh-md-22 hover-img-scale-up">
                <img src="img/banner/cta-standard-3.jpg" class="card-img h-100 scale" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                  <div class="d-flex flex-column h-100 justify-content-between align-items-start">
                    <div class="cta-3 text-black">
                      Easy & Practical
                      <br />
                      Recipes
                    </div>
                    <a href="Pages.Blog.List.html" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                      <i data-cs-icon="chevron-right"></i>
                      <span>View</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Banners End -->

          <div class="row gy-5">
            <!-- Help Start -->
            <div class="col-12 col-xl-4">
              <h2 class="small-title">Help</h2>
              <div class="card h-100-card">
                <div class="card-body">
                  <div class="cta-3">Do you need help?</div>
                  <div class="mb-3 cta-3 text-primary">Search for documentation!</div>
                  <div class="text-muted mb-4">Cheesecake chocolate carrot cake pie drops. Brownie ice cream marshmallow topping.</div>
                  <form>
                    <div class="mb-3 filled w-100">
                      <i data-cs-icon="diagram-1"></i>
                      <select class="select-single-no-search-filled select2-hidden-accessible" id="categorySelect" data-placeholder="Category">
                        <option label="&nbsp;"></option>
                        <option value="Breads">Breads</option>
                        <option value="Pies">Pies</option>
                        <option value="Desserts">Desserts</option>
                      </select>
                    </div>
                    <div class="mb-3 filled">
                      <i data-cs-icon="help"></i>
                      <input class="form-control" placeholder="Search" />
                    </div>
                    <a href="#" class="btn btn-icon btn-icon-start btn-primary mt-3">
                      <i data-cs-icon="chevron-right"></i>
                      <span>Search</span>
                    </a>
                  </form>
                </div>
              </div>
            </div>
            <!-- Help End -->

            <!-- Video Guide Start -->
            <div class="col-12 col-xl-8">
              <h2 class="small-title">Video Guide</h2>
              <div class="card h-100-card sh-md-45 bg-transparent">
                <video class="player cover" poster="img/product/large/bread.jpg" id="videoGuide">
                  <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                </video>
              </div>
            </div>
            <!-- Video Guide End -->
          </div>
        </div>
      </main>
      <!-- Layout Footer Start -->
      <footer>
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6">
                <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
              </div>
              <div class="col-sm-6 d-none d-sm-block">
                <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Review</a></li>
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Purchase</a></li>
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Docs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Layout Footer End -->
    </div>

    <!-- Theme Settings Modal Start -->
    <div
      class="modal fade modal-right scroll-out-negative"
      id="settings"
      data-bs-backdrop="true"
      tabindex="-1"
      role="dialog"
      aria-labelledby="settings"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="scroll-track-visible">
              <div class="mb-5" id="color">
                <label class="mb-3 d-inline-block form-label">Color</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT BLUE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK BLUE</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT RED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK RED</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT GREEN</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK GREEN</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PURPLE</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PINK</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PINK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="navcolor">
                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DEFAULT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-secondary figure-light top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-muted figure-dark top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="placement">
                <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="horizontal" data-parent="placement">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">HORIZONTAL</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="vertical" data-parent="placement">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left"></div>
                      <div class="figure figure-secondary right"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">VERTICAL</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="behaviour">
                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left large"></div>
                      <div class="figure figure-secondary right small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">PINNED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left"></div>
                      <div class="figure figure-secondary right"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">UNPINNED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="layout">
                <label class="mb-3 d-inline-block form-label">Layout</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLUID</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">BOXED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="radius">
                <label class="mb-3 d-inline-block form-label">Radius</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                    <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">ROUNDED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                    <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">STANDARD</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                    <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLAT</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn settings-button btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
      <i data-cs-icon="paint-roller" class="position-relative"></i>
    </button>
    <!-- Theme Settings Modal End -->

    <!-- Search Modal Start -->
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 p-0">
            <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ps-5 pe-5 pb-0 border-0">
            <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
          </div>
          <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom-left" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal End -->

    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/vendor/intro.min.js"></script>
    <script src="js/vendor/select2.full.min.js"></script>
    <script src="js/vendor/plyr.min.js"></script>
    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="font/CS-Line/csicons.min.js"></script>
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    <script src="js/base/init.js"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->
    <script src="js/cs/glide.custom.js"></script>
    <script src="js/cs/charts.extend.js"></script>
    <script src="js/pages/dashboard.default.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Page Specific Scripts End -->
  </body>
</html>
