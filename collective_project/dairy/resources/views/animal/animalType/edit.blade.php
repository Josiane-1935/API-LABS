@extends('layout')

@section('title')
  Animal Types
@endsection

@section('content')
<div class="row">
       <div class="col-md-12">
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Animal Type <i class="fas fa-plus-edit"></i></h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" action="{{URL::to('animals/type/update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  @if ($errors->any())
                   <div class="alert alert-danger">
                     <ul>
                       @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                       @endforeach
                     </ul>
                   </div>

                  @endif
                  <input type="hidden" name="animalTypeId" value="{{$animalType->animalTypeId}}" />
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"
                     class="form-control @error('name') is-invalid @enderror"
                     id="name"
                     name="name"
                     placeholder="Enter Animal Type Name"
                     title="Only letters are allowed for the name"
                     pattern="[A-Za-z]+" value="{{$animalType->name}}" >

                    @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <p><b>Current Photo<b></p>
                      <img style="width:60%" class="img-fluid pad" src="{{URL::to($animalType->photo)}}" alt="{{$animalType->name}}" />
                    </div>
                    <div class="col-md-12 d-flex">
                      <div class="form-group">
                        <label for="photo">Select New</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                            id="photo"
                            name="photo"
                            accept="image/*"  title="Only photos are allowed"  />

                            <label class="custom-file-label" for="photo">Choose Photo</label>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save<i class="fas fa-save"></i></button>
                </div>
              </form>
            </div>
       </div>
</div>

@endsection

@section('scripts')

<!-- bs-custom-file-input -->
<script src="{{URL::to('example2/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

@endsection
