<html>
    <head>
        <title>CV FORMAT</title>
        <link rel="stylesheet" href="{{asset('frontEnd/css/cvstyle.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> 
	</head>
	
    <body>
        <div class="container">
            <div class="header">
                <p>{{$careerInfoByid->name}}</p>
                <p>{{$careerInfoByid->mobile}}</p>
                <p>{{$careerInfoByid->email}}</p>
            </div>
            <div class="name">
                <h3 class="title">{{$careerInfoByid->name}}</h3>
            </div>
            <div class="content">
                <div class="objective">
                    <div class="left">
                        <p>OBJECTIVE</p>
                    </div>
                    <div class="element">
							{{$careerInfoByid->objective}}
                    </div>
                </div>

                <hr class="line">

                <div class="objective">
                    <div class="left">
                        <p>PROFESSIONAL ACHIEVEMENTS</p>
                    </div>
                    <div class="element">
							@if(!empty($careerInfoByid->achievement))
							<?php  $jsonachievementdata = json_decode($careerInfoByid->achievement);?>
						    @foreach($jsonachievementdata as $achv)
							<span style="font-size:32px;font-weight:bold;">.</span> {!! $achv->achieve !!}<br>
						    @endforeach
					   @endif
                     </div>
                </div>

                <hr class="line">

                <div class="objective">
                    <div class="left">
                        <p>SKILLS</p>
                    </div>
                    <div class="element">
						@if(!empty($careerInfoByid->skill))
							<?php  $jsonskilldata = json_decode($careerInfoByid->skill);?>
						  @foreach($jsonskilldata as $sk)
						 <span style="font-size:32px;font-weight:bold;">.</span> {{$sk->competent}}<br>
						   @endforeach
					   @endif
                    </div>
                </div>

                <hr class="line">

                <div class="objective">
                    <div class="left">
                        <p>WORK HISTORY (Demo)</p>
                    </div>
                    <div class="element">                        
                        <table>
                            <thead>
                                <th>JOB TITLE</th>
                                <th>COMPANY NAME</th>
                                <th>RESPONSIBILITES</th>
                                <th>Dates From</th>
                                <th>To</th>
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
                        </table>
                    </div>
                </div>

                <hr class="line">

                <div class="objective">
                    <div class="left">
                        <p>EDUCATION</p>
                    </div>
                    <div class="element">
                        <table>
                            <thead>
                                <th>DEGREE</th>
                                <th>INSTITUTE</th>
                                <th>GRADE</th>
                                <th>LOCATION</th>
                                <th>DATE</th>
                            </thead>
                            <tbody>
									@if(!empty($careerInfoByid->academic))
									<?php $jsonaccdata = json_decode($careerInfoByid->academic);?>
								
								
								@foreach($jsonaccdata as $acc)
								<tr>
									<td>{{$acc->degree}}</td>
									<td>{{$acc->instname}}</td>
									<td>{{$acc->cgpa}}</td>
									<td>{{$acc->location}}</td>
									<td>{{$acc->pyear}}</td>
								</tr>
							  @endforeach
							  @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr class="line">

                <div class="objective">
						@if(!empty($careerInfoByid->reference))
						<?php  $jsonreferencedata = json_decode($careerInfoByid->reference);?>
					 
					 
					 @foreach($jsonreferencedata as $ref)
					 <tr>
					
					 <td>{{$ref->title}}</td>
					 <td>{{$ref->company}}</td>
					 <td>{{$ref->contactinfo}}</td>
					 </tr>
				   @endforeach
				   @endif
                    <div class="left">
                        <p>REFERENCE</p>
                    </div>
                    <div class="element">
                        <strong>{{$ref->title}}</strong><br>
                        {{$ref->company}} <br>
                        {{$ref->contactinfo}}                        
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>