<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Missile Command</title>
    <link rel="stylesheet" href="assets/stylesheets/style.css">
    <link rel="icon shortcut" href="assets/images/nave.ico">
    <link rel="stylesheet" href="http://codemirror.net/lib/codemirror.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/3024-day.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/3024-night.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/ambiance.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/base16-dark.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/base16-light.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/cobalt.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/eclipse.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/elegant.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/erlang-dark.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/lesser-dark.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/midnight.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/monokai.css">
    <link rel="stylesheet" href="http://codemirror.net/theme/neat.css">
    <!-- chosen theme stylesheet -->
    <!-- <link rel="stylesheet" href="codemirror-5.15.2/theme/3024-night.css">-->
    <link rel="stylesheet" href="codemirror-5.15.2/theme/blackboard.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js"></script>
    <script src="codemirror-5.15.2/lib/codemirror.js"></script>
    <script src="codemirror-5.15.2/mode/javascript/javascript.js"></script>
    <script src="codemirror-5.15.2/mode/xml/xml.js"></script> 
    <link rel="stylesheet" href="codemirror-5.15.2/lib/codemirror.css">  
  </head>

  <style type="text/css">

    .firsLevel::after{
      content: url('medal1.png');
      margin-left: 10px;

    }

    .secondLevel::after{
      content: url('medal3.png');
      margin-left: 10px;

    }

    #box_text{  
      position: relative;
    }

    button{
      margin-top:  30px;
      margin: 25px;
    }

  	.btn {
      background: #354d5e;
      background-image: -webkit-linear-gradient(top, #354d5e, #787878);
      background-image: -moz-linear-gradient(top, #354d5e, #787878);
      background-image: -ms-linear-gradient(top, #354d5e, #787878);
      background-image: -o-linear-gradient(top, #354d5e, #787878);
      background-image: linear-gradient(to bottom, #354d5e, #787878);
      -webkit-border-radius: 9;
      -moz-border-radius: 9;
      border-radius: 9px;
      font-family: 'Lato', sans-serif;
      color: #ffffff;
      font-size: 20px;
      padding: 9px 20px 10px 20px;
      text-decoration: none;
    }

    .btn:hover {
      background: #000000;
      background-image: -webkit-linear-gradient(top, #000000, #1e28b3);
      background-image: -moz-linear-gradient(top, #000000, #1e28b3);
      background-image: -ms-linear-gradient(top, #000000, #1e28b3);
      background-image: -o-linear-gradient(top, #000000, #1e28b3);
      background-image: linear-gradient(to bottom, #000000, #1e28b3);
      text-decoration: none;
    }

    .btn2 {
      width: 75px;
      margin-top: -45px;
      float: right;
      background: #354d5e;
      background-image: -webkit-linear-gradient(top, #354d5e, #787878);
      background-image: -moz-linear-gradient(top, #354d5e, #787878);
      background-image: -ms-linear-gradient(top, #354d5e, #787878);
      background-image: -o-linear-gradient(top, #354d5e, #787878);
      background-image: linear-gradient(to bottom, #354d5e, #787878);
      -webkit-border-radius: 4;
      -moz-border-radius: 4;
      border-radius: 4px;
      font-family: 'Lato', sans-serif;
      color: #ffffff;
      font-size: 14px;
      padding: 5px 7px 5px 7px;
      text-decoration: none;
    }

    .btn2:hover {
      background: #d12323;
      background-image: -webkit-linear-gradient(top, #d12323, #c92020);
      background-image: -moz-linear-gradient(top, #d12323, #c92020);
      background-image: -ms-linear-gradient(top, #d12323, #c92020);
      background-image: -o-linear-gradient(top, #d12323, #c92020);
      background-image: linear-gradient(to bottom, #d12323, #c92020);
      text-decoration: none;
    }

   .disabled{
      background-color: #511 !important;
      background: #511 !important;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width:520px; 
      height:482px;
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      margin-left: 1%;
    }

    /* Modal Content */
    .modal-content {
        background-color: #000000;
        margin: auto;
        padding: 20px;
        border: 10px solid #ffff00;
        width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .btn3 {
      background: #354d5e;
      background-image: -webkit-linear-gradient(top, #354d5e, #787878);
      background-image: -moz-linear-gradient(top, #354d5e, #787878);
      background-image: -ms-linear-gradient(top, #354d5e, #787878);
      background-image: -o-linear-gradient(top, #354d5e, #787878);
      background-image: linear-gradient(to bottom, #354d5e, #787878);
      -webkit-border-radius: 4;
      -moz-border-radius: 4;
      border-radius: 4px;
      font-family: 'Lato', sans-serif;
      color: #ffffff;
      font-size: 14px;
      padding: 5px 7px 5px 7px;
      text-decoration: none;
    }

    .btn3:hover {
      background: #d12323;
      background-image: -webkit-linear-gradient(top, #d12323, #c92020);
      background-image: -moz-linear-gradient(top, #d12323, #c92020);
      background-image: -ms-linear-gradient(top, #d12323, #c92020);
      background-image: -o-linear-gradient(top, #d12323, #c92020);
      background-image: linear-gradient(to bottom, #d12323, #c92020);
      text-decoration: none;
     }

    #select_level {
      color: #ffff00;
    }

    h4 {
      color: #ffff00;
      font-family: 'Lato', sans-serif;
      text-align: center;
      margin-bottom: 15px;
      margin-top: 10px;
    }
    
    .modalDialog {
      position: fixed;
      font-family: Arial, Helvetica, sans-serif;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0,0,0,0.8);
      z-index: 99999;
      opacity:0;
      -webkit-transition: opacity 400ms ease-in;
      -moz-transition: opacity 400ms ease-in;
      transition: opacity 400ms ease-in;
      pointer-events: none;
    }

    .modalDialog:target {
      opacity:1;
      pointer-events: auto;
    }

    .modalDialog > div {
      width: 600px;
      height: 500px;
      position: relative;
      margin: 5% auto;
      padding: 5px 20px 13px 20px;
      border-radius: 10px;
      background: #fff;
      background: -moz-linear-gradient(#fff, #999);
      background: -webkit-linear-gradient(#fff, #999);
      background: -o-linear-gradient(#fff, #999);
    }

    .close1 {
      background: #606061;
      color: #FFFFFF;
      line-height: 25px;
      position: absolute;
      right: -12px;
      text-align: center;
      top: -10px;
      width: 24px;
      text-decoration: none;
      font-weight: bold;
      -webkit-border-radius: 12px;
      -moz-border-radius: 12px;
      border-radius: 12px;
      -moz-box-shadow: 1px 1px 3px #000;
      -webkit-box-shadow: 1px 1px 3px #000;
      box-shadow: 1px 1px 3px #000;
    }

    .close1:hover { background: #00d9ff; }

    .lint-error {
      font-family: arial;
      font-size: 70%; 
      background: #ffa;
      color: #a00; 
      padding: 2px 5px 3px; 
    }

    .lint-error-icon {
      color: white;
      background-color: red;
      font-weight: bold; 
      border-radius: 50%; 
      padding: 0 3px; 
      margin-right: 7px;
    }
  </style>

  <body background="sfondo.jpg"> 
    <div class="leftSide">
      <h1 class="testo">Missile Command</h1>
      <?php
        session_start();
        if (!session_is_registered('autorizzato')) {
          echo "<script>window.location.href='index.php';</script>";
          die;
        }

        switch ($_SESSION["livello_max"]) {
          case 1:
            echo "<h4>Grado: Tenente</h4>";
          break;
          case 2:
            echo "<h4>Grado: Capitano</h4>";
          break;
          case 3:
            echo "<h4>Grado: Maggiore</h4>";
          break;
          case 4:
            echo "<h4 class='firsLevel'>Grado: Maggiore</h4>";
          break;
          case 5:
            echo "<h4 class='firsLevel'>Grado: Tenente Colonnello</h4>";
          break;
          case 6:
            echo "<h4 class='firsLevel'>Grado: Colonnello</h4>";
          break;
          case 7:
            echo "<h4 class='secondLevel'>Grado: Colonnello</h4>";
          break;
          case 8:
            echo "<h4 class='secondLevel'>Grado: Generale Maggiore</h4>";
          break;
          case 9:
            echo "<h4 class='secondLevel'>Grado: Comandante</h4>";
          break;
          case 10:
            echo "<h4 class='secondLevel'>Grado: Comandante Supremo</h4>";
          break;
          
          default:
            echo "<h4>Grado: Tenente</h4>";
          break;
        }
      ?>
      <div class="container">
      <div class="crosshair"></div>
    </div>

    <canvas width="510" height="460"></canvas>
    <button  class="btn" id="myBtn" type="button">Esegui</button>
    <button  class="btn" id="myBtn1" type="button">Valuta</button>
    <button  class="btn" id="btnMenu" type="button">Menu</button>
  
    </div>
     <div class="rightSide">
       <div id="box_text">
         <div>       
        <h1 id="scritta_editor" class="testo">Console</h1>
         </div>
         <div>
         <button  class="btn2" id="myBtn2" type="button">Ripristina</button>
         <button  class="btn2" id="myBtn5" type="button" onclick="window.location.href='#openModal'">Tutorial</button>
         </div>
       </div>
       <textarea id="code" name="code" style = "display:none;">
			</textarea>
    </div>

    <!-- The Modal -->
    <div id="openModal" class="modalDialog">
      <div>
      <a id="close_button" href="#close1" title="Chiudi" class="close1">X</a>
      <center>
      <h2>Tutorial</h2>
      <video id="myVideo" width="520" height="440" controls poster="/assets/images/nave.ico">
      <source src="movie.mp4" type="video/mp4" />
      <source src="movie.ogg" type="video/ogg" />
      Your browser does not support the video tag.
      </center>
      </video>
      </div>
    </div>

    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">×</span>
        <h2 id="select_level">Seleziona livello</h2>
        <button id="level_one" class="btn3">Livello 1</button>
        <button id="level_two" class="btn3">Livello 2</button>
        <button id="level_three" class="btn3">Livello 3</button>
        <br>
        <button id="level_four" class="btn3">Livello 4</button>
        <button id="level_five" class="btn3">Livello 5</button>
        <button id="level_six" class="btn3">Livello 6</button>
        <br>
        <button id="level_seven" class="btn3">Livello 7</button>
        <button id="level_eight" class="btn3">Livello 8</button>
        <button id="level_nine" class="btn3">Livello 9</button>
      </div>
    </div>

    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script src="setColoreLivello.js"></script>
    <script>
      window.onload = function() {
        var vid = document.getElementById("myVideo"); 
        document.getElementById("close_button").addEventListener("click", function(){
          vid.pause();
        });
        var visibility_button;
        var s2 = '"true"';
        var oReq = new XMLHttpRequest(); //New request object
        oReq.onload = function() {
          //This is where you handle what to do with the response.
          //The actual data is found on this.responseText
          visibility_button=this.responseText; //Will alert: 42
        };
        oReq.open("get", "get-visibility.php", false);
        //                               ^ block the rest of the execution.
        //                                 Don't wait until the request finishes to 
        //                                 continue.
        oReq.send();
        if(visibility_button == null)
          visibility_button == '"false"';
        if(visibility_button.localeCompare(s2) == 0 ){
          document.getElementById('myBtn').style.visibility = 'hidden';
          document.getElementById('myBtn1').style.visibility = 'hidden';
        }
        else{
          document.getElementById('myBtn').style.visibility = 'visible';
          document.getElementById('myBtn1').style.visibility = 'visible';
        }

        var final;
        var readOnlyLines = new Array();
        function onNewLine(e){
          if((final[1].localeCompare("livello_one")==0) || 
              (final[1].localeCompare("livello_two")==0) || 
              (final[1].localeCompare("livello_three")==0)){
            window.editor.replaceSelection("");
          }
          else{
            window.editor.replaceSelection("\n");
          }
        }
        window.editor = CodeMirror.fromTextArea(document.getElementById("code"), {
          mode: "javascript",
          lineNumbers: true,
          styleSelectedText: true,
          theme : 'blackboard',
          extraKeys:{
            "Ctrl-Space":"autocomplete",
            "Enter": onNewLine
          }
        });
        window.editor.setSize(window.innerWidth * 0.52,600);
        function reqListener () {
          console.log(this.responseText);
        }
        var update;
        var s2 = "true";
        var oReq = new XMLHttpRequest(); //New request object
        oReq.onload = function() {
            //This is where you handle what to do with the response.
            //The actual data is found on this.responseText
            update=this.responseText; //Will alert: 42
        };
        oReq.open("get", "get-data.php", false);
        //                               ^ block the rest of the execution.
        //                                 Don't wait until the request finishes to 
        //                                 continue.
        oReq.send(); 

        var rawFile = new XMLHttpRequest();
        console.log("updateBefore:" + update);
        update = update.replace(/['"]+/g,'');
        final = update.split(" ");
        console.log("update:" + update);
        console.log(  update.replace(/['"]+/g, ''));
        console.log("s2:" + s2);
        console.log("final1:" + final[0]);
        console.log("final2:" + final[1]);
        console.log("final3:" + final[2]);
        console.log("final4:" + final[3]);
        if(final[0].localeCompare(s2) == 0 && final[2].localeCompare(s2) == 0 )  {
          rawFile.open("GET", "assets/js/livelli/" + final[1] +"/" + final[1] + ".js", false);
        }
        else if (final[0].localeCompare(s2) == 0 && final[2].localeCompare(s2) != 0 ){
          rawFile.open("GET", "assets/js/livelli/" + final[1] + "/" + final[3] +".js", false);
        }
        else{
          rawFile.open("GET", "assets/js/livelli/" + final[1] + "/" + final[1] +".js", false);
        }
        setColorLevel(final[1]);
         
		    rawFile.onreadystatechange = function ()
		    {
          if(rawFile.readyState === 4)
          {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
              var allText = rawFile.responseText;
              window.editor.setValue(allText);
        
              var i;
              var stringa;
              var oReq = new XMLHttpRequest(); //New request object
              oReq.onload = function() {
                  //This is where you handle what to do with the response.
                  //The actual data is found on this.responseText
                  stringa = this.responseText; //Will alert: 42
              };
              oReq.open("get", "get-data-row.php", false);
              //                               ^ block the rest of the execution.
              //                                 Don't wait until the request finishes to 
              //                                 continue.
              oReq.send(); 
              stringa = stringa.replace(/['"]+/g,'');
              var array_row = stringa.split(" ");
              var k=0;
              
              for(i = 1;i < array_row.length -1 ;i+=2){
                console.log(array_row[i]);
                for(j=parseInt(array_row[i]); j < parseInt(array_row[i + 1]); j++){
                  readOnlyLines[k]=j; 
                  k++;
                  window.editor.addLineClass( j, 'background', 'disabled');
                }
              }
            }
          }
		    }
		    rawFile.send(null);
        console.log(readOnlyLines);
		    editor.on('beforeChange',function(cm,change) {
          if ( ~readOnlyLines.indexOf(change.from.line) ) {
            change.cancel();
          }
          document.getElementById("myBtn1").disabled = true;
          document.getElementById("myBtn1").style.background = 'red'; 
			  });
        var widgets = [];
        document.getElementById("myBtn").addEventListener("click", function(){
        
          for (var i = 0; i < widgets.length; ++i)
            window.editor.removeLineWidget(widgets[i]);

          widgets.length = 0;
          var data = new FormData();
          data.append("data" , window.editor.getValue());
          var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
          document.getElementById("myBtn1").disabled = false; 
          xhr.open( 'post', 'SaveToFile.php', false);
          JSHINT(editor.getValue());

          for (var i = 0; i < JSHINT.errors.length; ++i) {
            var err = JSHINT.errors[i];
            if (!err) continue;
            var msg = document.createElement("div");
            var icon = msg.appendChild(document.createElement("span"));
            icon.innerHTML = "!!";
            icon.className = "lint-error-icon";
            msg.appendChild(document.createTextNode(err.reason));
            msg.className = "lint-error";
            widgets.push(window.editor.addLineWidget(err.line - 1, msg, {coverGutter: false, noHScroll: true}));
          }

          if(JSHINT.errors.length > 0){
            missileCommand.stopLevel();
            missileCommand.drawSyntaxError();
            $( '.container' ).off( 'click' );
          }
          else{
            xhr.send(data);
            location.reload();
          }
        });
        document.getElementById("myBtn1").addEventListener("click", function(){
          try{
            var test = getTest(window.editor.getValue());
          }
          catch(err){
            var test = getTest();
          }

          if (test == true){
            alert ("Livello passato!");
            var data = new FormData();
            data.append("data" , window.editor.getValue());
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post','next_level.php', false);
            xhr.send(data);
            location.reload();
          }
          else
            alert("Valore sbagliato: riprova ancora");
        });
        document.getElementById("myBtn2").addEventListener("click", function(){
          var data = new FormData();
          data.append("data" , window.editor.getValue());
          var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
          xhr.open( 'post', 'ripristina.php', false);
          xhr.send(data);
          location.reload();
        });
        
        var modal = document.getElementById('myModal');
        
        document.getElementById("btnMenu").addEventListener("click",function(){
          modal.style.display = "block";
        });

        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
        }
        document.getElementById("level_one").addEventListener("click", function(){
          var data = new FormData();
          data.append("data" ,"1");
          var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
          xhr.open( 'post', 'menu-level.php', false);
          xhr.send(data);
          location.reload();
        });
        document.getElementById("level_two").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 2){
            var data = new FormData();
            data.append("data" ,"2");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });
           
        document.getElementById("level_three").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 3){
            var data = new FormData();
            data.append("data" ,"3");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });

        document.getElementById("level_four").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 4){
            var data = new FormData();
            data.append("data" ,"4");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            // localStorage.setItem('update','true');
            //    alert("sono qui post");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });
    
        document.getElementById("level_five").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 5){
            var data = new FormData();
            data.append("data" ,"5");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });
        
        document.getElementById("level_six").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 6){
            var data = new FormData();
            data.append("data" ,"6");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });

        document.getElementById("level_seven").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 7){
            var data = new FormData();
            data.append("data" ,"7");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });

        document.getElementById("level_eight").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 8){
            var data = new FormData();
            data.append("data" ,"8");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });

        document.getElementById("level_nine").addEventListener("click", function(){
          var check;
          var oReq = new XMLHttpRequest(); //New request object
          oReq.onload = function() {
              //This is where you handle what to do with the response.
              //The actual data is found on this.responseText
              check=this.responseText; //Will alert: 42
          };
          oReq.open("get", "check_level.php", false);
          //                               ^ block the rest of the execution.
          //                                 Don't wait until the request finishes to 
          //                                 continue.
          oReq.send(); 

          var max_level = parseInt(check);
          if(max_level >= 9){
            var data = new FormData();
            data.append("data" ,"9");
            var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
            xhr.open( 'post', 'menu-level.php', false);
            xhr.send(data);
            location.reload();
          }
          else{
            alert("Livello non sbloccato.");
          }
        });
      };
    </script>
    <?php
      session_start();        

      if(isset($_SESSION['update']) && !empty($_SESSION['update'])) {
        echo "<script src=assets/js/livelli/".$_SESSION['nome_livello']."/missile_command.js></script>";
        if((strcmp($_SESSION["update"],"true") == 0) && (strcmp($_SESSION["first_time"],"false") == 0)){
          echo "<script src=assets/js/livelli/".$_SESSION['nome_livello']."/".$_SESSION['cod'].".js></script>";
        }
        else{
          echo "<script src=assets/js/livelli/".$_SESSION['nome_livello']."/".$_SESSION['nome_livello'].".js></script>";
          echo "<script>  document.getElementById('myBtn1').disabled = true;
                  document.getElementById('myBtn1').style.background = 'red'; </script>";
        }
      }
      else{
        $_SESSION['num_livello'] = 1;
        $_SESSION['nome_livello'] = "livello_one";
        $_SESSION['first_time'] = "true";
        echo "<script>  document.getElementById('myBtn1').disabled = true;
              document.getElementById('myBtn1').style.background = 'red'; </script>";
        $_SESSION["livello_max"] = 1;
        $_SESSION["vittoria"] = "false";
        $array =  array(0,28,29,80);
        $_SESSION['editable_row'] = $array;
        echo "<script src=assets/js/livelli/".$_SESSION['nome_livello']."/missile_command.js></script>";  
        echo "<script src=assets/js/livelli/".$_SESSION['nome_livello']."/".$_SESSION['nome_livello'].".js></script>";
      }
    ?>
  </body>
</html>