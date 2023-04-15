@extends('admin.layouts.template')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Category</h4>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('admin.updatecategory')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <input type="hidden" value="{{$category_info->id}}" name="category_id">
                                <div class="form-group">
                                    <label for="category_name">Enter Category Name</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name"
                                        value="{{$category_info->category_name}}">
                                </div>
                                {{-- <div class="form-group">
                              <label for="inputAddress2">Address 2</label>
                              <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                            </div> --}}
                                {{-- <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary">Update Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
