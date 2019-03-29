@extends('layouts.admin.main')

@section('title', 'Create Category')

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Edit Category</h3>
        </div>

        <div class="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <div class="row">
                                <div class="col-md-6">
                                    @include('layouts.alerts')
                                </div>
                            </div>
                            <h4 class="panel-title">Enter category title in the form below.</h4>
                        </div>
                        <div class="panel-body">
                            {{ Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'PUT']) }}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        {{ Form::label('title', 'Title') }}
                                        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                                    </div>
                                </div>
                                {{ Form::submit('Save Changes', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection