var ptA = 350;
var ptB = 700;
var y = 40;
var moveX = ptA;
var t = 0;
var dir =1;

// var smoothPos = {x:0, y:0};

function setup() {
  createCanvas(window.innerWidth, window.innerHeight);
}

function draw() {
  background(255,170,20);
  // //creating a circle to follow mouse position
  // ellipse(smoothPos.x, smoothPos.y, 15, 15);
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

  var c = color(255,255,255);
  stroke(255,255,255);

  // pct = t*t;
  // drawMotion(40, pct);
  // text("t*t", ptB+5, y+140);
  // textSize(24);
  // fill(c);
  // textStyle(ITALIC);

  // pct = t;
  // drawMotion(40, pct);
  // text("linear: t", ptB+20, y+60);
  textSize(24);
  fill(c);
  textStyle(ITALIC);

  pct = t*t;
  drawMotion(80, pct);
  text("inQuad: t * t", ptB+20, y+110);

  pct = t*(-t)+1;
  drawMotion(120, pct);
  text("outQuad (edited): t * (-t) + 1", ptB+20, y+162);

  pct = t*t*t;
  drawMotion(160, pct);
  text("inCubic: t * t * t", ptB+20, y+215);

  pct = (-t)*t*t+1;
  drawMotion(200, pct);
  text("outCubic: (-t) * t * t + 1", ptB+20, y+265);

  pct = t*t*t*t;
  drawMotion(240, pct);
  text("inQuart: t * t * t * t", ptB+20, y+317);

  pct = 1 - t * t * t * t;
  drawMotion(280, pct);
  text("outQuart (edited): 1 - t * t * t * t", ptB+20, y+369);

  pct = t * t * t * t * t;
  drawMotion(320, pct);
  text("inQuint: t * t * t * t * t", ptB+20, y+420);

  pct = 1 + (-t) * t * t * t * t;
  drawMotion(360, pct);
  text("outQuint: 1 + (-t) * t * t * t * t", ptB+20, y+470);



}

//parameters: yOffset, pct
function drawMotion(yOffset, pct){
  moveX = (1-pct) * ptA + pct * ptB;
  //console.log(moveX);
  line(ptA,y + yOffset*1.3,ptB,y + yOffset*1.3);
  ellipse(moveX, y + yOffset*1.3, 30, 30);
  // moveX = (1-pct) * ptA + pct * ptB;
  // moveY = (1-pct) * ptA + pct * ptB;
  // //console.log(moveX);
  // line(ptA,y + yOffset,ptB,y + yOffset*3.5);
  // // ellipse(moveX, y + yOffset*-5, 10, 10);
  // ellipse(moveX, moveY, 10, 10);

}
