<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="flex-container">

<div class="header">     
       <?php include 'logo.inc.php' ?>         
       <?php include 'menu.inc.php' ?>	   
</div>       

<div class="about_me">
 
  <h1>  <?php  echo $p  ?> </h1>

    <div class="data">
        <div class="myImg">
            <?php  echo '<img src="img/22.jpg">'; ?>                    
        </div>

        <div class="fullname">
            <p> Меня зовут 
            <?php echo $name, ' ', $surname . '<br>'; 
                  echo 'город', ' ', $city; ?>                                      
            </p> 
   
            <p> Мне
            <?php  echo $age;   ?>          
            лет </p>
            <p> Есть много способов прибоднять завесу грядущего и </p>
            <p> узнать, что готовит вам судьба...... </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                                      
                    <?php
                        $a = 33;
                        $b = 300;
                        $c = $a + $b;
                        echo $c;
                   ?>   <br>                
                    <?php
                         echo $d;
                    ?> 
               
            </div>
           
            <div class="article">
                 <p class="text">
                     Вы можете выбрать на нашем сайте любое интересное вам гадание онлайн и следовать инструкциям, указанным в нём. 
                     Гадания онлайн - отличная возможность получить ответ почти на любой вопрос о своей судьбе и о будущем ваших близких и друзей,
                     принять правильное решение и просто приятно провести время.
                          
                 </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>