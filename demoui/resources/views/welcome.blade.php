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
    <strong><a href="/enrollments"><h1 class="text-primary mt-3 mb-4 text-center" >Enrollment page</h1></a></strong>
    <strong><a href="/teachercourse"><h1 class="text-primary mt-3 mb-4 text-center" >Join teacher to course Page</h1></a></strong>
    <p class="text-center">Add student, add teacher, add course, enrollment</p>
    <br>
    <p class="text-left">Teacher, course sẽ được làm category khi add student</p>
    <br>
    <p class="text-center">Enrollment sẽ là một list hoặc table thể hiện sinh viên đã đăng kí course cùng giáo viên nào</p>
    <br>
    <p class="text-right">Trang này sẽ làm một category lựa chọn ở phần header</p>

    @yield('content')
    </div>
</body>
</html>