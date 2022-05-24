<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <script type="text/javascript" src="scripts/speech-input.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>audio</title>
 </head>
 <body>
  <p>Словарный диктант</p>
  <audio controls>
    <source src="audio/Record (online-voice-recorder.com).ogg" type="audio/ogg; codecs=vorbis">
    <source src="audio/Record (online-voice-recorder.com).mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="audio/Record (online-voice-recorder.com).mp3">Скачайте музыку</a>.
  </audio>
  <form method="" action = "">
        <table>
            <tr>
                <td>Ввод диктанта</td>
                <td><textarea id = "set2" value = "" rows = "25" cols = "50" placeholder="Словосочетания разделяются запятой, вблизь к окончанию последнего слова: Галлерея красивая, утро"></textarea></td>
            </tr>
            <tr>
              <td> <input type="button" value = "Проверить" onclick = "Dictionary();"> </td>
            </tr>
        </table>
  </form>
  <td> <h2>Проверка</h2>
    <div id = "set1"> </div> <br>
</td>
 </body>
</html>