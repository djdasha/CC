#include "ofApp.h"


//--------------------------------------------------------------
void ofApp::setup(){
    ofSetCircleResolution(50);
    ptA = 175;
    ptB = 350;
    y = 40;
    t = 0;
    dir = 1;
    moveX = ptA;
    yOffset = 200;

}

//--------------------------------------------------------------
void ofApp::update(){
    t+=.01 * dir;
    if( t <= 0 || t >= 1) {
        dir *= -1; //reverse direction
        // print("CHANGE");
    }

    
}

//--------------------------------------------------------------
void ofApp::draw(){
    pct = pow(t,5.5);
    ofSetColor(200,80,80);
    if ( t >= 0.9){
        ofDrawCircle(900, y *9, moveX, moveX);
    }
    
    if ( t >= 0.7){
        ofDrawCircle(300, y *3, moveX, moveX);
    }
    
    if ( t >= 0.4){
        ofDrawCircle(200, y *12, moveX/1.5, moveX/1.5);
    }
    pct = (-t)*t*t+1;
    drawCircle3(200, pct);
    
    pct = 1 + (-t) * t * t * t * t;
    drawCircle1(100,pct);

}
void ofApp::drawCircle1(float yOffset, float pct){
    moveX = (1-pct) * ptA + pct * ptB;
    ofSetColor(150,150,150,moveX/4);
    ofFill();
    ofDrawCircle(1000, y + yOffset*1.3, moveX*1.5, moveX*1.5);
}
void ofApp::drawCircle3(float yOffset, float pct){
    moveX = (1-pct) * ptA + pct * ptB;
    ofSetColor(200,200,200,moveX/4);
    ofFill();
    ofDrawCircle(100, y + yOffset*1.3, moveX, moveX);
}

//--------------------------------------------------------------
void ofApp::keyPressed(int key){

}

//--------------------------------------------------------------
void ofApp::keyReleased(int key){

}

//--------------------------------------------------------------
void ofApp::mouseMoved(int x, int y ){

}

//--------------------------------------------------------------
void ofApp::mouseDragged(int x, int y, int button){

}

//--------------------------------------------------------------
void ofApp::mousePressed(int x, int y, int button){

}

//--------------------------------------------------------------
void ofApp::mouseReleased(int x, int y, int button){

}

//--------------------------------------------------------------
void ofApp::mouseEntered(int x, int y){

}

//--------------------------------------------------------------
void ofApp::mouseExited(int x, int y){

}

//--------------------------------------------------------------
void ofApp::windowResized(int w, int h){

}

//--------------------------------------------------------------
void ofApp::gotMessage(ofMessage msg){

}

//--------------------------------------------------------------
void ofApp::dragEvent(ofDragInfo dragInfo){ 

}
