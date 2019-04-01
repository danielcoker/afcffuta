@extends('layouts.admin.main') 

@section('title', 'Edit ' . $data['category']->title) 

@section('styles')
    <style>
        .ck-editor__editable { min-height: 200px; }
    </style>
@endsection

@section('content')
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Edit {{ $data['category']->title }} Post</h3>
    </div>

    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                @include('layouts.messages')
                            </div>
                        </div>
                        <h4 class="panel-title">Edit post with the form below.</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::model($data['post'], ['route' => ['posts.update', $data['category']->id, $data['post']->id], 'method' => 'PUT', 'files' => 'yes']) }}
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{ Form::label('title', 'Title') }} 
                                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{ Form::label('body', 'Body') }} 
                                {{ Form::textarea('body', null, ['class' => 'form-control summernote', 'id' => 'editor']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{ Form::label('image', 'Post Image') }} 
                                {{ Form::file('image', ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <hr>
                                {{ Form::label('file', 'File (PDF)') }} 
                                {{ Form::file('file', ['class' => 'form-control']) }}
                                <small class="form-text"><i class="fa fa-info-circle"></i> Upload downloadable PDF file for this resource.</small>
                            </div>
                        </div>
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-primary']) }} {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            })
            .catch( error => {
                console.error( error );
            });
    </script>
@endsection