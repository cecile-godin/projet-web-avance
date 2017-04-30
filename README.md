<ol>
<li>1) Une fois que vous avez téléchargé le projet, rendez-vous dans votre dossier de projet via le terminal.
<div class="highlight hightlight-source-shell">	
<pre>	cd <chemin du dossier> </pre>
</div>
</li>
<li>2) Lancez un serveur php
<div class="highlight hightlight-source-shell">	
<pre>	php -S localhost:8000 </pre>
</div>
</li>
<li>3) Vérifiez que vous avez composer.
<div class="highlight hightlight-source-shell">	
<pre>	composer --version </pre>
</div>
</li>
<li>3bis) Si composer n'est pas installé, le faire grâce au site officiel
<div class="highlight hightlight-source-shell">	
<pre>	https://getcomposer.org/download/</pre>
</div>
</li>
<li>4) Assurez-vous de l'installation de Node et npm
<div class="highlight hightlight-source-shell">	
<pre>	nodejs -v
	npm -v</pre>
</div>
</li>
<li>4bis) Si Node n'est pas installé, le faire grâce au site officiel.
<div class="highlight hightlight-source-shell">	
<pre>	https://nodejs.org/en/download/</pre>
</div>
</li>
<li>5)Chargez les articles dans la base de données
<div class="highlight hightlight-source-shell">	
<pre>	php cli/import.php </pre>
</div>
</li>
<li>6) Installez webpack
<div class="highlight hightlight-source-shell">	
	npm install --save babel-loader babel-core webpack
</div>
</li>
<li>7) Ouvrez votre navigateur et tapez "localhost:8000" dans la barre d'addresse. Vous pouvez visionner le projet.
</li>
</ol>
