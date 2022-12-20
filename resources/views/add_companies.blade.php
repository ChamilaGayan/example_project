@extends('layouts.app')

@section('content')

    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <h2>Admin Panel</h2>
    </div>
    @include('layouts.sidebar')
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            @include('layouts.navbar')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Company</h3>
<br>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Company</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
    <div class="row match-height">

        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-content">
            <div class="card-body">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

<form action="{{route('add.company')}}" name="11" method="POST" class="contact-form" enctype="multipart/form-data">
    @csrf
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-2">
                        <label>Company Name</label> <span style="color: red">*</span>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" id="contact-info" class="form-control" name="company_name" placeholder="Company Name">
                        <span class="text-danger">
                            @if ( $errors->has('company_name') )
                                {{ $errors->first('company_name') }}
                            @endif
                          </span>
                    </div>


                    <div class="col-md-2">
                        <label>Email</label> <span style="color: red">*</span>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="email" id="contact-info" class="form-control" name="email" placeholder="email">
                        <span class="text-danger">
                            @if ( $errors->has('email') )
                                {{ $errors->first('email') }}
                            @endif
                          </span>
                    </div>



                    <div class="col-md-2">
                        <label>Logo</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="file" name="logo" class="form-control" id="browse">
                        <div id="preview"></div>
                    </div>


                    <div class="col-md-2">
                        <label>Telephone</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" id="contact-info" class="form-control" name="telephone" placeholder="Telephone">
                    </div>

                    <div class="col-md-2">
                        <label>Facebook</label> <i class="fa fa-facebook"></i>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" name="facebook" id="fb" placeholder="Facebook">
                    </div>

                    <div class="col-md-2">
                        <label>Instagram</label> <i class="fa fa-instagram"></i>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram">
                    </div>

                    <div class="col-md-2">
                        <label>WhatsApp</label> <i class="fa fa-whatsapp"></i>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="WhatsApp">
                    </div>

                    <div class="col-md-2">
                        <label>Telegram</label> <i class="fa fa-telegram"></i>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="telegram" class="form-control" name="telegram" id="telegram" placeholder="Telegram">
                    </div>

                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary mr-1 mb-1" onClick="return confirm('Do you want to submit this form?')">Submit</button>
                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1" onClick="return confirm('Do you want to reset this form?')">Reset</button>
                    </div>
                    </div>
                </div>
                </form>

            </div>
            </div>
        </div>

</div>

        </div>
    </div>
    @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script>
        $("input[type='file']").on("change", function() {
  if (this.files[0].size > 2000000) {
    var size = this.files[0].size;
    size = ( size >>> 20 ) + '.' + ( size & (2*0x3FF ) ) + ' 𝐌𝐁 ' ;
    alert("Please upload file less than 𝟐𝐌𝐁 and your file size is " + size + " ");
    $(this).val('');
    return size;
  }
});
    </script>

    <script>
        const EL_browse  = document.getElementById('browse');
const EL_preview = document.getElementById('preview');

const readImage = file => {
  if ( !(/^image\/(png|jpe?g|gif)$/).test(file.type) )
    return EL_preview.insertAdjacentHTML('beforeend', `<div>Unsupported format ${file.type}: ${file.name}</div>`);

  const reader = new FileReader();
  reader.addEventListener('load', () => {
    const img  = new Image();
    img.addEventListener('load', () => {
      EL_preview.appendChild(img);
      EL_preview.insertAdjacentHTML('beforeend', `<div>${file.name} ${img.width}×${img.height} ${file.type} ${Math.round(file.size/1024)}KB</div>`);
    });
    img.src = reader.result;
  });
  reader.readAsDataURL(file);
};

EL_browse.addEventListener('change', ev => {
  EL_preview.innerHTML = ''; // Clear Preview
  const files = ev.target.files;
  if (!files || !files[0]) return alert('File upload not supported');
  [...files].forEach( readImage );
});
    </script>

    <script src="js/feather-icons/feather.min.js"></script>
    <script src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="js/app.js"></script>

    <script src="js/main.js"></script>
    @endsection
