@extends('layout.master')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('customer.update', ['id' => $customer->id]) }}">
        <input type="hidden" name="_method" value="PATCH">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit customer
            </div>
            <div class="panel-body">
                <div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ old('name') ?: $customer->name }}">
                        <p class="help-block">{{ ($errors->has('name') ? $errors->first('name') : '') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') ?: $customer->phone }}">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" value="{{ old('address') ?: $customer->address }}">
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-info btn-addon"><i class="glyphicon glyphicon-ok"></i>Update</button>
                <a href="{{ route('customer.index') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
@endsection