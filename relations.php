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
          <h4>Notion d'unidirectionnalité et de bidirectionnalité :</h4>
          <p>
            Cela veut dire qu'une relation peut etre à sens unique ou à double sens . Pour le srelations uniques, il exixtera dans notre exemple de relation entre tache et user, une méthode dans notre netité tache  getUser() qui ira simplement chercher l'utilisateur associé via sa clè etrangère. Dans le cadrde d'une relation bidirectionnelle, il faut expliciter la relation aussi dans l'entité inverse pour que Doctrine , dans cet exemple aille chercher de lui-même toutes les taches d'un utilisateur. Il exixste implicitement une requête pour celz lorsque vous appellerez depuis un user getTasks().
          </p>
          <br>
          
          <h2>Les types de relations</h2>
          <p>
            <ul>
              <li>OneToOne</li>
              <li>ManyToOne</li>
              <li>OneToMay</li>
              <li>ManuToMay</li>
            </ul>
          <br><br>
          <h4>OneToOne</h4>
          La relation "1..1" ezst une relation classique .comme son nom l'indique, elle définit une dépendance unique entre deux entités.
          <br><br>
          
          <h4>ManyToOne</h4>
          Cette relation permet à plusieurs entités "A" d'établir une relation avec une entité "B". Imaginons que vous ayez un blog avec des articles et des commentaires .Il sera possible d'ajouter plusieurs commentaires sur le meme article..Ainsi l'entité commentaire sera liée à l'entité article en relation ManuToOne.
          <br><br>
          
          <h4>OneToMay</h4>
          Cette entité permet d'établir à une entité "A" une relation avec plusieurs Entités "b". En fait , on se positionne du coté inversee c-à-d que dans l'emple de blog montionné dans la relation ManyToOne on effectue la relation à partir de l'entité article et non de commentaire.
          <br><br>
          
          <h4>ManuToMay</h4>
          Cette relation peemet à plein d'objet d'etre en relation avec plein d'autres. Cette relation a pour particularité de créer une table de jointure entre les deux entités liées. Cette table ne doit pas etre modifiéé, elle est implicitement créée par doctrine pour retenir les foreignkeys de chacune des entités pour chaque relation entre elles.<br><br>

          Precisons l'exemple , nous pourrions créer des catégories d'articles suivant:
          
          <ul>
            <li>Sportif</li>
            <li>Informatique</li>
            <li>Jeux vidéo</li>
            <li>Politique</li>
            <li>Economique</li>
          </ul>
          <br><br>
          Nous pouvons ajouter autant de catégories que l'on souhaite. il suffit de créer un objet catégorie à partir de l'entité Catégorie. Mais imaginons qu'un article se rapporte sur un nouveau devisce de Google ou apple. il sera possible de classer cet article dans la ctégorie économique et dans la partie informatique. On parle de la relation entre les entités Article et Catégorie de ManyToMany car un article peut avoir plusieurs catégories et qu'une catégorie peut avoir plusieurs articles.
          
          
          </p>
     </div>
      </div>
    </div>
  </body>
</html>