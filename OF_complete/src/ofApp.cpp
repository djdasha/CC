#include "ofApp.h"

//--------------------------------------------------------------
void ofApp::setup(){
    shader.load("","shader.frag");
    receiver.setup(PORT);
    ofSetFrameRate(60);
//        myAudio.setup();
    int bufferSize = 256;

    soundStream.setup(this, 0, 2, 44100, bufferSize, 4);

}


//--------------------------------------------------------------
void ofApp::update(){
    myAudio.update();
    // check for waiting messages
    while(receiver.hasWaitingMessages()){
        // get the next message
        ofxOscMessage m;
        receiver.getNextMessage(m);
        
        // check for osc moved message
        if(m.getAddress() == "/hfosc/horizontalmotion"){
            oscX = m.getArgAsFloat(0);
        }
       
        if(m.getAddress() == "/hfosc/verticalmotion"){
            oscY = m.getArgAsFloat(0);
        }
        
    }

}


//--------------------------------------------------------------
void ofApp::draw(){
    shader.begin();
    shader.setUniform2f("osc", oscX, oscY);
    ofDrawRectangle(0, 0, ofGetWidth(), ofGetHeight());
    shader.end();
    myAudio.draw();
}




//--------------------------------------------------------------
void ofApp::keyPressed(int key){
//    myAudio.keyPressed(s,e);
    if (key == 't'){
        myAudio.setup();

    }

//    switch(key){
//        case 'c':
//            myAudio.setup();
//            myAudio.update();
//            myAudio.draw();
//            break;
//            //        case ' ':
//            //            //do something else
//            //            break;
//        case OF_KEY_UP:
//            ofLog() <<"key up";
//            break;
//    }
    
//    if (key == 't'){
//        myAudio.setup();
//        myAudio.update();
//        myAudio.draw();
////        ofBackground(0, 0, 0) ; // do something
//    } else if (key == 'r'){
//        ofBackground(255, 255, 255) ; // do something else
//    }
}

//--------------------------------------------------------------
void ofApp::keyReleased(int key){
    
}

//--------------------------------------------------------------
void ofApp::mouseMoved(int x, int y){
    
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
