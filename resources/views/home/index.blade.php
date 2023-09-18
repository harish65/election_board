@extends('layouts.app')
<div class="m-4">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab">
                <li class="nav-item">
                    <a href="#change_key_1" class="nav-link active" data-bs-toggle="tab">Change Key 1</a>
                </li>
                <li class="nav-item">
                    <a href="#change_key_2" class="nav-link" data-bs-toggle="tab">Change Key 2</a>
                </li>
                <li class="nav-item">
                    <a href="#change_key_3" class="nav-link" data-bs-toggle="tab">Change Key 3</a>
                </li>
            </ul>
        </div>
        <form method="post" action="{{route('store')}}">
          <div class="card-body">
            @csrf
              <div class="tab-content">
                  <div class="tab-pane fade show active" id="change_key_1">
                      <div class="row">
                          <div class="col">
                            <label>New Key</label>
                          </div>
                          <div class="col">
                            <input type="hidden" value="{{ rand(10,100)}}" class="form-control" name="distcd">
                            <input type="text" class="form-control" name="change_key_1">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_2">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_3">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col">
                              <label>Confirm Key</label>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" name="change_key_4">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_5">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_6">
                          </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="change_key_2">
                      <div class="row">
                          <div class="col">
                            <label>New Key</label>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" name="change_key_7">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_8">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_9">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col">
                              <label>Confirm Key</label>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control"  name="change_key_10">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_11">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_12">
                          </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="change_key_3">
                      <div class="row">
                          <div class="col">
                            <label>New Key</label>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" name="change_key_13">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_14">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_15">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col">
                              <label>Confirm Key</label>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" name="change_key_16">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_17">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control" name="change_key_18">
                          </div>
                        </div>
                  </div>
              </div>
            
          </div>
          
            <button  type="submit" class="btn btn-primary">Submit</button>
          
      </form>
    </div>
</div>
@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>
<script>
$('.btn').on('click',function(){
  
})
  
</script>
@endsection