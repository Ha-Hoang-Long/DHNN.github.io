@extends('layouts.admin')
@section('content')
<form action="{{url('admin/import-sv')}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" accept=".xlsx, .xls, .csv"><br>
<input type="submit" value="Import EXCEL" name="import" class="btn btn-warning">
</form>
<form action="{{url('admin/export-sv')}}" method="POST">
@csrf
<input type="submit" value="Export EXCEL" name="export" class="btn btn-success">
</form>
@endsection