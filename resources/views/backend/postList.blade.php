@extends('backend.layout.layout')
@section('main')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view" data-select2-id="ui-view">
                <div>
                    <div class="fade-in">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"> Danh sách bài viết</div>
                                    <div class="card-body">
                                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th >ID</th>
                                                    <th>Bài viết</th>
                                                    <th>Người viết</th>
                                                    <th>Trạng thái</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2012/01/01</td>
                                                    <td>Member</td>
                                                    <td>
                                                        <span class="badge badge-success">Active</span>
                                                        <span class="badge badge-warning">Pending</span>
                                                        <span class="badge badge-dark">Inactive</span>
                                                    </td>
                                                    <td><a class="btn btn-success" href="#">
                                                        <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                        </svg></a><a class="btn btn-info" href="#">
                                                        <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                        </svg></a><a class="btn btn-danger" href="#">
                                                        <svg class="c-icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                        </svg></a></td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                        <nav>
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@stop
