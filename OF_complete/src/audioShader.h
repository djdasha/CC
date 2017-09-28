//
//  audio.h
//  OF_complete
//
//  Created by Dasha Ilina on 28/09/2017.
//

#pragma once
#include "ofMain.h"
#include "ofxOsc.h"



class audioShader{
public:
    void setup();
    void update();
    void draw();
    void audioIn();
    void keyPressed(int key);
    ofShader shader2;
    
    void audioIn(float * input, int bufferSize, int nChannels);
    
    vector <float> left;
    vector <float> right;
    vector <float> volHistory;
    
    int 	bufferCounter;
    int 	drawCounter;
    
    float smoothedVol;
    float scaledVol;
    
    ofPlanePrimitive plane;
    ofSpherePrimitive sphere;
    ofBoxPrimitive box;
    ofEasyCam cam;
    ofSoundStream soundStream;

};
