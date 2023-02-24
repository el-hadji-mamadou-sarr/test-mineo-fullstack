# Test-mineo-fullstack
Test php jquerry ajax html et bootstrap

## Execution en local
- Sur visual studio code ouvir le live server ce qui détectera automatiquement le fichier `index.html`
- Si vous avez un server local mettez le dossier server dans le répertoire de votre server oubien changer l'url du serveur 
 ```php 
 $.ajax({
  url:"http://localhost/server/script.php",
  method:"POST",
  data:{nombre: nombre},
  dataType: "html",
  success: function(resultat){    
      $("#pyramide").html(resultat)
      $("#message").html(message)
  }
  })
 ```
 
## Images


![image-test-mineo](https://user-images.githubusercontent.com/67522046/219964196-08bf74e1-724e-4862-943a-9542a7d4bcc0.PNG)
