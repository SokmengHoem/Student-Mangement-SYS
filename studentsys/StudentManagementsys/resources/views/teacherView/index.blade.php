@extends('layout')
@section('content')
                <div class="card" >
                    <div class="card-header">
                        <h2  class="text-center">Teacher Application</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route("teachers.create") }}" class="btn btn-success btn-sm" title="Add New Teacher">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <form action="/searcht" method="get">
                                        <div class="input-group">
                                            <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                       </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teh)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teh->name }}</td>
                                        <td>{{ $teh->gender }}</td>
                                        <td>{{ $teh->address }}</td>
                                        <td>{{ $teh->tel }}</td>
                                        <td>
                                            <img src="{{ asset($teh->image) }}" alt="Img" style="width: 70px; height:70px;">
                                        </td>

                                        <td>
                                            <a href="{{ route('teachers.show',$teh->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('teachers.edit',$teh->id) }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ route('teachers.destroy', $teh->id) }}" accept-charset="UTF-8" style="display:inline">
                                               @csrf
                                               @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
@endsection
