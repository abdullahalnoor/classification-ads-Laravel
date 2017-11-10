@extends('admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')

    <!-- Datatables -->
    <link href="{{asset('/admin')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/admin')}}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/admin')}}/build/css/custom.min.css" rel="stylesheet">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Manage All Brands</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Brand Management</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                            </ul>
                            <div class="clearfix"></div>
                        </div>


                        <div class="x_content">
                            <p class="text-muted font-13 m-b-30">

                            </p>
                            @if($message = Session::get('message'))
                                <h3 class="text-center text-success">{{ $message }}</h3>
                            @endif
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Brand ID</th>
                                    <th>Brand Name</th>
                                    <th>Brand DeScription</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @php($i=1)
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->brand_description}}</td>
                                    <td>
                                        @if($brand->publication_status == 1)
                                            <span class="label label-success">Published</span>
                                        @else
                                            <span class="label label-warning">Unpublished</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" title="View Brand Details" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>

                                        <a href="" title="Published Brand" class="btn btn-primary btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>

                                        <a href="" title="Edit Brand Details" class="btn btn-primary btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="" title="Delete Brand" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /page content -->
    <!-- Datatables -->
    <script src="{{asset('/admin')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('/admin')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('/admin')}}/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('/admin')}}/build/js/custom.min.js"></script>
@endsection