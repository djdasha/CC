var ptA = 350;
var ptB = 700;
var y = 40;
var moveX = ptA;
var t = 0;
var dir =1;

var smoothPos = {x:0, y:0};

function setup() {
  createCanvas(window.innerWidth, window.innerHeight);
}

function draw() {
  background(255,255,255);
  //creating a circle to follow mouse position
  // line(smoothPos.x,smoothPos.y,100,100);
  fill(200,80,80);
  // ellipse(smoothPos.x, smoothPos.y, 31, 31);
  // var sPct =.9;
  // //smoothing when following the mouse
  // smoothPos.x = sPct * smoothPos.x + (1-sPct)* mouseX;
  // smoothPos.y = sPct * smoothPos.y + (1-sPct)* mouseY;

  //(1-pct) * A + pct * B
  // increase the pct a fixed amount
  t+=.01 * dir;
  if( t <= 0 || t >= 1) {
    dir *= -1; //reverse direction
  }
  //change the shape of our motion
  var pct = pow(t,5.5);

  if (t <=0 || t >= 0.9){
    ellipse(900, y *9, moveX, moveX);
  }

  if (t <=0 || t >= 0.7){
    ellipse(300, y *3, moveX, moveX);
  }

  if (t <=0 || t >= 0.4){
    ellipse(200, y *12, moveX/1.5, moveX/1.5);
  }
  // var c = color(255,255,255);
  // stroke(255,255,255);

  // pct = t*t;
  // drawMotion(40, pct);
  // text("t*t", ptB+5, y+140);
  // textSize(24);
  // fill(c);
  // textStyle(ITALIC);

  // pct = t;
  // drawMotion(40, pct);
  // text("linear: t", ptB+20, y+60);
  // textSize(24);
  // fill(c);
  // textStyle(ITALIC);
  //
  // pct = t*t;
  // drawMotion(80, pct);
  //
  // pct = t*(-t)+1;
  // drawCircle2(120, pct);
  //
  // pct = t*t*t;
  // drawMotion(160, pct);
  //
  pct = (-t)*t*t+1;
  drawCircle3(200, pct);
  //
  // pct = t*t*t*t;
  // drawMotion(240, pct);
  //
  // pct = 1 - t * t * t * t;
  // drawCircle1(280, pct);
  // //
  // pct = t * t * t * t * t;
  // drawCircle1(350, pct);
  //
  pct = 1 + (-t) * t * t * t * t;
  drawCircle1(100, pct);
}

//parameters: yOffset, pct
function drawCircle1(yOffset, pct){
  moveX = (1-pct) * ptA + pct * ptB;
  fill(150,150,150,moveX/4);
  noStroke();
  ellipse(1000, y + yOffset*1.3, moveX*1.5, moveX*1.5);
}


function drawCircle3(yOffset, pct){
  moveX = (1-pct) * ptA + pct * ptB;
  fill(200,200,200,moveX/4);
  noStroke();
  ellipse(100, y + yOffset*1.3, moveX, moveX);
}

// function drawCircle2(yOffset, pct){
//   moveX = (1-pct) * ptA + pct * ptB;
//   fill(255,moveX/3,255);
//   noStroke();
//   ellipse(300, y + yOffset*1.3, moveX/6, moveX/6);
// }
