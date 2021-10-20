# JAB
Arthur André (nexexpoarthur) <br>
Benjamin Brault-Renault (benjaminb-35) <br>
Jeff labillois (valknu-t) <br> <br>

Objectif 1 <br>
1	– Github pour gestion code et documentation <br>
2	– Jenkins pour l’automatisation des tests [Réaliser pas de tests unitaires et intégration de l’app] <br>
JAB <br>
JAB <br>
https://jenkins-le-guide-complet.github.io/html/chapter-automated-testing.html
<br>
3	– SonarQube pour qualité du code [Utiliser les normes de style/codage existantes] <br> <br>

Objectif 2 <br>
1	– Réaliser un site Web [NGINX] qui permet de visualiser 2 pages différentes à partir d’une authentification réussie (Bonjour Mr/Mme X) <br>
2	– Une page en cas d’échec d’authentification <br> <br>

-	Code et doc sur le Github <br>
-	À chaque « commit » -> lancement des tests dans Jenkins + SonarQube

liens pour installer les outils pour la machine virtuel : https://drive.google.com/file/d/1TyB-dGErM55UzIQpBgKj0TOgkHaq9F9g/view?usp=sharing

--------------------------------------------------------------------------------------------------

Les différentes étapes du projet :

Etape 1 :
Mise en place d'une machine virtuelle sur Azure.

Etape 2 :
Création d'un répertoire Github public.

Etape 3 :
Installer les outils nécessaires :
  - Nginx (Serveur local)
  - JDK
  - Jenkins
  - Sonarqube
  - GIT
  - Ngrok
 
Etape 4 :
Démarrer le serveur local avec Nginx. 

Etape 5 :
Envoyer l'URL de l'environnement Jenkins vers un URL public via Ngrok.

Etape 6 :
Configurer Github :
  - Ajouter un Webhook :
    - https://www.blazemeter.com/blog/how-to-integrate-your-github-repository-to-your-jenkins-project (Payload : url Ngrok de Jenkins)

Etape 7 :
Configurer Jenkins :
https://www.blazemeter.com/blog/how-to-integrate-your-github-repository-to-your-jenkins-project
https://www.youtube.com/watch?v=F5QKON50xP8

