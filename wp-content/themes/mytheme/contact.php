<?php
/*

Template Name: Contact

*/
?>

<?php 
get_header();

// Call the controller
require_once 'controller.php';

// If $_POST["nickname"] and $_POST["message"]  are not empty, we send the message
if(!empty($_POST["nickname"]) && !empty($_POST["message"])){
    $send = new Controller;
    $send->sendMessage();
    echo '<p style="color: green; width: 100%; text-align: center; padding-top: 1rem;"> Message envoyé ! </p>';
}

// If $_POST["id"] is not empty, we delete the message by ID
if (!empty($_POST["id"])){
    $id = $_POST["id"];
    $delete = new Controller;
    $delete->deleteMessage($id);
    echo '<p style="color: red; width: 100%; text-align: center; padding-top: 1rem;">Message supprimé ! </p>';
}
?>

<!--  HTML template -->
<div class="contact">
  <h1>Contact</h1>
  <form clas="form-send" method='POST' action=''>
    <div class="form-group">
      <label for="nickname">Pseudo :</label>
      <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Ton pseudo">
    </div>
    <div class="form-group">
    <label for="message">Message :</label>
      <input type="text" class="form-control" name="message" id="message" placeholder="Ton message">
    </div>
    <button type="submit" class="btn btn-dark">Envoyer</button>
  </form>
  <hr>
  <div>
      <h2>Messages</h2>
      <?php
          // Show the messages
          $show = new Controller;
          echo $show->showAllMessages()
      ?>
  </div>
</div>
<!--  End HTML template -->

<?php get_footer() ?>