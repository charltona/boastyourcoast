<!-- active fields
    name - text
    description - textarea
    category - select
    image - file
    address - text
    website - text
-->

<!-- inactive fields
    status - on import
    owner_id - from user auth
-->
@extends('landing');

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
            <div class="input-field col s6">
                <input type="text" id="name" name="name" class="validate">
                <label for="name">Name</label>
            </div>

            <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" name="description"></textarea>
                <label for="description">Textarea</label>
            </div>

            <div class="input-field col s12">
                <select name="category">
                    <option value="" disabled selected>Choose your option</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label>Category</label>
            </div>

            <div class="input-field col s6">
                <input type="text" id="address" name="address" class="validate">
                <label for="name">Address</label>
            </div>

            <div class="input-field col s6">
                <input type="text" id="website" name="website" class="validate">
                <label for="name">Website</label>
            </div>

            <div class="input-field col s6">
                <label>
                    <input type="checkbox" name="featured" value="1" />
                    <span>Featured?</span>
                </label>
            </div>


            <div class="file-field input-field">
                <div class="btn">
                    <span>Image</span>
                    <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            <!-- update these with dynamic values when ready -->
            <input type="hidden" name="owner_id" value="1">
            <input type="hidden" name="status" value="1">

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            </button>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </div>
    </form>
</div>

@endsection