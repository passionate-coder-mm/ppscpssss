@extends('Backend.backendmaster')
@section('applicationprofile-active','active')
@section('title', 'Peoplescape | Application Profile')
@section('content')
<style>
    .commonaccrodion{
        /* background: #2686be; */
        font-size: 17px;
        color: #413769;
        font-weight: bold;
        text-decoration: none;
    }
    .btn-link:hover{
        text-decoration: none;
    }
</style>
<section class="content">
        <div class="row">
          <div class="col-xs-4">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Basic Info</h3>
                 <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
                 </div>
                  <div class="box-body">
                             <div class="text-center">
                               <img src="/psimage/admin.png" style="border-radius:50%"/>
                             </div>
                              <table class="table table-bordered table-striped">
                                <tr>
                                    <td width="40%"><b>Name</b></td>
                                <td width="60%">{{$user_info->name}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Email</b></td>
                                <td width="60%">{{$user_info->email}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Mobile</b></td>
                                    <td width="60%">{{$user_info->mobile}}</td>
                                </tr>
                                 <tr>
                                    <td width="40%"><b>Gender</b></td>
                                    <td width="60%">{{$user_info->gender}}</td>
                                </tr>
                               {{-- <tr>
                                    <td width="40%"><b>Permanent Address</b></td>
                                    <td width="60%"></td>
                                </tr> --}}
                                
                        </table><br>
                  </div>
             </div>
          </div>
          <div class="col-xs-8">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Others Info</h3>
                     <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                      </div>
                     </div>
                     
                  <div class="box-body">
                        <div id="accordion">
                                <div class="card">
                                  <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link collapsed commonaccrodion " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Personal Information
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        @php
                                        use App\Cvform;
                                        $findCv = Cvform::where('userid','=',$user_info->id)->first();
                                       @endphp
                                       @if($findCv)
                                     <div class="card-body">
                                       <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="haddress" class="control-label"><span style="color:red">*</span> Home Address</label>
                                                <div>
                                                <input type="text" class="form-control" id="haddress" name="haddress" value="{{$findCv->haddress}}">
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="paddress" class="control-label"><span style="color:red">*</span> Permanent Address</label>
                                                <div>
                                                <input type="text" class="form-control" id="paddress" name="paddress" value="{{$findCv->paddress}}">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="birthdate" class="control-label"><span style="color:red">*</span> Birthdate</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="birthdate" name="birthdate" value="{{$findCv->birthdate}}">
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="birthdate" class="control-label"><span style="color:red">*</span> Cover Letter</label>
                                                <div>
                                                        <textarea name="interest" class="form-control" rows="8">{{$findCv->interest}}</textarea>
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="row cbtn" style="margin:2px;">
                                                    <div class="col-12">
                                                        <button class='btn btn-block custombtn' type="submit">UPDATE</button>
                                                    </div>
                                                </div>
                                                 
                                     </div>
                                     @else
                                     <div class="card-body">
                                            <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label for="haddress" class="control-label"><span style="color:red">*</span> Home Address</label>
                                                     <div>
                                                     <input type="text" class="form-control" id="haddress" name="haddress" placeholder="Enter  Address">
                                                     </div>
                                                 </div>
                                                 </div>
                                                 
                                                 <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label for="paddress" class="control-label"><span style="color:red">*</span> Permanent Address</label>
                                                     <div>
                                                     <input type="text" class="form-control" id="paddress" name="paddress" placeholder="Enter  Address">
                                                     </div>
                                                 </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                         <label for="birthdate" class="control-label"><span style="color:red">*</span> Birthdate</label>
                                                         <div>
                                                             <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="Enter Your Name">
                                                         </div>
                                                     </div>
                                                     </div>
                                                 <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label for="birthdate" class="control-label"><span style="color:red">*</span> Cover Letter</label>
                                                     <div>
                                                             <textarea name="interest" class="form-control" rows="8" placeholder="Write About Yourself...."></textarea>
                                                         </div>
                                                 </div>
                                                 </div>
                                                <div class="row cbtn" style="margin:2px;">
                                                        <div class="col-12">
                                                            <button class='btn btn-block custombtn' type="submit">SUBMIT</button>
                                                        </div>
                                                    </div>
                                                      
                                           </div>
                                         @endif

                                      
                                  </div>
                                </div>
                                <div class="card">
                                  <div class="card-header " id="headingThree">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link collapsed commonaccrodion" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Educational Qualification
                                      </button>
                                    </h5>
                                  </div>
                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                            <div class="alist col-sm-12 " data-index_no="1000">
                                                            <div class="aitemWrapper">
                                                                <table class="table table-bordered amoreTable">
                                                                    <tr>
                                                                       <th width="35%" class="labelclass">Degree</th>
                                                                        <th width="35%" class="labelclass">Institution Name</th>
                                                                        <th width="20%" class="labelclass">Score</th>
                                                                        <th width="10%" class="labelclass">Option</th>
                                                                    </tr>
                                                                    
                                                                        <tr class="aitem_tr asingle_list">
                                                                            <td><input type="text" class="form-control"  name="academic[0][degree]" placeholder="Enter Degree  Name"><br></td>
                                                                            <td><input type="text" class="form-control"  name="academic[0][instname]" placeholder="Enter Institute Name"><br></td>
                                                                            <td><input type="text" class="form-control"  name="academic[0][cgpa]" placeholder="Enter Score "><br></td>
                                                                            <td><span class="aremove" style="background: #ed3610;
                                                                            padding: 0px 7px;;
                                                                            color: #fff;
                                                                            border-radius: 8%;
                                                                            text-decoration: none;
                                                                            margin-bottom: 10px;
                                                                            cursor: pointer;">-</span></td>
                                                                        </tr>
                                                                    
                                                                </table>
                                                                <span  class="aadd_more" style="background: #0d72ba;
                                                                padding: 0px 7px;;
                                                                color: #fff;
                                                                border-radius: 8%;
                                                                text-decoration: none;
                                                                margin-bottom: 10px;
                                                                cursor: pointer;">+</span><br><br>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row cbtn" style="margin:2px;">
                                                        <div class="col-12">
                                                            <button class='btn btn-block custombtn' type="submit">SUBMIT</button>
                                                        </div>
                                                    </div>
                                            </div>
                                            <script>
                                                $(document).on('click','.aadd_more',function(){
                                                    var index = $('.alist').data('index_no');
                                                    $('.alist').data('index_no', index + 1);
                                                    var html = $('.aitemWrapper .aitem_tr:last').clone().find('.form-control').each(function () {
                                                        this.name = this.name.replace(/\d+/, index+1);
                                                        this.id = this.id.replace(/\d+/, index+1);
                                                        this.value = '';
                                                    }).end();
                                                    $('.amoreTable').append(html);
                                                    var rowCount = $('.amoreTable tr').length;
                                                    $(this).closest('.aitemWrapper').find('.aitem_tr:last').find('.day_no').html(rowCount-1);
                                                    $(this).closest('.aitemWrapper').find('.aitem_tr:last').find('.dayval').val(rowCount-1);
                                                });
                                                    $(document).on('click', '.aremove', function () {
                                                        var obj=$(this);
                                                        var count= $('.asingle_list').length;
                                                        // alert(count);
                                                        if(count > 1) {
                                                            if(obj.closest('.asingle_list').is($(this).closest('.aitemWrapper').find('.asingle_list:last'))){
                                                                obj.closest('.asingle_list').remove();
                                                            }else{
                                                                alert('You can only remove the last one!');
                                                            }
                                                        }
                                                    });
                                             </script>
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                    <div class="card-header " id="headingFour">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed commonaccrodion" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Job Experience
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                                <div class="col-md-12"> 
                                                        <div class="form-group">
                                                            <div class="list col-sm-12 " data-index_no="1000">
                                                                <div class="itemWrapper">
                                                                    <table class="table table-bordered moreTable">
                                                                        <tr>
                                                                            <th width="15%" class="labelclass">Job Title</th>
                                                                            <th width="15%" class="labelclass">Company Name</th>
                                                                            <th width="25%" class="labelclass">Responsibilities</th>
                                                                            <th width="15%" class="labelclass">Joined In</th>
                                                                            <th width="15%" class="labelclass">Left In</th>
                                                                            <th width="5%" class="labelclass">Option</th>
                                                                        </tr>
                                                                        
                                                                            <tr class="item_tr single_list">
                                                                                <td><input type="text" class="form-control" id="pro_role" name="experience[0][title]" placeholder="Enter Job Title"><br></td>
                                                                                <td><input type="text" class="form-control" id="pro_role" name="experience[0][company]" placeholder="Enter Company Name"><br></td>
                                                                                <td><textarea  class="form-control" id="pro_role" name="experience[0][responsibilites]" rows="4" placeholder="Enter Responsibilites"></textarea><br></td>
                                                                                <td><input type="text" class="form-control" id="pro_role" name="experience[0][joinedin]" placeholder="Enter Joined date EX:dd-mm-yy"><br></td>
                                                                                <td><input type="text" class="form-control" id="pro_role" name="experience[0][leftin]" placeholder="Enter Leftin date EX:dd-mm-yy"><br></td>
                                                                                <td><span class="remove" style="background: #ed3610;
                                                                                    padding: 0px 7px;;
                                                                                    color: #fff;
                                                                                    border-radius: 8%;
                                                                                    text-decoration: none;
                                                                                    margin-bottom: 10px;
                                                                                    cursor: pointer;">-</span></td>
                                                                            </tr>
                                                                        
                                                                    </table>
                                                                    <span  class="add_more" style="background: #0d72ba;
                                                                    padding: 0px 7px;;
                                                                    color: #fff;
                                                                    border-radius: 8%;
                                                                    text-decoration: none;
                                                                    margin-bottom: 10px;
                                                                    cursor: pointer;">+</span><br><br>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="row cbtn" style="margin:2px;">
                                                            <div class="col-12">
                                                                <button class='btn btn-block custombtn' type="submit">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                <script>
                                                    $(document).on('click','.add_more',function(){
                                                        var index = $('.list').data('index_no');
                                                        $('.list').data('index_no', index + 1);
                                                        var html = $('.itemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                                                            this.name = this.name.replace(/\d+/, index+1);
                                                            this.id = this.id.replace(/\d+/, index+1);
                                                            this.value = '';
                                                        }).end();
                                                        $('.moreTable').append(html);
                                                        var rowCount = $('.moreTable tr').length;
                                                        $(this).closest('.itemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                                                        $(this).closest('.itemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
                                                    });
                                                    $(document).on('click', '.remove', function () {
                                                        var obj=$(this);
                                                        var count= $('.single_list').length;
                                                        // alert(count);
                                                        if(count > 1) {
                                                            if(obj.closest('.single_list').is($(this).closest('.itemWrapper').find('.single_list:last'))){
                                                                obj.closest('.single_list').remove();
                                                            }else{
                                                                alert('You can only remove the last one!');
                                                            }
                                                        }
                                                    });
                                                    </script>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed commonaccrodion" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                               Project Url
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="wlist col-sm-12 " data-index_no="1000">
                                                                <div class="witemWrapper">
                                                                    <table class="table table-bordered wmoreTable">
                                                                        <tr>
                                                                            
                                                                            <th width="30%" class="labelclass">Url</th>
                                                                            <th width="50%" class="labelclass">Project Details</th>
                                                                            <th width="10%" class="labelclass">Option</th>
                                                                        </tr>
                                                                        
                                                                            <tr class="witem_tr wsingle_list">
                                                                                
                                                                                <td><input type="text" class="form-control" id="pro_url" name="project[0][url]" placeholder="Enter Project Url"><br></td>
                                                                                <td><textarea type="text" class="form-control" id="pro_comment" name="project[0][comment]" placeholder="Enter Description About Project"></textarea><br></td>
                                                                              <td><span class="wremove" style="background: #ed3610;
                                                                                padding: 0px 7px;;
                                                                                color: #fff;
                                                                                border-radius: 8%;
                                                                                text-decoration: none;
                                                                                margin-bottom: 10px;
                                                                                cursor: pointer;">-</span></td>
                                                                            </tr>
                                                                      
                                                                    </table>
                                                                    <span  class="wadd_more" style="background: #0d72ba;
                                                                    padding: 0px 7px;;
                                                                    color: #fff;
                                                                    border-radius: 8%;
                                                                    text-decoration: none;
                                                                    margin-bottom: 10px;
                                                                    cursor: pointer;">+</span><br><br>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="row cbtn" style="margin:2px;">
                                                            <div class="col-12">
                                                                <button class='btn btn-block custombtn' type="submit">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                <script>
                                                    $(document).on('click','.wadd_more',function(){
                                                    var index = $('.wlist').data('index_no');
                                                    $('.wlist').data('index_no', index + 1);
                                                    var html = $('.witemWrapper .witem_tr:last').clone().find('.form-control').each(function () {
                                                        this.name = this.name.replace(/\d+/, index+1);
                                                        this.id = this.id.replace(/\d+/, index+1);
                                                        this.value = '';
                                                    }).end();
                                                    $('.wmoreTable').append(html);
                                                    var rowCount = $('.wmoreTable tr').length;
                                                    $(this).closest('.witemWrapper').find('.witem_tr:last').find('.day_no').html(rowCount-1);
                                                    $(this).closest('.witemWrapper').find('.witem_tr:last').find('.dayval').val(rowCount-1);
                                                });
                                                $(document).on('click', '.wremove', function () {
                                                    var obj=$(this);
                                                    var count= $('.wsingle_list').length;
                                                    // alert(count);
                                                    if(count > 1) {
                                                        if(obj.closest('.wsingle_list').is($(this).closest('.witemWrapper').find('.wsingle_list:last'))){
                                                            obj.closest('.wsingle_list').remove();
                                                        }else{
                                                            alert('You can only remove the last one!');
                                                        }
                                                    }
                                                });
                                                 </script>
                                        </div>
                                    </div>
                            </div>
                          </div>
                    
                  </div>
                 </div>
              </div>
        </div>
    </section>
@endsection