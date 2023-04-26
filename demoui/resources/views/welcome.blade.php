<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <strong><a href="/students"><h1 class="text-primary mt-3 mb-4 text-center" >Student page</h1></a></strong>
    <strong><a href="/course"><h1 class="text-primary mt-3 mb-4 text-center" >Course page</h1></a></strong>
    <strong><a href="/teacher"><h1 class="text-primary mt-3 mb-4 text-center" >Teacher page</h1></a></strong>
    <strong><a href="/enrollment"><h1 class="text-primary mt-3 mb-4 text-center" >Enrollment page</h1></a></strong>
    <p class="text-center">Add student, add teacher, add course, enrollment</p>
    <br>
    <p class="text-left">Teacher, course sẽ được làm category khi add student</p>
    <br>
    <p class="text-center">Enrollment sẽ là một list hoặc table thể hiện sinh viên đã đăng kí course cùng giáo viên nào</p>
    <br>
    <p class="text-right">Trang này sẽ làm một category lựa chọn ở phần header</p>

    @yield('content')
    <div class="container p-4">
        <!-- Section: Images -->
        <section class="">
          <div class="row">
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                   class="bg-image hover-overlay ripple shadow-1-strong rounded"
                   data-ripple-color="light"
                   >
                <img
                     src="https://greenwich.edu.vn/wp-content/uploads/2021/04/00023.jpg"
                     class="w-100"
                     />
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.2);"
                       ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                   class="bg-image hover-overlay ripple shadow-1-strong rounded"
                   data-ripple-color="light"
                   >
                <img
                     src="https://greenwich.edu.vn/wp-content/uploads/2021/04/00031-1024x637.jpg"
                     class="w-100"
                     />
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.2);"
                       ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                   class="bg-image hover-overlay ripple shadow-1-strong rounded"
                   data-ripple-color="light"
                   >
                <img
                     src="https://mdbootstrap.com/img/new/fluid/city/112.jpg"
                     class="w-100"
                     />
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.2);"
                       ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                   class="bg-image hover-overlay ripple shadow-1-strong rounded"
                   data-ripple-color="light"
                   >
                <img
                     src="https://greenwich.edu.vn/wp-content/uploads/2022/05/DSC07938-scaled.jpg"
                     class="w-100"
                     />
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.2);"
                       ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                   class="bg-image hover-overlay ripple shadow-1-strong rounded"
                   data-ripple-color="light"
                   >
                <img
                     src="https://lop12.edu.vn/wp-content/uploads/2019/07/svdh.jpg"
                     class="w-100"
                     />
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.2);"
                       ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                   class="bg-image hover-overlay ripple shadow-1-strong rounded"
                   data-ripple-color="light"
                   >
                <img
                     src="https://greenwich.edu.vn/wp-content/uploads/2020/07/hoc-bong-dai-hoc-greenwich.jpg"
                     class="w-100"
                     />
                <a href="#!">
                  <div
                       class="mask"
                       style="background-color: rgba(251, 251, 251, 0.2);"
                       ></div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Images -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);" >
        © 2023 Copyright:
        <a class="text-white" href="https://greenwich.edu.vn/">Greenwich VN</a>
      </div>
      <!-- Copyright -->
    </footer>
    </div>
</body>
</html>