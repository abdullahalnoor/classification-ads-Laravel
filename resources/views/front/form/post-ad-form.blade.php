@extends('front.master')

@section('body')

    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Post your Ad</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- Submit Ad -->
    <div class="submit-ad main-grid-border">
        <div class="container">
            <h2 class="w3-head">Post an Ad</h2>

                <div class="panel panel-default">
                    <br />
                    @if($message =Session::get('message'))
                        <h4> {{ $message }}</h4>
                    @endif

                    <form class="form-horizontal form-label-left" action="{{ url('/product/new-product') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Title   <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" name="product_title" required="required" class="form-control col-md-7 col-xs-12">
                                {{--<input type="hidden" name="customer_post" value="1" >--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Select Category <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <select name="category_id" class="form-control col-md-7 col-xs-12">
                                    <option>Select publication status</option>
                                    @foreach($categories as $category)
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
                                    <option>Select publication status</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Short Description <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <textarea name="product_short_description" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product Long Description <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <textarea name="product_long_description" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Add Title Image   <span class="required">*</span><p class="text-danger">Chose one Image</p>
                            </label>
                            <div class="col-md-7">
                                <input type="file" name="product_image" accept="image/*" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Add More Image<span class="required">*</span> <p class="text-danger">Chose one more image</p>
                            </label>
                            <div class="col-md-7">
                                <input type="file" name="product_sub_image[]" accept="image/*" multiple required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product  Quantity   <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="number" name="product_quantity" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="">Product  Price   <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="number" name="product_price"  required="required" class="form-control col-md-7 col-xs-12">
                                <input type="hidden" name="publication_status" value="0" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-7">
                                <input type="submit" name="btn"  value="Post Your Ads" class="btn btn-block btn-success" >
                            </div>
                        </div>
                    </form>
                </div>


    </div>
    <!-- // Submit Ad -->
    </div>
@endsection