<!DOCTYPE html>

<?php 
	include ('koneksi.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DISPERINDAGKOP</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--
	 Date Picker
	-->
	 
   <link rel="stylesheet" href="datepicker/themes/base/jquery.ui.all.css">
	
	
	<style>
            body {
                background: #E1E1E1 url(img/b3.png);
            }
            #data{
				color=red;
				}
			ul.ui-autocomplete {
	background: none repeat scroll 0 0 #DADADA;
	cursor: pointer;
	display: block;
	list-style-type: none;
	max-width: 200px;
	padding: 0;
	position: relative;
	z-index: 1;
}

ul.ui-autocomplete li.ui-menu-item {
	padding:3px 5px;
}

ul.ui-autocomplete li.ui-menu-item:hover, 
ul.ui-autocomplete li.ui-state-hover:hover{
	background:#666;
}

	</style>
    
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DISPERINDAGKOP</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.html">
				<i class="fa fa-power-off"></i>&nbsp;LOGOUT</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

	  <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <!--<p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>-->
              	  	
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-home"></i>
                          <span>HOME</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>ITS</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="its.html"><i class="fa fa-users"></i>&nbsp;USER</a></li>
                          <li><a  href="index.html"><i class="fa fa-cogs"></i>&nbsp;ACTIVITY LOG</a></li>
						  <li><a  href="index.html"><i class="fa fa-archive"></i>&nbsp;MASTER DATA</a></li>
						  <li><a  href="index.html"><i class="fa fa-user"></i>&nbsp;USER PROFILE</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>KUKM</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.html">INPUT</a></li>
                          <li><a  href="index.html">REPORT</a></li>
                          <li><a  href="index.html">CHART</a></li>
                      </ul>
                  </li>

              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
  <section id="main-content">
    <!--change to var -->
    <section class="wrapper site-min-height">
		
		<div class="row mt">
	<div class="col-lg-12">
	<!-- 1st ROW WHITE PANEL - BOTTOM -->
		<div class="form-panel">
		
		<!-- 1st ROW WHITE PANEL - MID -->
			<div class="showback">
				<div class="btn-group btn-group-justified">
								<div class="btn-group">
									<button type="button" class="btn btn-theme">MIKRO</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-theme">KECIL</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-theme">MENENGAH</button>
								</div>
							</div>
			</div>
			
		<!-- 2nd ROW WHITE PANEL - MID -->
			<div class="row">
				<!-- PANEL COL1 KECAMATAN-->
					<div class="col-lg-12">
					<div class="profile-01 h3">
                            &nbsp;<i class="fa fa-angle-right">&nbsp;</i>Identitas Lembaga
                      </div>
  <form action="isikukm.php" method="POST">
                        <div class="form-horizontal style-form" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kecamatan</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="kecamatan" name="kec">
                              </div>
                            <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="alamat">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kelurahan/Desa</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="desa" name="desa">
                              </div>
                               <label class="col-sm-2 col-sm-2 control-label">Telpon 1</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="txtPhone" name="telp1">
                                  <span id="spnPhoneStatus"></span>
                                </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jalan/Dusun</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="dusun">
                              </div>
                              <label class="col-sm-2 control-label">Telpon 2</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="telp2">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Usaha</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control"name="nmusaha">
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Fax</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="fax">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Usaha Utama</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="usahautama">
                              </div>
                              <label class="col-sm-2 col-sm-2 control-label">Nama Pemilik</label>
                              <div class="col-sm-4">
								  <input type="text" class="form-control" name="pemilik">
							  </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NPWP</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="npwp">
                              </div>
							  <label class="col-sm-2 col-sm-2 control-label">Tgl Mulai Usaha</label>
                              <div class="col-sm-4">
								  <input type="text" id="datepicker" onClick="function()" class="form-control" name="tglmulai">
							  </div>

                          </div>
							
								
                        </div>
					</div>
			</div>
						
		<!-- 3rd ROW WHITE PANEL - MID -->
			<div class="row">
				<!-- PANEL COL1 PADUKUHAN-->
					<div class="col-lg-10">
					<div class="profile-01 h3">
                            &nbsp;<i class="fa fa-angle-right">&nbsp;</i>Indikator Kelembagaan
                      </div>
                        <div class="form-horizontal style-form">
                          <div class="form-group">
                          <label class="col-sm-3  control-label">Tahun Awal Berdiri</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="thawal">
								</div>
                        
                          
                          </div>
                          <div class="form-group">
                          <label class="col-sm-3 control-label">Karyawan Tetap</label>
							
							<div class="col-xs-1">
								 
									<input type="text" class="form-control" placeholder="L" name="jmlktl">
								</div>
							<div class="col-xs-1">
									<input type="text" class="form-control" placeholder="P" name="jmlktp">
								</div>
							 
                          </div>
                          <div class="form-group">
							<label class="col-sm-3 control-label">Tenaga Kerja</label>
							<div class="col-xs-1">
								 
									<input type="text" class="form-control" placeholder="L" name="jmltkl">
								</div>
							<div class="col-xs-1">
									<input type="text" class="form-control" placeholder="P" name="jmltkp">
								</div>
							
                          </div>
                          
                        </div>
					</div>
			</div>
			
		<!-- 4 ROW WHITE PANEL - MID -->
			<div class="row">
				<!-- PANEL REPORT-->
					<div class="col-lg-10">
					<div class="profile-01 h3">
                            &nbsp;<i class="fa fa-angle-right">&nbsp;</i>Indikator Usaha
                      </div>
						<div class="form-horizontal style-form">
						  <div class="form-group">
							<label class="col-sm-3  control-label">Produk</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="product">
								</div>
							<label class="col-sm-3  control-label">Modal Luar</label>
							<div class="col-sm-2">
									<input type="text" class="form-control" name="modluar" readonly>
								</div>
						</div>
                          <div class="form-group">
                          <label class="col-sm-3  control-label">Kapasitas Produksi</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="kapprod">
								</div>
								
								
						  <label class="col-sm-3  control-label">Bantuan Pemerintah</label>	
								<div class="col-sm-3">
									<div class="input-group">
											<input type="text" id="showPe" class="form-control" readonly  name="bantpem">
										<span class="input-group-addon">
											<input type="checkbox" id="showPem">
										</span>
									</div>
								</div>
                          </div>
                          <div class="form-group">
							  <label class="col-sm-3 control-label">Satuan</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="satuan">
								</div>
								
							 <label class="col-sm-3  control-label">Pinjaman Koperasi</label>
								<div class="col-sm-3">
									<div class="input-group">
											<input type="text" id='showKo' class="form-control" readonly name="pinjkop">
										<span class="input-group-addon">
											<input type="checkbox" id="showKop">
										</span>
									</div>
								</div>
                          </div>
                          <div class="form-group">
							<label class="col-sm-3  control-label">Omzet Pertahun (Rp)</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="omzet">
								</div>
								
							<label class="col-sm-3  control-label">Pinjaman Perorangan</label>
								<div class="col-sm-3">
									<div class="input-group">
											<input type="text" id='showP' class="form-control" readonly name="pinjperorang">
										<span class="input-group-addon">
											<input type="checkbox" id="showPerorang">
										</span>
									</div>
								</div>
                          </div>
                          <div class="form-group">
							<label class="col-sm-3  control-label">Asset</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="aset">
								</div>
								
							<label class="col-sm-3  control-label">Pinjaman Bank</label>
								<div class="col-sm-3">
									<div class="input-group">
											<input type="text" id='showB' class="form-control" readonly name="pinjbank">
										<span class="input-group-addon">
											<input type="checkbox" id='showBank' onClick=".click(function()">
										</span>
									</div>
								</div>
                          </div>
                          
                          <div class="form-group">
							<label class="col-sm-3  control-label">Modal Sendiri</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="modsendiri">
								</div>
								
							<label class="col-sm-3  control-label">Lain-Lain</label>
								<div class="col-sm-3">
									<div class="input-group">
											<input type="text" id='showIn' class="form-control" readonly name="lain2">
										<span class="input-group-addon">
											<input type="checkbox" id='showLain' onClick=".click(function()">
										</span>
									</div>
								</div>
                          </div>
                          <button type="submit" class="btn btn-round btn-editor"><i class="fa fa-upload"></i>&#09;SUBMIT</button>
								   <button type="button" class="btn btn-round btn-editor"><i class="fa fa-pencil-square-o"></i>&#09;EDIT</button>
								   <button type="button" class="btn btn-round btn-editor"><i class="fa fa-floppy-o"></i>&#09;SAVE</button>
								   <button type="button" class="btn btn-round btn-warning"><i class="fa fa-times"></i>&#09;REMOVE</button>
							
						</div>
					</div>
			</div>
		</div>
	</form>
	</div>
