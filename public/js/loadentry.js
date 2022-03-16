//
function LoadPage() {
  var url = window.location.pathname.split('/');
  var key = url.pop();
  key = key.substring(0, key.length - 5);
  console.log(key);
  var source;
  var portfolio = activePortfolio();


  for (category in portfolio) {
    console.log(portfolio[category]);
    if (portfolio[category].hasOwnProperty(key)) {
      source = portfolio[category][key];
      console.log(source);
      break;
    }
  }

  for (target in source) {
    var component;
    if (target == "title" || target == "subtitle" || target == "cardImage") {
      component = document.getElementById(target);
      if (target == "cardImage") {
        if (component.innerHTML.length == 0)
        {
          component.src =  source.cardImage;
        } 
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