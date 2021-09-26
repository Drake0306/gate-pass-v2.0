<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">

    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    @include('script&css')

</head>

<body>
@include('header')
        <div class="app-main">
            @include('sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>

                                    </div>
                                    <style>
                                        #my_camera_snap {
                                            -webkit-transform: scaleX(-1);
                                            transform: scaleX(-1);
                                        }
                                    </style>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="row">
                                                    @include('precess_stage_labour')
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="col-md-12" id="input_part" style="display: none"> -->
                            <form method="POST" novalidate id="registervalidation" role="form"
                                enctype="multipart/form-data"
                                action="{{url('labour/data/image/file/upload/section/'.$labour_data->id)}}">
                                @csrf
                                <div class="col-md-12" id="input_part">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header"
                                            style="background-color: #F79646">
                                            <div class="card-header-title text-light" style="font-size:18px">
                                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                Upload / Click Picture
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button type="button" style="margin-top: 31px"
                                                                    onClick="toggleDataScanner('#toggle_scanner')"
                                                                    class="btn btn-secondary"> <i
                                                                        class="fas fa-chevron-right"></i> &nbsp;
                                                                    Toggle Scanner</button>

                                                                <div class="row mt-4" style="display:none"
                                                                    id="toggle_scanner">
                                                                    <div class="col-md-12">
                                                                        <button style="margin-top: 2px;"
                                                                            onClick="take_snapshot()" type="button"
                                                                            class="btn btn-primary"> <i
                                                                                class="fas fa-chevron-right"></i> &nbsp;
                                                                            Take Picture</button>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div id="my_camera_snap"
                                                                            style="border-radius: 10px"></div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="col-md-12 mt-4">
                                                                            <div id="results"
                                                                                style="width: 250px; max-height: 100px">
                                                                                Your
                                                                                captured image will
                                                                                appear here...
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="image" id="image"
                                                                            class="image-tag">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-5">
                                                                <hr>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formFile" class="form-label">Upload
                                                                        Documents</label>
                                                                    <input class="form-control"
                                                                        name="upload_photo_documents"
                                                                        value="{{@$labour_data->upload_photo_documents}}"
                                                                        type="file" id="formFile">

                                                                    <small id="helpId" class="form-text text-primary"><a
                                                                            target="_blank"
                                                                            href="{{url('public/files/'.@$labour_data->upload_photo_documents)}}">{{@$labour_data->upload_photo_documents}}</a></small>
                                                                </div>
                                                            </div>




                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-8 mt-5">
                                                                <button type="submit" class="btn"
                                                                    style="background-color: #F79646;color: white">Update & Next</button>
                                                                <!-- <a href="{{url('/truck/data/pdf/print/'.$labour_data->id)}}"
                                                                    class="btn ml-5 btn-secondary text-light">Next</a> -->

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>

    </div>

    </div>
    <!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
    </div>
    </div>
    <script language="JavaScript">
        Webcam.set({
            width: 400,
            height: 400,
            image_format: 'jpeg',
            jpeg_quality: 100,

        });

        Webcam.attach('#my_camera_snap');

        function take_snapshot() {
            Webcam.snap(function (data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
                // $('#at_submit').click();

                // window.location.href = "{{url('/view_home')}}";
                // $('#url_at_click').click();
            });
        }
    </script>

    <script>
        function toggleDataScanner(id) {
            $(id).toggle();
        }
    </script>




</body>

</html>