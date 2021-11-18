<!DOCTYPE html>
<html Lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud operation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class= "jumbotron bg-dark text-white"> 
		<h1 align="center"> E-Febrics </h1>
	</div>
	<div class="container">

	<h1 align="center">Güncelleme İşlemi</h1>

	<form action="<?php echo base_url(); ?>crud/update/<?php echo $singleProduct->id; ?>" method="post">
		   <div class="form-group">
			      <label for="name">Ad ve Soyad </label>
       	    <input type="text" name="name" placeholder="enter your name" class="form-control" value="<?php echo $singleProduct->name; ?>">
       </div>	

       <div class="form-group">
        	<label for="email">E-mail </label>
        	<input type="text" name="email" placeholder="enter your email" class="form-control" value="<?php echo $singleProduct->email; ?>">
       </div>

       <div class="form-group">
        	<label for="phone">Telefon No</label>
        	<input type="text" name="phone" placeholder="enter your phone" class="form-control" value="<?php echo $singleProduct->phone; ?>">
     	 </div>

       <div class="form-group">
          <label for="adress">Adres </label>
          <input type="text" name="adress" placeholder="enter your adress" class="form-control" value="<?php echo $singleProduct->adress; ?>">
       </div>

     	  <input type="submit" name="düzenle" value="Güncelle" class="btn btn-primary">
     


     	</form>

     </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>