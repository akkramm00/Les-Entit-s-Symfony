<html>
  <head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Les Entités</title>
  </head>
  <body>
    <div class="container">
      <div class="row py-3">
        <div class="col">
 <h1>Les Entités définition </h1>
    <p>
      Une entité avec Symfony , c'est un objet qui sera représenté sous forme d'une classe. Mais cet objet est un peu particulier
      avec symfony car il est géré par "Doctrine" qui est un ORM  (Object Relational Mapping).
      Un ORM a pour role de faire le pont entre un langage objet et un lagage base de données(type Mysql, MongoDB, etc...). 
      Ainsi grace a Doctrine nous n'avons en théorie plus besoin de passer une ligne de commande SQL( Structured Query Language)
      car il se chargera de faire les requêtes nécessaires à notre place via des méthodes php.

      Dans le fonctionnement de Symfony, une entité représente une table de la base de données.
      Lorsqu'elle est instanciée dans la BDD (Base De Données), ses attributs deviennent les champs de la table.
    </p>
           <h1>La base de données relationnelle</h1>
          <p>
            Comme nous l'avons vu, une entité représente une table de la base de données. Ainsi il convient de configurer notre application afin que doctrine nous aide à créer cette base dedonnée qui à terme la manipuler.<br>
            Tout d'abord, assurons-nous que doctrine est bien installer. Sinon, on tape les lignes de commandeci-dessous: <br><br>
            

            $ composer require symfony/orm-pack<br>
            $ composer require --dev symfony/maker-bundle<br><br>

            Ensuite dans notre fichier ".env " , il va falloir configurer notre  connexion à la base de données en personnalisannt nos paramètres dans la variable d'environnement DATABASE_URL.<br><br>

            Voici un exemple :<br><br>

            DATABASE_URL="mysql:/db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.4.17&charset=utf8mb4"
            
            
            
          </p>
          
        </div>
      </div>
    </div>
  </body>
</html>