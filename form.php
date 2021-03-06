<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QPack - Queen's University</title>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="CSS/styles.css" />
</head>

<body>
    <header>
        <nav class = "col-wide">
            <a id = title href="https://qpack-cisc325.appspot.com/dash" title="Go to Homepage">QPack</a>
            <a id = user-name href="" title="Go to Profile">User Name</a>
        </nav>
    </header>

    <main>
        <div class = "col-narrow">
            <img id=side-menu src="img/side_menu.jpg" alt="Naviagation Menu">
        </div>
        <div class="centre-page">

          <div class = "col-wide">
            <h1>Package Notification</h1>

            <a class = dashboard-btn href = "https://qpack-cisc325.appspot.com/dash" style = "text-decoration: none">View Package Info</a>

            <div class = "tab" id = choose-desk>
              <center><h2>Choose your Desk</h2></center>
              <div class = "desk" id = "desks">
                <!--desks here-->
              </div>
            </div>

            <div class = "tab" id = choose-building>
              <center><h2>Choose your Building</h2></center>
              <div class = "building" id = "buildings">
                <!-- residences here-->
              </div>
            </div>

            <div class = "tab" id = choose-students>
                <center><h2>Choose Students</h2></center>
                <center><button onclick="toggleShow()" id="logbook-path" title = "Upload a picture of your log book to automatically choose students">Log book<i class="material-icons" id="info" style="font-size:25px;">info_outline</i></button></center>
                <div class="pop-up" id="upload-photo" style="display:none;">
                  <button id="exit" onclick="toggleShow()"><i class="material-icons" id="exit-back" style="font-size:40px;">close</i></button>
                  <center><h3 id="log-title">LogBook</h3></center>
                  <div id="options">

                    <label class="opt" id="access_cam" onclick="captureAndSave()">Take Photo</label>
                    <label class="opt" id="opt-up" onclick="analyzeUpload()">
                      <input type="file" accept="image/*"/>
                      Upload Photo
                    </label>
                  </div>

                  <!-- If you can get the photo upload to work
                  <form id="imageUpload" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" accept="image/*" />
                    <button type="submit" value="Upload Document">Use this photo</button>
                  </form>
                  <button onclick="googleVision()" id="analyze" style="display:none;">Analyze photo</button>-->

                  <center>
                    <div id="vid-controls" style="display:none;">
                      <div id="vid-canvas"></div>
                      <br><br>
                      <video id="vid-show" autoplay></video>
                      <br>
                      <input id="vid-take" type="button" value="Capture"/>
                    </div>
                  </center>

                  <div id="analyzed-content" style="display:none;">
                    <p id="disclaimer">DISCLAIMER: This is pre-loaded data for this high fiedelity prototype.
                      Data would not be able to be populated by photo of something formatted differently than
                      official Queen's front desk logbook
                    </p>
                    <label class="pre-label" for="emma">Emma Landry
                     <input type="checkbox" class="preload" id="emma" value="Emma Landry" checked>
                     <span class="checkmark"></span>
                    </label>
                    <label class="pre-label" for="dani">Danielle Edward
                     <input type="checkbox" class="preload" id="dani" value="Danielle Edward" checked>
                     <span class="checkmark"></span>
                    </label>
                    <label class="pre-label" for="nico">Nico Duke
                     <input type="checkbox" class="preload" id="nico" value="Nico Duke" checked>
                     <span class="checkmark"></span>
                    </label>
                    <label class="pre-label" for="anth">Anthony Marsili
                     <input type="checkbox" class="preload" id="anth" value="Anthony Marsili" checked>
                     <span class="checkmark"></span>
                    </label>
                    <label class="pre-label" for="kai">Kai Laxdal
                     <input type="checkbox" class="preload" id="kai" value="Kai Laxdal" checked>
                     <span class="checkmark"></span>
                    </label>

                    <button id="use" onclick="useAnalysis()">Use Analyzed Data</button>
                  </div>

                  <!-- End New -->
                </div>

                <center>
                <input type="search" id="student-search" placeholder="Search Students">
                <button id="search" onclick="searchStud()"><i class="material-icons" style="font-size:25px;">search</i></button>
              </center>

                <center><div class="choose-student-list" id="student-names" onclick="checkboxArray()"></div></center>
                  <!--<p id = info-msg>Press Ctrl and F at the same time to search for names.</p></center>-->
            </div>

          	<div class = "tab" id = choose-message>

          		<center>
    						<h2>Choose Message</h2>
    						<h3>Select message type for all recipients</h3>

    						<div class = "horiz-btns" id = "main-msg-btns">
    							<button type = button class = "btn" id = "msg-type" onclick = "chooseAllMessages('arrival')">Package Arrival Notification</button>
    							<button type = button class = "btn" id = "msg-type" onclick = "chooseAllMessages('remind')">Package Reminder</button>
    							<button type = button class = "btn" id = "msg-type" onclick = "chooseAllMessages('fee')">Delivery Fee Notice</button>
    							<button type = button class = "btn" id = "msg-type" onclick = "chooseAllMessages('custom')">Custom Message</button>
    						</div>

    						<h3>or customize for each</h3>
    					<div id = "msg-table" >
    							<!--<label id="label-placeholder">Selected Students Will Appear Here</label>-->

    							<!-- students loaded here -->
    						</div>
              </center>
          	</div>

          	<div class = "tab" id = "confirm-send">
          		<center><h2>Confirm and Send</h2></center>
          	</div>

				  <div class="navBtn">
					<button type="button" class="btn" id="prevBtn" onclick="nextPrev(-1)"><i class="material-icons">chevron_left</i></button>
					<button type="button" class="btn" id="nextBtn" onclick="nextPrev(1)"><i id="next_icon" class="material-icons">chevron_right</i></button>
				  </div>

				<div class="tab-dot" style="text-align:center; margin-top:40px;">
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				</div>

			</div>
    </div>

    </main>

<!--
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    $(document).on('submit', '#imageUpload', function (e) {
    e.preventDefault();
    var data = new FormData($('#imageUpload').get(0));
    $.ajax({
        type: 'POST',
        url: 'config.php',
        data: data,
        processData: false,
        contentType: false,
        success: function ($data) {
            console.log('Succcess');
            $('#success').attr('hidden', false);
            //$('#analyze').css("display", "inline");
        }
    });
  });

</script>

<script type="text/javascript">
function googleVision(){
  var b=JSON.stringify({"requests":[{  "image":{    "source":{"imageUri":"gs://qpack-cisc325.appspot.com/testImg.jpg"}}  ,  "features": [{"type":"TEXT_DETECTION","maxResults":5}]    } ]});
  var e=new XMLHttpRequest;

  e.onload=function(){console.log(e.responseText)};
  //e.open("POST","https://vision.googleapis.com/v1/images:annotate?key=",!0);
  e.send(b)
}
</script> -->

    <script type="text/Javascript">

      // Student "Databases" for each building
      var ade_stu =
      [
        {
          "text" : "Emma Landry",
          "value" : "16ekl@queensu.ca"
        },
        {
          "text" : "Danielle Edward",
          "value" : "16dke@queensu.ca"
        },
        {
          "text" : "Nico Duke",
          "value" : "10sdi@queensu.ca"
        },
        {
          "text" : "Anthony Marsili",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Kai Laxdal",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Jim Bob",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Jessica Stewart",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Kathryn Brown",
          "value" : "16kbe@queensu.ca"
        }
      ];

      var ang_stu =
      [
        {
          "text" : "Kathryn Brown",
          "value" : "16kbe@queensu.ca"
        },
        {
          "text" : "Grace Marco",
          "value" : "16snf@queensu.ca"
        },
        {
          "text" : "William Hensen",
          "value" : "16askn@queensu.ca"
        },
        {
          "text" : "Kai Salomaa",
          "value" : "123ks@queensu.ca"
        },
        {
          "text" : "Bob Jim",
          "value" : "132bj@queensu.ca"
        },
        {
          "text" : "Randy Ellis",
          "value" : "3dpp@queensu.ca"
        }
      ];

      var ban_stu =
      [
        {
          "text" : "Kai Salomaa",
          "value" : "123ks@queensu.ca"
        },
        {
          "text" : "Bob Jim",
          "value" : "132bj@queensu.ca"
        },
        {
          "text" : "Randy Ellis",
          "value" : "3dpp@queensu.ca"
        },
        {
          "text" : "Evelyn Hamster",
          "value" : "yes@queensu.ca"
        },
        {
          "text" : "Nicholas Graham",
          "value" : "2ngo@queensu.ca"
        },
        {
          "text" : "Wendy Powley",
          "value" : "254rfjfl@queensu.ca"
        }
      ];

      var bra_stu =
      [
        {
          "text" : "Jessica Stewart",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Kathryn Brown",
          "value" : "16kbe@queensu.ca"
        },
        {
          "text" : "Grace Marco",
          "value" : "16snf@queensu.ca"
        },
        {
          "text" : "William Hensen",
          "value" : "16askn@queensu.ca"
        },
        {
          "text" : "Kai Salomaa",
          "value" : "123ks@queensu.ca"
        },
        {
          "text" : "Bob Jim",
          "value" : "132bj@queensu.ca"
        },
        {
          "text" : "Randy Ellis",
          "value" : "3dpp@queensu.ca"
        },
        {
          "text" : "Evelyn Hamster",
          "value" : "yes@queensu.ca"
        }
      ];

      var cho_stu =
      [
        {
          "text" : "Grace Marco",
          "value" : "16snf@queensu.ca"
        },
        {
          "text" : "Anya Den Hartog",
          "value" : "16askn@queensu.ca"
        },
        {
          "text" : "Kai Salomaa",
          "value" : "123ks@queensu.ca"
        },
        {
          "text" : "Blessy Rivera",
          "value" : "132bj@queensu.ca"
        },
        {
          "text" : "Randy Ellis",
          "value" : "3dpp@queensu.ca"
        },
        {
          "text" : "Evelyn Hamster",
          "value" : "yes@queensu.ca"
        },
        {
          "text" : "Nicholas Graham",
          "value" : "2ngo@queensu.ca"
        }
      ];

      var dou_stu =
      [
        {
          "text" : "Nico Duke",
          "value" : "10sdi@queensu.ca"
        },
        {
          "text" : "Anthony Marsili",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Kai Laxdal",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Ryan Kerr",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Max Eisen",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Kathryn Brown",
          "value" : "16kbe@queensu.ca"
        }
      ];

      var har_stu =
      [
        {
          "text" : "Emma Landry",
          "value" : "16ekl@queensu.ca"
        },
        {
          "text" : "Danielle Edward",
          "value" : "16dke@queensu.ca"
        },
        {
          "text" : "Sarah Ott",
          "value" : "10sdi@queensu.ca"
        },
        {
          "text" : "Racehel Goleski",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Kai Laxdal",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Hayden Wang",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Jessica Stewart",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Kathryn Brown",
          "value" : "16kbe@queensu.ca"
        }
      ];

      var jea_stu =
      [
        {
          "text" : "Anthony Marsili",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Kai Laxdal",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Jim Bob",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Evan Arsenault",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Rylen Sampson",
          "value" : "16kbe@queensu.ca"
        },
        {
          "text" : "Grace Marco",
          "value" : "16snf@queensu.ca"
        },
        {
          "text" : "William Hensen",
          "value" : "16askn@queensu.ca"
        }
      ];

      var leg_stu =
      [
        {
          "text" : "Kathryn Brown",
          "value" : "16kbe@queensu.ca"
        },
        {
          "text" : "Meghan Smythe",
          "value" : "16snf@queensu.ca"
        },
        {
          "text" : "Eunice Choi",
          "value" : "16askn@queensu.ca"
        },
        {
          "text" : "Kai Salomaa",
          "value" : "123ks@queensu.ca"
        },
        {
          "text" : "Bob Jim",
          "value" : "132bj@queensu.ca"
        },
        {
          "text" : "Randy Ellis",
          "value" : "3dpp@queensu.ca"
        },
        {
          "text" : "Kiran Kaur",
          "value" : "yes@queensu.ca"
        },
        {
          "text" : "Nicholas Graham",
          "value" : "2ngo@queensu.ca"
        },
        {
          "text" : "Wendy Powley",
          "value" : "254rfjfl@queensu.ca"
        }
      ];

      var vic_stu =
      [
        {
          "text" : "Emma Landry",
          "value" : "16ekl@queensu.ca"
        },
        {
          "text" : "Danielle Edward",
          "value" : "16dke@queensu.ca"
        },
        {
          "text" : "Nico Duke",
          "value" : "10sdi@queensu.ca"
        },
        {
          "text" : "Anthony Marsili",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Kai Laxdal",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Jim Bob",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Jessica Stewart",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Kathryn Brown",
          "value" : "16kbe@queensu.ca"
        },
        {
          "text" : "Grace Marco",
          "value" : "16snf@queensu.ca"
        },
        {
          "text" : "William Hensen",
          "value" : "16askn@queensu.ca"
        },
        {
          "text" : "Kai Salomaa",
          "value" : "123ks@queensu.ca"
        },
        {
          "text" : "Bob Jim",
          "value" : "132bj@queensu.ca"
        },
        {
          "text" : "Randy Ellis",
          "value" : "3dpp@queensu.ca"
        },
        {
          "text" : "Evelyn Hamster",
          "value" : "yes@queensu.ca"
        },
        {
          "text" : "Nicholas Graham",
          "value" : "2ngo@queensu.ca"
        },
        {
          "text" : "Wendy Powley",
          "value" : "254rfjfl@queensu.ca"
        }
      ];

      var leo_stu =
      [
        {
          "text" : "Emma Landry",
          "value" : "16ekl@queensu.ca"
        },
        {
          "text" : "Danielle Edward",
          "value" : "16dke@queensu.ca"
        },
        {
          "text" : "Macyn Leung",
          "value" : "10sdi@queensu.ca"
        },
        {
          "text" : "Anthony Marsili",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Kai Laxdal",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Catherine Wu",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Jessica Stewart",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Lauren Kube",
          "value" : "16kbe@queensu.ca"
        },
        {
          "text" : "Lia Grace",
          "value" : "16snf@queensu.ca"
        },
        {
          "text" : "William Hensen",
          "value" : "16askn@queensu.ca"
        }
      ];

      var wat_stu =
      [
        {
          "text" : "Danielle Edward",
          "value" : "16dke@queensu.ca"
        },
        {
          "text" : "Macyn Leung",
          "value" : "10sdi@queensu.ca"
        },
        {
          "text" : "Anthony Marsili",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Dodie Clark",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Catherine Wu",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Jessica Stewart",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Lauren Kube",
          "value" : "16kbe@queensu.ca"
        },
      ];

      var wal_stu =
      [
        {
          "text" : "Danielle Edward",
          "value" : "16dke@queensu.ca"
        },
        {
          "text" : "Macyn Leung",
          "value" : "10sdi@queensu.ca"
        },
        {
          "text" : "Anthony Marsili",
          "value" : "21enf@queensu.ca"
        },
        {
          "text" : "Dodie Clark",
          "value" : "19ei@queensu.ca"
        },
        {
          "text" : "Catherine Wu",
          "value" : "16oie@queensu.ca"
        },
        {
          "text" : "Trevell Hamilton",
          "value" : "16lsd@queensu.ca"
        },
        {
          "text" : "Lauren Kube",
          "value" : "16kbe@queensu.ca"
        },
      ];

      var desks = ["Victoria Hall","Leggett Hall", "Waldron Hall", "Watts Hall", "Jean Royce Hall"];

      var studentdb = [];

      // Not every building has a front desk. Based on what they choose for desk, these are the different buildings
      var vic_desk = ["Victoria Hall", "Harkness Hall"];
      var leg_desk = ["Adelaide Hall", "Ban Righ Hall", "Chown Hall", "Leggett Hall"];
      var wal_desk = ["Waldron Hall", "Douglas House"];
      var wat_desk = ["Brant Hall", "Leonard Hall", "Watts Hall"];
      var jea_desk = ["Jean Royce Hall", "Angus House"];

      var emailArrival = [];
      var emailReminder =[];
      var emailFee = [];
      var emailCustom =[];
      var studentMessage;

      var choosenDesk;

      showDesks();

      function showDesks(){
        for (var i in desks){
          var newDesk = document.createElement("BUTTON");
          newDesk.id = desks[i] + "d";
          newDesk.className = "choice";
          newDesk.innerHTML = desks[i];
          newDesk.value = desks[i];
          var element = document.getElementById("desks");
          element.appendChild(newDesk);
        }
      }

      // desk event listeners
      window.addEventListener("load", function(){
       document.getElementById("Victoria Halld").onclick = function(){showBuildings(vic_desk); var choosenDesk = "Victoria Hall";};
      });
      window.addEventListener("load", function(){
       document.getElementById("Leggett Halld").onclick = function(){showBuildings(leg_desk); var choosenDesk = "Leggett Hall";};
      });
      window.addEventListener("load", function(){
       document.getElementById("Waldron Halld").onclick = function(){showBuildings(wal_desk); var choosenDesk = "Waldron Hall";};
      });
      window.addEventListener("load", function(){
       document.getElementById("Watts Halld").onclick = function(){showBuildings(wat_desk); var choosenDesk = "Watts Hall";};
      });
      window.addEventListener("load", function(){
       document.getElementById("Jean Royce Halld").onclick = function(){showBuildings(jea_desk); var choosenDesk = "Jean Royce Hall";};
      });

      function showBuildings(buildings){
        removeOld("buildings");

        var element = document.getElementById("buildings");
        for (var b in buildings){
          var newBuild = document.createElement("button");
          newBuild.id = buildings[b] + "b";
          newBuild.className = "choice";
          newBuild.innerHTML = buildings[b];
          element.appendChild(newBuild);
        }
        buildEvent();
      }

      function buildEvent(){
        var vic = document.getElementById("Victoria Hallb");
        var leg = document.getElementById("Leggett Hallb");
        var wal = document.getElementById("Waldron Hallb");
        var wat = document.getElementById("Watts Hallb");
        var jea = document.getElementById("Jean Royce Hallb");

        if(typeof(vic) != 'undefined' && vic != null){
          document.getElementById("Victoria Hallb").onclick = function(){studentdb = vic_stu.slice(); studentNames();};
          document.getElementById("Harkness Hallb").onclick = function(){studentdb = har_stu.slice(); studentNames();};
        } else if(typeof(leg) != 'undefined' && leg != null){
           document.getElementById("Adelaide Hallb").onclick = function(){studentdb = ade_stu.slice(); studentNames();};
           document.getElementById("Leggett Hallb").onclick = function(){studentdb = leg_stu.slice(); studentNames();};
           document.getElementById("Chown Hallb").onclick = function(){studentdb = cho_stu.slice(); studentNames();};
           document.getElementById("Ban Righ Hallb").onclick = function(){studentdb = ban_stu.slice(); studentNames();};
        } else if(typeof(wal) != 'undefined' && wal != null){
           document.getElementById("Waldron Hallb").onclick = function(){studentdb = wal_stu.slice(); studentNames();};
           document.getElementById("Douglas Houseb").onclick = function(){studentdb = dou_stu.slice(); studentNames();};
        } else if(typeof(wat) != 'undefined' && wat != null){
           document.getElementById("Watts Hallb").onclick = function(){studentdb = wat_stu.slice(); studentNames();};
           document.getElementById("Brant Hallb").onclick = function(){studentdb = bra_stu.slice(); studentNames();};
           document.getElementById("Leonard Hallb").onclick = function(){studentdb = leo_stu.slice(); studentNames();};
        } else if(typeof(jea) != 'undefined' && jea != null){
           document.getElementById("Jean Royce Hallb").onclick = function(){studentdb = jea_stu.slice(); studentNames();};
           document.getElementById("Angus Houseb").onclick = function() {studentdb = ang_stu.slice(); studentNames();;};
        }
      }

      function studentNames(){
        removeOld("student-names");

        var studentDiv = document.getElementById('student-names');
        for (var i = 0; i < studentdb.length; i++) {
          var checkBox = document.createElement("input");
          var label = document.createElement("label");
          var tempdiv = document.createElement("div"); //items put in a div so they can be organized more neatly <3
          tempdiv.className = "studentdiv-choice";
          tempdiv.id = studentdb[i].text;
          checkBox.type = "checkbox";
          checkBox.value = studentdb[i].value;
          checkBox.className = "studentCheck";
          checkBox.id = studentdb[i].text+"check";
          label.innerHTML = studentdb[i].text;
          tempdiv.appendChild(checkBox);
          tempdiv.appendChild(label);
          studentDiv.appendChild(tempdiv);
        }
      }

      function searchStud(){
        var currSearch = document.getElementById("student-search").value;
        var exists = 0;
        for(var s = 0; s < studentdb.length; s++){
          var currStud = studentdb[s].text;
          if(currStud.includes(currSearch)){
            var inDiv = document.getElementById(studentdb[s].text);
            inDiv.scrollIntoView();
            inDiv.style.backgroundColor = "#8ffdff";
            setTimeout(function(){
              inDiv.style.backgroundColor = "#ffffff";
            }, 3000);
            exists = 1;
            break;
          }
        }
        if(exists == 0){
          alert("No student with the name "+currSearch+" exists in this residence");
          // make search box red
        }
      }

      function toggleShow(){
        var upload_div = document.getElementById("upload-photo");
        if(window.getComputedStyle(upload_div).display === "none"){
          upload_div.style.display = "inline";
          document.getElementById("log-title").innerHTML = "Log Book"
          document.getElementById("analyzed-content").style.display = "none";
          document.getElementById("options").style.display = "inline";
          document.getElementById("opt-up").style.display = "inline-block";
          document.getElementById("access_cam").style.display = "inline-block";
        } else if(upload_div.innerHTML.indexOf("close") !== -1){
          upload_div.style.display = "none";
        }
      }
      //handles all webcam service
      function captureAndSave(){
        document.getElementById("access_cam").style.display = "none";
        document.getElementById("opt-up").style.display = "none";
        document.getElementById("vid-controls").style.display = "inline";
        document.getElementById("exit-back").innerHTML = "arrow_back";

        // [1] GET ALL THE HTML ELEMENTS
        var video = document.getElementById("vid-show"),
            canvas = document.getElementById("vid-canvas"),
            take = document.getElementById("vid-take");
            exit = document.getElementById("exit");

        exit.addEventListener("click", function(){
          document.getElementById("exit-back").innerHTML = "close";
          document.getElementById("vid-controls").style.display = "none";
          document.getElementById("access_cam").style.display = "inline-block";
          document.getElementById("opt-up").style.display = "inline-block";
        });

        // [2] ASK FOR USER PERMISSION TO ACCESS CAMERA
        // WILL FAIL IF NO CAMERA IS ATTACHED TO COMPUTER
        navigator.mediaDevices.getUserMedia({ video : true })
        .then(function(stream) {
          // [3] SHOW VIDEO STREAM ON VIDEO TAG
          video.srcObject = stream;
          video.play();

          // [4] WHEN WE CLICK ON "TAKE PHOTO" BUTTON
          take.addEventListener("click", function(){
            // Create snapshot from video
            var draw = document.createElement("canvas");
            draw.width = video.videoWidth;
            draw.height = 340;
            var context2D = draw.getContext("2d");
            context2D.drawImage(video, 110, 20, 400, 300);

            // Output as file
            var anchor = document.createElement("a");
            anchor.href = draw.toDataURL("image/png");
            anchor.download = "webcam.png";
            anchor.innerHTML = "Use This Capture";
            anchor.id = "download";
            canvas.appendChild(draw);
            canvas.appendChild(anchor);
          });
          canvas.addEventListener("click", function(){
            stream.getTracks().forEach(function(track) {
              track.stop();
            });
            analyzeUpload();
          });
          exit.addEventListener("click", function(){
            document.getElementById("exit-back").innerHTML = "close";
            document.getElementById("vid-controls").style.display = "none";
            document.getElementById("access_cam").style.display = "inline-block";
            document.getElementById("opt-up").style.display = "inline-block";
            stream.getTracks().forEach(function(track) {
              track.stop();
            });
          });
        })
        .catch(function(err) {
          document.getElementById("vid-controls").innerHTML = "Please enable access and attach a camera";
        });
      }

      function analyzeUpload(){
        var exit = document.getElementById("exit-back");
        var option = document.getElementById("options");
        var logTitle = document.getElementById("log-title");
        var ana = document.getElementById("analyzed-content");

        exit.innerHTML = "arrow_back";
        document.getElementById("vid-controls").style.display = "none";
        option.style.display = "none";
        logTitle.innerHTML = "Analysis"
        ana.style.display = "inline"

        exit.addEventListener("click", function(){
          exit.innerHTML = "close";
          logTitle.innerHTML = "Log Book";
          ana.style.display = "none";
          option.style.display = "inline";
          document.getElementById("access_cam").style.display = "inline-block";
          document.getElementById("opt-up").style.display = "inline-block";
        });
      }

      function useAnalysis(){
        document.getElementById("upload-photo").style.display = "none";

        var checkboxNames = document.getElementsByClassName("studentdiv-choice");
        var inputid = ["emma", "dani", "nico", "anth", "kai"];

        for(var n = 0; n < inputid.length; n++){
          var curr = document.getElementById(inputid[n]);
          if(curr.checked){
            console.log(curr.value+" is checked");
            for(var s = 0; s < checkboxNames.length; s++){
              if(curr.value == checkboxNames[s].id){
                var box = document.getElementById(curr.value+"check");
                box.checked = "checked";
                checkboxArray();
              }
            }
          }
        }
      }

      function info_popup(type){
        if(type="logbook"){
          //will do tomorrow
        }

      }

      function checkboxArray() {
        removeOld("msg-table");
        // Gets the values of the names that where checked and uses them to create a list of messages to send
        var checkedValues = []
        var names = document.getElementById("student-names");
        var checkboxes = names.querySelectorAll('input[type=checkbox]:checked');

        for (var i = 0; i < checkboxes.length; i++) {
          checkedValues.push(checkboxes[i].value);
        }

        var element = document.getElementById("msg-table");

        for (var j = 0; j < checkedValues.length; j++){
          var index = studentdb.map(function(e) {
                return e.value;
            }).indexOf(checkedValues[j]);

            var newStud = document.createElement("Label");
            var newCust = document.createElement("Button");
            var newFee = document.createElement("Button");
            var newReminder = document.createElement("Button");
            var newArrival = document.createElement("Button");
            var newContainer = document.createElement("Div");
            newStud.innerHTML = studentdb[index].text;
            newStud.value = studentdb[index].value;
            newStud.className = "message-choice-label";
            newCust.className = "custom";
            newCust.innerHTML = "Custom";
            newCust.id = "custom-" + studentdb[index].value + "-" + studentdb[index].text;
            newReminder.className = "remind";
            newReminder.innerHTML = "Reminder";
            newReminder.id = "reminder-" + studentdb[index].value + "-" + studentdb[index].text;
            newFee.className = "fee";
            newFee.innerHTML = "Fee";
            newFee.id = "fee-" + studentdb[index].value + "-" + studentdb[index].text;
            newArrival.className = "arrive";
            newArrival.innerHTML = "Arrival";
            newArrival.id = "arrival-" + studentdb[index].value + "-" + studentdb[index].text;
            newContainer.className = "student-message-choice"
            newContainer.id = studentdb[index].text;
            newContainer.appendChild(newStud);
            newContainer.appendChild(newArrival);
            newContainer.appendChild(newReminder);
            newContainer.appendChild(newFee);
            newContainer.appendChild(newCust);
            element.appendChild(newContainer);
            }
            getSpecific();
      }

      function getSpecific(){
        var arriveID, remindID, feeID, customID;
        var names = document.getElementsByClassName("student-message-choice");
        for(var elem in names){
          try{
            arriveID = names[elem].childNodes[1].id;
            remindID  = names[elem].childNodes[2].id;
            feeID = names[elem].childNodes[3].id;
            customID = names[elem].childNodes[4].id;
            document.getElementById(arriveID).setAttribute("onClick", 'addEmail("' + arriveID + '");');
            document.getElementById(remindID).setAttribute("onClick", 'addEmail("' + remindID + '");');
            document.getElementById(feeID).setAttribute("onClick", 'addEmail("' + feeID + '");');
            document.getElementById(customID).setAttribute("onClick", 'addEmail("' + customID + '");');
          } catch(error){
            console.log(error);
          }
        }
      }

      function chooseAllMessages(type){
        var allArrive = document.getElementsByClassName("arrive");
        var allCust = document.getElementsByClassName("custom");
        var allRemind = document.getElementsByClassName("remind");
        var allFee = document.getElementsByClassName("fee");

        if(type == "arrival"){
          for(i = 0; i < allArrive.length; i++){
            allArrive[i].style.backgroundColor = "DodgerBlue";
            allArrive[i].style.color = "White";

            allCust[i].style.backgroundColor = "White";
            allCust[i].style.color = "Black";

            allRemind[i].style.backgroundColor = "White";
            allRemind[i].style.color = "Black";

            allFee[i].style.backgroundColor = "White";
            allFee[i].style.color = "Black";

            var arriveid = allArrive[i].id;
            addEmail(arriveid);
          }
        } else if (type == "custom"){
          for(i = 0; i < allCust.length; i++){
            allCust[i].style.backgroundColor = "DodgerBlue";
            allCust[i].style.color = "White";

            allArrive[i].style.backgroundColor = "White";
            allArrive[i].style.color = "Black";

            allRemind[i].style.backgroundColor = "White";
            allRemind[i].style.color = "Black";

            allFee[i].style.backgroundColor = "White";
            allFee[i].style.color = "Black";

            var customid = allCust[i].id;
            addEmail(customid);
          }
        } else if (type == "fee"){
          for(i = 0; i < allFee.length; i++){
            allFee[i].style.backgroundColor = "DodgerBlue";
            allFee[i].style.color = "White";

            allArrive[i].style.backgroundColor = "White";
            allArrive[i].style.color = "Black";

            allRemind[i].style.backgroundColor = "White";
            allRemind[i].style.color = "Black";

            allCust[i].style.backgroundColor = "White";
            allCust[i].style.color = "Black";

            var feeid = allFee[i].id;
            addEmail(feeid);
          }
        } else if (type == "remind"){
          for(i = 0; i < allRemind.length; i++){
            allRemind[i].style.backgroundColor = "DodgerBlue";
            allRemind[i].style.color = "White";

            allArrive[i].style.backgroundColor = "White";
            allArrive[i].style.color = "Black";

            allFee[i].style.backgroundColor = "White";
            allFee[i].style.color = "Black";

            allCust[i].style.backgroundColor = "White";
            allCust[i].style.color = "Black";

            var remindid = allRemind[i].id;
            addEmail(remindid);
          }
        }
      }

      function removeOld(idName){
        var oldChild = document.getElementById(idName);
        while(oldChild.hasChildNodes()){
          oldChild.removeChild(oldChild.firstChild);
        }
      }

      function addEmail(choice){
      	var values = choice.split("-");
        var type = values[0];
        var email = values[1];
        var name = values[2];

        // removing old clicks
        if(emailCustom.filter(function(e) { return e.name === name; }).length > 0) {
          var i = emailCustom.findIndex(x => x.name === name);
          emailCustom.splice(i, 1);
        } else if(emailReminder.filter(function(e) { return e.name === name; }).length > 0){
          var i = emailReminder.findIndex(x => x.name === name);
          emailReminder.splice(i, 1);
        } else if(emailFee.filter(function(e) { return e.name === name; }).length > 0){
          var i = emailFee.findIndex(x => x.name === name);
          emailFee.splice(i, 1);
        } else if(emailArrival.filter(function(e) { return e.name === name; }).length > 0){
          var i = emailArrival.findIndex(x => x.name === name);
          emailArrival.splice(i, 1);
        }

      	if (type == "custom"){
          studentMessage = {"name": name, "email": email};
      		emailCustom.push(studentMessage);
          changeColour(name);
        }
      	else if (type == "reminder"){
          studentMessage = {"name": name, "email": email};
      		emailReminder.push(studentMessage);
          changeColour(name);
      	}
      	else if (type == "fee"){
          studentMessage = {"name": name, "email": email};
      		emailFee.push(studentMessage);
          changeColour(name);
      	}
      	else if (type == "arrival"){
          studentMessage = {"name": name, "email": email};
      		emailArrival.push(studentMessage);
          changeColour(name);
      	}
        var elem = document.getElementById(choice);
        elem.style.backgroundColor = "DodgerBlue";
        elem.style.color = "White";
      }

      var arrivalMessage = {"subject": "Package Arrival Notice", "message": "You've recieved a package! Please come to your front desk to come claim your package"};
      var reminderMessage = {"subject": "Package Reminder Notice", "message": "This is a reminder to come to your front desk to come claim your package. It will stay in the system for 5 business days before being returned to sender"};
      var feeMessage = {"subject": "Package Fee Notice", "message": "You have incurred a package fee. Please come to your front desk for more information"};

      function createMessages(){
        removeOld("confirm-send");
        var header = document.createElement("h2");
        var divH = document.getElementById("confirm-send");
        header.innerHTML = "Confirm Your Information Before Sending"
        divH.appendChild(header);

        if(emailArrival.length != 0){
          messageTemplate("arrive");
          var message = document.getElementById("arrive-mess");
          var subject = document.getElementById("arrive-sub");
          var recipients = document.getElementById("arrive-rec");
          subject.innerHTML += arrivalMessage.subject;
          message.innerHTML += arrivalMessage.message;
          var allRecipients = [];
          for(var i in emailArrival){
            var name = emailArrival[i].name;
            var email = emailArrival[i].email;
            var recip = name + " (" + email + ")";
            allRecipients.push(recip);
          }
          recipients.innerHTML += allRecipients.toString();
          localStorage.setItem('pushedRecipients', allRecipients);
        }
        if(emailReminder.length != 0){
          messageTemplate("remind");
          var message = document.getElementById("remind-mess");
          var subject = document.getElementById("remind-sub");
          var recipients = document.getElementById("remind-rec");
          subject.innerHTML += reminderMessage.subject;
          message.innerHTML += reminderMessage.message;
          var allRecipients = [];
          for(var i in emailReminder){
            var name = emailReminder[i].name;
            var email = emailReminder[i].email;
            var recip = "   " + name + "( " + email + " )";
            allRecipients.push(recip);
          }
          recipients.innerHTML += allRecipients.toString();
        }
        if(emailFee.length != 0){
          messageTemplate("fee");
          var message = document.getElementById("fee-mess");
          var subject = document.getElementById("fee-sub");
          var recipients = document.getElementById("fee-rec");
          subject.innerHTML += feeMessage.subject;
          message.innerHTML += feeMessage.message;
          var allRecipients = [];
          for(var i in emailFee){
            var name = emailFee[i].name;
            var email = emailFee[i].email;
            var recip = "   " + name + "( " + email + " )";
            allRecipients.push(recip);
          }
          recipients.innerHTML += allRecipients.toString();
        }
        if(emailCustom.length != 0){
          messageTemplate("custom");
          var recipients = document.getElementById("custom-rec");
          var message = document.getElementById("custom-mess");
          var subject = document.getElementById("custom-sub");
          var messtext = document.createElement("input");
          var subtext = document.createElement("input");
          messtext.id = "custom-input";
          subtext.id = "custom-input";
          message.appendChild(messtext);
          subject.appendChild(subtext);
          var allRecipients = [];
          for(var i in emailCustom){
            var name = emailCustom[i].name;
            var email = emailCustom[i].email;
            var recip = "   " + name + "( " + email + " )";
            allRecipients.push(recip);
          }
          recipients.innerHTML += allRecipients.toString();
        }
      }

      function messageTemplate(type){
        var element = document.getElementById("confirm-send");
        var title = document.createElement("h3");
        var container = document.createElement("div");
        var rec = document.createElement("label");
        var recDiv = document.createElement("div");
        var sub = document.createElement("label");
        var subDiv = document.createElement("div");
        var mess = document.createElement("label");
        var messDiv = document.createElement("div");
        title.innerHTML = type;
        rec.innerHTML = "Recipients: ".bold();
        rec.class = "recipient-block";
        recDiv.id = type + "-rec";
        //recDiv.class = "recipient-block";
        sub.innerHTML = "Subject: ".bold();
        subDiv.id = type + "-sub";
        subDiv.class = "subject-block";
        mess.innerHTML = "Message: ".bold();
        messDiv.id = type + "-mess";
        messDiv.class = "message-block";
        container.id = type + "-message";
        container.appendChild(title);
        //recDiv.appendChild(rec);
        subDiv.appendChild(sub);
        messDiv.appendChild(mess);
        container.appendChild(rec);
        container.appendChild(recDiv);
        container.appendChild(subDiv);
        container.appendChild(messDiv);
        element.appendChild(container);
      }

      function changeColour(name){
          var names = document.getElementsByClassName("student-message-choice");
          for(var elem in names){
            if(names[elem].id == name){
              try{
                names[elem].childNodes[1].style.backgroundColor = "White";
                names[elem].childNodes[1].style.color = "Black";

                names[elem].childNodes[2].style.backgroundColor = "White";
                names[elem].childNodes[2].style.color = "Black";

                names[elem].childNodes[3].style.backgroundColor = "White";
                names[elem].childNodes[3].style.color = "Black";

                names[elem].childNodes[4].style.backgroundColor = "White";
                names[elem].childNodes[4].style.color = "Black";
              } catch(error){
                console.log(error);
              }
            }
          }

        }

      // Basis of script from w3schools.com
      //Controls the visibility of divs in steps
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("next_icon").innerText = "done";
          document.getElementById("nextBtn").onclick = function(){window.location.href = 'https://qpack-cisc325.appspot.com/dash'};
        } else if(n == (x.length - 2)){
          document.getElementById("next_icon").innerText = "chevron_right";
          document.getElementById("nextBtn").onclick = function(){createMessages(); nextPrev(1);};
        }
        else {
          document.getElementById("next_icon").innerText = "chevron_right";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
          //...the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
      }

    </script>

</body>

</html>
