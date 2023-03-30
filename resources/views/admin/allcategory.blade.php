@extends('admin.layouts.template')
@section('content')
  <div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
              <h4>All Category </h4>
            </div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>

            @else

            @endif
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Name</th>
                      <th>Stock Level</th>
                      <th>Stock Images</th>
                      <th>Slug</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach ($categories as $category )
                  <tbody>
                    <tr>
                      <td>
                        {{$category->id}}
                      </td>
                      <td>
                        {{$category->category_name}}
                      </td>
                      <td class="align-middle">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success width-per-40">
                          </div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="assets/img/users/user-5.png" width="35">
                      </td>
                      <td>
                        {{$category->slug}}
                      </td>
                      <td>
                        @if ($category->status == 'Available')
                        <div class="badge badge-success badge-shadow">Available</div>
                        @else ($category->status == 'Unavailable')
                        <div class="badge badge-danger badge-shadow">Unavailable</div>
                        @endif
                      </td>
                      <td><a href="#" class="btn btn-primary">Detail</a></td>
                    </tr>

                  </tbody>
                  @endforeach

                </table>
              </div>
            </div>
          </div>
    </section>
  </div>
@endsection
