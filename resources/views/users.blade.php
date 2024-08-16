<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Immortal - Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <!-- Start Logo -->
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/favicon.ico') }}" alt="">
                <span class="d-none d-lg-block">ImmortalAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <!-- Start Search Bar -->
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>
                    <!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/users">
                    <i class="ri-group-fill"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->
        </ul>

    </aside>>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Employee Details</h5>
                        </div>
                        <div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnewModal"><i
                                    class="ri-add-line"></i></button>
                        </div>
                    </div>

                    <!-- Add New Details Modal Start -->
                    <div class="modal fade" id="addnewModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add New Students</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-container">
                                        <div class="form-name"><strong>Add New Details</strong></div>
                                        <form id="add_ST_details">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="st_name" class="form-label">Student Name:</label>
                                                <input type="text" class="form-control" id="st_name" name="st_name"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="st_roll_no" class="form-label">Roll No:</label>
                                                <input type="text" class="form-control" id="st_roll_no"
                                                    name="st_roll_no" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="class" class="form-label">Class:</label>
                                                <input type="text" class="form-control" id="st_class" name="st_class"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="subject" class="form-label">Subject:</label>
                                                <input type="text" class="form-control" id="st_subject"
                                                    name="st_subject" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="st-Email" class="form-label">St-Email:</label>
                                                <input type="email" class="form-control" id="st_email" name="st_email"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="percentage" class="form-label">Percentage:</label>
                                                <input type="text" class="form-control" id="st_percentage"
                                                    name="st_percentage" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" value="Submit">Add
                                                Details</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add New Details Modal End -->


                    <!-- Table with stripped rows -->
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Roll No.</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>ST-Email</th>
                                <th>Percentage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($studs->isNotEmpty())
                            @foreach($studs as $studs)
                            <tr>
                                <td>{{ $studs->id }}</td>
                                <td>{{ $studs->st_name }}</td>
                                <td>{{ $studs->st_roll_no }}</td>
                                <td>{{ $studs->st_class }}</td>
                                <td>{{ $studs->st_subject }}</td>
                                <td>{{ $studs->st_email }}</td>
                                <td>{{ $studs->st_percentage }}</td>
                                <td>
                                    <button type="button" class="btn btn-info edits-details" data-bs-toggle="modal"
                                        data-id="{{ $studs->id }}" data-bs-target="#editModal"><i
                                            class="ri-file-edit-line"></i></button>
                                    <a href="/delete_st_details/{{ $studs->id }}">
                                        <button type="button" data-id="{{ $studs->id }}"
                                            class="btn btn-danger delete-details"><i
                                                class="ri-delete-bin-line"></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">Record Not Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    <!-- Edit Details Modal Start -->
                    <div class="modal fade" id="editModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Student Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-container">
                                        <div class="form-name"><strong>Edit Details</strong></div>
                                        <form id="add_Edit_details">
                                            @csrf
                                            <input type="hidden" name="student_id" id="student_id">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Student Name:</label>
                                                <input type="text" class="form-control" id="edit_name" name="edit_name"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="st_st_roll_no" class="form-label">Roll No:</label>
                                                <input type="text" class="form-control" id="edit_st_roll_no"
                                                    name="edit_st_roll_no" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="class" class="form-label">Class:</label>
                                                <input type="text" class="form-control" id="edit_class"
                                                    name="edit_class" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="subject" class="form-label">Subject:</label>
                                                <input type="text" class="form-control" id="edit_subject"
                                                    name="edit_subject" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="St-emial" class="form-label">St-Email:</label>
                                                <input type="email" class="form-control" id="edit_st_email"
                                                    name="edit_st_email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="percentage" class="form-label">Percentage:</label>
                                                <input type="text" class="form-control" id="edit_percentage"
                                                    name="edit_percentage" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Details Modal End -->
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Immortal Admin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">Immortal Technologies Pvt Ltd</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
        // alert("hello");
    });
    </script>

    <!-- ajax add details -->
    <script>
    $(document).ready(function() {

        $('#add_ST_details').submit(function(e) {
            e.preventDefault();
            // alert("hiii");
            $.ajax({
                url: "{{ url('/users') }}",
                data: $('#add_ST_details').serialize(),
                type: 'post',
                success: function(result) {
                    //  alert(JSON.stringify(result));
                    // Handle success
                    jQuery('#message').html(result.msg);
                    jQuery('#add_ST_details')[0].reset(); // Fixed the typo here
                    Swal.fire({
                        title: "Student Details Add Successfully",
                        // text: "You clicked the button!",
                        icon: "success"
                    });
                },
                error: function(xhr, status, error) {
                    // Handle error
                    jQuery('#message').html('An error occurred: ' + error);
                }
            });

        });

        $('.edits-details').click(function() {
            var id = $(this).data('id');
            // alert(id);

            $.ajax({
                url: "{{ url('edit_details') }}/" + id,
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}"

                },
                type: 'GET',
                success: function(response) {

                    // alert(response[0].st_subject);
                    $('input[name="student_id"]').val(response[0].id);
                    $('input[name="edit_name"]').val(response[0].st_name);
                    $('input[name="edit_st_roll_no"]').val(response[0].st_roll_no);
                    $('input[name="edit_class"]').val(response[0].st_class);
                    $('input[name="edit_subject"]').val(response[0].st_subject);
                    $('input[name="edit_st_email"]').val(response[0].st_email);
                    $('input[name="edit_percentage"]').val(response[0].st_percentage);

                }

            });
        });

        $('#add_Edit_details').on('submit', function(e) {
            e.preventDefault();
            alert('hiii');

            var id = $('#student_id').val();
            var formData = $(this).serialize();

            $.ajax({
                type: 'post',
                url: '/edit_st_details/' + id,
                data: formData,
                success: function(response) {

                    // Handle success actions if needed
                },
                error: function(error) {
                    console.error('Error:', error);
                    alert('Error updating student details');
                    // Handle error actions if needed
                }
            });
        });

        $('.delete-details').on('submit', function(e) {
            e.preventDefault();
            alert('delete');

            var id = $(this).data('id');

            $.ajax({
                type: 'delete',
                url: '/delete_st_details/' + id,
                success: function(response) {

                    // Handle success actions if needed
                },
                error: function(error) {
                    console.error('Error:', error);
                    // alert('Error updating student details');
                    // Handle error actions if needed
                }
            });
        });
    });
    </script>

</body>

</html>