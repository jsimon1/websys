//document.documentElement must be replaced by an argument that fits with the recursive behavior of the function, there must also be another argument for x dashes,
//depending on the depth of the recursion
var nodes = "";
function goThroughDOM(currNode, depth){
  //Adding name of node to nodes, with appropriate # of dashes
  for(i = 0; i < depth; i++){
    nodes+="-";
  }
  nodes+=(currNode.nodeName+"\n");
  //If we're not at the end of the branch, continue down
  if(currNode.childNodes.length>0){
    depth+=1;
    //Recursion, going through and seeing if there is a next child to go through otherwise step back
    var next = currNode.firstChild;
    while(next){
      goThroughDOM(next, depth);
      next = next.nextSibling;
    }
  }
}

//Part 2: Adding event listeners to all elements under body
function addEventListeners(){
  var bodyElems = document.body.getElementsByTagName("*");
  for(i = 0; i < bodyElems.length; i++){
    bodyElems[i].addEventListener("click", function(){ alert(this.tagName)});
  }
}

//Part 3: Cloning the div I want and then appending it to body
function appendQuote(){
  var quote = document.getElementsByClassName("quote")[3];
  var clone = quote.cloneNode(true);
  document.body.appendChild(clone);
}

//Part 3: onMouseOver added to all divs
function divOnMouseOver(){
  var divs = document.body.getElementsByTagName('div');
  for(i = 0; i < divs.length; i++){
    divs[i].addEventListener("mouseover", function(){ this.style.backgroundColor = "blue"; this.style.marginRight = "10px";});
    divs[i].addEventListener("mouseout", function(){ this.style.backgroundColor = "white"; this.style.marginRight = "auto";})
  }
}

//Main
//Part 2: Adding event listeners to all elements under body
addEventListeners();
goThroughDOM(document.documentElement,0);
document.getElementById('info').innerHTML = nodes;
appendQuote();
divOnMouseOver();



