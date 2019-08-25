<!DOCTYPE html>
<html>
<head>
	<title>Applicant Information</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<section class="content">
		<div class="row">
			<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-body" >
								<table class="table table-bordered table-striped">
										<tr>
											<td width="40%"><b>Name</b></td>
											<td width="60%">{{$careerInfoByid->name}}</td>
										</tr>
										<tr>
											<td width="40%"><b>Email</b></td>
											<td width="60%">{{$careerInfoByid->email}}</td>
										</tr>
										<tr>
											<td width="40%"><b>Mobile</b></td>
											<td width="60%">{{$careerInfoByid->mobile}}</td>
										</tr>
										<tr>
											<td width="40%"><b>Home Address</b></td>
											<td width="60%">{{$careerInfoByid->haddress}}</td>
										</tr>
										<tr>
											<td width="40%"><b>Permanent Address</b></td>
											<td width="60%">{{$careerInfoByid->paddress}}</td>
										</tr>
										
								</table><br>
								<div class="row" style="margin:2px;" >
										<div class="col-12">
											<div class="form-group">
											<label for="sel1" style="color:royalblue"><b>Accademic Information</b></label>
											</div>
										</div>
								 </div>
								 <table class="table table-bordered table-striped">
									<thead>
									<tr>
										<th width="25%">University</th>
										<th width="25%">Degree</th>
										<th width="25%">Score</th> 
									</tr>
									</thead>
									<tbody>
										@if(!empty($careerInfoByid->academic))
										 <?php $jsonaccdata = json_decode($careerInfoByid->academic);?>
										@foreach($jsonaccdata as $acc)
										<tr>
										<td>{{$acc->instname}}</td>
										<td>{{$acc->degree}}</td>
										<td>{{$acc->cgpa}}</td>
										</tr>
										
									  @endforeach
									  @endif
									</tbody>
								</table><br>
								<div class="row" style="margin:2px;">
										<div class="col-12">
											<div class="form-group">
											<label for="sel1"><b>Work Experience In Details</b></label>
											</div>
										</div>
								   </div>
								   <table class="table table-bordered table-striped">
									  <thead>
									  <tr>
										  <th width="20%">Job Title</th>
										  <th width="20%">Company Name</th>
										  <th width="20%">Responsibilities</th> 
										  <th width="20%">Joined In</th> 
										  <th width="20%">Left In</th> 
									  </tr>
									  </thead>
									  <tbody>
										 
										  @if(!empty($careerInfoByid->experience))
											  <?php $jsonexpdata = json_decode($careerInfoByid->experience);?>
											@foreach($jsonexpdata as $exp)
											<tr>
											<td>{{$exp->title}}</td>
											<td>{{$exp->company}}</td>
											<td>{{$exp->responsibilites}}</td>
											<td>{{$exp->joinedin}}</td>
											<td>{{$exp->leftin}}</td>
											</tr>
											@endforeach
										@endif
									  </tbody>
								  </table><br>
								  <div class="row" style="margin:2px;">
									<div class="col-12">
										<div class="form-group">
										<label for="sel1"><b>Project Info</b></label>
										</div>
									</div>
									</div>
									  <table class="table table-bordered table-striped">
										  <thead>
										  <tr>
											  <th width="40%">URL</th>
											  <th width="60%">Details</th>
										  </tr>
										  </thead>
										  <tbody>
											  
											  @if(!empty($careerInfoByid->project))
												  <?php $jsonprojectdata = json_decode($careerInfoByid->project);?>
											  
											  @foreach($jsonprojectdata as $pro)
											  <tr>
											  <td>{{$pro->url}}</td>
											  <td>{{$pro->comment}}</td>
											  </tr>
											@endforeach
											@endif
										  </tbody>
										 </table><br>
										 <div class="row" style="margin:2px;">
											<div class="col-12">
												<div class="form-group">
												<label for="sel1"><b>Coverletter</b></label>
												<p>{{$careerInfoByid->interest}}</p>
												</div>
											</div>
									 </div>
						</div>
				</div>
			</div>
		</div>
</section>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>