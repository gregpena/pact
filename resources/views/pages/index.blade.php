@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
	<h1>{{$title}}</h1>
	<p>This is the laravel application from the "Laravel from scratch youtube series"</p>
	<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
<div class="container">
	<h4>Task List</h4>
	<div class="row jumbotron">
		<div class="col-sm">
			<table class='table'><thead><tr><th>Added</th><th>Task</th><th>Desc</th><th>Due</th><th>Status</th></tr></thead>
			</tbody>
			<tr><td>11/16/2018</td><td>Two Factor Auth</td><td>Create two factor authorization registration</td><td>11/30/2018</td><td></td></tr>
			<tr><td>11/16/2018</td><td>This Task list on PACT</td><td>Upload this task list to the web</td><td>11/30/2018</td><td>Complete 11/16/2018</td></tr>
			<tr><td></td><td></td><td></td><td></td><td></td></tr>
		</tbody></table>
</div>

</div>
</div>
<div class="container">
	<h4>Requirements</h4>
	<div class="row jumbotron">
		<div>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">PACT 2019 Development Cycle</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">Ultimately full feature project management system, allowing GPS and digital signature assigned to task.</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">&#xa0;</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">&#xa0;</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">Create a pathway to a finished app that is Cross Platform coded for PC, IOS and Android.</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">PACT will developed in stages</span><span style="font-family:Calibri"> and is self-</span><span style="font-family:Calibri">contained</span><span style="font-family:Calibri"> as defined</span><span style="font-family:Calibri"> and HIPAA compliant</span><span style="font-family:Calibri">:</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">&#xa0;</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">GLOBAL FUNCTONS</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">HIPAA</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">DATA MODIFICATION TRACKER</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="width:36pt; display:inline-block">&#xa0;</span><span style="font-family:Calibri">Alert on data changed</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">USAGE TRACKER</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="width:36pt; display:inline-block">&#xa0;</span><span style="font-family:Calibri">Alert on access system</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">PHONE/FOB ACCESS</span></p>
			<p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:11pt"><span style="font-family:Calibri">&#xa0;</span></p>
			<ol type="1" style="margin:0pt; padding-left:0pt">
				<li style="margin-left:31.35pt; line-height:108%; padding-left:4.65pt; font-family:Calibri; font-size:11pt"><span>Contact</span>
					<ol type="a" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
						<li style="margin-left:31.05pt; padding-left:4.95pt"><span>The contact application will be an exercise in developing a very broad view of an entity.</span></li>
						<li style="margin-left:31.56pt; padding-left:4.44pt"><span>An entity is defined by this application as being locatable through any or all of the following:</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Phone</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Email</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Physical Address</span></li>
							</ol>
						</li>
						<li style="margin-left:30.43pt; padding-left:5.57pt"><span>Entities can also be children of other entities.</span></li>
						<li style="margin-left:31.56pt; padding-left:4.44pt"><span>Entities have both Personal and Professional Traits.</span></li>
						<li style="margin-left:31.25pt; padding-left:4.75pt"><span>Traits are meta tags that </span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Define the trait</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Data associated</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Traits are custom to the user</span></li>
							</ol>
						</li>
						<li style="margin-left:29.13pt; padding-left:6.87pt"><span> </span><span>Key function – find available contact</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Time availability – tied to Calendar</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Professional or Personal Trait filter</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Location Filter</span></li>
							</ol>
						</li>
						<li style="margin-left:30.95pt; padding-left:5.05pt"><span>Contact notes</span><span> </span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Timestamped</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>GPS</span></li>
							</ol>
						</li>
						<li style="margin-left:31.56pt; padding-left:4.44pt"><span>Document Storage</span></li>
						<li style="margin-left:28.3pt; padding-left:7.7pt"><span>Reporting Module</span></li>
					</ol>
				</li>
				<li style="margin-left:31.35pt; line-height:108%; padding-left:4.65pt; font-family:Calibri; font-size:11pt"><span>Communications Module</span>
					<ol type="a" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
						<li style="margin-left:31.05pt; padding-left:4.95pt"><span>Reporting Module</span></li>
					</ol>
				</li>
				<li style="margin-left:31.35pt; line-height:108%; padding-left:4.65pt; font-family:Calibri; font-size:11pt"><span>Planner/Scheduler/Calendar</span>
					<ol type="a" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
						<li style="margin-left:31.05pt; padding-left:4.95pt"><span>The calendar app simply stores events</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Time</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Duration</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Location or contact</span></li>
							</ol>
						</li>
						<li style="margin-left:31.56pt; padding-left:4.44pt"><span>Display Calendars</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Month/Week/Day</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Timeline View</span></li>
							</ol>
						</li>
						<li style="margin-left:30.43pt; padding-left:5.57pt"><span>Key function find available contact (see contact above)</span></li>
						<li style="margin-left:31.56pt; padding-left:4.44pt"><span>Key function </span><span>notification</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Reminder</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Event driven</span></li>
							</ol>
						</li>
						<li style="margin-left:31.25pt; padding-left:4.75pt"><span>Document Storage</span></li>
						<li style="margin-left:29.13pt; padding-left:6.87pt"><span>Reporting Module</span></li>
					</ol>
				</li>
				<li style="margin-left:31.35pt; line-height:108%; padding-left:4.65pt; font-family:Calibri; font-size:11pt"><span>Assessment/</span><span>Project/Goal/Task builder</span>
					<ol type="a" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
						<li style="margin-left:31.05pt; padding-left:4.95pt"><span>Document Storage</span></li>
						<li style="margin-left:31.56pt; padding-left:4.44pt"><span>Reporting Module</span></li>
						<li style="margin-left:30.43pt; padding-left:5.57pt"><span>Assessment</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Parent of a Project</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Defines the Project</span><span> Scope</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Define Document required</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Define project</span></li>
							</ol>
						</li>
						<li style="margin-left:31.56pt; padding-left:4.44pt"><span>Projects:</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Project</span><span> encapsulates the associated goals</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Projects can have a deadline</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Projects can require GPS Signatures</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Projects can have Images</span></li>
							</ol>
						</li>
						<li style="margin-left:31.25pt; padding-left:4.75pt"><span>Goals:</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Goals are the broad description of what needs to be done</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Goals can require </span><span>GPS</span><span> signatures</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Goals can have deadlines</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Goals can images uploaded</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Goals can be between contacts</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Goals can have dependencies with other goals</span><span> and create new calendar events</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Goals have a Parent Project</span></li>
							</ol>
						</li>
						<li style="margin-left:29.13pt; padding-left:6.87pt"><span>Tasks:</span>
							<ol type="i" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
								<li style="margin-left:32pt; padding-left:4pt"><span>Tasks are those items required by the goal</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Tasks have a Parent Goal</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Tasks can have  a parent trait</span>
									<ol type="1" style="margin-right:0pt; margin-left:0pt; padding-left:0pt">
										<li style="margin-left:31.35pt; padding-left:4.65pt"><span>Broad description of the task</span></li>
										<li style="margin-left:31.35pt; padding-left:4.65pt"><span>Traits are tied to professional or personal contact traits</span></li>
									</ol>
								</li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Tasks can have deadlines</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Tasks can require </span><span>GPS</span><span> signatures</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Tasks can have images uploaded</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Start and End time</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Cost associated</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>QC element</span></li>
								<li style="margin-left:32pt; padding-left:4pt"><span>Communication trail</span></li>
								<li style="margin-left:32pt; margin-bottom:8pt; padding-left:4pt"><span>Spawn event upon completion</span></li>
							</ol>
						</li>
					</ol>
				</li>
			</ol>
		</div>
	</div>
</div>
@endsection