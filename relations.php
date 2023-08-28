<html>
  <head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Les Relationss</title>
  </head>
  <body>
    <header class="container-fluid navbar bg-dark text-light py-3">
      <div class="row d-flex justify-content-around align-items-center w-100 ">
        <div class="col-12 d-flex justify-content-between align-items-center">
         
           <a href="index.php">Entitys</a>
            <a href="relations.php">Relations</a>
           <a href=""></a>
           <a href=""></a>
  
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row py-3">
        <div class="col">
 <h1>Les Relations  </h1>
          <p>
            Il y'a deux notions à comprendre pour relier les entités entre elles . La notion de propriété et d'inverse et la notion d'unidirectionnalité et de bidirectionnalité . 
          </p>
          <h2>Les différentes Notions </h2>
          <h4>Notion de propriété et d'iverse :</h4>
          <p>
            Cette notion est abstraite, mais essentielle à coprendre. En fait , il y'a toujours une entité dite  propriétaire et une dite inverse.L'entité propriétaire est celle qui contient la référence à l'autre entité.
            <br><br>
            Illustrons cela: <br>
            Puisque nous avons créé une entité Task, admettons que nous voulons que nos taches soient reliées à un utilisateur dans notre application web. Vous pouvez pae exemple créer une propriété user_id dans entité Task. C'est donc la tache qui est propriétaire de la relation car elle contient la colonne de liaison user-id.<br>
            Notez tout de meme qu'n'y a pas besoin de créer àla main user_id. C'est Doctrine qui nous aidera à entretenir cette relation.
            
          </p>
     </div>
      </div>
    </div>
  </body>
</html>