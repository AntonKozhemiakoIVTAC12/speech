/*function Dictionary(){
    let str = "Известный русский художник, сосновый бор, могучие сосны безмолвная тишина, синее небо, пышные вершины, прозрачный ручеек, лесная даль, чистый песок, летнее солнце, могучие корабли, солнечная пушка, красноватые стволы, красота природы.";
    let words = str.split(" ");

    let dict = [];
    for(let x = 0; x < words.length; x++)
        dict[words[x]] = true;

    //let messageWords = " ".split(" ");
    let messageWords = document.getElementById('set2').value.split(" ");
    let outMessage = "";

    for(let x = 0; x < messageWords.length; x++) {
        if(dict[messageWords[x]] != true) {
            outMessage += messageWords[x].toUpperCase() + " ";
    }   else {
            outMessage += messageWords[x] + " ";
    }
    }
    document.getElementById('set1').innerHTML=outMessage;
}*/

function Dictionary(){
    let str = "Известный русский художник, сосновый бор, могучие сосны безмолвная тишина, синее небо, пышные вершины, прозрачный ручеек, лесная даль, чистый песок, летнее солнце, могучие корабли, солнечная пушка, красноватые стволы, красота природы.";

    let strInput = document.getElementById('set2').value;
    let inputWords = str.split(" ");
    let messageWords = strInput.split(" ");

    let outMessage = "";

    let id = 0;
    for(let x = 0; x < inputWords.length; x++) {
      let tId = messageWords.indexOf(inputWords[x], id);
      if(tId != -1) { 
        id = tId;
        outMessage += inputWords[x] + " ";
      } else {
        outMessage += inputWords[x].toUpperCase() + " ";
      }
    }

    document.getElementById('set1').innerHTML=outMessage;
}
