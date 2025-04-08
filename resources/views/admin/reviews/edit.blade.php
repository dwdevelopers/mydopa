@extends('admin.layouts.app')
@section('title', 'Edit Review')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Review'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Review</h4>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Read-only Reviewer Info -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ $review->name }}" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{ $review->email }}" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="{{ $review->phone }}" readonly>
                                </div>
                            </div>

                            <!-- Title (Read-only) -->
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" class="form-control" value="{{ $review->title }}" readonly>
                            </div>

                            <!-- Review Text (Read-only) -->
                            <div class="mb-3">
                                <label>Review</label>
                                <textarea class="form-control" rows="5" readonly>{{ $review->review }}</textarea>
                            </div>

                            <!-- Rating (Read-only display only) -->
                            <div class="mb-3">
                                <label>Rating</label>
                                <div class="star-rating">
                                    @for($i = 1; $i <= 5; $i++) <i class="bx {{ $i <= $review->rating ? 'bxs-star text-warning' : 'bx-star text-muted' }}"></i>
                                        @endfor
                                </div>
                            </div>

                            <!-- Status (Editable) -->
                            <div class="mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="1" {{ $review->status ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ !$review->status ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <input name="product_id" type="hidden" value="1" class="form-control">

                            <button type="submit" class="btn btn-primary">Update Status</button>
                            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .star-rating .bx {
        font-size: 1.5rem;
    }

</style>
@endsection
