@include('customer.partials.header')

<body id="page-top">
    @include('customer.partials.topbar', ['infos' => $personal])
    <div id="wrapper">
                @include('customer.partials.navbar', ['infos' => $subinfo])
        <div id="content-wrapper">
            <div class="container-fluid upload-details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h6>Demande de Partenariat</h6>
                        </div>
                    </div>
                </div>
                <form method="POST" action="/partnerships" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Nom d'entreprise <span class="required">*</span></label>
                                <input class="form-control border-form-control" name="name" value=""
                                    placeholder="Noms.." type="text" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Activité <span class="required">*</span></label>
                                <input class="form-control border-form-control" name="activity" value=""
                                    placeholder="Activité" type="text"required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Tél <span class="required">*</span></label>
                                <input class="form-control border-form-control" name="phone"
                                    value="" placeholder="(+237)..." type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email <span class="required">*</span></label>
                                <input class="form-control border-form-control" name="mail"
                                    value="" placeholder="mail" type="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label ">Type de Partenariat <span class="required">*</span></label>
                                <div class="btn btn-secondary d-block d-flex justify-content-center">
                                    <input type="checkbox" name="ads" value="1" class="mrg-ct mr-2">
                                    <p class="int-chagne">Publicités</p>
                                </div>
                                <div class="btn btn-secondary d-block d-flex justify-content-center">
                                    <input type="checkbox" name="vente" value="1" class="mrg-ct mr-2">
                                    <p class="int-chagne">Vente</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Description <span class="required">*</span></label>
                                <textarea name="description" placeholder="En quoi consiste le partenariat, la durée etc..." class="form-control border-form-control" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-success border-none"> Envoyer </button>
                        </div>
                    </div>
                </form>
            </div>


            <footer class="sticky-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                            <p class="mt-1 mb-0">&copy; Copyright 2023 <strong class="text-dark">Digitech media sarl </strong>. All
                                Rights Reserved<br>
                                <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                        class="text-primary" target="_blank" href="#">Digitech</a>
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
    <!-- JavaScript code to load towns from the web API -->
    <script>
        const townSelect = document.getElementById('town-select');
        const countrySelect = document.getElementById('country-select');
        /*
        function loadTowns() {
          // Get the selected country value
          const country = countrySelect.value;
          
          // Make an API request to get the towns for the selected country
          fetch(`https://example.com/api/towns?country=${country}`)
            .then(response => response.json())
            .then(towns => {
              // Clear the existing options from the town select element
              townSelect.innerHTML = '';
              
              // Add the new town options to the select element
              towns.forEach(town => {
                const option = document.createElement('option');
                option.value = town.name//town.id;
                option.text = town.name;
                townSelect.appendChild(option);
              });
            });
        }*/

        // Load the towns when the country select element changes
        countrySelect.addEventListener('change', loadTowns);
    </script>
    <script>
        function getImage(input, name) {
            var file = input.files[0];
            if (file.size > 2000000) {
                alert("La taille du fichier ne doit pas dépasser 2Mb (2048kb) ");
                input.value = "";
                return;
            }
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('' + name);
                output.src = reader.result;
            }
            reader.readAsDataURL(file);
        }
    </script>
    @include('customer.partials.footer')
</body>

</html>
