@extends('layouts.admin')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Tables <small>Some examples to get you started</small></h3>
    </div>
    <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2>Stripped table <small>Stripped table subtitle</small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(-5px, 31px, 0px); top: 0px; left: 0px; will-change: transform;">
<a class="dropdown-item" href="#">Settings 1</a>
<a class="dropdown-item" href="#">Settings 2</a>
</div>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<table class="table table-striped">
<thead>
<tr>
    <?php foreach($Configs as $config){ ?>
    <th><?=$config['name']?></th>
    <?php } ?>
</tr>
</thead>
<tbody>
    <?php
    var_dump($data)
    ?>
    
    <?php foreach($data as $record){ ?>
    <a role="grid" href="#">
    <tr style="transform: rotate(0);">
    <!-- <a href="{{route('listing.index',['model'=>'mssv'])}}">lonh</a> -->
        <th scope="row"><a href="/admin/detail-sinhvien/<?=$record['mssv']?>" class="stretched-link"><?=$record['mssv']?></a></th>
        <td><?=$record['ho']?> <?=$record['ten_lot']?> <?=$record['ten']?></td>
        <td><?=$record['ten_lop']?></td>
        <td><?=$record['created_at']?></td>
        <td><?=$record['updated_at']?></td>
        
    </tr>
    </a>
    <?php } ?>

</tbody>
</table>
<?= $records->links("pagination::bootstrap-4") ?>
</div>
</div>
</div>
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