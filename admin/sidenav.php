<?php
require_once "../includes/admin_session.php";
?>
<div class="main-container ace-save-state" id="main-container">
  <script type="text/javascript">
    try{ace.settings.loadSt

      ate('main-container')}catch(e){}
  </script>

  <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
      try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
      <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
          <i class="ace-icon fa fa-signal"></i>
        </button>

        <button class="btn btn-info">
          <i class="ace-icon fa fa-pencil"></i>
        </button>

        <button class="btn btn-warning">
          <i class="ace-icon fa fa-users"></i>
        </button>

        <button class="btn btn-danger">
          <i class="ace-icon fa fa-cogs"></i>
        </button>
      </div>

      <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
      </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
      <li class="active">
        <a href="dashboard.html">
          <i class="menu-icon fa fa-tachometer"></i>
          <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-desktop"></i>
          <span class="menu-text">
            Site Categories
          </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
          <li class="">
            <a href="categories.php">
              <i class="menu-icon fa fa-caret-right"></i>

              Categories
              <b class="arrow"></b>
            </a>
          </li>

          <li class="">
            <a href="subcategory.php">
              <i class="menu-icon fa fa-caret-right"></i>
              Sub Categories
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="listsubcategory.php">
              <i class="menu-icon fa fa-caret-right"></i>
              List Sub Categories
            </a>

            <b class="arrow"></b>
          </li>

            <ul class="submenu">
              <li class="">
                <a href="#">
                  <i class="menu-icon fa fa-leaf green"></i>
                  Item #1
                </a>

                <b class="arrow"></b>
              </li>

              <li class="">
                <a href="#" class="dropdown-toggle">
                  <i class="menu-icon fa fa-pencil orange"></i>

                  4th level
                  <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                  <li class="">
                    <a href="#">
                      <i class="menu-icon fa fa-plus purple"></i>
                      Add Product
                    </a>

                    <b class="arrow"></b>
                  </li>

                  <li class="">
                    <a href="#">
                      <i class="menu-icon fa fa-eye pink"></i>
                      View Products
                    </a>

                    <b class="arrow"></b>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-list"></i>
          <span class="menu-text"> Product </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
          <li class="">
            <a href="addproducts.php">
              <i class="menu-icon fa fa-caret-right"></i>
              Add Products
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="products.php">
              <i class="menu-icon fa fa-caret-right"></i>
              Products
            </a>

            <b class="arrow"></b>
          </li>
        </ul>
      </li>



      <li class="">
        <a href="coupons.php">
          <i class="menu-icon fa fas fa-tags"></i>
          <span class="menu-text"> Coupon </span>
        </a>

        <b class="arrow"></b>
      </li>








      <li class="">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-pencil-square-o"></i>
          <span class="menu-text"> Forms </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
          <li class="">
            <a href="form-elements.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Form Elements
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="form-elements-2.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Form Elements 2
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="form-wizard.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Wizard &amp; Validation
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="wysiwyg.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Wysiwyg &amp; Markdown
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="dropzone.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Dropzone File Upload
            </a>

            <b class="arrow"></b>
          </li>
        </ul>
      </li>

      <li class="">
        <a href="widgets.html">
          <i class="menu-icon fa fa-list-alt"></i>
          <span class="menu-text"> Widgets </span>
        </a>

        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="calendar.html">
          <i class="menu-icon fa fa-calendar"></i>

          <span class="menu-text">
            Calendar

            <span class="badge badge-transparent tooltip-error" title="2 Important Events">
              <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
            </span>
          </span>
        </a>

        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="gallery.html">
          <i class="menu-icon fa fa-picture-o"></i>
          <span class="menu-text"> Gallery </span>
        </a>

        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-tag"></i>
          <span class="menu-text"> More Pages </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
          <li class="">
            <a href="profile.html">
              <i class="menu-icon fa fa-caret-right"></i>
              User Profile
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="inbox.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Inbox
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="pricing.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Pricing Tables
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="invoice.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Invoice
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="timeline.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Timeline
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="search.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Search Results
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="email.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Email Templates
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="login.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Login &amp; Register
            </a>

            <b class="arrow"></b>
          </li>
        </ul>
      </li>

      <li class="">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-file-o"></i>

          <span class="menu-text">
            Other Pages

            <span class="badge badge-primary">5</span>
          </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
          <li class="">
            <a href="faq.html">
              <i class="menu-icon fa fa-caret-right"></i>
              FAQ
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="error-404.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Error 404
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="error-500.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Error 500
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="grid.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Grid
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="blank.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Blank Page
            </a>

            <b class="arrow"></b>
          </li>
        </ul>
      </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
      <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
  </div>

  <div class="main-content">
    <div class="main-content-inner">
      <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
          <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Home</a>
          </li>
          <li class="active">Dashboard</li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
          <form class="form-search">
            <span class="input-icon">
              <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
              <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
          </form>
        </div><!-- /.nav-search -->
      </div>

      <div class="page-content">
        <div class="ace-settings-container" id="ace-settings-container">
          <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
          </div>

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

        <div class="page-header">
          <h1>
            Dashboard
            <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
              overview &amp; stats
            </small>
          </h1>
        </div><!-- /.page-header -->
