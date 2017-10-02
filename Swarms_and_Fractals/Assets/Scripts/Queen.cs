using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Queen : MonoBehaviour {


	public GameObject myPrefab;

	// Use this for initialization
	void Start () {

		Object.globalSpeed = 20.0f;
		Object.globalTarget = gameObject;
		Object.globalYawing = 200.0f;

		StartCoroutine( CreateSpheres() );

	}

	IEnumerator CreateSpheres(){

		for (int i = 0; i < 20; i++) {

			Vector3 pos = new Vector3( Random.Range(-5,5), Random.Range(-5,5), Random.Range(-5,5) );

			GameObject newObject = Instantiate(myPrefab);
			newObject.transform.position = pos;

			// wait for seconds to continue
			yield return new WaitForSeconds(0.5f);
		}
	}

	// Update is called once per frame
	void Update () {

	}
}
