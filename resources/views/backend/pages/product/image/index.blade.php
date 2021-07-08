@extends('backend.layouts.app')
@section('title', ' Management product image')
@section('admin-content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Manage Sliders
      </div>
      <div class="card-body">
          {{-- @include('backend.partials.message') --}}
          @include('backend.partials.massage')

          <a href="#addSliderModal" data-toggle="modal" class="btn btn-info float-right mb-2">
            <i class="fa fa-plus"></i> Add New image
          </a>
          <div class="clearfix"></div>
          
          <!-- Add Modal -->
          <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add new Image</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form action="{!! route('admin.pimage.store') !!}"  method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                   
                    <div class="form-group row">
                      <label class="col-sm-5 col-form-label">Product</label>
                      <div class="col-sm-5 ">
                          <span class="messages"></span>
                          <select class="form-control js-example-basic-single"  id="product_id" name="">
                              @foreach ($products as $product)
                              <option value="{{ $product->id }}" data-product_sku="{{$product->sku}}" >{{ $product->sku }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-5 col-form-label">Status</label>
                      <div class="col-sm-5">
                          <span class="messages"></span>
                          <select class="form-control "  id="status" name="status" required>
                                  <option value="1" selected>Active</option>
                                  <option value="0" >Inactive</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Image Upload</h5>
                          
                        </div>
                        <div class="card-block">
                            <input type="file" name="images[]" id="images" class="filer_input1" multiple="multiple">
                        </div>
                    </div>
                </div>

                    <button type="submit" class="btn btn-success">Add New</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                  </form>

                </div>
              </div>
            </div>
          </div>


        <table class="table table-hover table-striped">
          <tr>
            <th>#</th>
            <th> name</th>
            <th> Image</th>
            <th> product sku</th>
            <th> type</th>
            <th>Action</th>
          </tr>

          @foreach ($images as $productimage)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>{{ $productimage->name }}</td>
              <td>
                <img src="{{ asset('/img/product/'.$productimage->link) }}" width="40">
              </td>
              <td>{{ $productimage->product->sku }}</td>
              <td>{{ $productimage->type }}</td>

              <td>
                <a href="#editModal{{ $productimage->id }}" data-toggle="modal" class="btn btn-success">Edit</a>

                <a href="#deleteModal{{ $productimage->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $productimage->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{!! route('admin.pimage.delete', $productimage->id) !!}"  method="post">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger">Permanent Delete</button>
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal{{ $productimage->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{!! route('admin.pimage.update', $productimage->id) !!}"  method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                      
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Product</label>
                          <div class="col-sm-5">
                              <span class="messages"></span>
                              <select class="form-control "  id="product_id" name="product_id">
                                  @foreach ($products as $product)
                                  <option value="{{ $product->id }}" data-product_sku="{{$product->sku}}" selected>{{ $product->sku }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Status</label>
                          <div class="col-sm-5">
                              <span class="messages"></span>
                              <select class="form-control "  id="status" name="status" required>
                                      <option value="1" selected>Active</option>
                                      <option value="0" >Inactive</option>
                              </select>
                          </div>
                      </div>


                        <div class="form-group">
                          <label for="image">Slider Image 
                            <a href="{{ asset('/img/product/'.$productimage->link) }}" target="_blank">
                              Previous Image
                              <img src="{{ asset('/img/product/'.$productimage->link) }}" width="40">
                            </a>

                            <small class="text-danger">(required)</small></label>
                          <input type="file" class="form-control" name="image" id="image" placeholder="Slider Image">
                        </div>


                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                      </form>
                      </div>
                    </div>
                  </div>
                </div>


              </td>
            </tr>
          @endforeach

        </table>
      </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->

<div class="clearix"></div>
@endsection
@section('script')
<script>
 $(document).ready(function() {
   // $("#product_id").select2(); 
    
    });
</script>

@endsection


