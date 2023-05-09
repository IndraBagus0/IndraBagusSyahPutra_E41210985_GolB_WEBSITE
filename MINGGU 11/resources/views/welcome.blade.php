<html>

<head>
    <title>Dropzone Image Upload in Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="container">
            <h2 class="text-center my-5">Upload File Dengan Laravel</h2>
            <div class="col-lg-8 mx-auto my-5">
                {{-- Peringatan Jika Error --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                        @endforeach
                    </div>
                @endif


                {{-- Pesan Jika Success --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible"> <a href="#"
                            class="close text-decoration-none" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('success') }}
                    </div>
                @endif
                {{-- Peringatan Jika Error --}} @if (session('error'))
                    <div class="alert alert-danger alert-dismissible"> <a href="#"
                            class="close text-decoration-none" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ url('/upload/resize') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <b>File Gambar</b><br />
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-control" name="keterangan">
                        </textarea>
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Dropzone Image Upload in Laravel</h1><br>
                <form action="{{ url('/dropzone/store') }}" method="post" name="file" files="true"
                    enctype="multipart/form-data" class="dropzone" id="image-upload">
                    @csrf
                    <div>
                        <h3 class="text-center">Upload Multiple Images</h3>
                    </div>
                </form>
                <button type="button" id="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 10,
            acceptedFiles: ".jpeg, .jpg, .png, .gif",
            addRemoveLinks: true,
            createImageThumbnails: true,
            autoProcessQueue: false,
            init: function() {
                var myDropzone = this;
                // AKSI KETIKA BUTTON UPLOAD DI KLIK 
                $("#button").click(function(e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });
                this.on('sending', function(file, xhr, formData) {
                    // Tambahkan semua input form ke formData Dropzone yang akan POST 
                    var data = $('#image-upload').serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });

                });

            }
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">PDF Image Upload in Laravel</h1><br>
                <form action="{{ url('/pdf/store') }}" method="post" name="file" files="true"
                    enctype="multipart/form-data" class="dropzone" id="pdf-upload">
                    @csrf
                    <div>
                        <h3 class="text-center">Upload Multiple PDF</h3>
                    </div>
                </form>
                <button type="button" id="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone('#pdf-upload', {
            maxFilesize: 1,
            acceptedFiles: ".pdf",
            addRemoveLinks: true,
            autoProcessQueue: false,
            init: function() {
                // AKSI KETIKA BUTTON UPLOAD DI KLIK 
                $("#button").click(function(e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });
                this.on('sending', function(file, xhr, formData) {
                    // Tambahkan semua input form ke formData Dropzone yang akan POST 
                    var data = $('#pdf-upload').serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });

                });
            }
        });
    </script>
</body>

</html>
