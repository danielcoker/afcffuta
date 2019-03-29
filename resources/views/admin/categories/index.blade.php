@extends('layouts.admin.main')

@section('title', 'Categories')

@section('styles')
    <link href="{{ asset('admin/assets/plugins/datatables/css/jquery.datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/datatables/css/jquery.datatables_themeroller.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Categories</h3>
        </div>

        <div class="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <div class="row">
                                <div class="col-md-8">
                                    @include('layouts.alerts')
                                </div>
                            </div>
                            <h4 class="panel-title">Show all categories</h4>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $counter++ }}</td>
                                                <td>{{ $category->title }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">View Category</a></li>
                                                            <li><a href="{{ route('admin.categories.edit', $category->id) }}">Edit Category</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('Are you sure you want to delete this category?')">Delete Category</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('admin/assets/plugins/datatables/js/jquery.datatables.min.js') }}"></script>
    <script>
        $('#example').dataTable();
    </script>
@endsection