//
//  ofLines.h
//  OOP_homework
//
//  Created by Dasha Ilina on 16/09/2017.
//

#pragma once

#include "ofMain.h"

class DrawingLines{
    
public:
    void setup();
    void update();
    void draw();
    
    ofPoint pos;
    ofVec2f vel;
    ofPolyline line;
    
};
