@extends('Backend.backendmaster')
@section('application-active','active')
@section('title', 'Peoplescape | Application Lists')
@section('content')
<section class="content">
        <style>
                .common-button{
                    border: 1px solid #3c8dbc;
                    padding: 4px 11px;
                    border-radius: 3px;
                    background: #00c0ef;
                    color: #fff;
                    font-weight: bold;
                    margin-left: 12px;
                    font-size: 15px;
                    cursor: pointer;
                }
                .common-button:hover{
                  background: transparent;
                  color:teal;
                  font-weight: bolder;
                  font-size: 15px;
                }
                .rightportion{
                    padding-right: 182px;
        
                }
                </style>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Applicant  List</h3><div class="rightportion"><a href="{{route('shortlisted.applicantlist',['id'=>$id])}}" class="common-button pull-right">Shortlisted Applicant</a><a href="{{route('careerjob.detail',['id'=>$id])}}" class="pull-right common-button">Go Back</a></div>
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
                <th width="20%">Name</th>
                <th width="20%">Email</th> 
                <th width="20%">MobileNO</th>
                <th width="20%">Shortlist</th>
                
              </tr>
              </thead>
              <tbody>
                  {{-- @php
                     dd($id);
                  @endphp --}}
                @foreach($applicantByjobid as $val)
               <tr>
              <td>{{$loop->index + 1}}</td>
               <td><a href="{{route('application.show',['id'=>$val->cvid])}}" style="cursor:pointer">{{$val->name}}</a></td>
                  <td>{{$val->email}}</td>
                  <td>{{$val->mobile}}</td>
               <td>
                 <a class="sortedlist" data-jobid="{{$val->jobid}}" data-userid="{{$val->id}}" style="cursor:pointer;font-size: 24px;"><i class="fa fa-star"></i></a>
               <a href="{{route('zip.singlecv')}}"  data-jobid="{{$val->jobid}}" data-userid="{{$val->id}}" style="cursor:pointer;font-size: 24px;"><i class="fa fa-download"></i>PDF</a>
              </td>
                  
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
<script>
    $(document).on('click','.sortedlist',function(e){
        e.preventDefault();
        var jobid = $(this).data('jobid');
        var userid = $(this).data('userid');
        $.ajax({
    url: "{!! route('shortlist.applicant') !!}",
    type: "get", 
    data: {  
        jobid: jobid, 
        userid: userid, 
    },
        success: function(data) {
            //console.log(data);
            if(data=='success'){
                toastr.options = {
                    "debug": false,
                    "positionClass": "toast-bottom-right",
                    "onclick": null,
                    "fadeIn": 300,
                    "fadeOut": 1000,
                    "timeOut": 5000,
                    "extendedTimeOut": 1000
                };
            toastr.success('Applicant was shortlisted!');
            }else{
                toastr.options = {
                    "debug": false,
                    "positionClass": "toast-bottom-right",
                    "onclick": null,
                    "fadeIn": 300,
                    "fadeOut": 1000,
                    "timeOut": 5000,
                    "extendedTimeOut": 1000
                };
            toastr.warning('Applicant was shortlisted before!');
            }
        
            
            
            }
        
    });
    })
    </script>
@endsection