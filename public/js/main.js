//Get the button:
mybutton = document.getElementById("top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function activePortfolio() {
  return (window.location.pathname.includes("production")) ?  productionwork : designwork;
}

var displayedProjects = [];


// Create "Project" object

function ProjectSimple(title, subtitle, cardImage) {
  this.title = title;
  this.subtitle = subtitle;
  this.image = cardImage;
}

// Create "Student" object
 function Student(code, name, img, proj) {
 	this.code = code;		// HTML address
 	this.name = name;		// Student Name
 	this.img = img;			// Profile picture
 	this.proj = proj;		// Associated project code
 }




















