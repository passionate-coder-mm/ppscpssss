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
                <h3 class="box-title">Short Listed Applicant</h3><div class="rightportion"><a href="{{route('careerjob.detail',['id'=>$jobid])}}" class="common-button pull-right">Job Details</a><a href="{{route('career.applicantlist',['id'=>$jobid])}}" class="pull-right common-button">Go Back</a></div>
                 <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
                 </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th width="15%">Name</th>
                     <th width="15%">Eamil</th>
                     <th width="15%">Mobile</th>
                     <th width="15%">Action</th>
                  </tr>
                  </thead>
                  <tbody class="jobappend">
                    @foreach($findShortlistedapplicant as $sorted)
                   <tr>
                   <td><a href="{{route('application.show',['id'=>$sorted->cvformsid])}}">{{$sorted->name}}</a></td>
                      <td>{{$sorted->email}}</td>
                      <td>{{$sorted->mobile}}</td>
                      <td>
                        <a class="unsort" data-id="{{$sorted->shortlistid}}"><span class="glyphicon glyphicon-trash btn btn-danger btn-sm"></span></a>
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
           $(document).on('click','.unsort',function(e) {
                        e.preventDefault();
                        var id = $(this).data('id');
                        //alert(role);
                        Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        
                        }).then(result => {
                        
                        if (result.value) {
                            $.ajax({
                            url: "{!! route('shortlisted.remove') !!}",
                            type: "get", 
                            data: {  
                                id: id, 
                            },
                            success: function(data) {
                                }
                            });
                            
                            $(this).closest('tr').hide();
                            
                        }
                        }
                    )
                });
          </script>
@endsection