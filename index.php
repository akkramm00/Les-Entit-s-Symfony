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

            DATABASE_URL="mysql:/db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.4.17&charset=utf8mb4" <br><br>

            * db_user est à remplacer par votre nom d'utilisateur de la base de données<br>
            * db_password est a remplacer par le mot de passe pour accéder à la base de données<br>
            * db_name est à remplacer par le nom que vous souhaiter donner a la base de données.<br>
            * 3306 est le port par defaut, mais il vous faudra vérifier que c"est bien celui-ci utiliser pour l'accès à votre base de données<br>
            * serverVersion doit contenir la version du serveur que votre ordinateur utilise.<br><br>

            Les bases de données relationnelles les plus utilisées 
             sont MySQL, Mariadb, PostgreSQL, SQlite, oci8 .<br><br>

            Nous pouvons maintenant créer la base de données avec lla commande suivante: <br><br>

            " $ php bin/console doctrine:database:create "<br><br>

            il convient également , comme pour tout projet , de préparer le desing de votre base de données . Pour cela on pourra utiliser UML pour la partie objet ou imaginer notre base de données et ses tables avec "Merise"
          </p>
          
           <h1>Création d'une Entité</h1>
          <p>
            Il est possible de créer manuellement un fichier PHP dans le dossier  Entity et de developper l'entité avec ses méthodes et ses attributs, puis de faire une migration vers la base de données. Mais , grace à maker-bundle que nous avons installé? Doctrine peut nous aider à créer facilement en Entité. Alors, créons un Entité "tache" que nous appellerons "Task" puis détaillons notre nouvelle entité.<br><br>
          </p>
           <h1>Utilisation de MakerBundle</h1>
          <p>
            MakerBundle est un composantt exclusivement développé pour aider à la création des controlleurs, de formulaires ou d'entités. Ainsi une fois installé, vous pouvez créer une entité  avec la ligne de commande suivante: <br><br>

            "$ php bin/console make:entity" <br>
             Le terminal va nous demander le nom de l'entité que nous voulons créer. <bbr>
               => Tapons dans l'invite de commande : > Taskl <br>
               Notons que si nous rentrons le d'une entité  déja existante, il modifiera cette entité. Kaker vient de créer une entité "Task" dans: <br>
               src/Entity/Task.php et un repository dans :<br>
               src/repository/TaskRepository.php <br>
               Ensuite la cosole demande de créer une nouvelle propriété. Saisissons :<br>
               > createAt <br>
               Maker nous demande le type que nous voulons donner à notre propriété et par defaut suppose (grace au nom) que nous voulons le type "datetime_immutable". Mais , si nous voulons choisir un autre type, nous pouvous découvrir la liste en rentrant "?". <br>
               Validons le type proposé à savoir " datetime_immutable".<br>
               <br><br>Maintenant le terminal demande si nous voulons rendre cette propriété "nullable" ou pas et par défaut? il propose non. <br>
               En d'autre termes, est-ce que la datte est obligatoire ou facultative? validons cette question car effectivement nous ne voulmons pas qu'une tâche ne puisse pas avoir de date de création. <br>v
                Ensuite il nous demande si nous voulons créer une autre propriété. Saisissons: <br>
               >title <br>
               Validons string, 255 ('c'est le nombre amximum de caractères et non null)<br><br>

               Ajoutons la propriété : <br>
               > content <br>
               Cette fois-ci tapons "text" et validons non null <br><br>
               Enfin , ajoutons la prop^riété isDone qui nous permettra de savoir si une tache est validée ou pas <br>
               > isDone v
               C'est un boolean non null <br><br>
               
               Pour finirla bréation de notre Entité, il suffit de taper enter quand l'invitation propose de créer une noiuvelle propriété.<br><br>
               NOus devrions voir le message "success !" ainsi que l'invitation de taper la ligne de commande :<br>
               "php bin/console make:migration"
               <br><br>
               Cette commande va nous permettre de créer une classe  qui décrit les changements nécessaires afin de mettre à jour le schema de la base de données. Cette classe de migration permettra à notre projet d'etre tout le temps synchonisé avec notre base de données et voir si celle-ci est bien à jour avec nos dérnieres modification/Ajout entité.<br><br>
               Nous la retrouverons dans le dossier migrations/ à la racine de notre projet. Une fois cette lignne de commande effectuée nous devons avoir le message "success" ainsi que le chemin du nouveau fichier de migration qui vient d'etre crée.<br><br>

               La dérnière étape est mettre à jour la base de données gràce à cette migration? avec la ligne de commande qui est proposée , à savoir: <br><br>
               "php bin/console doctrine:migration:migrate" 
               <br><br>

               Nous avons un message d'avertissement qui nous prévient que si nous validons le schéma de la base de données étant mis à jour, nous pourrions perdre des données. Notre BDD est au courant que sa dernière structure dépebd de la dernière classe de migration. Veillons donc tounours à ce que la dernbière classe de miogration soit bien éxécutée.
               
               
               
               
        
               
          </p>
        </div>
      </div>
    </div>
  </body>
</html>