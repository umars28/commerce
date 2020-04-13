@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Main Content
        </h1>
    </section>
    <section class="content">
        @if($data = session('success'))
            <div class="alert alert-success">{{ $data }}</div>
        @endif
        <div class="box">
            <form method="post" action="{{ route('homepage.saveMainContent', $homepages->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                <div class="box-body margin-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="title">Heading 1</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="input title" value="{{ $homepages->title }}"/>
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="title2">Sub Title</label>
                                <input type="text" class="form-control" name="sub_heading" id="title2" placeholder="input title 2" value="{{ $homepages->subtitle }}"/>
                                <p class="text-danger">{{ $errors->first('subtitle') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="input title" value="{{ $homepages->description }}"/>
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                            </div>
                            <div class="form-group">
                                <img src="{{ $homepages->media ? $homepages->media : 'null' }}">
                            </div>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Text Button</label>
                                <input type="text" class="form-control" name="button_text" placeholder="Input Text Button" value="{{ $homepages->button_text }}">
                                <p class="text-danger">{{ $errors->first('button_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary margin-r-5">UPDATE</button>
                </div>
            </form>
        </div>
    </section>
@endsection
