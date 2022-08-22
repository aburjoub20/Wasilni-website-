<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>وصلني</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('User/team.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{asset('User/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <style>
@media (min-width: 992px)
#mainNav.navbar-shrink {
    height: 68px;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
    background-color: #fff;
}
    </style>
    <body id="page-top"> 
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 " id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('logo.png')}}" class="img" style="width:150px"></a> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">      من نحن   </li></i> 
                        <li class="nav-item"><a class="nav-link" href="#services">خدماتنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا </a></li>
                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{url('Driver/login')}}"> سجل كسائق</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('login')}}">سجل كطالب    </a></li>
                        @endguest
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{url('logout')}}">    <i  class="fa fa-sign-in">     </i>    <span>تسجيل الخروج</span>   </a></li>
                     @endauth
                     
                          
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
      
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">وصلني </h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                      
                        <a class="btn btn-primary btn-xl" href="#about">انظم الينا </a>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">من نحن </h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">موقع فلسطيني خاص بمواصلات جامعة القدس  يهدف الى تسهيل الذهاب و العودة الى الجامعة باقل التكاليف و اقصر وقت </p>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">لماذا نحن  </h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center-contant">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">الوقت </h3>
                            <p class="text-muted mb-0">تقليل الوقت والجهد المهدرين من قبل الطالب والسائق</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center-contant">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">الكفائة </h3>
                            <p class="text-muted mb-0">بحيث يتيح لك الموقع الراحة من الذهاب الى المواصلات العامة </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6   text-center-contant">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">الامان   </h3>
                            <p class="text-muted mb-0">لانك تعرف السائق و ليس مجهول الهوية </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center-contant">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">الابتعاد عن الازمات المرورية </h3>
                            <p class="text-muted mb-0">بحيث تقليل عدد المراكب الموجودة في الكراجات العامة والسيطرة على خطوط المواصلات العامة. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">تواصل معنا </h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">لاستفسارتكم  او التواصل معنا يرجى تعبئة الحقول التالية </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form  method="POST" action="{{url('/contacts')}}" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">الاسم  </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">ادخل الاسم كامل </div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">البريد الاكتروني </label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">ادخل البريد الاكتروني </div>
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">الهاتف  </label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">ادخل رقم الهاتف </div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="msg" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">الرسالة </label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">ادخل الاستفسار  المطلوب  </div>
                            </div>
                            
                         
                            <div class="d-grid"><button class="btn btn-primary btn-xl " id="submitButton" type="submit">اضغط هنا</button></div>
                        </form>
                    </div>
                </div>
                <!-- <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted"> تحت اشراف © الدكتورة سندس </div></div>
        </footer>
    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('User/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
              @include('sweetalert::alert')
    </body>  
</html>
