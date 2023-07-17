<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js "
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n "
      crossorigin="anonymous "
    ></script>
    <title>Document</title>
    <style type="text/css">
      .carousel-item {
        height: 500px;
      }
      .image-container {
        position: relative;
    }
      .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
      }
      .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.2); /* Change the alpha value to adjust the darkness */
        z-index: 1;
    }
      .carousel-caption h5,
      .carousel-caption p {
        color: #ffffff;
      }

      @media (max-width: 1199px) {
        .carousel-caption {
          padding: 10px;
        }

        .carousel-caption h5 {
          font-size: 1.5rem;
        }

        .carousel-caption p {
          font-size: 1rem;
        }
        .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 300px;
        background-color: rgba(0, 0, 0, 0.2); /* Change the alpha value to adjust the darkness */
        z-index: 1;
    }
        .carousel-item img {
          height: 300px;
          object-fit: cover;
        }
      }
    </style>
  </head>

  <body>
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        @foreach ($pubs as $p)
        @if($loop->iteration == 0)
        <li
        data-target="#carouselExampleIndicators"
        data-slide-to="0"
        class="active"
      ></li>
      @else
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration}}"></li>
        @endif
        @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach ($pubs as $p)
        @if($loop->iteration == 0)
        <div class="carousel-item active image-container">
          <img
            src="{{ $p->image }}"
            class="d-block w-100"
            alt="{{ $p->image }}"
          />
          <div class="image-overlay"></div>
          <div class="carousel-caption">
            <!--<h5>No Title</h5>-->
            <p>{{ $p->description}}</p>
          </div>
        </div>
        @else
        <div class="carousel-item image-container">
          <img
            src="{{ $p->image }}"
            class="d-block w-100"
            alt="{{ $p->image}}"
          />
          <div class="image-overlay"></div>
          <div class="carousel-caption">
            <!--<h5>No Title</h5>-->
            <p>{{ $p->description}}</p>
          </div>
        </div>
        @endif
        @endforeach
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <script>
      $(document).ready(function () {
        // Set initial interval time
        var interval = 5000;

        // Get the carousel element
        var carousel = $("#carouselExampleIndicators");

        // Set the first slide to active
        carousel.find(".carousel-item").first().addClass("active");

        // Start the carousel
        carousel.carousel({
          interval: interval,
        });

        // Set random intervals for carousel slides
        setInterval(function () {
          interval = Math.floor(Math.random() * 8000) + 10000;
          carousel.carousel("next");
        }, interval);
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js "
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo "
      crossorigin="anonymous "
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js "
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 "
      crossorigin="anonymous "
    ></script>
  </body>
</html>
