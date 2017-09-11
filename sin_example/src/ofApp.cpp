#include "ofApp.h"

//--------------------------------------------------------------
void ofApp::setup(){
    ofSetCircleResolution(20);
}

//--------------------------------------------------------------
void ofApp::update(){
    
}

//--------------------------------------------------------------
void ofApp::draw(){
    
    float r = ofMap(sin( ofGetElapsedTimef() ),-1,1,0,255);
    float g = ofMap(sin( ofGetElapsedTimef() ),-1,1,0,255);
    float b = ofMap(sin( ofGetElapsedTimef() ),-1,1,0,200);
//    ofSetBackgroundColor(r,g,b);
    ofSetBackgroundColor(218, 228, 237);

    
    ofTranslate(30,30);

    
    for(int x = 30*(sin( ofGetElapsedTimef())); x < ofGetWidth(); x+=100){
        for(int y = 30*(cos( ofGetElapsedTimef())); y < ofGetHeight(); y+=100){
//            x = 30*(sin( ofGetElapsedTimef()));
//            y = 30*(cos( ofGetElapsedTimef()));
            ofNoFill();
            ofSetLineWidth(7);
            ofSetColor(r, g,b);
    
            //            ofFill();
            ofDrawCircle(x,y,25);
        }
    }
    
//            ofNoFill();
//            ofSetColor(r, g,b);
////            ofFill();
//            ofDrawCircle(x,y,10);
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
