//
function LoadPage() {
  var url = window.location.pathname.split('/');
  var key = url[2].substring(0, url[2].length - 5);
  console.log(key);
  var source;

  if (url[1].includes("portfolio")) {
    for (category in portfolio) {
      console.log(portfolio[category]);
      if (portfolio[category].hasOwnProperty(key)) {
        source = portfolio[category][key];
        console.log(source);
        break;
      }
    }

  }
  else {
    for (category in portfolio) {
      if (category.hasOwnProperty(key)) {
        source = category.key;
        break;
      }
    }


  }

  for (target in source) {
    var component;
    if (target == "title" || target == "subtitle" || target == "cardImage") {
      component = document.getElementById(target);
      if (target == "cardImage") {
        component.src = "../" + source.cardImage;
      } else {
        component.innerHTML = source[target];
      }
    }
    else {
      var parent = document.getElementById("info");
      var description = document.createElement("li");
      description.className = "bullets";
      description.innerHTML = "<strong>" + target + ": </strong>" + source[target];
      parent.appendChild(description);
    }
  }
}

LoadPage();