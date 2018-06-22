
@extends('layouts.header')
@section('body')
		<!-- main content start-->
					<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Add Container</h2>
					<div class="panel panel-default">
  <div class="panel-body">Sender Information</div>
</div>
<!--container information-->
<div class="row">
	<div class="col-md-6">
      <div class="row">
      	<h5 class="title1">Container Information</h2>
        <hr>
<div class="col-md-6">
<div class="form-group">
	<label>Flight/Container No.*</label>
	<input type="text" class="form-control" placeholder="Flight/Container No.*" name="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>Agent name</label>
	<input type="text" class="form-control" placeholder="Agent name " name="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label>Payment</label>
	 <select name="payment" class="form-control" required="required" ">
	 	    	    <option value="1" disabled selected hidden> Payment * </option> 
                    <option value="1"> Paid </option> 
                    <option value="0"> Not Paid </option> 
                    </select> 
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>Passport</label>
	<input type="text" class="form-control" placeholder="Paassport" name="">
</div>
</div>

</div> 	
</div>
	<div class="col-md-6">
      <div class="row">
      		<h5 class="title1">trip Information</h2>
        <hr>
<div class="col-md-6">
<div class="form-group">
	<label>Origin Port</label>
	<input type="text" class="form-control" placeholder="Origin Port" name="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>Destination Port</label>
	<input type="text" class="form-control" placeholder="Destination Port" name="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label>Delivery Agent</label>
	<input type="text" class="form-control" placeholder="Delivery Agent" name=""> 
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>Telephone</label>
	<input type="number" class="form-control" placeholder="Telephone" name="">
</div>
</div>

</div> 	
</div>
</div>
<!--container information ends-->
<!--sender informaption-->
<div class="row">
	<div class="col-md-6">
      <div class="row">
      	<h5 class="title1">GPS Information</h2>
        <hr>
<div class="col-md-6">
<div class="form-group">
	<label>GPSStatus</label>
	 <select name="gps" class="form-control" required="required" ">
	 	    	    <option value="1" disabled selected hidden>GPS Status</option> 
                    <option value="1">Aloow</option> 
                    <option value="0">NotAloow</option> 
                    </select> 
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>GPS Vendor *</label>
	<input type="text" class="form-control" placeholder="GPS Vendor * " name="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	     <label>Vehical Number</label>
	 	<input type="text" class="form-control" placeholder="Vehical Number" name="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>GPS Number</label>
	<input type="text" class="form-control" placeholder="GPS Number" name="">
</div>
</div>

</div> 	
</div>
	<div class="col-md-6">
      <div class="row">
      		<h5 class="title1">Timing</h2>
        <hr>
<div class="col-md-6">
<div class="form-group">
		<label>Date</label>
	<input type="date" class="form-control" placeholder="dd/mm/yyy" name="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>Time</label>
	<input type="" class="form-control" placeholder="--:-- " name="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	<label>Expected Date</label>
	 	<input type="date" class="form-control" placeholder="dd/mm/yyy" name="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<label>Travel Mode</label>
     <select name="gps" class="form-control" required="required" ">
	 	    	    <option value="1" disabled selected hidden>Travel Mode</option> 
                    <option value="1">Normal</option> 
                    <option value="0">Not Normal</option> 
                    </select>
</div>
</div>

</div> 	
</div>
</div>
<!--sender information ends-->

	
<div class="row">
<div class="col-md-3">
<button type="submit"class="btn btn-primary btn-quirk btn-block"><i class="fa fa-save"></i> Add Shipment</button>
</div>
<div class="col-md-3">
<button type="reset"  class="btn btn-danger btn-quirk btn-block"><i class="fa fa-times"></i> Reset fields</button>
</div>	
</div>

</div>

        
           </div>

		</div>
	
</div>



	@endsection



                  