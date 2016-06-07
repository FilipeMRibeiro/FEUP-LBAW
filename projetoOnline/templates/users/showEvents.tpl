<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/events_page.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>

    <title>Pawz - Events</title>
  </head>
  {include file='common/headerAndNav.tpl'}
    <div class="container-fluid main">
		<div class="row">
			<div class="created">
				<div class="col-lg-12 panel panel-default">
					<h2 class="panel-heading"> Events I Created</h2> <a href="../pages/eventCreationPage.php"> <input type="button" value="Create Event" /></a> 
					{foreach $createdEvents as $event}
					<div class="col-lg-9 event-row">        
						<h3><a href="../pages/showCreatedEventPage.php?id={$event.eventid}"> {$event.name} </a></h3>
						<div class="col-lg-9 event-information">
							<p> {$event.description} </p>
							<p> Start Date: {$event.date} </p>
							<p> Availability: {$event.maxParticipants} </p>
							<p> Local: {$event.local} </p>
						</div>
					</div>
					{/foreach}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="joined">
				<div class="col-lg-12 panel panel-default">
					<h2 class="panel-heading"> Events I Joined </h2>
					{foreach $joinedEvents as $event}
					<div class="col-lg-9 event-row">        
						<h3><a href="../pages/showJoinedEventPage.php?id={$event.eventid}"> {$event.name} </a></h3>
						<div class="col-lg-9 event-information">
							<p> {$event.description} </p>
							<p> Start Date: {$event.date} </p>
							<p> Local: {$event.local} </p>
							<p> Availability: {$event.maxParticipants} </p>
							<p> Creator: <a href="../pages/showProfilePage.php?username={$event.username}"> {$event.username} </a></p>
						</div>
					</div>
					{/foreach}
				</div>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>