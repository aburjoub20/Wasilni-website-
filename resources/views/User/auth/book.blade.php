<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>وصلني</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('User/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-danger fixed-top py-3   text-dark" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('logo.png')}}" class="img" style="width:150px"></a> 
                
@auth
             <a class="navbar-brand" href=""> مرحبا{{Auth::user()->name}}</a> 
            
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('/book')}}">احجز صفحة</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/book/active')}}">الطلبات  قيد التنفيذ </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/book/all')}}"> كل طلباتي  </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('logout')}}"> تسجيل خروج</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
      
        <!-- About-->

        <style>
            .booking-form{
                top:200px;
            }
        </style>
       


        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0"> عمل طلب  </h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">يرجى تعبئة الببيانات بشكل صحيح </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                      
                    <form method="POST" action="{{url("/book/store")}}">                            
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="fullname" id="fullname" type="text" placeholder="الاسم" data-sb-validations="required" />
                                <label for="fullname"> اسم الراكب   </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">ادخل الاسم كامل </div>
                            </div>
                            {{-- <input type="hidden" name="created_at" value="">{{created_at->todatestring()}}</input> --}}

                            <div class="form-floating mb-3">
                                <input class="form-control" name="additionalnumber" id="additionalnumber" type="phone" placeholder="الاسم" data-sb-validations="required" />
                                <label for="fullname"> رقم الهاتف   </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">  رقم الهاتف   </div>
                            </div>


                            <!-- Email address input-->
                            

                            <div class="form-floating mb-3">
                                <input class="form-control" maxlength="7" name="usercount" id="usercount" type="number" placeholder="عدد الاشخاص" data-sb-validations="required,email" />
                                <label for="email">عدد  الاشخاص</label>
                                <div class="invalid-feedback" data-sb-feedback="email:">عدد الاشخاص </div>
                            </div>
 <input type="radio" id="css" name="goorwent" value="go">
                            <label for="html">ذهاب</label>
 
  <input type="radio" id="css" name="goorwent" value="went">
<label for="html">مغادرة</label><br>
                          
                            <!-- Phone number input-->                          
                              <label for="inputState"> المدينة </label>

                            <div class="form-floating mb-3">
                    <select id="inputState" class="form-control" name="Location_id">
                      @foreach($location as $locations)
                      <option selected value="{{$locations->id}}"> {{$locations->name}} </option>
                      @endforeach
                    </select>
                            </div>
                            <!-- Message input-->
                            <label for="inputState"> وقت الحجز </label>

                            <div class="form-floating mb-3">
                                <input class="form-control"  name="time" id="time" type="time" placeholder="Enter your message here..."data-sb-validations="required"></input>   
                            </div>
                 
                            <div class="d-grid"><button class="btn btn-primary btn-xl " id="submitButton" type="submit">اضغط هنا</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>

    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('User/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @include('sweetalert::alert')

    </body>
</html>
