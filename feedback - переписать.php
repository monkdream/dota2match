Файл contacts.html

<!DOCTYPE html>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>

#feedback-form {
  max-width: 400px;
  padding: 2%;
  border-radius: 3px;
  background: #f1f1f1;
}
#feedback-form [required] {
  width: 100%;
  box-sizing: border-box;
  margin: 2px 0 2% 0;
  padding: 2%;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 3px;
  box-shadow: 0 1px 2px -1px rgba(0,0,0,.2) inset, 0 0 transparent;
}
#feedback-form [required]:hover {
  border-color: #7eb4ea;
  box-shadow: 0 1px 2px -1px rgba(0,0,0,.2) inset, 0 0 transparent;
}
#feedback-form [required]:focus {
  outline: none;
  border-color: #7eb4ea;
  box-shadow: 0 1px 2px -1px rgba(0,0,0,.2) inset, 0 0 4px rgba(35,146,243,.5);
  transition: .2s linear;
}
#feedback-form [type="submit"] {
  padding: 2%;
  border: none;
  border-radius: 3px;
  box-shadow: 0 0 0 1px rgba(0,0,0,.2) inset;
  background: #669acc;
  color: #fff;
}
#feedback-form [type="submit"]:hover {
  background: #5c90c2;
}
#feedback-form [type="submit"]:focus {
  box-shadow: 0 1px 1px #fff, inset 0 1px 2px rgba(0,0,0,.8), inset 0 -1px 0 rgba(0,0,0,.05);
}


<form method="POST" id="feedback-form">
Как к Вам обращаться:
<input type="text" name="nameFF" required placeholder="фамилия имя отчество" x-autocompletetype="name">
Email для связи:
<input type="email" name="contactFF" required placeholder="адрес электронной почты" x-autocompletetype="email">
Ваше сообщение:
<textarea name="messageFF" required rows="5"></textarea>
<input type="submit" value="отправить">
</form>

<script>
document.getElementById('feedback-form').onsubmit = function(){
  var http = new XMLHttpRequest();
  http.open("POST", "contacts.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("nameFF=" + this.nameFF.value + "&contactFF=" + this.contactFF.value + "&messageFF=" + this.messageFF.value);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
      alert(http.responseText + ', Ваше сообщение получено.\nНаши специалисты ответят Вам в течении 2-х дней.\nБлагодарим за интерес к нашей фирме!');
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  return false;
}
</script>
Файл contacts.php

<?
if (array_key_exists('messageFF', $_POST)) {
  mail ("свой@yandex.ru",
        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo $_POST['nameFF'];
}
?>