</div>
           
      </section>
     </section>
      <!--main content end-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - a$m
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>
	<!--autocomplete-->	
		
	<script src="autocomplete/js/jquery.min.js"></script>	
	<script src="autocomplete/jquery-ui.min.js"></script>	
	
	<script src="datepicker/ui/jquery.ui.core.js"></script>
	<script src="datepicker/ui/jquery.ui.widget.js"></script>
	<script src="datepicker/ui/jquery.ui.datepicker.js"></script>
	<script src="assets/js/datepick.js"></script>
	
	<script>
		
		$(function() {
        $( "#kecamatan" ).autocomplete({
            source: "data.php",
            minLength: 1
        });
        
        $('#showLain').click(function(){
					if($("#showLain").is(":checked")) {
						$("#showIn").attr('readonly','readonly');
						$("#showIn").removeAttr('readonly');
						   
					} else {
						$("#showIn").removeAttr('readonly');
						$("#showIn").attr('readonly','readonly');
					}
			    });
		$('#showBank').click(function(){
					if($("#showBank").is(":checked")) {
						$("#showB").attr('readonly','readonly');
						$("#showB").removeAttr('readonly');
					} else {
						$("#showB").removeAttr('readonly');
						$("#showB").attr('readonly','readonly');
					}
			});
		$('#showPem').click(function(){
					if($("#showPem").is(":checked")) {
						$("#showPe").attr('readonly','readonly');
						$("#showPe").removeAttr('readonly');
					} else {
						$("#showPe").removeAttr('readonly');
						$("#showPe").attr('readonly','readonly');
					}
			});
		$('#showKop').click(function(){
					if($("#showKop").is(":checked")) {
						$("#showKo").attr('readonly','readonly');
						$("#showKo").removeAttr('readonly');
					} else {
						$("#showKo").removeAttr('readonly');
						$("#showKo").attr('readonly','readonly');
					}
			});
		$('#showPerorang').click(function(){
					if($("#showPerorang").is(":checked")) {
						$("#showP").attr('readonly','readonly');
						$("#showP").removeAttr('readonly');
					} else {
						$("#showP").removeAttr('readonly');
						$("#showP").attr('readonly','readonly');
					}
			});
		$('#txtPhone').blur(function(e) {
			if (validatePhone('txtPhone')) {
				$('#spnPhoneStatus').html('Valid');
				$('#spnPhoneStatus').css('color', 'green');
			}
			else {
				$('#spnPhoneStatus').html('Nomor Telpon Harus Angka');
				$('#spnPhoneStatus').css('color', 'red');
			}
		});
    });
    function validatePhone(txtPhone) {
    var a = document.getElementById(txtPhone).value;
    var filter = /^[0-9-+]+$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}
	</script>
	
	
  </body>
</html>
