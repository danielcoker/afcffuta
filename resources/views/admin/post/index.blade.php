@extends('layouts.admin.main') 
@section('title', "Library") 
@section('styles')
<link href="{{ asset('admin/assets/plugins/datatables/css/jquery.datatables.min.css') }}" rel="stylesheet" type="text/css"
/>
<link href="{{ asset('admin/assets/plugins/datatables/css/jquery.datatables_themeroller.css') }}" rel="stylesheet" type="text/css"
/>
@endsection
 
@section('content')
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Header</h3>
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
                        <a href="{{ route('admin.posts.create', $category->id) }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Create Post</a>
                        <h4 class="panel-title">Show all posts in this resource</h4>
                    </div>
                    <div class="panel-body">
                        <div class="">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {{-- @foreach ($data['posts'] as $post)
                                        <tr>
                                            <td>{{ $data['counter']++ }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->author->name }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">View Post</a></li>
                                                        <li><a href="{{ route('posts.edit', [$data['category']->id, $post->id]) }}">Edit Post</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="{{ route('posts.destroy', [$data['category']->id, $post->id]) }}" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach --}}
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