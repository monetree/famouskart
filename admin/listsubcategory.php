<?php
require_once "../includes/admin_session.php";
require_once "../includes/dbconnect.php";
require_once "../includes/library.php";
require_once "../includes/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>List SubCategories</title>

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

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
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

<a href="addlistsubcategory.php">addlistsubcategory</a>
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
if(isset($search)){
if(empty($category) && empty($sub_category) &&  empty($searchstr) && !empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where lsc.list_sub_cat_status=$cstatus
	order by lsc.list_sub_cat_name asc";
}
if(!empty($category) && empty($sub_category) &&  empty($searchstr) && empty($cstatus))
{
echo $select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where c.cat_id=$category order by lsc.list_sub_cat_name asc";

}
if(empty($category) && empty($sub_category) &&  empty(!$searchstr) && empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where lsc.list_sub_cat_name like '$searchstr%'
	order by lsc.list_sub_cat_name asc";
}
if(empty($category) && empty($sub_category) &&  empty(!$searchstr) && empty(!$cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where lsc.list_sub_cat_status=$cstatus and lsc.list_sub_cat_name
	 like '$searchstr%' order by lsc.list_sub_cat_name asc";
}

// mistakes
//
if(!empty($category) && !empty($sub_category) &&  empty($searchstr) && empty($cstatus))
{
	$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where c.cat_id = $category and sc.sub_cat_id = $sub_category
	 order by lsc.list_sub_cat_name asc";
}

if(!empty($category) && !empty($sub_category) &&  !empty($searchstr) && empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where c.cat_id=$category and sc.sub_cat_id = $sub_category and
	lsc.list_sub_cat_name like '$searchstr%' order by lsc.list_sub_cat_name asc";
}
if(!empty($category) && !empty($sub_category) &&  !empty($searchstr) && !empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where c.cat_id=$category and sc.sub_cat_id = $sub_category and
	lsc.list_sub_cat_name like '$searchstr%' and
	lsc.list_sub_cat_status = $cstatus order by lsc.list_sub_cat_name asc";
}
if(!empty($category) && empty($sub_category) &&  empty($searchstr) && !empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where c.cat_id=$category and
	lsc.list_sub_cat_status = $cstatus order by lsc.list_sub_cat_name asc";
}
if(!empty($category) && !empty($sub_category) &&  empty($searchstr) && !empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where c.cat_id = $category and sc.sub_cat_id = $sub_category and
	lsc.list_sub_cat_status = $cstatus order by lsc.list_sub_cat_name asc";
}
if(!empty($category) && empty($sub_category) &&  !empty($searchstr) && empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
	inner join e_categories_tbl c on lsc.cat_id = c.cat_id
	inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
	where c.cat_id = $category and lsc.list_sub_cat_name like
	 '$searchstr%' order by lsc.list_sub_cat_name asc";
}
}
?>
<?php
if(empty($category) && empty($sub_category) &&  empty($searchstr) && empty($cstatus))
{
$select = "select * from e_list_sub_category_tbl lsc
inner join e_categories_tbl c on lsc.cat_id = c.cat_id
inner join e_sub_category_tbl sc on lsc.sub_cat_id = sc.sub_cat_id
order by lsc.list_sub_cat_name asc";
}
$rs = mysql_query($select) or die(mysql_error());
$count = mysql_num_rows($rs);
?>

<form method="post" action="">
<select name="category" id="category" onchange="cat()">
		<option value="">-Category-</option>
<?php
$category = get_categories();
while($cat_row = mysql_fetch_assoc($category)){
 ?>
		<option value="<?php echo $cat_row['cat_id'];?>"><?php echo $cat_row['cat_name'];?></option>
<?php
}
 ?>
			   </select>
				 <span id="show">
				 <select name="sub_category" id="sub_category">
				 		<option value="">-SubCategory-</option>

				 			   </select>
							 </span>
<input type="text" name="searchstr" placeholder="search by list sub category name"/>
<select name="cstatus">
<option value="">-Select status-</option>
<option value="1">Active</option>
<option value="2">In-Active</option>
</select>
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
													<th>List Sub-category</th>
													<th>Sub category</th>
													<th>category</th>
													<th>Added on</th>

													<th class="hidden-480">Status</th>
													<th class="hidden-480">Action</th>

												</tr>
											</thead>

											<tbody>

												<tr>
													<?php
													$i = 1;
													while($row = mysql_fetch_assoc($rs)){
													 ?>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>



                              		<td class="center"><?php echo $i; ?></td>
																<td><?php echo $row['list_sub_cat_name'];?></td>
																<td><?php echo $row['sub_cat_name'];?></td>
																<td><?php echo $row['cat_name'];?></td>
																<td><?php echo $row['list_sub_cat_added_on'];?></td>
<td><?php
	if($row['list_sub_cat_status'] == 1){
	?>
	<p style="color:green">Active</p>
<?php
}else{
?>
<p style="color:red">In-Active</p>
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


									<tr class="detail-row">
													<td colspan="8">
														<div class="table-detail">
															<div class="row">
																<div class="col-xs-12 col-sm-2">
																	<div class="text-center">
																		<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="images/avatars/profile-pic.jpg" />
																		<br />
																		<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																				<a class="user-title-label" href="#">
																					<i class="ace-icon fa fa-circle light-green"></i>
																					&nbsp;
																					<span class="white">Alex M. Doe</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="col-xs-12 col-sm-7">
																	<div class="space visible-xs"></div>

																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Username </div>

																			<div class="profile-info-value">
																				<span>alexdoe</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Location </div>

																			<div class="profile-info-value">
																				<i class="fa fa-map-marker light-orange bigger-110"></i>
																				<span>Netherlands, Amsterdam</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Age </div>

																			<div class="profile-info-value">
																				<span>38</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Joined </div>

																			<div class="profile-info-value">
																				<span>2010/06/20</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Last Online </div>

																			<div class="profile-info-value">
																				<span>3 hours ago</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> About Me </div>

																			<div class="profile-info-value">
																				<span>Bio</span>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="col-xs-12 col-sm-3">
																	<div class="space visible-xs"></div>
																	<h4 class="header blue lighter less-margin">Send a message to Alex</h4>

																	<div class="space-6"></div>

																	<form>
																		<fieldset>
																			<textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
																		</fieldset>

																		<div class="hr hr-dotted"></div>

																		<div class="clearfix">
																			<label class="pull-left">
																				<input type="checkbox" class="ace" />
																				<span class="lbl"> Email me a copy</span>
																			</label>

																			<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
																				Submit
																				<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																			</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</td>
												</tr>


<?php
$i++;
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


					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,

					//,
					//"sScrollY": "200px",
					//"bPaginate": false,

					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element

					//"iDisplayLength": 50


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
				/***************/

			})
		</script>


		<script type="text/javascript">
		function cat(){
		var cat = document.getElementById('category').value;
		if(window.XMLHttpRequest)
		var obj = new XMLHttpRequest;
		else
		var obj = new ActiveXObject("microsoft.XMLHTTP");
		obj.open('GET','get_sc_ajax.php?cid='+cat,true);
		obj.send();
		obj.onreadystatechange=function(){
			if(obj.readyState == 4)
			document.getElementById('show').innerHTML = obj.responseText;
		}
		}
		</script>
	</body>
</html>
