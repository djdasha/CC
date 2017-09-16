#version 120
#ifdef GL_ES
precision mediump float;
#endif

uniform vec2 u_resolution;
uniform vec2 u_mouse;
uniform float u_time;


void main() {
    vec2 st = gl_FragCoord.xy/u_resolution.xy;
    vec2 st2 = (gl_FragCoord.xy/u_time)/100;
    
    vec3 influenced_color = vec3(0.580,0.341,0.222);
    vec3 influencing_color_A = vec3(0.725,0.604,0.340);
    vec3 influencing_color_B = vec3(0.780,0.990,1.000/st2);
    
    vec3 color = vec3(0.);
    
    // Background Gradient
    color = mix( influencing_color_A,
                influencing_color_B,
                st.y);
    
    
    
    gl_FragColor = vec4(color,1.0);
    
    
}


