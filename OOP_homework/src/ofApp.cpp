#include "ofApp.h"

//--------------------------------------------------------------
void ofApp::setup(){
        circles.setup();
    
        for(int i = 0; i < NUMCIRCLES; i++){
            lotsOfCircles[i].setup();
        }
    
    moreCircles.push_back( Drawing() );
    moreCircles[0].setup();
    
    lines.setup();
    for(int i = 0; i < NUMLINES; i++){
        lotsOfLines[i].setup();
    }
    
    moreLines.push_back( DrawingLines() );
    moreLines[0].setup();
    

}

//--------------------------------------------------------------
void ofApp::update(){
    // loop through and update all
    for(int i = 0; i < moreCircles.size(); i++){
        moreCircles[i].update();
    }
    for(int i = 0; i < moreLines.size(); i++){
        moreLines[i].update();
    }
}

//--------------------------------------------------------------
void ofApp::draw(){
    for(int i = 0; i < moreCircles.size(); i++){
        moreCircles[i].draw();
    }
    for(int i = 0; i < moreLines.size(); i++){
        moreLines[i].draw();
        
    }
    
    
    
}

//--------------------------------------------------------------
void ofApp::keyPressed(int key){

            moreCircles.push_back( Drawing() );
            moreCircles[moreCircles.size()-1].setup();
            moreLines.push_back( DrawingLines() );
            moreLines[moreLines.size()-1].setup();

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
        
    ofBackground(ofRandom(100),ofRandom(250),ofRandom(255));
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
