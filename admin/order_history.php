<?php
require_once "../includes/dbconnect.php";
require_once "../includes/library.php";
require_once "../includes/functions.php";
require_once "../includes/admin_session.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Order History</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->

		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="css/ace-skins.min.css" />
		<link rel="stylesheet" href="css/ace-rtl.min.css" />
		<script src="js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin">
		<!--top nav include-->
<?php
include_once "header.php";
 ?>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
		<!--side nav include-->
<?php
include_once "sidenav.php";
 ?>

<h1 style="color:#0099ff;">Order History</h1>
<br>
			<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">


							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div>
<!--Get list sub-category records-->
<!--The complex algorithm-->
<?php
extract($_POST);
if(isset($search))
{
  if(empty($search_by) && empty($from_date) && empty($to_date) && empty(!$order_status) && empty($searchstr))
  {
    $select = "select o.*,u.name,u.email,u.mobile from e_orders_tbl o
    inner join e_user_tbl u on o.user_id = u.user_id
    where o.order_status = $order_status";
  }
  if(empty($search_by) && empty($from_date) && empty($to_date) && empty($order_status) && empty(!$searchstr))
  {
    $select = "select o.*,u.name,u.email,u.mobile from e_orders_tbl o
    inner join e_user_tbl u on o.user_id = u.user_id
    where u.name like '$searchstr%' or u.mobile like '$searchstr%' or
     u.email like '$searchstr%' or o.order_id like '$searchstr%'";
  }
  if(empty($search_by) && empty($from_date) && empty($to_date) && empty(!$order_status) && empty(!$searchstr))
  {
    $select = "select o.*,u.name,u.email,u.mobile from e_orders_tbl o
    inner join e_user_tbl u on o.user_id = u.user_id
    where u.name like '$searchstr%' or u.mobile like '$searchstr%' or
     u.email like '$searchstr%' or o.order_id like '$searchstr%'
     and o.order_status = $order_status";
  }
  if(empty($search_by) && empty(!$from_date) && empty(!$to_date) && empty($order_status) && empty($searchstr))
  {
    $select = "select order_placed_on from e_orders_tbl
    where order_placed_on between $from_date and $to_date";
  }
}
 ?>
<?php
if(empty($searchstr) && empty($order_status) && empty($search_by) && empty($from_date) && empty($to_date))
{
$select = "select * from e_orders_tbl inner join
 e_user_tbl on e_orders_tbl.user_id = e_user_tbl.user_id";
}
$rs = mysql_query($select) or die(mysql_error());
?>
<form method="post" action="">

	<select name="search_by" id="search_by">
	<option value="">--SearchBy--</option>
  <option value="1">Order Id</option>
  <option value="2">Order Name</option>
  <option value="3">Order Mobile</option>
  <option value="4">Order Email</option>
	</select>

<input type="date" name="from_date" id="from_date">

<input type="date" name="to_date" id="to_date">

<select name="order_status" id="order_status">
<option value="">--Order status--</option>
<option value="1" style="background:grey;color:white;">Order placed</option>
<option value="2" style="background:orange;color:white;">Order Confirmed</option>
<option value="3" style="background:coral;color:white;">Order Dispatched</option>
<option value="4" style="background:green;color:white;">Order Delivered</option>
<option value="5" style="background:red;color:white;">Order Cancelled</option>
</select>
<input type="text" name="searchstr" id="searchstr" placeholder="search Product"/>
<input type="submit" name="search" value="Search"/><br/><br/>
</form>


</div>
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th class="detail-col">Sl.No</th>
                          <th>Order No</th>
													<th>Quantity</th>
													<th>Total Amount</th>
													<th>Payment Mode</th>
													<th>Customer name  || mobile || Email</th>
                          <th>Order Status</th>
													<th class="hidden-480">Action</th>

												</tr>
											</thead>
                      <tbody>
<?php
$count = mysql_num_rows($rs);
if($count > 0){
$i = 1;
while($row = mysql_fetch_assoc($rs)){
 ?>
												<tr>
                          <td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
                              	<td class="center"><?php echo $i;?></td>
																<td><a href="order_details.php?oid=<?php echo $row['user_id'];?>"><?php echo $row['order_id'];?></a></td>
																<td><?php echo $row['order_qty'];?></td>
                                <td><?php echo $row['order_total'];?></td>
                                <td>
                            <?php
                            $payment_type = $row['payment_type'];
                            if($payment_type == 1){
                              echo "online";
                            }else{
                              echo "COD";
                            }
                             ?>
                                </td>
																<td><?php echo $row['name'];?> || <?php echo $row['mobile'];?> <br> || <?php echo $row['email'];?></td>
<td>
  <?php
$order_status = $row['order_status'];
if($order_status == 1){
  ?>
  <p>Order Placed</p>
  <?php
}else if($order_status == 2){
  ?>
    <p style="color:orange">Order Confirmed</p>
  <?php
}else if($order_status == 3){
  ?>
  <p style="color:coral">Order Dispatched</p>
  <?php
}else if($order_status == 4){
  ?>
  <p style="color:green">Order Delivered</p>
  <?php
}else if($order_status == 5){
  ?>
  <p style="color:red">Order Cancelled</p>
  <?php
}
?>
</td>

													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-xs btn-success">
																<i class="ace-icon fa fa-check bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-warning">
																<i class="ace-icon fa fa-flag bigger-120"></i>
															</button>
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>

												</tr>
<?php
$i++;
}
}else{
  ?>
  <tr><td colspan="9"><h2 style='color:red;text-align:center;'>No Recent orders..!</h2></td><tr/>
  <?php
}
 ?>

											</tbody>
										</table>


									</div><!-- /.span -->
								</div><!-- /.row -->



								</div>



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="js/dataTables.buttons.min.js"></script>
		<script src="js/buttons.flash.min.js"></script>
		<script src="js/buttons.html5.min.js"></script>
		<script src="js/buttons.print.min.js"></script>
		<script src="js/buttons.colVis.min.js"></script>
		<script src="js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="js/ace-elements.min.js"></script>
		<script src="js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable =
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],

					select: {
						style: 'multi'
					}
			    } );



				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );

				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});


				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {

					defaultColvisAction(e, dt, button, config);


					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});

				////

				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);





				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );




				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header

					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});

				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});



				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});



				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header

					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});

				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});



				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}

			/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});

			})
		</script>
	</body>
</html>
