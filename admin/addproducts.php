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
		<title>Add list sub category</title>

		<meta name="description" content="overview &amp; stats" />
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

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

<body class="no-skin">

<?php
include_once "header.php";
    ?>
<?php
include_once "sidenav.php";
?>
                <div class="row">
            			<div class="col-xs-3">
              <h2 style="color:#0099ff;">Add products</h2>
              </div>
              <div class="col-xs-7">
<?php
extract($_POST);
if(isset($add) && isset($_FILES['prod_image']))
{
$select = "select prod_name from e_products_tbl where prod_name = '$prod_name'
and cat_id ='$cat_name' and sub_cat_id = '$sub_cat_name' and list_sub_cat_id =
'$list_sub_cat_name'";
$rs = mysql_query($select) or die(mysql_error());
$count = mysql_num_rows($rs);
  if($count == 0){
		date_default_timezone_set('asia/kolkata');
	$date = date('Y-m-d H:i:s');
  $temp_file = $_FILES['prod_image']['tmp_name'];
  $file_name = $_FILES['prod_image']['name'];
  $file_size = $_FILES['prod_image']['size'];
  $extensions = strtolower(end(explode('.',$file_name)));
  $allowed_extensions = array('png','jpg','jpeg','gif','bmp');
  if(!in_array($extensions,$allowed_extensions))
  {
    $invalid = "Invalid file type";
  } else if($file_size > 2097152) {
    $size = "File too large to upload";
  } else {
    move_uploaded_file($temp_file,"uploads/".$file_name);

		$insert = "insert into e_products_tbl
		(cat_id,sub_cat_id,list_sub_cat_id,prod_name,prod_available_quantity,
		prod_mrp,prod_sp,latest_prod,special_prod,prod_status,prod_added_on,prod_image,prod_desc)
		values($cat_name,$sub_cat_name,$list_sub_cat_name,
		'".format_str($prod_name)."',$prod_available_quantity,$prod_mrp,
		$prod_sp,$latest_prod,$special_prod,$prod_status,'$date','$file_name','$prod_desc')";

		$query = mysql_query($insert) or die(mysql_error());
		if($query)
		$success = "Product uploaded successully";
		else
		$failed = "Failed to upload product";
		}
  }else{
		$exist = "Product Already exist";
}
}
?>
            <form method="post" action="" enctype="multipart/form-data">
            Choose :
            <select name="cat_name" id="cat_name" onchange="cat()">
			      <option>--Category--</option>
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
            <select name="sub_cat_name" id="sub_cat_name">
            <option>--SubCategory--</option>
            </select>
						</span>

						<span id="showlist">
            <select name="list_sub_cat_name" id="list_sub_cat_name">
            <option>--ListSubCategory--</option>

            </select>
					</span>

                       <br/><br/>

                   <input type="text" name="prod_name" id="prod_name" placeholder="Product Name"><br/><br/>
                   <input type="text" name="prod_available_quantity" id="prod_available_quantity" placeholder="Product Available Quantity"><br/><br/>
                   <input type="text" name="prod_mrp" id="prod_mrp" placeholder="Product MRP"><br/><br/>
                   <input type="text" name="prod_sp" id="prod_sp" placeholder="Product Selling Price"><br/><br/>
									 <input type="text" name="latest_prod" id="latest_prod" placeholder="Latest product"><br/><br/>
									 <input type="text" name="special_prod" id="special_prod" placeholder="special products"><br/><br/>

                  Product Status :
                  <select name="prod_status" id="prod_status">
                    <option value="1">Active</option>
                    <option value="2">In-Active</option>
                  </select><br/><br/>
                  Product Image : <input type="file" name="prod_image" id="prod_image"/><br/><br/>
                  Product description : <textarea name="prod_desc" id="prod_desc"/></textarea><br/><br/>
                  <input type="submit" name="add" value="add"/>
                </form>
          </div>
          <div class="col-xs-2">
            <!--php success and error msg-->
              <h3 style="color:red;"><?php if(isset($invalid)){echo $invalid; }?></h3>
              <h3 style="color:green;"><?php if(isset($size)){echo $size; } ?></h3>
              <h3 style="color:coral;"><?php if(isset($exist)){echo $exist; }?></h3>
              <h3 style="color:green;"><?php if(isset($success)){echo $success; }?></h3>
              <h3 style="color:green;"><?php if(isset($failed)){echo $failed; }?></h3>

			</div>
            </div>
    <!--add subcategory form-->
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

		<!--[if lte IE 8]>
		  <script src="js/excanvas.min.js"></script>
		<![endif]-->
		<script src="js/jquery-ui.custom.min.js"></script>
		<script src="js/jquery.ui.touch-punch.min.js"></script>
		<script src="js/jquery.easypiechart.min.js"></script>
		<script src="js/jquery.sparkline.index.min.js"></script>
		<script src="js/jquery.flot.min.js"></script>
		<script src="js/jquery.flot.pie.min.js"></script>
		<script src="js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="js/ace-elements.min.js"></script>
		<script src="js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});


			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });


				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
		</script>

		<script type="text/javascript">
		function cat(){
		var cat = document.getElementById('cat_name').value;
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

		<script type="text/javascript">
		function sub_cat(){
		var scat = document.getElementById('sub_cat_name').value;
		if(window.XMLHttpRequest)
		var obj = new XMLHttpRequest;
		else
		var obj = new ActiveXObject("microsoft.XMLHTTP");
		obj.open('GET','get_lsc_ajax.php?scat='+scat,true);
		obj.send();
		obj.onreadystatechange=function(){
			if(obj.readyState == 4)
			document.getElementById('showlist').innerHTML = obj.responseText;
		}
		}
		</script>
</html>
