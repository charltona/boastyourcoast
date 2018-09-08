@extends('landing')
@section ('title','Add a new listing')
@section ('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <form action="/store" method="POST" enctype="multipart/form-data" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" id="name" name="name" class="validate">
                <label for="name">Name</label>
            </div>

            <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" name="description"></textarea>
                <label for="description">Description</label>
            </div>

            <div class="input-field col s12">
                <select name="category" class="browser-default">
                    <option value="" disabled selected>Choose your category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-field col s12">
                <input type="text" id="address" name="address" class="validate">
                <label for="address">Address</label>
            </div>

            <div class="input-field col s12">
                <input type="text" id="website" name="website" class="validate">
                <label for="website">Website</label>
            </div>

            <div class=" col s12">
                <label>
                    <input type="checkbox" name="featured" value="1" />
                    <span>Featured?</span>
                </label>
            </div>


            <div class="file-field input-field col s12">
                <div class="btn">
                    <span>Upload Image</span>
                    <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>

            </div>

            <!-- update these with dynamic values when ready -->
            <input type="hidden" name="owner_id" value="1">
            <input type="hidden" name="status" value="1">

            <div class="input-field col s6">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                </button>
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </div>
    </form>
</div>


@endsection