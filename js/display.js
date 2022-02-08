
function LoadEntries() {
  var content = document.getElementById("container");


  for (section in portfolio) {
    console.log(section);
    var header = document.createElement("h2");
    header.innerHTML = section;
    header.id = section;
    content.appendChild(header);
    content.appendChild(document.createElement("hr"));


    var row;
    var left = true;
    for (entry in portfolio[section]) {
      var card;

      if (left) {
        row = CreateRow();
        content.appendChild(row);
        card = row.firstChild;
      } 
      else {
        card = row.lastChild;
      }

      CreateEntry(card, left, portfolio[section], entry);

      left = !left;
    }
  }
}


// Creates and returns a row with two empty divs for cards
function CreateRow() {
  var row = document.createElement("div");
  row.className = "row card-row"

  var cardl = document.createElement("a");
  cardl.className = "col-4 text-center ml-auto mr-4";
  var cardr = document.createElement("a");
  cardr.className = "col-4 text-center ml-4 mr-auto";

  row.appendChild(cardl);
  row.appendChild(cardr);

  return row;

}

// Takes the empty card div, wether it's on the left or right colum, and populates it with the relevant information
function CreateEntry(obj, left, list, entry) {
  var card = obj

  obj.className = (left) ? "card bg-dark text-white col-4 text-center ml-auto mr-4" : "card bg-dark text-white col-4 text-center ml-4 mr-auto";
  var url = window.location.pathname;
  //console.log(url);
  obj.href = url.substring(0, url.length - 5) + "/" + entry + ".html";
  

  var backing = document.createElement("img");
  backing.src = list[entry].cardImage;

  var overlay = document.createElement("div");
  overlay.className = "card-img-overlay";
  var headding = document.createElement("h5");
  var description = document.createElement("p");
  headding.innerHTML = list[entry].title;
  description.innerHTML = list[entry].subtitle;
  overlay.appendChild(headding)
  overlay.appendChild(description)

  card.appendChild(backing);
  card.appendChild(overlay);

}


LoadEntries ();