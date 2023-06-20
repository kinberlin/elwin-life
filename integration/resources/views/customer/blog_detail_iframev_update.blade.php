@include('customer.partials.header')

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <section class="blog-page section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-title">
                                    <h6>Blog Vidéo Détail</h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <form method="POST" action="/admin/blog/video/update"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="" name="bloc1" id="bloc1">
                                    <input type="hidden" value="{{$video->id}}" name="id">
                                    <input type="hidden" value="{{$category}}" name="category">
                                    <input type="hidden" value="{{ $authors }}" name="authors">
                                    <input type="hidden" value="{{ $title }}" name="titre" id="titre">
                                    <input type="hidden" value="" name="duration" id="duration">
                                    <input type="hidden" value="{{ $channel->id }}" name="channel" id="channel">
                                    <div class="card blog mb-4">
                                        <div class="video-card blog-header">
                                            <div class="video-card-image">
                                                <label class="play-icon" for="file1"><i
                                                        class="fas fa-upload"></i></label>
                                                <input type="file" name="cover_image" accept=".jpg, .jpeg, .png"
                                                    id="file1" onchange="getImage(this,'img-preview1')"
                                                    class="inputfile">
                                                <a href="#"><img class="img-fluid" id="img-preview1"
                                                        src="{{ $video->cover_image }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">{{ $title }}</a></h5>
                                            <h6 class="card-title"><a href="#">Auteurs : {{ $authors }}</a>
                                            </h6>
                                            <div class="entry-meta">
                                                <ul class="tag-info list-inline">
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fas fa-calendar"></i>
                                                            {{ now()->format('F d, Y') }}</a></li>
                                                    <li class="list-inline-item"><i class="fas fa-folder"></i> <a
                                                            rel="category tag" href="#">{{ $channel->name }}</a>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fas fa-tag"></i>
                                                        @foreach ($tag as $t)
                                                            <a rel="tag" href="#">{{ $t->name }}</a> ,
                                                        @endforeach
                                                        .
                                                    </li>
                                                    <li class="list-inline-item"><i class="fas fa-comment"></i> <a
                                                            href="#">0 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="">
                                                <span>Entrez une description de la vidéo</span>
                                                <span class="delete-btnd">&#x2716;</span>
                                                <div id="editor">
                                                    {!! $video->bloc1 !!}
                                                </div>
                                            </div>
                                            <div class="gallery mt-4 mb-4">
                                                <p>Choisissez une vidéo au format mp4</p>
                                                <span class="delete-btnd">&#x2716;</span>
                                                <div class="row">
                                                    <div class="col-sm-12 video-card blog-header col-sm-4">
                                                        <div class="video-card-image">

                                                            <input type="file" name="video" accept="video/mp4"
                                                                id="file5" onchange="loadVideo(event)">
                                                            <a href="#"><video class="img-fluid" id="myVideo"
                                                                    src="{{ $video->video }}" controls></video></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <footer class="entry-footer">
                                                <div class="blog-post-tags">
                                                    <ul class="list-inline" id="listContainer">
                                                        <li class="list-inline-item"><i class="fas fa-tag"></i> Tags:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <label class="btn btn-outline-primary" id="addListItemButton">Ajouter
                                                    un Tag</label>
                                            </footer>
                                        </div>
                                    </div>
                                    <button type="submit" id="loading-button" onclick="showLoading()"
                                        class="btn btn-outline-primary btn-block btn-lg">Publier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('customer.partials.footer')
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

        function loadVideo(event) {
            var video = document.getElementById("myVideo");
            var file = event.target.files[0];
            if (file.size > 65000000) {
                alert("La taille du fichier ne doit pas dépasser 64Mb (64mb) ");
                input.value = "";
                return;
            }
            var url = URL.createObjectURL(file);
            video.setAttribute("src", url);
        }

        function showLoading() {
            var btn = document.getElementById("loading-button");
            btn.classList.add("loading");
            // Your loading code here
        }
    </script>
    <script>
        document.getElementById('file5').addEventListener('change', function(e) {
            var file = e.target.files[0];
            var video = document.createElement('video');
            video.preload = 'metadata';
            video.onloadedmetadata = function() {
                //console.log('Video duration: ' + formatTime(video.duration));
                document.getElementById("duration").value = formatTime(video.duration);
            }
            video.src = URL.createObjectURL(file);
        });

        function formatTime(seconds) {
            var hours = Math.floor(seconds / 3600);
            var minutes = Math.floor((seconds - (hours * 3600)) / 60);
            var seconds = Math.floor(seconds - (hours * 3600) - (minutes * 60));

            var formattedTime = '';
            if (hours > 0) {
                formattedTime += hours + ':';
            }
            if (minutes < 10) {
                formattedTime += '0';
            }
            formattedTime += minutes + ':';
            if (seconds < 10) {
                formattedTime += '0';
            }
            formattedTime += seconds;
            return formattedTime;
        }
    </script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        const deleteBtns = document.querySelectorAll('.delete-btnd');

        deleteBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                btn.parentNode.remove();
            });
        });

        // Get the button and list container elements
        const addButton = document.getElementById('addListItemButton');
        const listContainer = document.getElementById('listContainer');

        // Add an event listener to the button for a click event
        addButton.addEventListener('click', () => {
            // Create a new list item element
            const newListItem = document.createElement('li');
            newListItem.classList.add('list-inline-item');

            // Create a new input element and add it to the new list item
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.required = true;
            newInput.name = "tag[]";
            newInput.classList.add('form');
            newListItem.appendChild(newInput);

            // Create a new button element and addit to the new list item
            const newButton = document.createElement('button');
            newButton.textContent = 'x';
            newButton.addEventListener('click', () => {
                // Remove the corresponding list item
                listContainer.removeChild(newListItem);
            });
            newListItem.appendChild(newButton);

            // Add the new list item to the list container
            listContainer.appendChild(newListItem);
        });
    </script>
    <script>
        // Select the div element you want to monitor
        const div = document.querySelector('#editor');

        // Create a new instance of the MutationObserver
        const observer = new MutationObserver(function(mutations) {
            // Call your JavaScript function here whenever the content of the div is modified
            var divContent = document.getElementById("editor").innerHTML;
            //console.log(divContent);
            document.getElementById("bloc1").value = divContent;
        });

        // Configure the observer to monitor the div for changes to its content
        const config = {
            childList: true,
            attributes: true,
            characterData: true,
            subtree: true
        };

        // Start observing the div for changes to its content
        observer.observe(div, config);
    </script>
</body>

</html>
