
@extends('layouts.header')
@section('body')
		<!-- main content start-->

 


	<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Add Shipment</h2>
					<div class="panel panel-default">
  <div class="panel-body">Filter Shipment</div>
</div>
<!--container information-->
	<div class="row">
		
		    <div class="col-md-2">
		    	<div class="form-group">
                  <select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                  </select>
                </div>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>
		    <div class="col-md-2">
		    	<select class="form-control" id="sel1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                </select>
		    </div>  	
		</div>


<div class="container">         
  <table class="table table-bordered" width="100%">
    <thead>
      <tr>
        <th width="11%">Barcode</th>
        <th  width="11%">Airwaybill</th>
        <th  width="11%">Client</th>
        <th  width="11%">From</th>
        <th  width="11%">To</th>
        <th  width="11%">Book on</th>
        <th  width="11%">Status</th>
        <th  width="11%">Action</th>
        <th  width="11%">
        <input type="checkbox" onClick="selectall(this)"/>
       </th>
       </tr>
       </thead>
       <tbody>
       <tr>
        <td>John</td>
        <td>Doe</td>
        <td>duo</td>
        <td>duo</td>
        <td>duo</td>
        <td>duo</td>
        <td>duo</td>
        <td><a><span class="glyphicon glyphicon-print"></span></a><a><span class="glyphicon glyphicon-pencil"></span></a><a><span class="glyphicon glyphicon-print"></span></a></td>
        <td><input type="checkbox" name="foo" value="make"></td>
        </tr>
    </tbody>
  </table>
</div>
<script type="text/javascript">
	function selectall(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

</script>
<!--sender information ends-->

	
<div class="row pull-right">
<div class="col-md-2 ">
<button type="submit" class="btn btn-primary btn-quirk btn-block">assign drive</button>
</div>
<div class="col-md-2">
<button type="reset"  class="btn btn-primary btn-quirk btn-block">add container</button>
</div>
<div class="col-md-2">
<button type="reset"  class="btn btn-primary btn-quirk btn-block">update status</button>
</div>
<div class="col-md-3">
<button type="reset"  class="btn btn-primary btn-quirk btn-block">Reset field</button>
</div>
<div class="col-md-3">
<button type="reset"  class="btn btn-primary btn-quirk btn-block">Reset field</button>
</div>	
</div>

</div>

        
           </div>


	@endsection



                  