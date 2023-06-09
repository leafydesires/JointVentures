@extends('admin.layouts.template')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Create Brand</h4>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                              <label for="brand_name">Enter Brand Name</label>
                              <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Purple Haze">
                            </div>
                            {{-- <div class="form-group">
                              <label for="inputAddress2">Address 2</label>
                              <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                            </div> --}}
                            <div class="form-group mb-0">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <button class="btn btn-primary">Create Brand</button>
                          </div>
                    </form>
                  </div>
            </div>
         </div>
    </section>
</div>
@endsection
