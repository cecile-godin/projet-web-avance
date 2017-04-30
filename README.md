1) Une fois que vous avez téléchargé le projet, rendez-vous dans votre dossier de projet via le terminal.
	cd <chemin du dossier>

2) Lancez un serveur php
	php -S localhost:8000

3) Vérifiez que vous avez composer.
	composer --version

3bis) Si composer n'est pas installé, le faire grâce au site officiel
	https://getcomposer.org/download/

4) Assurez-vous de l'installation de Node et npm
	nodejs -v
	npm -v

4bis) Si Node n'est pas installé, le faire grâce au site officiel.
	https://nodejs.org/en/download/

5)Chargez les articles dans la base de données
	php cli/import.php

6) Installez webpack
	npm install --save babel-loader babel-core webpack

7) Ouvrez votre navigateur et tapez "localhost:8000" dans la barre d'addresse. Vous pouvez visionner le projet.

