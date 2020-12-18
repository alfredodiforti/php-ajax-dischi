<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>Document</title>
</head>
<body>
<div id="app">
<header>
     <div class="container">
         <img src="../php-ajax-dischi/dist/img/logo.png" alt="logo">
     </div>
 </header>
 <main>
     <div class="container flex">

           <div v-for="details in datab" class="blackbox">
               <img :src="details.poster" alt="datab.title">
               <h3>{{details.title}}</h3>
               <span>{{details.author}}</span>
               <span>{{details.year}}</span>
               <span>{{details.genre}}</span>              
           </div>
     </div>
 </main>
</div>
<!-- import js -->
<script src="./dist/js/app.js"></script>
</body>
</html>