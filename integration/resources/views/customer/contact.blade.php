@include('customer.partials.header')

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
        @include('customer.partials.navbar', ['infos' => $subinfo])
        <div id="content-wrapper">
            <div class="container-fluid">

                <section class="section-padding">
                    <div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <h3 class="mt-1 mb-4">Entrez en Contact</h3>
                                <h6 class="text-dark">Address :</h6>
                                <p>{{ $info->address }}</p>
                                <h6 class="text-dark">Tél :</h6>
                                <p>{{ $info->phone }}</p>
                                <h6 class="text-dark">Email :</h6>
                                <p>{{ $info->email }}</p>
                                <h6 class="text-dark">Liens Utiles :</h6>
                                <p>...............................</p>
                                <a href="/partnership" class="btn btn-primary"> Demande de Partenariat </a>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109552.19658195564!2d75.78663251672796!3d30.900473637371658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1530462134939"
                                            width="100%" height="340" frameborder="0" style="border:0"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <hr>

                <section class="section-padding" >
                    <div style="width: 100vh">
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 section-title text-left mb-4" style="width: 100vh">
                                <h2>Contactez-Nous</h2>
                            </div>
                            <form action="/contact" method="post" class="box mb-3 single-video-comment-tabs">
                                @csrf
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="retro-comments-tab" data-toggle="tab"
                                            href="#retro-comment" role="tab" aria-controls="retro"
                                            aria-selected="false">NOUVEAU MESSAGE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="retro-comments-tabs" data-toggle="tab"
                                            href="#retro-comments" role="tab" aria-controls="retro"
                                            aria-selected="false">Vos Echanges</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="retro-comment" role="tabpanel"
                                        aria-labelledby="retro-comments-tab" style="width: 100vh">
                                        <form class="col-lg-12 col-md-12" name="sentMessage" id="contactForm"
                                            novalidate style="width: 100vh">
                                            <div class="control-group form-group">
                                                <div class="controls">
                                                    <label>Nom <span class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Full Name" class="form-control"
                                                        id="name" required value="{{ Auth::user()->firstname }}"
                                                        data-validation-required-message="Please enter your name." readonly/>
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="control-group form-group col-md-6">
                                                    <label>Numero de telephone <span class="text-danger">*</span></label>
                                                    <div class="controls">
                                                        <input type="tel" placeholder="Phone Number"
                                                        value="{{ Auth::user()->phone }}"
                                                            class="form-control" id="phone" readonly
                                                            data-validation-required-message="Please enter your phone number." />
                                                    </div>
                                                </div>
                                                <div class="control-group form-group col-md-6">
                                                    <div class="controls">
                                                        <input type="hidden" name="rec"
                                                            value="{{ Auth::user()->id }}">
                                                        <label>Email Address
                                                            <span class="text-danger">*</span></label>
                                                        <input type="email" placeholder="Email Address"
                                                            class="form-control" id="email"
                                                            value="{{ Auth::user()->email }}" readonly
                                                            data-validation-required-message="Please enter your email address." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group form-group">
                                                <div class="controls">
                                                    <label>Message <span class="text-danger">*</span></label>
                                                    <textarea rows="4" cols="100" class="form-control" id="message" required
                                                        data-validation-required-message="Poser votre problème" name="message" placeholder="Poser votre problème"
                                                        maxlength="999" style="resize: none"></textarea>
                                                </div>
                                            </div>
                                            <div id="success"></div>

                                            <button type="submit" class="btn btn-success">
                                                Send Message
                                            </button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show" id="retro-comments" role="tabpanel" style="width: 100vh"
                                        aria-labelledby="retro-comments-tabs">
                                        <div class="video-slider-right-list" style="width: 100vh">
                                            @foreach ($messages as $m)
                                                @if (Auth::user()->id == $m->sender)
                                                    <div class="reviews-members" style="width: 100vh">
                                                        <div class="media">
                                                            <a href="#"><img alt="avatar"
                                                                    src="{{ Auth::user()->image }}"
                                                                    class="mr-3"></a>
                                                            <div class="media-body">
                                                                <div class="reviews-members-header">
                                                                    <h6 class="mb-1"><a href="#"
                                                                            class="text-black">{{ Auth::user()->firstname }}
                                                                        </a> <small
                                                                            class="text-gray">{{ $m->fmt_date }}</small>
                                                                    </h6>
                                                                </div>
                                                                @if($m->resid == null)
                                                                <div class="reviews-members-body" style="width: 100vh">
                                                                    <p>{{ $m->message }}</p>
                                                                </div>
                                                                @else
                                                                <div class="reviews-members-body" style="width: 100vh">
                                                                    <p><b>Message :</b> {{ $m->message }} <br><b>Réponse :</b> {{ $m->response }}</p>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </div>


            <footer class="sticky-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">LEVEGI SARL</strong>. All
                                Rights Reserved<br>
                                <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                        class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask
                                        Bootstrap</a>
                                </small>
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-right">
                            <div class="app">
                                <a href="#"><img alt src="img/google.png"></a>
                                <a href="#"><img alt src="img/apple.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('customer.partials.lowbar', ['infos' => $personal])
    @include('customer.partials.footer')
</body>

</html>
