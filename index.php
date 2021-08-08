<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <script src="./js/jquery-3.6.0.min.js" defer></script>
  <script src="./js/main.js" defer></script>
  <script src="./js/checkInputs.js" defer></script>
  <title>Honey Hunters</title>
</head>
<body>
  
    <header class="header">
      <div class="container">
        <a href="#"><img src="./img/logo.png" width="264" height="54" alt="logo HoneyHunters"></a>
      </div>
    </header>
    <main>
      <section class="form">
        <div class="container">
        <!-- <h1>Отзывы</h1> -->
          <img class="logo-mail" src="./img/mail.png" width="240" height="240" alt="logo mail">

          <form id="form">
            <div class="form-fields">
              <div class="form-fields__inputs">
                <div>
                  <label class="form-label" for="name">Имя <span>*</span></label>
                  <input class="form-control name" type="text" name="name" id="name">
                </div>
                
                <div>
                  <label class="form-label" for="email">E-mail <span>*</span></label>
                  <input class="form-control email" type="email" name="email" id="email">
                </div>
              </div>
              <div class="form-fields__text-area">
                <label class="form-label" for="comment">Комментарий <span>*</span></label>
                <textarea class="form-control comment" name="comment" id="comment"></textarea>
              </div>
            </div>
            <div class="button">
              <input class="btn btn-danger" type="submit" value="Записать">
            </div>
          </form>
        </div>
      </section>

      <section class="comments">
        <div class="container">
          <h2 class="comments__header">Выводим комментарии</h2>
        
          <div class="users-cards">
            <?
            require_once('handler.php')

            ?>

          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
      <a href="#"><img width="211" height="43" src="./img/logo.png" width="264" height="54" alt="logo HoneyHunters"></a>

      <div class="socials">
        <a href="https://vk.com/" target="_blank"><img width="40" height="40" src="./img/vk.png" alt="vkontakte"></a>
        <a href="https://www.facebook.com/" target="_blank"><img width="40" height="40" src="./img/fb.png" alt="facebook"></a>
      </div>
      </div>
    </footer>
  
</body>
</html>