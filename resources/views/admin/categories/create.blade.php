@extends('admin.layouts.app')
@section('title', 'Category')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Create Category'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Create Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Category Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="details" class="form-label">Description</label>
                                        <textarea id="details" name="details" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Category Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    </div>

                                    <div class="mb-3 error-placeholder">
                                        <label class="form-label">Status</label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="1" checked> Active
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" value="0"> Inactive
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Create Category</button>
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
