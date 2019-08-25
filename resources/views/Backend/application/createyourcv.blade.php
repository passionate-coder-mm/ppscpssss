@extends('Backend.backendmaster')
@section('createurcv-active','active')
@section('title', 'Peoplescape | Application Lists')
@section('content')
@php
use App\User;
if(Auth::check()){
       $user = Auth::user();
       $user_info =User::findorfail($user->id) ;
      
     }
     else{
      return redirect()->route('login');
     }
@endphp
<style>
        .labelclass{
            font-weight: normal!important;
        }
        .custombtn{
        border: 1px solid #0d72ba;
        background: #0d72ba;
        color: #e4d8d8;
        font-weight: 700;
        font-size: 17px;
    }
    .cbtn button:hover{
      background: transparent!important;
      cursor: pointer;
    }
</style>
    <section class="content">
      
            <div class="box box-info">
                 <div class="box-header with-border">
                   <h1 class="box-title">Provide Your Information</h1>
                      <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                   </div>
                 </div>
                
                 <div class="box-body">
                    <div class="row" style="padding:12px;"> 
                        <div class="welcome-card">
                          
                        <form action="{{route('application.yourcvstore')}}" method="post" id="yourcvcreateform" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="box-body">
                                    <div class="row">
                                      <div class="col-12">
                                        <div class="form-group">
                                          <label for="sel1" style="font-size: 22px;">Personal Information</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="title" class="control-label"><span style="color:red">*</span> Name</label>
                                            <div>
                                              <input type="text" class="form-control" id="name" name="name" value="{{$user_info->name}}" readonly>
                                            <input type="hidden" name="userid" value="{{$user_info->id}}">
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="birthdate" class="control-label"><span style="color:red">*</span> Birthdate</label>
                                            <div>
                                              <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                      </div>
                                    

                                    
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
                                          <label for="title" class="control-label"><span style="color:red">*</span> Phone NO</label>
                                            <div>
                                              <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user_info->mobile}}" readonly>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="title" class="control-label labelclass"><span style="color:red">*</span> Email </label>
                                            <div>
                                              <input type="email" class="form-control" id="email" name="email" value="{{$user_info->email}}" readonly>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    
                                    <div class="row" style="margin:2px;">
                                            <div class="col-12">
                                                <div class="form-group">
                                                <label for="sel1" style="font-size: 22px;"> Educational Qualification</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                        <div class="col-12">
                                                <div class="form-group">
                                                        <div class="alist col-sm-12 " data-index_no="1000">
                                                        <div class="aitemWrapper">
                                                            <table class="table table-bordered amoreTable">
                                                              <tr>
                                                                <th width="5%" class="labelclass">S.N</th>
                                                                <th width="20%" class="labelclass">Degree</th>
                                                                <th width="20%" class="labelclass">Institution Name</th>
                                                                <th width="15%" class="labelclass">Score</th>
                                                                <th width="15%" class="labelclass">Location</th>
                                                                <th width="15%" class="labelclass">Passing Year</th>
                                                                <th width="10%" class="labelclass">Remove</th>
                                                              </tr>
                                                                
                                                                    <tr class="aitem_tr asingle_list">
                                                                      <td class="day_no labelclass" >1</td>
                                                                      <td><input type="text" class="form-control"  name="academic[0][degree]" placeholder="Enter Degree  Name"><br></td>
                                                                      <td><input type="text" class="form-control"  name="academic[0][instname]" placeholder="Enter Institute Name"><br></td>
                                                                      <td><input type="text" class="form-control"  name="academic[0][cgpa]" placeholder="Enter Score "><br></td>
                                                                      <td><input type="text" class="form-control"  name="academic[0][location]" placeholder="Enter Location "><br></td>
                                                                      <td><input type="text" class="form-control"  name="academic[0][pyear]" placeholder="Enter Location "><br></td>
          
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
                                        </div>
                                    </div>
                                <div class="row" style="margin:2px;">
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label for="sel1" style="font-size: 22px;"> Experience</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="row" >
                                  <div class="col-12"> 
                                    <div class="form-group">
                                        <div class="list col-sm-12 " data-index_no="1000">
                                            <div class="itemWrapper">
                                                <table class="table table-bordered moreTable">
                                                    <tr>
                                                        <th width="5%" class="labelclass">S.N</th>
                                                        <th width="15%" class="labelclass">Job Title</th>
                                                        <th width="15%" class="labelclass">Company Name</th>
                                                        <th width="20%" class="labelclass">Responsibilities</th>
                                                        <th width="15%" class="labelclass">Joined On</th>
                                                        <th width="15%" class="labelclass">Left ON</th>
                                                        <th width="10%" class="labelclass">Remove</th>
                                                    </tr>
                                                    
                                                        <tr class="item_tr single_list">
                                                            <td class="day_no labelclass" >1</td>
                                                            <td><input type="text" class="form-control" id="pro_role" name="experience[0][title]" placeholder="Enter Job Title"><br></td>
                                                            <td><input type="text" class="form-control" id="pro_role" name="experience[0][company]" placeholder="Enter Company Name"><br></td>
                                                            <td><input type="text" class="form-control" id="pro_role" name="experience[0][responsibilites]" placeholder="Enter Responsibilites"><br></td>
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
                            </div>
                        </div>
                        <div class="row" style="margin:2px;">
                                <div class="col-12">
                                    <div class="form-group">
                                    <label for="sel1" style="font-size: 22px;"> Personal Project</label>
                                    </div>
                                </div>
                        </div>
                        <div class="row" >
                                <div class="col-12">
                                        <div class="form-group">
                                            <div class="wlist col-sm-12 " data-index_no="1000">
                                                <div class="witemWrapper">
                                                    <table class="table table-bordered wmoreTable">
                                                        <tr>
                                                            <th width="5%" class="labelclass">S.N</th>
                                                            <th width="30%" class="labelclass">Url</th>
                                                            <th width="50%" class="labelclass">Project Details</th>
                                                            <th width="10%" class="labelclass">Remove</th>
                                                        </tr>
                                                        
                                                            <tr class="witem_tr wsingle_list">
                                                                <td class="day_no labelclass">1</td>
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
                                </div>
                            </div>
                            <div class="row" style="margin:2px;">
                              <div class="col-12">
                                  <div class="form-group">
                                  <label for="sel1" style="font-size: 22px;"> Personal Achievements</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row" >
                              <div class="col-12">
                                      <div class="form-group">
                                          <div class="aclist col-sm-12 " data-index_no="1000">
                                              <div class="acitemWrapper">
                                                  <table class="table table-bordered acmoreTable">
                                                      <tr>
                                                          <th width="5%" class="labelclass">S.N</th>
                                                          <th width="700%" class="labelclass">Achievements</th>
                                                         <th width="10%" class="labelclass">Remove</th>
                                                      </tr>
                                                      
                                                          <tr class="acitem_tr acsingle_list">
                                                              <td class="day_no labelclass">1</td>
                                                              <td><textarea type="text" class="form-control" id="achievement" rows="3" name="achievement[0][achieve]" placeholder="Enter Your personal achievement"></textarea><br></td>
                                                             <td><span class="acremove" style="background: #ed3610;
                                                              padding: 0px 7px;;
                                                              color: #fff;
                                                              border-radius: 8%;
                                                              text-decoration: none;
                                                              margin-bottom: 10px;
                                                              cursor: pointer;">-</span></td>
                                                          </tr>
                                                     
                                                  </table>
                                                  <span  class="acadd_more" style="background: #0d72ba;
                                                  padding: 0px 7px;;
                                                  color: #fff;
                                                  border-radius: 8%;
                                                  text-decoration: none;
                                                  margin-bottom: 10px;
                                                  cursor: pointer;">+</span><br><br>
                                              </div>
                                          </div>
                                      </div> 
                              </div>
                          </div>
                          <div class="row" style="margin:2px;">
                              <div class="col-12">
                                  <div class="form-group">
                                  <label for="sel1" style="font-size: 22px;"> Skills</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row" >
                              <div class="col-12">
                                      <div class="form-group">
                                          <div class="sklist col-sm-12 " data-index_no="1000">
                                              <div class="skitemWrapper">
                                                  <table class="table table-bordered skmoreTable">
                                                      <tr>
                                                          <th width="5%" class="labelclass">S.N</th>
                                                          <th width="700%" class="labelclass">Professional Or Technical Skills</th>
                                                         <th width="10%" class="labelclass">Remove</th>
                                                      </tr>
                                                      
                                                          <tr class="skitem_tr sksingle_list">
                                                              <td class="day_no labelclass">1</td>
                                                              <td><input type="text" class="form-control" id="skill"  name="skill[0][competent]" placeholder="Eg:HTML,CSS,JS"><br></td>
                                                             <td><span class="skremove" style="background: #ed3610;
                                                              padding: 0px 7px;;
                                                              color: #fff;
                                                              border-radius: 8%;
                                                              text-decoration: none;
                                                              margin-bottom: 10px;
                                                              cursor: pointer;">-</span></td>
                                                          </tr>
                                                     
                                                  </table>
                                                  <span  class="skadd_more" style="background: #0d72ba;
                                                  padding: 0px 7px;;
                                                  color: #fff;
                                                  border-radius: 8%;
                                                  text-decoration: none;
                                                  margin-bottom: 10px;
                                                  cursor: pointer;">+</span><br><br>
                                              </div>
                                          </div>
                                      </div> 
                              </div>
                          </div>
                          <div class="row" style="margin:2px;">
                              <div class="col-12">
                                  <div class="form-group">
                                  <label for="sel1" style="font-size: 22px;">Objective</label>
                                  </div>
                              </div>
                         </div>
                         <div class="row" style="margin:2px;">
                          <div class="col-12">
                              <div class="form-group">
                              <textarea name="objective" class="form-control" rows="4" placeholder="Write Objective...."></textarea>
                              </div>
                          </div>
                        </div>
                            <div class="row" style="margin:2px;">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="sel1" style="font-size: 22px;"> Personal Interest</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="margin:2px;">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <textarea name="interest" class="form-control" rows="4" placeholder="Write About Yourself...."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin:2px;">
                                  <div class="col-12">
                                      <div class="form-group">
                                      <label for="sel1" style="font-size: 22px;"> Reference Name</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="row" >
                              <div class="col-12">
                                     <div class="form-group">
                                              <div class="relist col-sm-12 " data-index_no="1000">
                                              <div class="reitemWrapper">
                                                  <table class="table table-bordered remoreTable">
                                                      <tr>
                                                          <th width="5%" class="labelclass">S.N</th>
                                                          <th width="20%" class="labelclass">Title</th>
                                                          <th width="20%" class="labelclass">Company</th>
                                                          <th width="40%" class="labelclass">Contactinfo</th>
                                                          <th width="15%" class="labelclass">Remove</th>
                                                      </tr>
                                                      
                                                          <tr class="reitem_tr resingle_list">
                                                              <td class="day_no labelclass" >1</td>
                                                              <td><input type="text" class="form-control"  name="reference[0][title]" placeholder="Enter Title"><br></td>
                                                              <td><input type="text" class="form-control"  name="reference[0][company]" placeholder="Enter Company Name"><br></td>
                                                              <td><input type="text" class="form-control"  name="reference[0][contactinfo]" placeholder="Enter Contact Info "><br></td>
                                                              <td><span class="reremove" style="background: #ed3610;
                                                              padding: 0px 7px;;
                                                              color: #fff;
                                                              border-radius: 8%;
                                                              text-decoration: none;
                                                              margin-bottom: 10px;
                                                              cursor: pointer;">-</span></td>
                                                          </tr>
                                                      
                                                  </table>
                                                  <span  class="readd_more" style="background: #0d72ba;
                                                  padding: 0px 7px;;
                                                  color: #fff;
                                                  border-radius: 8%;
                                                  text-decoration: none;
                                                  margin-bottom: 10px;
                                                  cursor: pointer;">+</span><br><br>
                                              </div>
                                          </div>
                                      </div> 
                              </div>
                          </div>
                                  <div class="row" style="margin:2px;">
                                      <div class="col-12">
                                          <div class="form-group">
                                          <label for="sel1" class="labelclass">Upload Your Photo</label>
                                          <input type="file" class="form-control" name='image'>
                                          </div>
                                      </div>
                              </div> <br>
                                <div class="row" style="margin:2px;">
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label for="sel1" class="labelclass">Upload Your Cv</label>
                                            <input type="file" class="form-control" name='cv'>
                                            </div>
                                        </div>
                                </div> <br>
                                <div class="row cbtn" style="margin:2px;">
                                    <div class="col-12">
                                        <button class='btn btn-block custombtn' type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>
                </div>
                <script>
                  
                   $(document).ready(function () {
                    $.validator.addMethod('filesize', function (value, element, arg) {
                        if(element.files[0].size<=arg){
                            return true;
                        }else{
                            return false;
                        }
                    });
                      $('#yourcvcreateform').validate({ 
                      rules: {
                              
                              birthdate: 
                              {
                              required: true,
                              
                              },
                              haddress: 
                              {
                              required: true,
                              
                              },
                              paddress: 
                              {
                              required: true,
                              
                              },
                              objective: 
                              {
                              required: true,
                              
                              }, 
                              interest:
                              {
                              required: true,
                              
                              },
                              image: 
                              {
                              required: true,
                              extension: "jpg|png|jpeg"
                              }, 
                              cv: 
                              {
                              required: true,
                              extension: "pdf|doc|docx",
                              filesize: 200000,
                              }, 
                      },
                      messages: 
                        {
                          
                          image: 
                          {
                              extension:("Only jpg,png,jpeg image is accepted"),
                          },
                          cv: 
                          {
                              extension:("Only Pdf,Doc,Docx is accepted"),
                              filesize:("file size must be less than 200 KB."),
                          },
                      },
                      
                      highlight: function(element) {
                          $(element).parent().addClass('has-error');
                      },
                      unhighlight: function(element) {
                          $(element).parent().removeClass('has-error');
                      },
                      });
                  });
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
              $(document).on('click','.acadd_more',function(){
        var index = $('.aclist').data('index_no');
        $('.aclist').data('index_no', index + 1);
        var html = $('.acitemWrapper .acitem_tr:last').clone().find('.form-control').each(function () {
            this.name = this.name.replace(/\d+/, index+1);
            this.id = this.id.replace(/\d+/, index+1);
            this.value = '';
        }).end();
        $('.acmoreTable').append(html);
        var rowCount = $('.acmoreTable tr').length;
        $(this).closest('.acitemWrapper').find('.acitem_tr:last').find('.day_no').html(rowCount-1);
        $(this).closest('.acitemWrapper').find('.acitem_tr:last').find('.dayval').val(rowCount-1);
    });
    $(document).on('click', '.acremove', function () {
        var obj=$(this);
        var count= $('.acsingle_list').length;
        // alert(count);
        if(count > 1) {
            if(obj.closest('.acsingle_list').is($(this).closest('.acitemWrapper').find('.acsingle_list:last'))){
                obj.closest('.acsingle_list').remove();
            }else{
                alert('You can only remove the last one!');
            }
        }
    });
    $(document).on('click','.skadd_more',function(){
        var index = $('.sklist').data('index_no');
        $('.sklist').data('index_no', index + 1);
        var html = $('.skitemWrapper .skitem_tr:last').clone().find('.form-control').each(function () {
            this.name = this.name.replace(/\d+/, index+1);
            this.id = this.id.replace(/\d+/, index+1);
            this.value = '';
        }).end();
        $('.skmoreTable').append(html);
        var rowCount = $('.skmoreTable tr').length;
        $(this).closest('.skitemWrapper').find('.skitem_tr:last').find('.day_no').html(rowCount-1);
        $(this).closest('.skitemWrapper').find('.skitem_tr:last').find('.dayval').val(rowCount-1);
    });
    $(document).on('click', '.skremove', function () {
        var obj=$(this);
        var count= $('.sksingle_list').length;
        // alert(count);
        if(count > 1) {
            if(obj.closest('.sksingle_list').is($(this).closest('.skitemWrapper').find('.sksingle_list:last'))){
                obj.closest('.sksingle_list').remove();
            }else{
                alert('You can only remove the last one!');
            }
        }
     });
     $(document).on('click','.readd_more',function(){
        var index = $('.relist').data('index_no');
        $('.relist').data('index_no', index + 1);
        var html = $('.reitemWrapper .reitem_tr:last').clone().find('.form-control').each(function () {
            this.name = this.name.replace(/\d+/, index+1);
            this.id = this.id.replace(/\d+/, index+1);
            this.value = '';
        }).end();
        $('.remoreTable').append(html);
        var rowCount = $('.remoreTable tr').length;
        $(this).closest('.reitemWrapper').find('.reitem_tr:last').find('.day_no').html(rowCount-1);
        $(this).closest('.reitemWrapper').find('.reitem_tr:last').find('.dayval').val(rowCount-1);
    });
    $(document).on('click', '.reremove', function () {
        var obj=$(this);
        var count= $('.resingle_list').length;
        // alert(count);
        if(count > 1) {
            if(obj.closest('.resingle_list').is($(this).closest('.reitemWrapper').find('.resingle_list:last'))){
                obj.closest('.resingle_list').remove();
            }else{
                alert('You can only remove the last one!');
            }
        }
    });
                </script>
             </section>
@endsection