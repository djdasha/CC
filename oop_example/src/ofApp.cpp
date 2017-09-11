#include "ofApp.h"

//--------------------------------------------------------------
void ofApp::setup(){
    
    followPos = ofPoint( ofGetWidth() , ofGetHeight() );
    followPos2 = ofPoint( ofGetWidth() , ofGetHeight() );

}

//--------------------------------------------------------------
void ofApp::update(){
    
    float pct = .99;
    float pct2 = .9;

    followPos.x = followPos.x * pct + mouseX * (1-pct);
    followPos.y = followPos.y * pct + mouseY * (1-pct);
    followPos2.x = (followPos2.x * pct2) + mouseX * (1-pct2);
    followPos2.y = (followPos2.y * pct2) + mouseY * (1-pct2);
}

//--------------------------------------------------------------
void ofApp::draw(){
    
    float angle = atan2(mouseY-followPos.y,mouseX-followPos.x);
    ofPushMatrix();
    ofTranslate(followPos);
    ofSetColor(0,0,0);
    ofFill();
    ofRotate(ofRadToDeg(angle));
    ofDrawCircle(-20,-20,50);
    ofDrawCircle(-10,-83,20);
    ofDrawCircle(-60,-70,20);
    ofPopMatrix();
    
    float angle2 = atan2(mouseY-followPos2.y,mouseX-followPos2.x);
    ofPushMatrix();
    ofTranslate(followPos2);
    ofSetColor(0,0,0);
    ofFill();
    ofRotate(ofRadToDeg(angle2));
    ofDrawCircle(-20,-20,50);
    ofDrawCircle(-10,-83,20);
    ofDrawCircle(-60,-70,20);
    ofSetColor(247, 131, 195);
    ofFill();
    ofDrawEllipse(-20, -80, 30, 35);
    ofDrawEllipse(-50, -70, 30, 35);
    ofSetColor(247, 101, 195);
    ofFill();
    ofDrawEllipse(-35, -70, 12, 17);


    ofPopMatrix();
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
