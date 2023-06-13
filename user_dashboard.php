<?php include '_includes/header.php'; ?>
<?php include '_includes/navbar.php'; ?>
<?php include '_includes/sidebaruser.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->

<style>
@media screen and (max-width: 480px) {
  .row {
    flex-direction: column;
    align-items: center;
  }
  .col-6{
  max-width: 75%;
  }
}
  .plan {
  border-radius: 16px;
  box-shadow: 0 30px 30px -25px rgba(26, 59, 249);
  padding: 10px;
  background-color: #3574cd73;
  color: #697e91;
  max-width: 300px;
  margin: 5px;
  transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);}

.plan:hover {
  transform: translateY(-5px) scale(1.05);
  
}

.plan strong {
  font-weight: 600;
  color: #425275;
}

.plan .inner {
  align-items: center;
  padding: 20px;
  padding-top: 40px;
  background-color: #ecf0ff;
  border-radius: 12px;
  position: relative;
}

.plan .pricing {
  position: absolute;
  top: 0;
  right: 0;
  background-color: #bed6fb;
  border-radius: 99em 0 0 99em;
  display: flex;
  align-items: center;
  padding: 0.625em 0.75em;
  font-size: 1.25rem;
  font-weight: 600;
  color: #425475;
}

.plan .pricing small {
  color: #707a91;
  font-size: 0.75em;
  margin-left: 0.25em;
}

.plan .title {
  font-weight: 600;
  font-size: 1.25rem;
  color: #425675;
}

.plan .title + * {
  margin-top: 0.75rem;
}

.plan .info + * {
  margin-top: 1rem;
}

.plan .features {
  display: flex;
  flex-direction: column;
}

.plan .features li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.plan .features li + * {
  margin-top: 0.75rem;
}

.plan .features .icon {
  background-color: #1FCAC5;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  border-radius: 50%;
  width: 20px;
  height: 20px;
}

.plan .features .icon svg {
  width: 14px;
  height: 14px;
}

.plan .features + * {
  margin-top: 1.25rem;
}

.plan .action {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: end;
}

.plan .button {
  background-color: #6558d3;
  border-radius: 6px;
  color: #fff;
  font-weight: 500;
  font-size: 1.125rem;
  text-align: center;
  border: 0;
  outline: 0;
  width: 100%;
  padding: 0.625em 0.75em;
  text-decoration: none;
}

.plan .button:hover, .plan .button:focus {
  background-color: #4133B7;
}
</style>

<div class="row">
<?php 
$sql= "SELECT * FROM pkg";
$query= mysqli_query($connection, $sql);
if (mysqli_num_rows($query)>0){

foreach($query as $r){

?>

          <div class="col-lg-3 col-6">
<div class="plan">
		<div class="inner">
			<span class="pricing">
				<span>
					Rs <?php echo $r['price'];?>
				</span>
			</span>
			<p class="title"><?php echo ucwords($r['name']);?></p>
			<ul class="features">
				<li>
					<span class="icon">
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
						</svg>
					</span>
					<span><strong><?php echo $r['duration'];?></strong> Day(s)</span>
				</li>
				<li>
					<span class="icon">
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
						</svg>
					</span>
					<span><strong><?php echo ucwords($r['description']);?></strong></span>
				</li>
				
			</ul>
			<div class="action">
			<a class="button" href="#">
				Subscribe
			</a>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
</div>


<!--  ---------------------------------------------------------------------------------------------------------------------------------->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
 
<?php include '_includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

