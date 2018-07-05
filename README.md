# online-notepad
Challenge Code 42

**INSTALLATION D'ONLINE NOTEPAD**

*Suivez les instructions suivantes après avoir cloné le dépot:*

1. Configurez la connexion à la base de donnée.

        - Editez le fichier ".env", modifiez les sections suivantes :
                DB_DATABASE=
                DB_USERNAME=
                DB_PASSWORD=
          Elles correspondent au nom de la base de donée, à l'identifiant 
          et le mot de passe de connexion à la base de donnée mySQL.
       
       
2. Connectez l'essemble à la base de donée.
        
        - Il vous faut au préalable avoir créé une base de donée portant
          un nom identique à celui situé sur la ligne "DB_DATABASE" du fichier ".env".
        
        - Pour liée la base donnée, exécutez cette commande 
          à la racine du dossier :
                php artisan migrate
        
        
3. Hébergez le site en local.

        - Pour héberger le site il vous suffit d'être à la racine du dossier
          puis d'exécuter la commande suivante via un terminal :
                php artisan serve
                
4. Consultez le site.
       
       - Depuis votre navigateur internet inscrivez dans la barre URL l'adresse 
         local donnée par le terminal suite à l'exécution de la commande.
