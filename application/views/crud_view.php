<!DOCTYPE html>
<html Lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-Febrics</title>
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	
	<div class= "jumbotron bg-dark text-white"> 
		<h1 align="center"> E-Febrics</h1>
		
	</div>
	<div class="container">
		<div class="clear-fix">

			<h3 style="float: left">Müşteriler</h3>
			<a href="" class="btn btn-warning" style="float: right"  data-toggle="modal" data-target="#exampleModal"><img src="<?php  echo base_url(); ?>open-iconic-master/svg/plus.svg" width="15" height="15"  alt=" "> Müşteri Ekle</a> 
			
		</div>
		<table class="table table-striped table-hover table-sm">

			<thead>
				<tr>
					<th>Ad ve Soyad</th>
					<th>E-mail</th>
					<th>Telefon No</th>
					<th>Adres</th>
					<th>İşlem</th>
				</tr>	
			</thead>

			<tbody>
				<?php foreach($product_details as $products): ?>

				<tr>
					<td>
						<?php echo $products->name; ?>
					</td>

					<td>
						<?php echo $products->email; ?>
					</td>

					<td>
						<?php echo $products->phone; ?>
					</td>

					<td>
						<?php echo $products->adress; ?>
					</td>


					
					<td>
						
						<a href="<?=base_url();?>crud/editProduct/<?=$products->id; ?>"  class="btn btn-success btn-sm"><img src="<?php  echo base_url(); ?>open-iconic-master/svg/brush.svg" width="15" height="15" alt=" "> Düzenle</a>
						
						

						<a href="<?=base_url();?>crud/deleteProduct/<?=$products->id; ?>" class="btn btn-danger btn-sm" ><img src="<?php  echo base_url(); ?>open-iconic-master/svg/circle-x.svg" alt="" width="15" height="15"> Sil</a>

						<a href="<?=base_url();?>crud/getListele/" class="btn btn-primary btn-sm"><img src="<?php  echo base_url(); ?>open-iconic-master/svg/align-left.svg" alt=" " width="13" height="13"> Listele</a>
						

					</td>

				</tr>


				
				<?php endforeach; ?>

<tfoot>
				<tr>
					<th>Ad ve Soyad</th>
					<th>E-mail</th>
					<th>Telefon No</th>
					<th>Adres</th>
					<th>İşlem</th>
				</tr>	
		
			</tfoot>
			

			</tbody>
			

		</table>
		






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url(); ?>crud/addProduct" method="post">		
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Müşteri Ekle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Çıkış">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label for="name">Ad ve Soyad </label>
        	<input type="text" name="name" placeholder="enter your Name" class="form-control">
      </div>
        <div class="form-group">
        	<label for="email">E-mail </label>
        	<input type="text" name="email" placeholder="enter your E-mail" class="form-control">
      </div>
        <div class="form-group">
        	<label for="phonel">Telefon No </label>
        	<input type="text" name="phone" placeholder="enter your Phone" class="form-control">
     	 </div>
     	<div class="form-group">
        	<label for="adress">Adres</label>
        	<input type="text" name="adress" placeholder="enter your Adress" class="form-control">
      </div>

  	  </div>
  	  	



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
        <input type="submit" name="insert" value="Müşteri Ekle" class="btn btn-info">
      </div>
  	  </form>
    </div>
  </div>
</div>

<!--<?php echo $linkler ?> -->


		<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    
      
    </li>
    <li class="page-item" href="#"></a><?php echo $linkler ?></li>
    
   
    
  </ul>
</nav>
</div>





<a href="<?=base_url();?>login/logout" class="btn btn-primary btn-sm"><img src="<?php  echo base_url(); ?>open-iconic-master/svg/align-left.svg" alt=" " width="13" height="13"> logout</a>


<!--

<? if($this->session->flashdata('error')){ ?>

<div align="center" style="color: #FFF" class="bg-danger">
<? echo $this->session->flashdata('error'); ?>
</div>

<? }  ?>


<? if($this->session->flashdata('inserted')){ ?>

<div align="center" style="color: #FFF" class="bg-primary">
<?  echo $this->session->flashdata('inserted'); ?>
</div>

<? }  ?>

<? if($this->session->flashdata('updated')){ ?>

<div align="center" style="color: #FFF" class="bg-success">
<?  echo $this->session->flashdata('updated'); ?>
</div>

<? }  ?>
-->


<div align="center" style="color: #FFF" class="bg-primary">
<?  echo $this->session->flashdata('deleted'); ?>
</div>

<div class="navbar-form navbar-right">
  <?php echo form_open("crud/search") ?>
  <input   type="text" name="keyword" class="form-control" placeholder="Search">
  <button type="submit" class="btn btn-success">Ara</button>
  <?php echo form_close() ?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
