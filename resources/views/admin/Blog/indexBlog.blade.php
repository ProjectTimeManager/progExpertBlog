<!doctype html>
<html lang="en">
<head>
    @include ('layouts.admin.meta')
        @include ('layouts.admin.css')
</head>
<body>

<div class="wrapper">
    @include ('layouts.admin.sidebar')
    <div class="main-panel">
        @include ('layouts.admin.topbar')
        <div style="padding:30px; ">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-sm-12 text-center"><a href="" class="btn btn-fill btn-warning">Add Upcoming Article</a></div>
                    <div class="col-lg-6 col-sm-12 text-center"><a href="" class="btn btn-fill btn-info">Add Live Article</a></div>
                </div>  
        </div>
        <hr/>
        <div class="col-lg-12">
            <div class="text-center">
                <h3>Scheduled Articles</h3>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                      <div class="toolbar">
                                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                              </div>
                                <div class="fresh-datatables">
                          <table id="datatablesFutureBlogs" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th class="disabled-sorting text-right">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td class="text-right">
                                  <a href="datatables.net.html#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                  <a href="datatables.net.html#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                  <a href="datatables.net.html#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                            </div><!-- end content-->
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->

            </div>
        </div>

        <div class="col-lg-12">
            <div class="text-center">
                <h3>Live Articles</h3>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                      <div class="toolbar">
                                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                              </div>
                                <div class="fresh-datatables">
                          <table id="datatablesLiveBlog" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th class="disabled-sorting text-right">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td class="text-right">
                                  <a href="datatables.net.html#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                  <a href="datatables.net.html#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                  <a href="datatables.net.html#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                                </td>
                              </tr>
                              <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td class="text-right">
                                  <a href="datatables.net.html#" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-heart"></i></a>
                                  <a href="datatables.net.html#" class="btn btn-simple btn-warning btn-icon edit"><i class="fa fa-edit"></i></a>
                                  <a href="datatables.net.html#" class="btn btn-simple btn-danger btn-icon remove"><i class="fa fa-times"></i></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                            </div><!-- end content-->
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->

            </div>
        </div>
        @include ('layouts.admin.footer')
    </div>
</div>




</body>
 @include ('layouts.admin.js')
<script type="text/javascript">
    $(document).ready(function() {
    $('#datatablesFutureBlogs').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        responsive: true,
        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
        }

    });


    var table = $('#datatablesFutureBlogs').DataTable();

    // Edit record
    table.on( 'click', '.edit', function () {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
    } );

    // Delete a record
    table.on( 'click', '.remove', function (e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    } );

    //Like record
    table.on( 'click', '.like', function () {
        alert('You clicked on Like button');
    });


    $('#datatablesLiveBlog').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        responsive: true,
        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
        }

    });


    var table = $('#datatablesLiveBlog').DataTable();

    // Edit record
    table.on( 'click', '.edit', function () {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
    } );

    // Delete a record
    table.on( 'click', '.remove', function (e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    } );

    //Like record
    table.on( 'click', '.like', function () {
        alert('You clicked on Like button');
    });



  });



    </script>
</html>