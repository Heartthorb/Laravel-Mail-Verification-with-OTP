@extends('layout.master')
@section('title', 'Dashboard')
@section('description', '')
@section('author', '')
@section('content')
@section('page_css')
<style type="text/css">

</style>
@stop


<!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <h3>{{ Auth::user()->name }}</h3>
                <hr />
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

                    <div class="col">
                        <div class="card radius-10 border-primary border-bottom border-3 border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Author</p>
                                        <h4 class="my-1"></h4>
                                    </div>
                                    <div class="text-primary ms-auto font-35"><i class='bx bx-user'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->



       <div class="card">
          <div class="card-body">
             <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                   <thead>
                      <tr>
                         <th>SI</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th style="width:50%">Message</th>
                         <th>Actions</th>
                      </tr>
                   </thead>
                   <tbody>


                      <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td>
                            <div class="d-flex order-actions">
                            </div>
                         </td>
                      </tr>

                   </tbody>

                </table>
             </div>
          </div>
       </div>
    </div>
 </div>
            </div>
        </div>
        <!--end page wrapper -->




@stop


@section('page_js')


@stop
