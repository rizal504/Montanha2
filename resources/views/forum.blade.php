<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum</title>

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-theme.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/puredesign.css">

    <link rel="stylesheet" href="assets/css/flexslider.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/jquery.fullPage.css">

    <link rel="stylesheet" href="assets/forum/assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/forum/assets1/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/forum/assets1/slick/slick.css">
    <link rel="stylesheet" href="assets/forum/assets1/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/forum/assets1/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/forum/assets1/animation/animate.css">
    <link rel="stylesheet" href="assets/forum/css1/style.css">
    <link rel="stylesheet" href="assets/forum/css1/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    </head>
    <body>
      
        <div id="myloader">
            <span class="loader">
                <div class="inner-loader"></div>
            </span>
        </div>
        
        <div id="main-wrap" class="full-width">
            <header id="header" class="fixed transparent full-width">
                <div class="container">
                    <nav class="navbar navbar-default white">
                        <!--  Header Logo  -->
                    <div id="logo">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo1.png" class="normal" alt="logo">
                            <img src="assets/img/logo1.png" class="retina" alt="logo">
                            <img src="assets/img/logoputih.png" class="normal white-logo" alt="logo">
                            <img src="assets/img/logo1.png" class="retina white-logo" alt="logo">
                        </a>
                    </div>
                    <!--  END Header Logo  -->
                    <!--  Classic menu, responsive menu classic  -->
                    @include('component.topbar')
                    <!--  END Classic menu, responsive menu classic  -->
                        <div id="menu-responsive-classic">
                            <div class="menu-button">
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                            </div>
                        </div>
                        <div id="search-box" class="full-width">
                            <form role="search" id="search-form" class="black big">
                                <div class="form-input">
                                    <input class="form-field black big" type="search" placeholder="Search...">
                                    <span class="form-button big">
                                            <button type="button">
                                                <i class="icon ion-ios-search"></i>
                                            </button>
                                        </span>
                                </div>
                            </form>
                            <button class="close-search-box">
                                    <i class="icon ion-ios-close-empty"></i>
                                </button>
                        </div>
                    </nav>
                </div>
            </header>
            
           <div id="page-content" class="header-static footer-fixed">
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/forum.jpg)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Forum</h1>
                                <p class="heading white">Explore pengalamanmu dengan mendaki gunung di Jawa Tegah</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Forum</li>
                        </ol>
                    </ul>
                </div>
                <div id="page-wrap" class="content-section fullpage-wrap grey-background">
                    <div class="container text">
                    <section class="doc_blog_grid_area sec_pad forum-page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="communities-boxes">
                                    

                                        

                                </div>
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('password')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror

                                @if(\Session::get('message'))
                                <div class="alert alert-primary" role="alert">
                                    {{ \Session::get('message') }}
                                </div>
                                @endif
                                  
                                <div class="answer-action">
                                    <div class="action-content">
                                        <div class="image-wrap">
                                            <img src="img/home_support/answer.png" alt="answer action">
                                        </div>

                                        

                                        <div class="content">
                                            <h2 class="ans-title">Apa yang ingin anda bagikan?</h2>
                                            <p>
                                                Make use of a qualified tutor to get the answer
                                            </p>
                                        </div>
                                    </div>

                                    <div class="action-button-container" id="inline-popups">
                                        <button class="action_btn btn-ans" data-toggle="modal" data-target="#{{ auth()->check() ? 'ask' : 'login' }}-modal">Takon saiki</button>
                                        {{-- <a href="#" class="action_btn btn-ans">Comment</a> --}}
                                        {{-- <a href="#test-popup" data-effect="mfp-zoom-out">Zoom-out</a> --}}
                                    </div>
                                </div>

                                <div class="post-header">
                                    <div class="support-info">
                                        <ul class="support-total-info">
                                            <li class="open-ticket"><i class="icon_info_alt"></i>{{ $count }} Pertanyaan</li>
                                        </ul>
                                    </div>

                                    <div class="support-category-menus">
                                    </div>
                                </div>

                                <div class="community-posts-wrapper bb-radius">
                                    @foreach ($questions as $item)
                                    <div class="community-post style-two kbDoc richard bug">
                                        <div class="post-content">
                                            <div class="author-avatar">
                                                <img src="https://cdn-icons-png.flaticon.com/512/5184/5184592.png" alt="community post">
                                            </div>
                                            <div class="entry-content">
                                                <h3 class="post-title">
                                                    <a href="{{ route('forum.show', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                                </h3>
                                                <ul class="meta">
                                                    <li>
                                                        dari <a href="javascript:void()">{{ $item->user->name }}</a>
                                                    </li>
                                                    <li><i class="icon_calendar"></i>{{ $item->created_at->format('d M Y H:i') . ' WIB' }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-meta-wrapper">
                                            <ul class="post-meta-info">
                                                <li><a href="#"><i class="icon_chat_alt"></i>{{ count($item->answers) }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="pagination-wrapper" hidden>
                                    <div class="view-post-of">
                                        <p>Viewing 8 topics - 1 through 10 (of 342 total)</p>
                                    </div>
                                    <ul class="post-pagination">
                                        <li class="prev-post pegi-disable"><a href="#"><i class="arrow_carrot-left"></i></a>
                                        </li>
                                        <li><a href="#" class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">15</a></li>
                                        <li class="next-post"><a href="#"><i class="arrow_carrot-right"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                    </div>
                    <!-- <div class="row margin-leftright-null color-background">
                        <div class="col-md-12 text text-center">
                            <h4 class="big white margin-bottom-small">Would you like more info about other trips?</h4>
                            <a href="#" target="_blank" class="btn-alt small white margin-null active shadow">Contact us</a>
                        </div>
                    </div> -->
                </div>
            </div>
            
            <footer class="fixed full-width">
                <div class="container">
                    <div class="row no-margin">
                        <div class="col-sm-4 col-md-2 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Dolomia</h6>
                            <ul class="sitemap">
                                <li><a href="">Home</a></li>
                                <li><a href="">Pages</a></li>
                                <li><a href="">Portfolio</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Elements</a></li>
                                <li><a href="">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Useful Links</h6>
                            <ul class="useful-links">
                                <li><a href="">FAQs</a></li>
                                <li><a href="">Download Catalog</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Cookie Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Contact Us</h6>
                            <ul class="info">
                                <li>Phone <a href="">+39 123456789</a></li>
                                <li>Mail <a href="">mail@domain.com</a></li>
                                <li>Monday to Friday <span class="white">9.00 am to 8.00 pm</span><br>Saturday from <span class="white">9.00 am to 12.00 pm</span></li>
                                <li><a href="">322 Moon St, Venice<br>
                                    Italy, 1231</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Passionate About Nature</h6>
                            <p class="grey-light">Sign up for Dolomia mounthly newsletter and get to know more about our latest adventures and much mores...</p>
                            <div id="newsletter-form" class="padding-onlytop-xs">
                                <form class="search-form">
                                    <div class="form-input">
                                        <input type="text" placeholder="Your email ID">
                                        <span class="form-button">
                                            <button type="button">Sign Up</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="copy">
                        <div class="row no-margin">
                            <div class="col-md-8 padding-leftright-null">
                                &copy; 2016 Dolomia -  Hiking &amp; Outdoor Html Template Handmade by <a href="http://www.patrickdavid.it">puredesignThemes</a>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <ul class="social">
                                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="modal" id="login-modal" style="background-color: rgb(0, 0, 0, 0.7);" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title">Login</h5>
                            <small>Anda harus masuk untuk melanjutkan.</small>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="d-flex flex-column" action="{{ route('login') }}" method="post">
                            @csrf
                            <input type="text" name="open_form" class="form-control" value="true" hidden>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>

            <div class="modal" id="ask-modal" style="background-color: rgb(0, 0, 0, 0.7);" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title">Ask Question</h5>
                            <small>Mau tanya apa?.</small>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="d-flex flex-column" action="{{ route('forum.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea name="description" required class="form-control" id="" cols="3" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tag</label>
                                <select class="select2 form-control" multiple="multiple" name="tag[]" required>
                                    <option value="domestik">domestik</option>
                                    
                                    <option value="gunung">gunung</option>
                                    <option value="gunung gede">gunung gede</option>
                                </select>
                                <small>Tag adalah kata kunci untuk mengelompokkan node kamu dengan yang lain, pilih 2-5 kata kunci dipisahkan dengan koma.</small>
                                {{-- <small>domestik, naik gunung, fotografi</small> --}}
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Popup itself -->
            <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                You may put any HTML here. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.
            </div>
              
        </div>
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider-min.js"></script>
        <script src="assets/js/jquery.fullPage.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/smooth.scroll.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.scrolly.js"></script>
        <script src="assets/js/plugins-scroll.js"></script>
        <script src="assets/js/imagesloaded.min.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </body>
</html>


<script>
    $(document).ready(function() {
        $(".select2").select2({
            width: '100%',
        });

        @if(request()->has('type'))
        $('#ask-modal').modal('show'); 
        @endif

        $('#login-modal').on('show.bs.modal', function () {
            let modal_el = $(this);
            modal_el.addClass('show');
        })

        $('#login-modal').on('hide.bs.modal', function () {
            let modal_el = $(this);
            modal_el.removeClass('show');
        })

        $('#view-modal').on('show.bs.modal', function () {
            let modal_el = $(this);
            modal_el.addClass('show');
        })

        $('#view-modal').on('hide.bs.modal', function () {
            let modal_el = $(this);
            modal_el.removeClass('show');
        })
    })
</script>
