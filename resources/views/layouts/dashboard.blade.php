<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b595dd4b2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard_css/custom.css')}}">


    <style>
        .dropdown-container {
            display: none;
        }

        .drop-item {
            text-decoration: none;
            color: white;
            border-radius: 5px;
            padding: 0px 25px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-3 sidebar text-center">
                <h3 class="bg-primary text-white mb-3" style="padding: 9px 0px ;   background-image: linear-gradient(#0d6efd, white);">BMKS</h3>
                <ul class="list-unstyled " style="width:70% ;margin:auto;">


                    <button class="dropdown-btn py-1 px-3  bg-primary m-1 text-white " style="padding:5px; width:100%;border:none;">Notice
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <p style="margin: 1px auto; width:80%; background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('notice')}}" class="drop-item" href="#">View</a></p>
                        <p style="margin: 1px auto; width:80%;background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('notice/create')}}" class="drop-item" href="#">Create</a></p>
                    </div>


                    <li class="py-1 px-3 bg-primary m-1 text-white" style="padding:5px;width:100%;"><a class="text-white text-decoration-none" href="{{url('slider')}}">Slider</a></li>
                    
                    <li class="py-1 px-3 bg-primary m-1 text-white" style="padding:5px;width:100%;"><a class="text-white text-decoration-none" href="{{url('gallery')}}">Gallery</a></li>


                    <button class="dropdown-btn py-1 px-3  bg-primary m-1 text-white " style="padding:5px; width:100%;border:none;">Projects
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <p style="margin: 1px auto; width:80%; background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('project')}}" class="drop-item" href="#">View</a></p>
                        <p style="margin: 1px auto; width:80%;background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('project/create')}}" class="drop-item" href="#">Create</a></p>
                    </div>


                    <button class="dropdown-btn py-1 px-3  bg-primary m-1 text-white " style="padding:5px; width:100%;border:none;">Course
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <p style="margin: 1px auto; width:80%; background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('course')}}" class="drop-item" href="#">View</a></p>
                        <p style="margin: 1px auto; width:80%;background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('course/create')}}" class="drop-item" href="#">Create</a></p>
                    </div>

                    
                    <button class="dropdown-btn py-1 px-3  bg-primary m-1 text-white " style="padding:5px; width:100%;border:none;">Admins
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <p style="margin: 1px auto; width:80%; background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('admin/view')}}" class="drop-item" href="#">View</a></p>
                        <p style="margin: 1px auto; width:80%;background-color: #3280f4;color: white;border-radius: 5px;"><a href="{{url('admin/create')}}" class="drop-item" href="#">Create</a></p>
                    </div>




                </ul>
            </div>



            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">BMKS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <div class="dropdown mt-3">

                        <ul class="list-unstyled" style="width:70% ;margin:auto;">
                            <li class="py-1 px-3 bg-primary m-1 text-white text-center " style="padding:5px;border-radius:50px;">Home</li>
                            <li class="py-1 px-3 bg-primary m-1 text-white text-center" style="padding:5px;border-radius:50px;"><a class="text-white text-decoration-none" href="{{url('notice')}}">Notice</a></li>
                            <li class="py-1 px-3 bg-primary m-1 text-white text-center" style="padding:5px;border-radius:50px;"><a class="text-white text-decoration-none" href="{{url('slider')}}">Slider</a></li>
                            <li class="py-1 px-3 bg-primary m-1 text-white text-center" style="padding:5px;border-radius:50px;"><a class="text-white text-decoration-none" href="{{url('project')}}">Projects</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-sm-12">
                <div class="row justify-between bg-primary pe-5 pt-2" style="background-image: linear-gradient(#0d6efd, white);">
                    <div class="col-1">
                        <button class="btn btn-primary mb-1 d-block d-sm-none " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <div class="col-10">
                    </div>
                    <div class="col-1">
                        <form method="post" action="{{url('dashboard/logout')}}">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger mb-2">Logout</button>
                        </form>
                    </div>
                </div>






                <div class="dashboard_content">
                    @yield("dashboard_content")
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>



</body>

</html>