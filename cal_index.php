<?php
require_once('bdd.php');


$sql = "SELECT * FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guest House Availability</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">NITRR Calendar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Availability Calendar</h1>

                <div id="calendar" class="col-centered">
                </div>
            </div>

        </div>
        <!-- /.row -->

		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">

			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Book Here</h4>
			  </div>
			  <div class="modal-body">
          <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <select name="title" class="form-control" id="title">
            <option value="">Select</option>
             <option value="Mr"> Mr.</option>
             <option value="Mrs"> Mrs.</option>
             <option value="Dr"> Dr.</option>
          </select>
        </div>
        </div>
				  <div class="form-group">
					<label for="VisName" class="col-sm-2 control-label">Visitor's Name</label>
					<div class="col-sm-10">
					  <input type="text" name="VisName" class="form-control" id="VisName" placeholder="Title">
					</div>
				  </div>
          <div class="form-group">
         <label for="PosAddress" class="col-sm-2 control-label">Postal Address</label>
         <div class="col-sm-10">
           <input type="text" name="PosAddress" class="form-control" id="PosAddress" placeholder="Postal Address">
         </div>
         </div>
         <div class="form-group">
       <label for="Category" class="col-sm-2 control-label">Category of Guest</label>
       <div class="col-sm-10">
         <select name="Category" class="form-control" id="Category">
           <option value="">Select</option>
            <option value="A"> A</option>
            <option value="B"> B</option>
            <option value="C"> C</option>
         </select>
       </div>
       </div>
       <div class="form-group">
      <label for="NumberRoom"class="col-sm-2 control-label">Number of Rooms</label>
      <div class="col-sm-10">
        <select name="NumberRoom" class="form-control" id="NumberRoom">
          <option value="">Select</option>
           <option value="1"> 1</option>
           <option value="2"> 2</option>
           <option value="3"> 3</option>
        </select>
      </div>
      </div>
			<div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">End date</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
          <div class="form-group">
         <label class="col-sm-6 control-label">Person Making the Booking</label>
         </div>
         <div class="form-group">
         <label for="FName"class="col-sm-2 control-label">Full Name</label>
         <div class="col-sm-10">
           <input type="text" name="FName" class="form-control" id="FName" placeholder="Full Name">
         </div>
         </div>
         <div class="form-group">
         <label for="Designation" class="col-sm-2 control-label">Designation</label>
         <div class="col-sm-10">
           <input type="text" name="Designation" class="form-control" id="Designation" placeholder="Designation">
         </div>
         </div>
         <div class="form-group">
         <label for="Department" class="col-sm-2 control-label">Department</label>
         <div class="col-sm-10">
           <input type="text" name="Department" class="form-control" id="Department" placeholder="Department">
         </div>
         </div>
         <div class="form-group">
         <label for="Number" class="col-sm-2 control-label">Mobile No</label>
         <div class="col-sm-10">
           <input type="text" name="Number" class="form-control" id="Number" placeholder="Mobile Number">
         </div>
         </div>

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>



		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">

				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
          <div class="form-group">
         <label for="color" class="col-sm-2 control-label">Room</label>
         <div class="col-sm-10">
           <select name="color" class="form-control" id="color">
             <option value="">Select</option>
              <option value="#FF0000">&#9724; 1</option>
              <option value="#FF0000">&#9724; 2</option>
              <option value="#FF0000">&#9724; 3</option>

           </select>
         </div>
         </div>
         <div class="form-group">
         <label for="color" class="col-sm-2 control-label">Book</label>
         <div class="col-sm-10">
           <select name="color" class="form-control" id="color">
             <option value="">Select</option>
              <option style="color:#FF0000;" value="#FF0000">&#9724; Yes</option>
             <option style="color:#008000;" value="#008000">&#9724; No</option>




           </select>
         </div>
         </div>
				    <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>

				  <input type="hidden" name="id" class="form-control" id="id">


			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>

	<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},

		defaultDate: '2019-1-1',

			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {

				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event):

				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['availability']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});

		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}

			id =  event.id;

			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;

			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.');
					}
				}
			});
		}

	});

</script>

</body>

</html>
