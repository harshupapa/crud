@extends('admin.layouts.master') 

@section('Current-Page') 
Add Vehicle 
@endsection 

@section('Parent-Menu') 
Home 
@endsection 

@section('Menu') 
Add Vehicle 
@endsection 

@section('content')


<div class="tile">
<div class="tile">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ action('BillingController\VehicleTypeController@store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                	<label><h5><b>Enter Vehicle Name</b></h5></label>
                                    <input class="form-control form-control-lg" id="" type="text"  placeholder="Enter Vehicle Name" value="{{ old('name') }}" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-7">
                                <button class="btn btn-primary pull-right" type="submit">Add Vehicle Name</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tile">
<div class="row">
        <div class="col-md-12">
                <table class="table table-bordered" id="VehicleTable">
                    <thead>
                        <tr>
                            <th>Vehicle Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Vehicles as $Vehicle)
                            <tr>
                                <td>{{ $Vehicle->name }}</td>
                              <td>
		                      <form action="{{ action('BillingController\VehicleTypeController@destroy',$Vehicle->id) }}" method="POST">
		                          {{ csrf_field() }}
		                          <input type="hidden" name="_method" value="DELETE">
		                          <a href="{{ action('BillingController\VehicleTypeController@edit',$Vehicle->id) }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true" style="color:#fff"></i></a>
		                          <button href="" onclick="return confirm('Are you sure?')" class="btn btn-primary"><i class="fa fa-trash-o"  aria-hidden="true" style="color:#fff" ></i></button>
		                      </form>
                   			 </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
</div>

@endsection