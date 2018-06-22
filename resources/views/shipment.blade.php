
@extends('layouts.header')
@section('body')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Add Shipment</h2>
					<div class="panel panel-default">
  <div class="panel-body">Sender Information</div>
</div>
<div class="row">
							<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Full Name *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Contact *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Email *" name="">
</div>
</div>
</div>
<div class="row">
	<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Address *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="City *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Pin code *" name="">
</div>
</div>
	</div>
					<div class="panel panel-default">
  <div class="panel-body">Receiver Information</div>
</div>
<div class="row">
							<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Full Name *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Contact *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Email *" name="">
</div>
</div>
</div>
<div class="row">
	<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Address *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="City *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Pin code *" name="">
</div>
</div>
	</div>


					<div class="panel panel-default">
  <div class="panel-body">Travel Details</div>
</div>
<div class="row">
							<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Assign Staff *" name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Bill No. * " name="">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Sender City * " name="">
</div>
</div>
</div>
<div class="row">
							<div class="col-md-4">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Receiver City *" name="">
</div>
</div>

</div>
			

			<h2 class="title1">Product Information</h2>
			<hr>

			<table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
      <td>Product Name</td>
          <td>Weight</td>
      <td>Quantity</td>
      <td>Each Cost</td>
      <td>Total Cost</td>
      <td>Remove</td>
        </tr>
    </thead>
    <tbody id="p_scents">
   
    <tr>
    	<td><input type="text" class="form-control" name="pname[]" id="pname"></td>
    	<td><input type="number" class="form-control weight" name="pweight[]" id="pweight"></td>
    	<td><input type="number" id="pquantity" name="pquantity[]" class="form-control quantity"></td>
    	<td><input type="number" class="form-control price" name="pprice[]" id="pprice"></td>
    	<td><input type="text" class="form-control total" readonly="" name="ptotal[]" id="ptotal"></td>
    	<td><a href="#" class="btn btn-danger id="remScnt"><i class="fa fa-minus"></i> Remove</a></td></tr>
   </tbody>

</table>
 <button class="btn btn-primary" name="add" id="add"><i class="fa fa-plus"></i> Add products</button>
<hr>
<div class="row">
 	<div class="col-md-4">
      <div class="row">
      	<h2 class="title1">Shipment Information</h2>
        <hr>
							<div class="col-md-6">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Total Weight( KG) *" name="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Type of shipment " name="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	 <select name="payment" class="form-control" required="required" ">
	 	    	    <option value="1" disabled selected hidden> Payment * </option> 
                    <option value="1"> Paid </option> 
                    <option value="0"> Not Paid </option> 
                    </select> 
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<input type="text" class="form-control" placeholder="Total Freight *" name="">
</div>
</div>

</div> 	
</div>
<div class="col-md-8">
      <div class="row">
      	<h2 class="title1"> Timings</h2>
        <hr>
							<div class="col-md-4">
<div class="form-group">
	<label for="firstName" class="control-label">Booking Date <span class="important">*</span></label>
	 <input name="bookingdate" class="form-control datepicker hasDatepicker" id="bookingdate" placeholder="Booking Date *" required="required" type="date">  
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<label for="firstName" class="control-label">Delivery Date <span class="important">*</span></label>
	 <input name="dileverydate" class="form-control datepicker hasDatepicker" id="dileverydate" placeholder="Delivery Date*" required="required" type="date">  
</div>
</div>
<div class="col-md-4">
<div class="form-group">
	<label for="firstName" class="control-label">Delivery Time <span class="important">*</span></label>
	 <input name="dileverytime" class="form-control" id="dileverytime" placeholder="Delivery Time*" required="required" type="time">  
</div>
</div>

</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	<select name="bmode" class="form-control" required="required">
                    <option  disabled selected hidden> Booking Mode </option>  
                     <option value="normal"> Normal </option>   
                    <option value="express"> Express </option>  
                    </select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
	<select name="bmode" class="form-control" required="required">
                    <option  disabled selected hidden> Insurance Status </option>  
                     <option value="yes"> Yes </option>   
                    <option value="no"> No </option>  
                    </select>
</div>
</div>
 
</div>
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
<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td><input type='text' class='form-control' name='pname[]' id='pname'></td>"
   html_code += "<td><input type='number' class='form-control weight' name='pweight[]' id='pweight'></td>"
   html_code += "<td><input type='number' id='pquantity' name='pquantity[]' class='form-control quantity'></td>"
   html_code += "<td><input type='number' class='form-control price' name='pprice[]'' id='pprice'></td>"
   html_code += "<td><input type='text' class='form-control total' readonly="" name='ptotal[]' id='ptotal'></td>"
   html_code += "<td><a href='' class='btn btn-danger' id='remScnt'><i class='fa fa-minus'></i> Remove</a></td>"
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 

 


</script>

	@endsection



                  