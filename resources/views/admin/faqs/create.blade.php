@extends('admin.layouts.app')
@section('title', 'FAQ')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Create FAQ'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Create FAQ</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form action="{{ route('faqs.store') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="question" class="form-label">Question</label>
                                        <input type="text" id="question" name="question" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="answer" class="form-label">Answer</label>
                                        <textarea id="answer" name="answer" class="form-control" rows="3" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <input type="text" id="category" name="category" class="form-control" >
                                    </div>

                                    <div class="mb-3 error-placeholder">
                                        <label class="form-label">Status</label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="is_active" value="1" checked> Active
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="is_active" value="0"> Inactive
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Create FAQ</button>
                                    <a href="{{ route('faqs.index') }}" class="btn btn-secondary">Back</a>
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
