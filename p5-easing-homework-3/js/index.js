var ptA = 150;
var ptB = 300;
var y = 40;
var moveX = ptA;
var t = 0;
var dir =1;
var bg;

var smoothPos = {x:0, y:0};

function setup() {
  // createCanvas(window.innerWidth, window.innerHeight);
  bg = loadImage("dressing_design1.jpg");
  createCanvas(490,685);
  // loadImage("dressing_design1.jpg", function(img) {
  //   image(img, 0, 0);
  // });


}

function draw() {
  // background(bg);
  background(226, 204, 0);
  stroke(226, 204, 0);
    line(0, y, width, y);

    y++;
    if (y > height) {
      y = 0;
    }
  //creating a circle to follow mouse position
  // line(smoothPos.x,smoothPos.y,100,100);
  fill(204, 153, 255);
  t+=.01 * dir;
  if( t <= 0 || t >= 1) {
    dir *= -1; //reverse direction
  }
  //change the shape of our motion
  var pct = pow(t,5.5);

  if (t <=0 || t >= 0.9){
    ellipse(100, y *9, moveX, moveX);
  }

  if (t <=0 || t >= 0.7){
    ellipse(30, y *3, moveX, moveX);
  }

  if (t <=0 || t >= 0.4){
    ellipse(20, y *12, moveX/1.5, moveX/1.5);
  }

  pct = (-t)*t*t+1;
  drawCircle3(20, pct);

  pct = 1 + (-t) * t * t * t * t;
  drawCircle1(10, pct);
}

//parameters: yOffset, pct
function drawCircle1(yOffset, pct){
  moveX = (1-pct) * ptA + pct * ptB;
  fill(0, 153, 204);
  noStroke();
  ellipse(600-moveX, y + yOffset+moveX, moveX/4, moveX/4);
}


function drawCircle3(yOffset, pct){
  moveX = (1-pct) * ptA + pct * ptB;
  // fill(4,4,4,moveX/4);
  fill(0, 153, 0);
  noStroke();
  ellipse(400-moveX, y + yOffset+moveX/3, moveX/6, moveX/6);
}

// function drawCircle2(yOffset, pct){
//   moveX = (1-pct) * ptA + pct * ptB;
//   fill(255,moveX/3,255);
//   noStroke();
//   ellipse(300, y + yOffset*1.3, moveX/6, moveX/6);
// }
