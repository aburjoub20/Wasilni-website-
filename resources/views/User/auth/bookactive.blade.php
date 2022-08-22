<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta http-equiv="refresh" content="5">

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
        <style>
            .booking-form{
                top:200px;
            }
        </style>
       







       
       <section class="page-section" id="contact">
        <table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
      <th scope="col"> اسم السائق </th>
      <th scope="col">رقم الهاتف</th>
      <th scope="col">رقم السيارة</th>

      <th scope="col">الوقت  </th>
      <th scope="col">go or went </th>
      <th scope="col">المكان </th>
      <th scope="col">  عدد الركاب   </th>
      <th scope="col">  السعر   </th>
      <th scope="col">  التاريخ   </th>
    </tr>
    </thead>
    <tbody>

         @foreach($user->ousers as $user)
         @foreach ($user->odrivers as $d ) 
         <tr>
                 <th scope="row">{{$loop->iteration}}</th>

         <td>  {{$d->driver->name}}  </td>
         <td>  {{$d->driver->phone}}  </td>
         <td>  {{$d->driver->carnumber}}  </td>

         <td>  {{$user->time}}  </td>

         <td>  {{$user->goorwent}}  </td>
         <td>  {{$d->Location->name}}  </td>
         <td>  {{$user->usercount}}  </td>
         <td>  {{$user->price}}  </td>
         <td>  {{$user->date}}  </td>
         </tr>

         @endforeach
         @endforeach
    {{-- <tr> 
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$user->users->name }}</td>  
      <td>{{$user->users->phone }}</td>  
      <td>{{$user->time }}</td>  
      <td>{{$user->goorwent   }}</td>  
      <td>{{$user->locations->name }}</td>  
      <td>{{$user->usercount }}</td>  
      <td>{{$user->price }}</td>  
      <td>{{$user->date }}</td>  


      <td>{{$user->users->phone }}</td>  
      <td>{{$user->addtionalnumber }}</td>  
      </tr> --}}
 
    </tbody>
    </tbody>
    </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('User/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
