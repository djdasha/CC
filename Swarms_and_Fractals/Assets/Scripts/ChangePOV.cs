using UnityEngine;
using System.Collections;

public class ChangePOV : MonoBehaviour{

     public Transform Player;
     public Camera FirstPersonCam, ThirdPersonCam;
     public KeyCode TKey;
     public bool camSwitch = false;

     void Update()
     {
         if (Input.GetKeyDown(TKey))
         {
             camSwitch = !camSwitch;
             FirstPersonCam.gameObject.SetActive(camSwitch);
             ThirdPersonCam.gameObject.SetActive(!camSwitch);
         }
     }
 }
