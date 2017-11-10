@extends('admin.master')

@section('title')
    Add Brand
@endsection


@section('body')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
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


            {{--start form--}}
            <div class="x_panel">
                <div class="x_title">
                    <h2>Update Product Form  </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />


                    <form class="form-horizontal form-label-left" action="{{ url('/product/update-product') }}" method="post" enctype="multipart/form-data" name="editProductForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Title   <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" name="product_title" value="{{ $product->product_title }}" required="required" class="form-control col-md-7 col-xs-12">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="admin_post" value="1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Select Category <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <select name="category_id" class="form-control col-md-7 col-xs-12">
                                    @foreach($publishedCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Select Brand <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <select name="brand_id" class="form-control col-md-7 col-xs-12">
                                    @foreach($publishedCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Short Description  <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <textarea name="product_short_description" class="form-control">{{ $product->product_short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Long Description  <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <textarea name="product_long_description" class="form-control">{{ $product->product_long_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Image  <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <img src="{{ asset($product->product_image) }}" style="width: 80px; height: 60px;"><br><br>
                                <input type="file" name="product_image" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Sub Image  <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                @foreach($subImages as $subImage)
                                    <img src="{{ asset($subImage->product_sub_image) }}" style="width: 80px; height: 60px;">
                                @endforeach
                                <br><br>
                                <input type="file" name="product_sub_image[]" class="form-control" accept="image/*" multiple>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Title   <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="number" name="product_price" value="{{ $product->product_price }}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">publication status <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <select name="publication_status" class="form-control col-md-7 col-xs-12">
                                    <option>Select publication status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-3">
                                <input type="submit" name="btn"  value="Update Product" class="btn btn-block btn-success" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{--end from--}}



            {{--editor--}}


            {{--end edito--}}


        </div>
    </div>

    <!-- /page content -->

    <script>

        document.forms['editProductForm'].elements['category_id'].value = '{{ $product->category_name }}';
        document.forms['editProductForm'].elements['publication_status'].value = '{{ $product->publication_status }}';

    </script>
@endsection