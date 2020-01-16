<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio Léo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
    <?php include 'assets/include/header.php'; ?>

    <div class="container my-5">

  <!-- Section -->
  <section>
		<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body p-0">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>

						<!-- Grid row -->
						<div class="row">

							<!-- Grid column -->
							<div class="col-md-6 py-5 pl-5">

								<h5 class="font-weight-normal mb-3">Paper cup mockup</h5>

								<p class="text-muted">Key letters, explain which writing we he carpeting or fame, the itch expand medical amped through constructing time. And scarfs, gain, get showed accounts decades.</p>

								<ul class="list-unstyled font-small mt-5">
									<li>
										<p class="text-uppercase mb-2"><strong>Client</strong></p>
										<p class="text-muted mb-4">Envato Inc.</p>
									</li>

									<li>
										<p class="text-uppercase mb-2"><strong>Date</strong></p>
										<p class="text-muted mb-4">June 27, 2019</p>
									</li>

									<li>
										<p class="text-uppercase mb-2"><strong>Skills</strong></p>
										<p class="text-muted mb-4">Design, HTML, CSS, Javascript</p>
									</li>

									<li>
										<p class="text-uppercase mb-2"><strong>Address</strong></p>
										<a href="https://mdbootstrap.com/docs/jquery/design-blocks/">MDBootstrap</a>
									</li>
								</ul>

							</div>
							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-md-6">

								<div class="view rounded-right">
									<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Sample image">
								</div>

							</div>
							<!-- Grid column -->

						</div>
						<!-- Grid row -->

					</div>
				</div>
			</div>
		</div>

    <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">portfolio</h6>
    <h3 class="font-weight-bold text-center dark-grey-text pb-2">Product Designs</h3>
    <hr class="w-header my-4">
    <p class="lead text-center text-muted pt-2 mb-5">You can find several product design by our professional team in this section.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 dark-grey-text d-flex justify-content-center mb-5">

        <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter" data-rel="all">All</button>
        <p class="font-weight-bold mb-0 px-1 py-1">/</p>
        <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter" data-rel="1">Design</button>
        <p class="font-weight-bold mb-0 px-1 py-1">/</p>
        <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter" data-rel="2">Mockup</button>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="gallery mb-5" id="gallery">

      <!-- Grid column -->
      <div class="mb-3 pics all 2 animation">
        <a data-toggle="modal" data-target="#basicExampleModal">
          <img class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" alt="Card image cap">
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <a data-toggle="modal" data-target="#basicExampleModal">
          <img class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Vertical/7.jpg" alt="Card image cap">
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <a data-toggle="modal" data-target="#basicExampleModal">
          <img class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Vertical/4.jpg" alt="Card image cap">
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics all 2 animation">
        <a data-toggle="modal" data-target="#basicExampleModal">
          <img class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Others/images/63.jpg" alt="Card image cap">
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics all 2 animation">
        <a data-toggle="modal" data-target="#basicExampleModal">
          <img class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Others/images/64.jpg" alt="Card image cap">
        </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <a data-toggle="modal" data-target="#basicExampleModal">
          <img class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Card image cap">
        </a>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section -->
</div>


<div class="container my-5 py-5 px-4 px-lg-0">

<!-- Section -->
<section>
  <h3 class="font-weight-bold text-center dark-grey-text pb-2">Our History</h3>
  <hr class="w-header my-4">
  <p class="lead text-center text-muted pt-2 mb-5">MDB founded to help startups, and it still shapes the way we work today.</p>

  <div class="row">
    <div class="col-lg-8 mx-auto">

      <ol class="timeline">
        <li class="timeline-element">
          <h5 class="font-weight-bold dark-grey-text mb-3">Launched our website</h5>
          <p class="grey-text font-small"><time datetime="2017-02-08">08 Feb 2017</time></p>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique.
            Explicabo amet ipsum fugiat aliquam alias.</p>
        </li>

        <li class="timeline-element">
          <h5 class="font-weight-bold dark-grey-text mb-3">Got the first 100 users</h5>
          <p class="grey-text font-small"><time datetime="2017-08-17">17 Aug 2017</time></p>
          <p><img class="img-fluid z-depth-1-half rounded" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(6).jpg" alt="..."></p>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique.
            Explicabo amet ipsum fugiat aliquam alias.</p>
        </li>

        <li class="timeline-element">
          <h5 class="font-weight-bold dark-grey-text mb-3">Raised $1.4 million in seed funding</h5>
          <p class="grey-text font-small"><time datetime="2018-03-26">26 Mar 2019</time></p>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique.
            Explicabo amet ipsum fugiat aliquam alias.</p>
        </li>

        <li class="timeline-element">
          <h5 class="font-weight-bold dark-grey-text mb-3">Team size increased to 20</h5>
          <p class="grey-text font-small"><time datetime="2018-04-14">14 Apr 2019</time></p>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique.
            Explicabo amet ipsum fugiat aliquam alias.</p>
        </li>
      </ol>

    </div>
  </div>

</section>
<!-- Section -->

</div>

<div class="container my-5">


  <!-- Section: Block Content -->
  <section class="dark-grey-text text-center">

    <h3 class="font-weight-bold mb-4 pb-2">Our best projects</h3>
    <p class="text-muted w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid" alt="Sample project image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <div class="px-3 pt-3 mx-1 mt-1 pb-0">
          <h4 class="font-weight-bold mt-1 mb-3">Title of the news</h4>
          <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
          <a class="btn btn-indigo btn-sm btn-rounded"><i class="fas fa-clone left"></i> View project</a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid" alt="Sample project image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <div class="px-3 pt-3 mx-1 mt-1 pb-0">
          <h4 class="font-weight-bold mt-1 mb-3">Title of the news</h4>
          <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
          <a class="btn btn-indigo btn-sm btn-rounded"><i class="fas fa-clone left"></i> View project</a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" class="img-fluid" alt="Sample project image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <div class="px-3 pt-3 mx-1 mt-1 pb-0">
          <h4 class="font-weight-bold mt-1 mb-3">Title of the news</h4>
          <p class="text-muted">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
          <a class="btn btn-indigo btn-sm btn-rounded"><i class="fas fa-clone left"></i> View project</a>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Block Content -->


</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  </body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
  <script type="text/javascript">
    $(function () {
    var selectedClass = "";
    $(".filter").click(function () {
      selectedClass = $(this).attr("data-rel");
      $("#gallery").fadeTo(100, 0.1);
      $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
      setTimeout(function () {
        $("." + selectedClass).fadeIn().addClass('animation');
        $("#gallery").fadeTo(300, 1);
      }, 300);
    });
    });
  </script>
</html>
