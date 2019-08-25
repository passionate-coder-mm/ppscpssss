@extends('Backend.backendmaster')
@section('application-active','active')
@section('title', 'Peoplescape | Application Lists')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Application  List</h3>
             <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
             </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
               <th width="5%">S.I</th>
                <th width="30%">Name</th>
                <th width="30%">Email</th> 
                <th width="30%">MobileNO</th>
                
              </tr>
              </thead>
              <tbody>
                @foreach($cv as $val)
               <tr>
                   <td>{{$loop->index + 1}}</td>
                  <td><a href="{{route('application.show',['id'=>$val->id])}}" style="cursor:pointer">{{$val->name}}</a></td>
                  <td>{{$val->email}}</td>
                  <td>{{$val->mobile}}</td>
                  
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
</section>
@endsection