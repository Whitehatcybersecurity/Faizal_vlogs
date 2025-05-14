@extends('back_end.layouts.admin_main_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Admin Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1" id="heading">Desstination</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="" name="brand" enctype="multipart/form-data" 
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="hdBrandId" id="hdBrandId">
                                        <input type="hidden" name="hdBrandImage" id="hdBrandImage">
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Destination Name</label>
                                                <input type="text" class="form-control" name="txtBrandName"
                                                    placeholder="Destination name" id="txtBrandName" required>
                                            </div>
                                            <span class="error"></span>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Destination Vlog</label>
                                                <textarea class="form-control" name="txtBrandName"
                                                    placeholder="Destination vlog" id="txtBrandName" rows="4" required></textarea>        
                                            </div>
                                            <span class="error"></span>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="labelInput" class="form-label">Destination Image</label>
                                                <input type="file" class="form-control" name="fileBrandImage"
                                                    id="fileBrandImage">
                                            </div>
                                            <div class="img mt-2">
                                                <img src="{{ asset('assets/back_end/images/no-image.jpg') }}" id="previewImage" width="100"
                                                    height="100">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-6">
                                            <button type="submit" id="btnSave"
                                                class="btn btn-success waves-effect waves-light">Add</button>
                                        </div>
                                        <!--end col-->

                                    </div>
                                    
                                    <!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
    </div>
    <!-- container-fluid -->
</div>
@endsection