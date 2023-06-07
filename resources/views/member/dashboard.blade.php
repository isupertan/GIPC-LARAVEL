@extends('gipc_layout')
@section('bodycontent')



    <!-- left menu  -->
    <div class="members_area ma_body">
      <div class="container">
        <!-- Page content -->
        <button
          class="btn btn-primary d-block d-md-none"
          type="button"
          data-toggle="collapse"
          data-target="#dashboard-menu"
        >
          Menu
        <i class="fa-solid fa-caret-down ms-2"></i></button>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="collapse show" id="dashboard-menu">
              <nav class="nav flex-column nav-pills">
                <!-- Left vertical menu -->
                <div class="list-group">
                  <a
                    href="#dashboard"
                    class="list-group-item list-group-item-action active"
                    data-toggle="tab"
                    >Dashboard</a
                  >
                  <a
                    href="#my-account"
                    class="list-group-item list-group-item-action"
                    data-toggle="tab"
                    >My Account</a
                  >
                  <a
                    href="#gallery"
                    class="list-group-item list-group-item-action"
                    data-toggle="tab"
                    >Gallery</a
                  >
                  <a
                    href="#videogallery"
                    class="list-group-item list-group-item-action"
                    data-toggle="tab"
                    >Video Gallery</a
                  >
                  <a
                    href="#support"
                    class="list-group-item list-group-item-action"
                    data-toggle="tab"
                    >Support</a
                  >
                  <a
                    href="#settings"
                    class="list-group-item list-group-item-action"
                    data-toggle="tab"
                    >Settings</a
                  >
                  <a
                    class="list-group-item list-group-item-action"
                    href="login.html"
                    >Logout</a
                  >
                </div>
              </nav>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-12">
            <!-- Tab content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="dashboard">
                <h1>Dashboard</h1>
                <section
                  class="gradient-form py-3"
                  style="background-color: #eee"
                >
                  <main role="main" class="container">
                    <div class="jumbotron p-0">
                      <h1 class="display-4">Welcome, John Doe!</h1>
                      <p class="lead">
                        You are a premium member of our news website. Stay
                        informed with the latest news and exclusive contents.
                      </p>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="card mb-3">
                          <div class="card-header">Exclusive Contents</div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item mb-4">
                              <div class="row">
                                <div class="col-md-4">
                                  <img
                                    src="https://media.istockphoto.com/id/1065782416/photo/online-news-in-mobile-phone-close-up-of-smartphone-screen-man-reading-articles-in-application.jpg?b=1&s=170667a&w=0&k=20&c=3sEfQJpggmkOhFRisDiwqO3GGDNnholVOmA15956ViE="
                                    class="img-fluid"
                                    alt="Exclusive article 1"
                                  />
                                </div>
                                <div class="col-md-8">
                                  <h5 class="card-title">
                                    Exclusive article 1
                                  </h5>
                                  <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed euismod, lorem et
                                    ultrices rutrum, velit libero pharetra quam,
                                    id elementum nibh ex at nulla. Mauris nec
                                    velit sed velit imperdiet aliquet ut ac
                                    lacus.
                                  </p>
                                  <a href="#" class="btn btn-primary"
                                    >Read More</a
                                  >
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item mb-4">
                              <div class="row">
                                <div class="col-md-4">
                                  <img
                                    src="https://st2.depositphotos.com/3591429/11276/i/600/depositphotos_112767452-stock-photo-people-working-in-office.jpg"
                                    class="img-fluid"
                                    alt="Exclusive article 2"
                                  />
                                </div>
                                <div class="col-md-8">
                                  <h5 class="card-title">
                                    Exclusive article 2
                                  </h5>
                                  <p class="card-text">
                                    Sed euismod, lorem et ultrices rutrum, velit
                                    libero pharetra quam, id elementum nibh ex
                                    at nulla. Mauris nec velit sed velit
                                    imperdiet aliquet ut ac lacus. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit.
                                  </p>
                                  <a href="#" class="btn btn-primary"
                                    >Read More</a
                                  >
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item mb-4">
                              <div class="row">
                                <div class="col-md-4">
                                  <img
                                    src="https://media.istockphoto.com/id/1177502660/photo/young-woman-reading-the-news-on-a-modern-tablet-computer-while-sitting-in-her-living-room.jpg?b=1&s=170667a&w=0&k=20&c=FlEfigPkvFjKqnIvaN_x9F-_58pZT3BC6loP-iy26go="
                                    class="img-fluid"
                                    alt="Exclusive article 3"
                                  />
                                </div>
                                <div class="col-md-8">
                                  <h5 class="card-title">
                                    Exclusive article 3
                                  </h5>
                                  <p class="card-text">
                                    Velit libero pharetra quam, id elementum
                                    nibh ex at nulla. Mauris nec velit sed velit
                                    imperdiet aliquet ut ac lacus. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit.
                                    Sed euismod, lorem et ultrices rutrum.
                                  </p>
                                  <a href="#" class="btn btn-primary"
                                    >Read More</a
                                  >
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </main>
                </section>
              </div>
              <div class="tab-pane fade" id="my-account">
                <h1>My Account</h1>
                <section
                  class="gradient-form py-3"
                  style="background-color: #eee"
                >
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="text-center">
                                  <img
                                    src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    class="rounded-circle"
                                    alt="Profile Photo"
                                    width="150"
                                    height="150"
                                  />
                                  <div class="social_profile">
                                    <span class="d-block s_icon"
                                      ><i
                                        class="fa-brands fa-linkedin-in mr-2"
                                      ></i
                                      >/admin_singh</span
                                    >
                                    <span class="d-block s_icon"
                                      ><i class="fa-brands fa-twitter mr-2"></i
                                      >/admin_singh</span
                                    >
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group row">
                                  <label
                                    for="name"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Name:</label
                                  >
                                  <div class="col-md-8">
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="name"
                                      name="name"
                                      value="Admin Singh"
                                      readonly
                                    />
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label
                                    for="email"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Email:</label
                                  >
                                  <div class="col-md-8">
                                    <input
                                      type="email"
                                      class="form-control"
                                      id="email"
                                      name="email"
                                      value="johndoe@example.com"
                                      readonly
                                    />
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label
                                    for="phone"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Phone:</label
                                  >
                                  <div class="col-md-8">
                                    <input
                                      type="tel"
                                      class="form-control"
                                      id="phone"
                                      name="phone"
                                      value="(123) 456-7890"
                                      readonly
                                    />
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label
                                    for="name"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Address:</label
                                  >
                                  <div class="col-md-8">
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="Adress"
                                      name="Adress"
                                      value="123, kolkata 700144"
                                      readonly
                                    />
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label
                                    for="birthdate"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Birthdate:</label
                                  >
                                  <div class="col-md-8">
                                    <input
                                      type="date"
                                      class="form-control"
                                      id="birthdate"
                                      name="birthdate"
                                      value="1990-01-01"
                                      readonly
                                    />
                                  </div>
                                </div>
                                <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                    <button
                                      class="btn btn-primary"
                                      type="button"
                                      id="edit-profile-btn"
                                    >
                                      Edit Profile
                                    </button>
                                    <!-- <button
                                      class="btn btn-secondary d-none"
                                      type="button"
                                      id="cancel-edit-btn"
                                    >
                                      Cancel
                                    </button>
                                    <button
                                      class="btn btn-primary d-none"
                                      type="button"
                                      id="save-profile-btn"
                                    >
                                      Save Changes
                                    </button> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="tab-pane fade" id="gallery">
                <h1>Gallery</h1>
                <section
                class="gradient-form py-3"
                  style="background-color: #eee">
                   <div class="container ">
                    <div class="row lb_gallery">
                      
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a
                          href="img/bg-img/13.jpg"
                          data-lightbox="gallery-2023"
                          
                        >
                          <img src="img/bg-img/13.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a
                          href="img/bg-img/14.jpg"
                          data-lightbox="gallery-2023"
                        >
                          <img src="img/bg-img/14.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a
                          href="img/bg-img/12.jpg"
                          data-lightbox="gallery-2023"
                        >
                          <img src="img/bg-img/12.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a
                          href="img/bg-img/11.jpg"
                          data-lightbox="gallery-2023"
                        >
                          <img src="img/bg-img/11.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a
                          href="img/bg-img/10.jpg"
                          data-lightbox="gallery-2023"
                        >
                          <img src="img/bg-img/10.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a href="img/bg-img/9.jpg" data-lightbox="gallery-2023">
                          <img src="img/bg-img/9.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a href="img/bg-img/8.jpg" data-lightbox="gallery-2023">
                          <img src="img/bg-img/8.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a href="img/bg-img/7.jpg" data-lightbox="gallery-2023">
                          <img src="img/bg-img/7.jpg" class="img-fluid rounded" />
                        </a>
                      </div>
                      <div class="col-md-4 col-6 mb-4 g-2">
                        <a href="img/bg-img/6.jpg" data-lightbox="gallery-2023">
                          <img src="img/bg-img/6.jpg" class="img-fluid rounded" />
                        </a>
                      
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="tab-pane fade" id="videogallery">
                <h1 class="text-center">Video Gallery</h1>
                <section
                  class="gradient-form py-3"
                  style="background-color: #eee"
                >
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" data-toggle="modal" data-target="#video1">
                          <img
                            src="https://img.youtube.com/vi/1Jqk0GEZ9PE/maxresdefault.jpg"
                            alt="Video 1"
                            class="img-fluid thumbnail"
                          />
                        </a>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="video1"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="video1Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="video1Label">
                                  Mr. Pravin Anand at GIPC 2019, Bengaluru,
                                  India
                                </h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div
                                  class="embed-responsive embed-responsive-16by9"
                                >
                                  <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/1Jqk0GEZ9PE"
                                    allowfullscreen
                                  ></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" data-toggle="modal" data-target="#video2">
                          <img
                            src="https://img.youtube.com/vi/1Jqk0GEZ9PE/maxresdefault.jpg"
                            alt="Video 2"
                            class="img-fluid thumbnail"
                          />
                        </a>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="video2"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="video2Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="video2Label">
                                  Mr. Pravin Anand at GIPC 2019, Bengaluru,
                                  India
                                </h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div
                                  class="embed-responsive embed-responsive-16by9"
                                >
                                  <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/1Jqk0GEZ9PE"
                                    allowfullscreen
                                  ></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" data-toggle="modal" data-target="#video3">
                          <img
                            src="https://img.youtube.com/vi/1Jqk0GEZ9PE/maxresdefault.jpg"
                            alt="Video 3"
                            class="img-fluid thumbnail"
                          />
                        </a>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="video3"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="video3Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="video3Label">
                                  Mr. Pravin Anand at GIPC 2019, Bengaluru,
                                  India
                                </h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div
                                  class="embed-responsive embed-responsive-16by9"
                                >
                                  <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/1Jqk0GEZ9PE"
                                    allowfullscreen
                                  ></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" data-toggle="modal" data-target="#video4">
                          <img
                            src="https://img.youtube.com/vi/1Jqk0GEZ9PE/maxresdefault.jpg"
                            alt="Video 4"
                            class="img-fluid thumbnail"
                          />
                        </a>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="video4"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="video4Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="video4Label">
                                  Mr. Pravin Anand at GIPC 2019, Bengaluru,
                                  India
                                </h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div
                                  class="embed-responsive embed-responsive-16by9"
                                >
                                  <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/1Jqk0GEZ9PE"
                                    allowfullscreen
                                  ></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" data-toggle="modal" data-target="#video5">
                          <img
                            src="https://img.youtube.com/vi/1Jqk0GEZ9PE/maxresdefault.jpg"
                            alt="Video 5"
                            class="img-fluid thumbnail"
                          />
                        </a>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="video5"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="video5Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="video5Label">
                                  Mr. Pravin Anand at GIPC 2019, Bengaluru,
                                  India
                                </h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div
                                  class="embed-responsive embed-responsive-16by9"
                                >
                                  <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/1Jqk0GEZ9PE"
                                    allowfullscreen
                                  ></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" data-toggle="modal" data-target="#video6">
                          <img
                            src="https://img.youtube.com/vi/1Jqk0GEZ9PE/maxresdefault.jpg"
                            alt="Video 6"
                            class="img-fluid thumbnail"
                          />
                        </a>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="video6"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="video6Label"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="video6Label">
                                  Mr. Pravin Anand at GIPC 2019, Bengaluru,
                                  India
                                </h5>
                                <button
                                  type="button"
                                  class="close"
                                  data-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div
                                  class="embed-responsive embed-responsive-16by9"
                                >
                                  <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/1Jqk0GEZ9PE"
                                    allowfullscreen
                                  ></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Add more video cards here -->
                    </div>
                  </div>
                </section>
              </div>
              <div class="tab-pane fade" id="support">
                <h1>Support</h1>
                <section
                  class="gradient-form py-3"
                  style="background-color: #eee"
                >
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-body py-3">
                            <form method="POST">
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="name"
                                  name="name"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="email">Email address</label>
                                <input
                                  type="email"
                                  class="form-control"
                                  id="email"
                                  name="email"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="subject">Subject</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="subject"
                                  name="subject"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="message">Message</label>
                                <textarea
                                  class="form-control"
                                  id="message"
                                  name="message"
                                  rows="5"
                                  required
                                ></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">
                                Submit
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="tab-pane fade" id="settings">
                <h1><i class="fa-solid fa-pen-to-square"></i>Edit Profile</h1>
                <section
                  class="gradient-form py-3"
                  style="background-color: #eee"
                >
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-body">
                            <form method="POST">
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="name"
                                  name="name"
                                  placeholder="Your name"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="email">Email address</label>
                                <input
                                  type="email"
                                  class="form-control"
                                  id="email"
                                  name="email"
                                  placeholder="Your email"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="date">Date of Birth</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="date"
                                  name="date"
                                  value=""
                                  required
                                />
                              </div>
                              <hr />
                              <div class="form-group">
                                <label for="photo">Profile Photo</label>
                                <div class="custom-file">
                                  <input
                                    type="file"
                                    class="custom-file-input"
                                    id="photo"
                                    name="photo"
                                  />
                                  <label class="custom-file-label" for="photo"
                                    >Choose file</label
                                  >
                                </div>
                                <small class="form-text text-muted"
                                  >Upload a new profile photo, or leave blank to
                                  keep the existing one.</small
                                >
                              </div>
                              <div class="form-group">
                                <label for="Adress">Address</label>
                                <input
                                  class="form-control"
                                  id="Address"
                                  name="Address"
                                  rows="2"
                                  placeholder="Your Address"
                                />
                              </div>
                              <div class="form-group">
                                <label for="linkedin">LinkedIn <i class="fa-brands fa-linkedin-in ms-2"></i> </label>
                                <input
                                  class="form-control"
                                  id="linkedin"
                                  name="linkedin"
                                  
                                  placeholder="LinkedIn I'd"
                                />
                              </div>
                              <div class="form-group">
                                <label for="Twitter">Twitter <i class="fa-brands fa-twitter ms-2"></i></label>
                                <input
                                  class="form-control"
                                  id="Twitter"
                                  name="Twitter"
                                  
                                  placeholder="Your Twitter I'd"
                                />
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input
                                  type="password"
                                  class="form-control"
                                  id="password"
                                  name="password"
                                  required
                                />
                              </div>
                              <div class="form-group">
                                <label for="confirm-password"
                                  >Confirm Password</label
                                >
                                <input
                                  type="password"
                                  class="form-control"
                                  id="confirm-password"
                                  name="confirm-password"
                                  required
                                />
                              </div>
                              <hr />
                              <button type="submit" class="btn btn-primary">
                                Save Changes
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection