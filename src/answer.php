<?php
include("Controller/QuizController");
$answer->answer($_POST);
 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="UTF-8">
         <title>{% block title %}SSAMMETA{% endblock %}</title>

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         {% block stylesheets %}
         <link rel="stylesheet" href="/css/style.css">
         {% endblock %}
     </head>
     <body>
       <header class="header">
       <div>
         <span> Welcome! {{app.user.username}} </span>
         <span class="navi">
            <span><a href="{{ path('fos_user_security_logout') }}">Logout</a></span>
         </span>
         </div>
         <img class="logo-icon" src="{{asset('img/student.png')}}">
      </header>
      <body>
      <h2>Right answr<?php echo $answer['right']</h2>
      </body>
      </html>
