@extends('admin.layouts.app')
@section('title', 'Edit Question')

@section('content')
<div class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.top', ['pageTitle' => 'Edit Question'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">Edit Question</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <form action="{{ route('questions.update', $question->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <!-- Name (Read Only) -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name*</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $question->name) }}" readonly>
                                    </div>

                                    <!-- Email (Read Only) -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $question->email) }}" readonly>
                                    </div>

                                    <!-- Phone (Read Only) -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone*</label>
                                        <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $question->phone) }}" readonly>
                                    </div>

                                    <!-- Question (Read Only) -->
                                    <div class="mb-3">
                                        <label for="question" class="form-label">Question*</label>
                                        <textarea id="question" name="question" class="form-control" rows="5" readonly>{{ old('question', $question->question) }}</textarea>
                                    </div>

                                    <!-- Answer (Editable) -->
                                    <div class="mb-3">
                                        <label for="answer" class="form-label">Answer</label>
                                        <textarea id="answer" name="answer" class="form-control" rows="5" >{{ old('answer', $question->answer) }}</textarea>
                                    </div>


                                    <!-- Status (Editable) -->
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="1" {{ $question->status ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$question->status ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Answer</button>
                                    <a href="{{ route('questions.index') }}" class="btn btn-secondary">Back</a>
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
