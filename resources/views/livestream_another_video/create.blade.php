@extends('common.default')
@section('content')
    <!-- top tiles -->
    <h3>Cài đặt chung Livestream</h3>
    <!-- main -content  -->
    <div class="col-md-12">
        <div id="wizard_verticle" class="form_wizard wizard_verticle">
            <ul class="list-unstyled wizard_steps">
                <li>
                    <a href="#step-11">
                        <span class="step_no">1</span>
                    </a>
                </li>
                <li>
                    <a href="#step-22">
                        <span class="step_no">2</span>
                    </a>
                </li>
                <li>
                    <a href="#step-33">
                        <span class="step_no">3</span>
                    </a>
                </li>
            </ul>
            <div id="step-11">
                <span class="StepTitle">Thêm ID video nguồn khác</span>
                <form class="form-horizontal form-label-left">
                    <div class="form-group row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" id="video_source_id" required="required" class="form-control">
                        </div>
                        <button id="load_video_source" class="col-form-label col-md-2 col-sm-2 btn btn-secondary" >Load video
                        </button>
                    </div>
                    <div class="form-group row">
                        <p>Liên kết video </p>
                        <div id="error_load_video_source"></div>
                        <div id="video_source_detail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3">Tiêu đề Livestream</label>
                        <div class="col-md-6 col-sm-6 col-lg-12">
                            <input id="middle-name2" class="form-control " type="text" name="middle-name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Yêu cầu đăng nhập</label>
                        <div class="col-md-4 col-sm-4 ">
                            <select class="form-control">
                                <option>Choose option</option>
                                <option>Option one</option>
                                <option>Option two</option>
                                <option>Option three</option>
                                <option>Option four</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Giáo viên</label>
                        <div class="col-md-4 col-sm-4 ">
                            <select class="form-control">
                                <option>Choose option</option>
                                <option>Option one</option>
                                <option>Option two</option>
                                <option>Option three</option>
                                <option>Option four</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Nội dung<small>Livestream</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                                    <textarea name="descr" id="descr" style="display:none;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="step-22">
                <h2 class="StepTitle">Cấu hình VideoStream</h2>
                <from class="form-horizontal form-label-left">
                    <div class="row form-group">
                        <label class="control-label col-md-2 col-sm-2 ">Lặp lại VideoStream</label>
                        <div class="col-md-4 col-sm-4 ">
                            <select class="form-control">
                                <option>Lặp lại 1 lần</option>
                                <option>Lặp lại 2 lần</option>
                                <option>Lặp lại 3 lần</option>
                                <option>Option three</option>
                                <option>Option four</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2 col-sm-2">Cover nhỏ liveStream</label>
                        <!-- For demo purpose -->
                        <div class="col-lg-6 col-sm-3">
                            <!-- Upload image input-->
                            <div class="input-group rounded-pill bg-white shadow-sm">
                                <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                <div class="input-group-append">
                                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                </div>
                            </div>
                            <!-- Uploaded image area-->
                            <div class="col-md-3"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2 col-sm-2">Cover lớn liveStream</label>
                        <div class="col-lg-6 col-sm-3">
                            <div class="input-group rounded-pill bg-white shadow-sm">
                                <input id="upload1" type="file" onchange="readURL1(this);" class="form-control border-0">
                                <label id="upload-label1" for="upload1" class="font-weight-light text-muted">Choose file</label>
                                <div class="input-group-append">
                                    <label for="upload1" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                </div>
                            </div>
                            <!-- Upload image input-->
                            <div class="col-md-6"><img id="imageResult1" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        </div>
                    </div>
                </from>
            </div>
            <div id="step-33">
                <h2 class="StepTitle">Câú hình thời giang</h2>
                <form class="form-horizontal form-label-left">
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Thời điểm đăng Livestream</label>
                        <div class="col-md-4 col-sm-4 ">
                            <select class="form-control">
                                <option value="0">Đăng ngay</option>
                                <option value="1">hẹn giờ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Thời hạn hiển thị</label>
                        <div class="col-md-4 col-sm-4 ">
                            <i class="fa fa-clock"></i><input type="datetime-local" name="time" id="time">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('livestream_another_video.script')
@stop