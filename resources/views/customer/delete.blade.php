@extends('layout.master')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('customer.update', ['id' => $customer->id]) }}">
        <input type="hidden" name="_method" value="DELETE">
        <div class="panel panel-default">
            <div class="panel-heading">
                Delete customer
            </div>
            <div class="panel-body">
                <p>Are you sure to delete customer, named <del>{{ $customer->name }}</del>?</p>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-ok"></i>Delete</button>
                <a href="{{ route('customer.index') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
@endsection