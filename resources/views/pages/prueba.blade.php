@extends('layouts.default')
@section('content')
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Prueba</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Prueba</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Esto es solo una prueba en caso de que no me creas :(
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-prueba">Open Modal</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->

    <!-- Nuevo Convenio -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalOneLabel" aria-hidden="true" id="modal-prueba">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-head-modal">
                    <h4 class="modal-title text-white font-weight-bold">
                        Modal
                    </h4>
                    <button type="button" class="close mt-0 p-0 text-white" style="opacity: 1;" data-dismiss="modal">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <div class="row w-100">
                        <div class="col">
                            <button type="button" class="btn btn-primary w-100" data-dismiss="modal">
                                Cerrar
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Nuevo Convenio -->
@endsection