<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 16.66%;
  text-decoration: none;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

#home {background-color:red;}
#contacts {background-color:green;}
#add_cont {background-color:blue;}
#show_cont {background-color:orange;}
#admin {background-color:gray;}
#logout {background-color:yellow;}
</style>
</head>
<body>
<div id="home" class="tabcontent">
  <h1>HOME</h1>
  <p>Home page of the our website.</p>
</div>

<div id="contacts" class="tabcontent">
  <h1>CONTACTS</h1>
  <p>Here you can contact with us for more information.</p> 
</div>

<div id="add_cont" class="tabcontent">
  <h1>ADD CONTACT</h1>
  <p>Here you can add contact.</p>
</div>

<div id="show_cont" class="tabcontent">
  <h1>SHOW CONTACTS</h1>
  <p>here you can see all of the contacts.</p>
</div>

<div id="admin" class="tabcontent">
  <h1>ADMIN PANEL</h1>
  <p>Here is the admin panel.</p>
</div>

<div id="logout" class="tabcontent">
  <h1>LOGOUT</h1>
  <p>Bye have a nice day.</p>
</div>

<button class="tablink" onclick="openCity('home', this, 'red')" id="defaultOpen" value="1">Home</button>
<button class="tablink" onclick="openCity('contacts', this, 'green')" value="2">Contacts</button>
<button class="tablink" onclick="openCity('add_cont', this, 'blue')" value="3">Add Contact</button>
<button class="tablink" onclick="openCity('show_cont', this, 'orange')" value="4">Show Contacts</button>
<button class="tablink" onclick="openCity('admin', this, 'gray')" value="5">Admin Panel</button>
<button class="tablink" onclick="openCity('logout', this, 'yewoll')" value="6">Logout</button> 
<!--
<a href="" class="tablink" onclick="openCity('home', this, 'red')">Home</a>
<a href="" class="tablink" onclick="openCity('contacts', this, 'green')">Contacts</a>
<a href="" class="tablink" onclick="openCity('add_cont', this, 'blue')">Add Contact</a>
<a href="" class="tablink" onclick="openCity('show_cont', this, 'orange')">Show Contacts</a>
<a href="" class="tablink" onclick="openCity('admin', this, 'gray')">Admin Panel</a>
<a href="" class="tablink" onclick="openCity('logout', this, 'yewoll')">Logout</a>
-->

<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html> 

