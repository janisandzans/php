<!DOCTYPE html>
<html>
  <head>
    
  <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <div class="container">
        <h1>Blogs</h1>
        <p>Pievienojies no visas pasaules</p>
        <a class="btn" href="#">Uzzināt vairāk</a>
        <?php include 'header.php';?>
      </div>
    </div>

    <div class="nav">
      <div class="container">
        <ul>
        <?php $elements = ['Reģistrēties', 'Notikumi', 'Sponsori', 'Par mums', 'Kontakti'];
        foreach ($elements as $element) {
          echo "<li>$element</li>";
        } 
        ?>
        </ul>
      </div>
    </div>

    <div class="nav">
      <div class="container">
        <ul>
        <?php $elements = ['Dalīties', 'Pieredze', 'Raksti', 'Seko mūsu Facebook, Instragram un Youtube kanāliem'];
        foreach ($elements as $element) {
          echo "<li>$element</li>";
        } 
        ?>
        </ul>
      </div>
    </div>

    <?php $posts = [

['title' => 'Blogs', 'text' => 'Interesanti raksti'], ['title' => 'Idejas', 'text' => 'Atrodi šeit'],

];

  foreach ($posts as $post) { 

    $title=$post['title'];
    $text=$post['text'];

echo "<h1>$title</h1><br/><p>$text</p>";

   }

         ?>


    <div class="main">
      <div class="container">
        <img src="https://pngimg.com/uploads/question_mark/question_mark_PNG56.png" height="180" width="196">
        <h2>Iedvesmojošas blogošanas idejas</h2>
        <p>Kādi ir jūsu mērķi nākamajiem sešiem vai pat 12 mēnešiem?</p>
        <p>Dokumentējiet savu pieredzi, mēģinot kaut ko jaunu.</p>
        <p>Dokumentējiet savu pieredzi, atsakoties no kaut kā.</p>
        <p>Dalieties ar labākajiem padomiem, ko jebkad esat saņēmis.</p>
        <p>Kāds ir tavs sapņu darbs, karjera vai bizness?</p>
        <p>Dalieties ar sava uzņēmuma misijas un redzējuma izteikumiem.</p>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h2>Esi Online</h2>
        <p>Un pastāsti pārējiem.</p>
        <a class="btn" href="#">Reģistrēties</a>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <p>&copy; Blogs</p>
      </div>
    </div>
    
    <?php
          echo "Laiks ir " . date("h:i:sa");
          include 'footer.php';?>
  </body>
</html>