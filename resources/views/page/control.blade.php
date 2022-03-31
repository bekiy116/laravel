@extends('pages.index')
@section('content')

<div class="container">
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Хэрэглэчдийн Мэдээлэл</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                                <a class="btn btn-info" href="#">Засах</a>
                                <a class="btn btn-danger" href="#">Устгах</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td>
                                <a class="btn btn-info" href="#">Засах</a>
                                <a class="btn btn-danger" href="#">Устгах</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                            <td>
                                <a class="btn btn-info" href="#">Засах</a>
                                <a class="btn btn-danger" href="#">Устгах</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
</div>

@endsection