<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- idk what this does -->
    <title>QPack - Queen's University</title>
    <link rel=stylesheet href=CSS/styles.css> <!-- no quotations needed here because they are both "one word" -->
</head>

<body>

    <header>
        <nav class = "col-wide">
            <a id = title href="https://qpack-cisc325.appspot.com/dash" title="Go to Homepage">QPack</a>
            <a id = user-name href="" title="Go to Profile">User Name</a>

        </nav>
    </header>

    <main>

        <div class = col-narrow>
            <img id=side-menu src="../img/side_menu.jpg" alt="Naviagation Menu">
        </div>

        <div class = col-wide id = dashboard-container>
            <center>
              <br><br><br><br><br><br>
                <a class = dashboard-btn href ="https://qpack-cisc325.appspot.com" style = "text-decoration: none">Manage Packages</a>
            </center>
            <h3>Package Information</h3>
            <center>
                <table id = dashboard-table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address</th>
                        <th>Package Number</th>
                        <th>Date Arrived</th>
                        <th>Date to Return</th>
                        <th>Status</th>
                        <th>Send</th>
                    </tr>
                </table>
            </center>

        </div>
    </main>

    <script>

        // METHOD:
        // when this page opens, grab the new items that are in local storage
        // put those in a variable, either as a list or string (idk yet)
        // grab the list/string of the "dashboard" that is in local storage, could be an empty string/list at start
        // put this in a variable (either convert to list or keep a string)
        // add the new items that are in a variable to the end of this list
        // save the list/string back to local storage
        // grab that list and put it in a variable called "dashboard_db"
        // then run the code at the bottom that builds the actual table by looking at the info in "dashboard_db"
        // when this page is opened again, local storage will have the new new recipients saved and the most recent "dashboard" items saved, so you can just repeat this process again. The way i a doing it now, i think i am just trying to update this "local" copy of the dashboard variable. I think it needs to be updated in local storage and pulled everytime the table needs to be recreated.

        var attempt = localStorage.getItem('dashboard'); // check if program has been run before (if anything is in local storage)

        if(!attempt) // if it is the first time running this program, then initalize a dashboard and package number
        {
            localStorage.setItem('dashboard', '.');
            localStorage.setItem('storedPackageNumber', '1000');
        }
        else
        {
            var itemsToAdd = [];
            var grabRecipients = localStorage.getItem('pushedRecipients'); // get the items that will be added to the dashboard, as a string
            if(grabRecipients) // if there are new items to add to the dashboard
            {
                var today = new Date();
                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                var returnDate = today.getFullYear()+'-'+(today.getMonth()+2)+'-'+today.getDate();
                var packageNumber = localStorage.getItem('storedPackageNumber');
                packageNumber = parseInt(packageNumber, 10);
                var splitRecipients = grabRecipients.split(","); // converts it into a list
                for(var i = 0; i < splitRecipients.length; i++) // add each item to dashboard_db array
                {
                    packageNumber++;
                    localStorage.setItem('storedPackageNumber', packageNumber.toString());
                    var splitNames = splitRecipients[i].split(" ");
                    itemsToAdd.push({"firstName" : splitNames[0], "lastName" : splitNames[1], "email" : splitNames[2], "packageNumber" : packageNumber, "dateArrived" : date, "returnDate" : returnDate});
                    itemsToAdd.push(' ');
                }
                localStorage.removeItem('pushedRecipients'); // remove the local storage that held these items
                var grabbedLocalDash = localStorage.getItem('dashboard');
                newDash = grabbedLocalDash.concat(JSON.stringify(itemsToAdd));

                // the following are all just formatting to make sure the dashboard is read properly by JSON
                newDash = newDash.split('][').join(',');
                newDash = newDash.replace('.', '');
                newDash = newDash.replace('[', '');
                newDash = newDash.replace(']', '');
                newDash = newDash.split('," ",').join(' ');
                newDash = newDash.split('," "').join(' ');

                localStorage.setItem('dashboard', newDash);
            }
            createTable();
        }

        function createTable()
        {
            var grabbedDash = localStorage.getItem('dashboard');
            var grabbedDashArr = grabbedDash.split(' ');

            var dashboardDiv = document.getElementById('dashboard-table'); // this creates the div that the table will be contained in
            for(var i = 0; i < grabbedDashArr.length; i++)
            {
                var parsedObj = JSON.parse(grabbedDashArr[i]);
                var newContainer = document.createElement("Tr"); // this creates the div that will hold the current row of info
                var newFirst = document.createElement("Td");
                var newLast = document.createElement("Td");
                var newEmail = document.createElement("Td");
                var newPackNum = document.createElement("Td");
                var newDA = document.createElement("Td");
                var newDR = document.createElement("Td");
                var newSend = document.createElement("Td");
                var newStatus = document.createElement("Td");
                newFirst.innerHTML = parsedObj.firstName;
                newFirst.id = parsedObj.firstName;
                newLast.innerHTML = parsedObj.lastName;
                newLast.id = parsedObj.lastName
                newEmail.innerHTML = parsedObj.email;
                newEmail.id = parsedObj.email;
                newPackNum.innerHTML = parsedObj.packageNumber;
                newPackNum.id = parsedObj.newPackNum;
                newDA.innerHTML = parsedObj.dateArrived;
                newDA.id = parsedObj.dateArrived;
                newDR.innerHTML = parsedObj.returnDate;
                newDR.id = parsedObj.returnDate;
                newContainer.className = "dashboard-row";
                newContainer.id = parsedObj.packageNumber; // the id of each row is the unique package number
                newStatus.innerHTML = "Newly Arrived";
                newStatus.style.backgroundColor = "#abff9e";
                newSend.className = "quickRemind";
                newSend.onclick = function() {alert('Short Reminder Email Sent');};
                newSend.id = parsedObj.email+"-quick";
                newSend.innerHTML = "Reminder";
                newContainer.appendChild(newFirst);
                newContainer.appendChild(newLast);
                newContainer.appendChild(newEmail);
                newContainer.appendChild(newPackNum);
                newContainer.appendChild(newDA);
                newContainer.appendChild(newDR);
                newContainer.appendChild(newStatus);
                newContainer.appendChild(newSend);
                dashboardDiv.appendChild(newContainer);
            }
        }

    </script>

</body>
