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
                                    <h6>Blog Détail</h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <form id="myForm" method="POST" action="/admin/blog/article"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="" name="bloc1" id="bloc1">
                                    <input type="hidden" value="" name="bloc2" id="bloc2">
                                    <input type="hidden" value="" name="bloc3" id="bloc3">
                                    <input type="hidden" value="{{$category}}" name="category">
                                    <input type="hidden" value="{{ $title }}" name="titre" id="titre">
                                    <input type="hidden" value="{{ $channel->id }}" name="channel" id="channel">
                                    <div class="card blog mb-4">
                                        <div class="video-card blog-header">
                                            <div class="video-card-image">
                                                <label class="play-icon" for="file1"><i
                                                        class="fas fa-upload"></i></label>
                                                <input type="file" name="cover_image" accept=".jpg, .jpeg, .png"
                                                    id="file1" onchange="getImage(this,'img-preview1')"
                                                    class="inputfile" required>
                                                <a href="#"><img class="img-fluid" id="img-preview1"
                                                        src="http://localhost:8000/img/v5.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">{{ $title }}</a></h5>
                                            <div class="entry-meta">
                                                <ul class="tag-info list-inline">
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="fas fa-calendar"></i>
                                                            {{ now()->format('F d, Y') }}</a></li>
                                                    <li class="list-inline-item"><i class="fas fa-folder"></i> <a
                                                            rel="category tag" href="#">{{ $channel->name }}</a>
                                                    </li>
                                                    <li class="list-inline-item"><i class="fas fa-tag"></i> <a
                                                            rel="tag" href="#">tag1</a>, <a rel="tag"
                                                            href="#">tag2</a>, <a rel="tag"
                                                            href="#">tag3</a> </li>
                                                    <li class="list-inline-item"><i class="fas fa-comment"></i> <a
                                                            href="#">0 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="boxd">
                                                <p>Cliquer sur la croix pour supprimer ce bloc</p>
                                                <span class="delete-btnd">&#x2716;</span>
                                                <div id="editor">
                                                </div>
                                            </div>
                                            <div class="gallery mb-4 boxd">
                                                <p>Cliquer sur la croix pour supprimer ce bloc</p>
                                                <span class="delete-btnd">&#x2716;</span>
                                                <!--<h5 class="mb-4">Lorem ipsum dolor sit amet, consectetur.</h5>-->
                                                <span class="delete-btnd">&#x2716;</span>
                                                <div class="row">
                                                    <div class=" video-card blog-header col-sm-4">
                                                        <div class="video-card-image">
                                                            <label class="play-icon" for="file2"><i
                                                                    class="fas fa-upload"></i></label>
                                                            <input type="file" name="image1"
                                                                accept=".jpg, .jpeg, .png" id="file2"
                                                                onchange="getImage(this,'img-preview2')"
                                                                class="inputfile" required>
                                                            <a href="#"><img class="img-fluid" id="img-preview2"
                                                                    src="{!! url('img/blog/3.png') !!}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class=" video-card blog-header col-sm-4">
                                                        <div class="video-card-image">
                                                            <label class="play-icon" for="file3"><i
                                                                    class="fas fa-upload"></i></label>
                                                            <input type="file" name="image2"
                                                                accept=".jpg, .jpeg, .png" id="file3"
                                                                onchange="getImage(this,'img-preview3')"
                                                                class="inputfile" required>
                                                            <a href="#"><img class="img-fluid"
                                                                    id="img-preview3" src="{!! url('img/blog/2.png') !!}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class=" video-card blog-header col-sm-4">
                                                        <div class="video-card-image">
                                                            <label class="play-icon" for="file4"><i
                                                                    class="fas fa-upload"></i></label>
                                                            <input type="file" name="image3"
                                                                accept=".jpg, .jpeg, .png" id="file4"
                                                                onchange="getImage(this,'img-preview4')"
                                                                class="inputfile" required>
                                                            <a href="#"><img class="img-fluid"
                                                                    id="img-preview4" src="{!! url('img/blog/1.png') !!}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="boxd">
                                                <p>Cliquer sur la croix pour supprimer ce bloc</p>
                                                <span class="delete-btnd">&#x2716;</span>
                                                <div id="editor1">
                                                </div>
                                            </div>
                                            <div class="gallery mt-4 mb-4 boxd">
                                                <p>Cliquer sur la croix pour supprimer ce bloc</p>
                                                <span class="delete-btnd">&#x2716;</span>
                                                <div class="row">
                                                    <div class="col-sm-6 video-card blog-header col-sm-4">
                                                        <div class="video-card-image">
                                                            <label class="play-icon" for="file5"><i
                                                                    class="fas fa-upload"></i></label>
                                                            <input type="file" name="image4"
                                                                accept=".jpg, .jpeg, .png" id="file5"
                                                                onchange="getImage(this,'img-preview5')"
                                                                class="inputfile" required>
                                                            <a href="#"><img class="img-fluid"
                                                                    id="img-preview5" src="{!! url('img/blog/3.png') !!}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 video-card blog-header col-sm-4">
                                                        <div class="video-card-image">
                                                            <label class="play-icon" for="file6"><i
                                                                    class="fas fa-upload"></i></label>
                                                            <input type="file" name="image5"
                                                                accept=".jpg, .jpeg, .png" id="file6"
                                                                onchange="getImage(this,'img-preview6')"
                                                                class="inputfile" required>
                                                            <a href="#"><img class="img-fluid"
                                                                    id="img-preview6" src="{!! url('img/blog/2.png') !!}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="boxd">
                                                <p>Cliquer sur la croix pour supprimer ce bloc</p>
                                                <span class="delete-btnd">&#x2716;</span>
                                                <div id="editor2">
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
                                    <button type="submit"
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
    </script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        var quill = new Quill('#editor1', {
            theme: 'snow'
        });
        var quill = new Quill('#editor2', {
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
        const div1 = document.querySelector('#editor1');
        const div2 = document.querySelector('#editor2');

        // Create a new instance of the MutationObserver
        const observer = new MutationObserver(function(mutations) {
            // Call your JavaScript function here whenever the content of the div is modified
            var divContent = document.getElementById("editor").innerHTML;
            //console.log(divContent);
            document.getElementById("bloc1").value = divContent;
        });

        // Create a new instance of the MutationObserver
        const observer1 = new MutationObserver(function(mutations) {
            // Call your JavaScript function here whenever the content of the div is modified
            var divContent = document.getElementById("editor1").innerHTML;
            //console.log(divContent);
            document.getElementById("bloc2").value = divContent;
        });

        // Create a new instance of the MutationObserver
        const observer2 = new MutationObserver(function(mutations) {
            // Call your JavaScript function here whenever the content of the div is modified
            var divContent = document.getElementById("editor2").innerHTML;
            //console.log(divContent);
            document.getElementById("bloc3").value = divContent;
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
        observer1.observe(div1, config);
        observer2.observe(div2, config);
    </script>
    <script>
        /*const form = $('#myForm');
                            form.on('submit', uploadImages);
                            //const editorContent = document.querySelector('#myForm').innerHTML;
                             function submitForm(event) {
                                 event.preventDefault(); // prevent default form submission behavior

                                 // get form data
                                 const formData = document.querySelector('#myForm').innerHTML; //$(this).serialize();

                                 // send AJAX request
                                 $.ajax({
                                     type: 'POST',
                                     url: 'http://localhost:8000/admin/blog/article',
                                     data: formData,
                                     success: function(response) {
                                         console.log(response);
                                         console.log(formData);
                                     },
                                     error: function(jqXHR, textStatus, errorThrown) {
                                         console.log(formData);
                                         console.error('Error:', textStatus, errorThrown);
                                     }
                                 });
                             }*/
        /*
                const myForm = document.getElementById('myForm');
                myForm.addEventListener('submit', (event) => {
                    //function uploadImages(event) {
                    event.preventDefault(); // prevent default form submission behavior
                    // Create a FormData object and add the files to it
                    const formData = new FormData(myForm);
                    formData.append('channel', '{{ $channel->id }}');
                    formData.append('titre', '{{ $title }}');
                    // Get the input file elements and the selected files
                    const block = document.getElementById('editor');
                    const block1 = document.getElementById('editor1');
                    const block2 = document.getElementById('editor2');

                    /**
                     * Getting blocks html content
                     * **/
        /*
                    if (block !== null) {
                        const editor = document.querySelector('#editor').innerHTML;
                        formData.append('bloc1', editor);
                    }
                    if (block1 !== null) {
                        const editor1 = document.querySelector('#editor1').innerHTML;
                        formData.append('bloc2', editor1);
                    }
                    if (block2 !== null) {
                        const editor2 = document.querySelector('#editor2').innerHTML;
                        formData.append('bloc3', editor2);
                    }
                    /*
                                const i1 = document.getElementById('file1');
                                const i2 = document.getElementById('file2');
                                const i3 = document.getElementById('file3');
                                const i4 = document.getElementById('file4');
                                const i5 = document.getElementById('file5');
                                const i6 = document.getElementById('file6');
                                
                                if (i1 !== null) {
                                    const input1 = document.querySelector('#file1');
                                    formData.append('cover_image', input1.files[0]);
                                }
                                if (i2 !== null) {
                                    const input2 = document.querySelector('#file2');
                                    formData.append('image1', input2.files[0]);
                                }
                                if (i3 !== null) {
                                    const input3 = document.querySelector('#file3');
                                    formData.append('image2', input3.files[0]);
                                }
                                if (i4 !== null) {
                                    const input4 = document.querySelector('#file4');
                                    formData.append('image3', input4.files[0]);
                                }
                                if (i5 !== null) {
                                    const input5 = document.querySelector('#file5');
                                    formData.append('image4', input5.files[0]);
                                }
                                if (i6 !== null) {
                                    const input6 = document.querySelector('#file6');
                                    formData.append('image5', input6.files[0]);
                                }*/
        /*
                    // Create an AJAX request to post the images to the server
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', 'http://localhost:8000/api/articles');

                    // Set the content type header to multipart/form-data to upload files
                    //xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                    //xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

                    // Listen for the upload progress and handle the response  xhr.upload.addEventListener('progress', (event) => {
                    const percent = (event.loaded / event.total) * 100;
                    console.log(`Upload progress: ${percent}`);

                    xhr.addEventListener('load', (event) => {
                        console.log(`Upload complete: ${xhr.statusText}`);
                    });

                    xhr.addEventListener('error', (event) => {
                        console.error(`Upload error: ${xhr.me}`);
                    });

                    // Send the AJAX request with the form data
                    const data = {};
                    formData.forEach((value, key) => data[key] = value);
                    const json = JSON.stringify(data);

                    xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                    xhr.setRequestHeader('Accept', 'application/json');
                    //xhr.send(json);
                    console.log(formData);
                    xhr.send(formData);
                    
                });*/
    </script>
</body>

</html>
