//
//  ofNewClass.cpp
//  OOP_homework
//
//  Created by Dasha Ilina on 16/09/2017.
//
//

#include "ofNewClass.h"

void Drawing::setup(){
    pos = ofPoint(ofRandom(1024), ofRandom(768));
    vel = ofVec2f(ofRandom(-5,5), ofRandom(-5,5));
}

void Drawing::update(){
    pos +=vel; // add velocity to position
    vel *= .9; //quick way to create friction
}

void Drawing::draw(){
    ofSetColor(10, 150, 75);
    ofNoFill();
    ofDrawCircle(pos, 40);
    
}
