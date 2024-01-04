<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="@yield('description')" name="description">
    <meta content="@yield('author')" name="author">
    <title>@yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('/assets/images/favicon-32x32.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{ asset('/assets/plugins/notifications/css/lobibox.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
 
 
    <link href="{{asset('/assets/plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />

    <!-- loader-->
    {{-- <link href="{{ asset('/assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('/assets/js/pace.min.js')}}"></script> --}}
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('/assets/css/app.css')}}" rel="stylesheet">

    <link href="{{ asset('/assets/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/css/select2-bootstrap-5-theme.min.css')}}" rel="stylesheet">

    <link href="{{ asset('/assets/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}/"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{ asset('/assets/css/header-colors.css')}}"/>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




       @yield('page_css')
        <style type="text/css">

        </style>
</head>

<body>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KW5K6R937N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KW5K6R937N');
</script>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->


     @include("include.header")
     @include("include.menu")
     @yield('content')
     @include("include.footer")

 <!-- Bootstrap JS -->
 <script src="{{ asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
 <!--plugins-->
 <script src="{{ asset('/assets/js/jquery.min.js')}}"></script>
 <script src="{{ asset('/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
 <script src="{{ asset('/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
 <script src="{{ asset('/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
 {{-- <script src="{{ asset('/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script> --}}
 <script src="{{ asset('/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

 <script src="{{asset('/assets/plugins/notifications/js/lobibox.min.js')}}" ></script>
 <script src="{{asset('/assets/plugins/notifications/js/notifications.min.js')}}" ></script>
 <script src="{{asset('/assets/plugins/notifications/js/notification-custom-script.js')}}" ></script>

 <script src="{{asset('/assets/plugins/validation/jquery.validate.min.js')}}" ></script>
 <script src="{{asset('/assets/plugins/validation/validation-script.js')}}" ></script>

 <script src="{{asset('assets/plugins/input-tags/js/tagsinput.js')}}"></script>


 <script src="{{ asset('/assets/js/index.js')}}"></script>
 <!--app JS-->

 <script src="{{ asset('/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
 <script src="{{ asset('/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js')}}"></script>

 <script src="{{ asset('/assets/plugins/fancy-file-uploader/jquery.ui.widget.js')}}"></script>
 <script src="{{ asset('/assets/plugins/fancy-file-uploader/jquery.fileupload.js')}}"></script>
 <script src="{{ asset('/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js')}}"></script>
<script src="{{ asset('/assets/js/select2.min.js')}}"></script>
 <script src="{{ asset('/assets/plugins/select2/js/select2-custom.js')}}"></script>
 

 <script src="{{ asset('/assets/js/app.js')}}"></script>

<!-- <script src="https://<hostname.tld>/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/vlr81mg0cx8hu4bcrhk8jjmunq6xq5ycvurgvcbth7scst88/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

 @yield('page_js')

 <!-- <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script> -->


    @if(Session::has("flash_message"))
    <script>
    Lobibox.notify('success', {
            pauseDelayOnHover: true,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            icon: 'bx bx-check-circle',
            msg: ' {!! Session::get("flash_message") !!}'
        });
    </script>
    @endif

    @if(Session::has("flash_error"))
    <script>
        Lobibox.notify('error', {
		pauseDelayOnHover: true,
		continueDelayOnInactiveTab: false,
		position: 'top right',
		icon: 'bx bx-x-circle',
		msg: ' {!! Session::get("flash_error") !!}'
	});
    </script>
     @endif


    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>

    <script>
        $('#fancy-file-upload').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>


<script>
    $(function () {
        $('[data-bs-toggle="popover"]').popover();
        $('[data-bs-toggle="tooltip"]').tooltip();
    })
</script>

</body>
</html>

