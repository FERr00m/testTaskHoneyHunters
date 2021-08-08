<?
require_once('db.php');

if($_POST['userData']) {
  
  $data = json_decode($_POST['userData'], true);

  $name = htmlspecialchars($data['name']);
  $email = htmlspecialchars($data['email']);
  $comment = htmlspecialchars($data['comment']);
  
  $stmt = $dbh->prepare("INSERT INTO users (`name`, `email`, `comment`) VALUES (:name, :email, :comment)");
  $stmt->execute([
    'name'=>$name,
    'email'=>$email,
    'comment'=>$comment,
  ]);
}

$allUsers = $dbh->query("SELECT * FROM users");

if ($allUsers->rowCount()) {
    foreach($allUsers as $user):?>

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h5 class="user-title"><?=$user['name']?></h5>
        </div>
        <div class="card-text">
          <p class="user-email"><?=$user['email']?></p>
          <p class="user-comment"><?=$user['comment']?></p>
        </div>
      </div>
    </div> 
    <? endforeach;
} else {
    echo 'Здесь пока нет никаких комментариев :(';
}

