@extends('admin.master')

@section('title')
    Add Category
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
                    <h2>Add Category Form  </h2>
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
                    @if($message = Session::get('message'))
                    <h4> {{ $message }}</h4>
                    @endif

                    <form class="form-horizontal form-label-left" action="{{ url('/category/new-category') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3" for="first-name">Category  Name <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <input type="text" name="category_name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">Category Description <span class="required">*</span>
                            </label>
                            <div class="col-md-7">
                                <textarea name="category_description" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="last-name">publication status  <span class="required">*</span>
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
                            <label class="control-label col-md-3" for="first-name"> </span>
                            </label>
                            <div class="col-md-7">
                                <input type="submit" name="btn"  value="Add Category" class="btn btn-block btn-success" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{--end from--}}



{{--editor--}}

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Text areas<small>Sessions</small></h2>
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
                        <div id="alerts"></div>
                        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                </ul>
                            </div>

                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a data-edit="fontSize 5">
                                            <p style="font-size:17px">Huge</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-edit="fontSize 3">
                                            <p style="font-size:14px">Normal</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-edit="fontSize 1">
                                            <p style="font-size:11px">Small</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                <div class="dropdown-menu input-append">
                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                    <button class="btn" type="button">Add</button>
                                </div>
                                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                            </div>
                        </div>

                        <div id="editor-one" class="editor-wrapper"></div>



                        <br />

                        <div class="ln_solid"></div>


                    </div>
                </div>
            </div>

            {{--end edito--}}


        </div>
    </div>

    <!-- /page content -->
@endsection