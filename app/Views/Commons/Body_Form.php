<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="background-color: rgba(40, 58, 90, 0.9);">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="http://localhost/Space/public/">Space</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="http://localhost/Space/public/" class="logo me-auto"><img src="<?php echo base_url('/assets/img/logo.png') ?>" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="https://github.com/AlanDavid-007/Space">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg mt-5">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3><?php echo $title;?> Function of CRUD PHP with CI 4</strong></h3>
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p> -->
                        </div>

                        <div class="accordion-list">
              <div class="container">
              <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form-edited') ?>">
              <div class="d-flex justify-content-start circle-shape">
                  <label>ID</label>
                  <?php if ($topic['id'] < 10) {?>
                  <div class="circle d-flex align-items-center" style=" width: 25px; height: 25px; background-color: rgba(40, 58, 90, 0.9); border-radius: 50%; margin-left: 2%; text-align: center;"><span class="text-light text-center">0<?php echo $topic['id'];?></span></div>
                <?php } elseif ($topic['id'] == 10 || $topic['id'] > 10 && $topic['id'] < 100) {?>
                    <div class="circle d-flex align-items-center" style=" width: 25px; height: 25px; background-color: rgba(40, 58, 90, 0.9); border-radius: 50%; margin-left: 2%; text-align: center;"><span class="text-light text-center"><?php echo $topic['id'];?></span></div>
                <?php }; ?>
                </div>
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" value="<?php echo isset($topic['title']) ? $topic['title'] : ''?>" name="title" class="form-control">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" value="<?php echo isset($topic['title']) ? $topic['title'] : ''?>"
                   name="description" class="form-control">
                </div>
                <div class="form-group mt-3">
                  <input type="submit" class="btn btn-primary btn-block" value="Update Data">
                  <input type="hidden" name="id" value="<?php echo isset($topic['id']) ? $topic['id'] : ''?>">
                </div>
              </form>
            </div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
            <script>
              if ($("#add_create").length > 0) {
                $("#add_create").validate({
                  rules: {
                    Title: {
                      required: true,
                    },
                    Description: {
                      required: true,
                      maxlength: 60,
                      Description: true,
                    },
                  },
                  messages: {
                    Title: {
                      required: "Title is required.",
                    },
                    Description: {
                      required: "Description is required.",
                      Description: "It does not seem to be a valid Description.",
                      maxlength: "The Description should be or equal to 60 chars.",
                    },
                  },
                })
              }
            </script>
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo base_url('/assets/img/alert.svg') ?>");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

    </main><!-- End #main -->


</body>