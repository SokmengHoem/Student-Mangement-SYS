@extends('layout')
@section('content')

    <div class="card " style="width: 500px ">
        <h3 class="card-header text-center">Add New Corse</h3>
        <div class="card-body">

            <form action="{{ route('courses.store') }}" method="post">
                @csrf
                @method('POST')
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" />
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="" class="form-label">Syllabus</label>
                <input type="text" class="form-control @error('syllabus') is-invalid @enderror" id="syllabus"
                    name="syllabus" />
                @error('syllabus')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="" class="form-label">Duration</label>
                <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration"
                    name="duration" /></br>
                @error('duration')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <a class="btn btn-primary" href=" {{ route('courses.index') }}">Back</a>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>

@stop