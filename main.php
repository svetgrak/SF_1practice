<!DOCTYPE html>

<html>
	
<head>

	<meta charset='UTF-8'>
	<title>About me - Practice 1</title>
	<link href="styles.css" rel="stylesheet ">

</head>

<body>

	<div class='header'>

		<?php include 'menu_include.php'?>

	</div>


	<div class='main_information'>

		 <div class='about_me'>
             
            <h1><?php echo $p; ?></h1>

			<div class='img_tylen'>

        		<?php  echo '<img src="tylen.jpg">'; ?>

        	</div>

            <p>
            	Меня зовут 
            	<?php echo $name, ' ', $surname , '<br>'; 
            	echo 'Живу в ', ' ', $city; ?>                                      
            </p> 
           
            <p> Мне
                <?php  echo $age;   ?>          
                лет 
            </p>

            <p> Моя профессия
                <?php  echo $prof;   ?>
            </p>  
                
        </div>

        <div class='knowledge'>

        	<?php include 'knowledge_include.php'; ?>

        	<h3>Начнем с классики жанра: </h3>
        	<?php echo $text; ?>

        	<p>Смотри как могу!!!</p>
        	<?php echo 'a = ',$a ,'   b = ' ,$b ,'<br>'; ?>
        	<?php echo 'c = a + b = ',$a,' + ',$b,' = ',$c; ?>

        </div>

        
        <?php include 'footer_include.php'?>


	</div>

</body>

</html>
