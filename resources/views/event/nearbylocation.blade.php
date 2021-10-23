@extends('html')
@section('content')
<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Select the location</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <span class="error">{{$errors->first('lat')}}</span>
                <span class="error">{{$errors->first('long')}}</span>
                <nearby></nearby>
                <near></near>
            </div>
        </div>
    </div>
</div>
@endsection