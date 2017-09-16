//
//  ofLines.cpp
//  OOP_homework
//
//  Created by Dasha Ilina on 16/09/2017.
//
//

#include "ofLines.h"

void DrawingLines::setup(){

}

void DrawingLines::update(){
 
}

void DrawingLines::draw(){
    ofSetColor(255);
//    ofSetColor(10, 150, 75);
    ofSetLineWidth(20);
//    ofDrawRectangle(ofRandom(1024), ofRandom(768),ofRandom(1024), ofRandom(768));
    ofDrawLine(ofRandom(1024), ofRandom(768),ofRandom(1024), ofRandom(768));
    
}

