#pragma once

#include "ofMain.h"
#include "ofNewClass.h"
#include "ofLines.h"


#define NUMCIRCLES 50
#define NUMLINES 5

class ofApp : public ofBaseApp{
    
public:
    void setup();
    void update();
    void draw();
    
    void keyPressed(int key);
    void keyReleased(int key);
    void mouseMoved(int x, int y);
    void mouseDragged(int x, int y, int button);
    void mousePressed(int x, int y, int button);
    void mouseReleased(int x, int y, int button);
    void mouseEntered(int x, int y);
    void mouseExited(int x, int y);
    void windowResized(int w, int h);
    void dragEvent(ofDragInfo dragInfo);
    void gotMessage(ofMessage msg);
    
    // className nameofObject
    Drawing circles;
    DrawingLines lines;

    
    // creating an array of type CoolBall
    DrawingLines lotsOfLines[NUMLINES];

    Drawing lotsOfCircles[NUMCIRCLES];
    
    // arrays : type name[amount]; example
//    int someInts[50];
    
    // using a vector
    // vector<Class Name / type> name;
    vector<Drawing> moreCircles;
    vector<DrawingLines> moreLines;


    
};
