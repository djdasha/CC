﻿using UnityEngine;
using System.Collections;

public class Fractal : MonoBehaviour {

	public Mesh mesh;
	public Material material;
	public int maxDepth;
	private int depth;
	public float childScale;


	private void Start () {
		gameObject.AddComponent<MeshFilter>().mesh = mesh;
		gameObject.AddComponent<MeshRenderer>().material = material;
		if (depth < maxDepth) {
			StartCoroutine(CreateChildren());
		}
	}
	private IEnumerator CreateChildren () {
		yield return new WaitForSeconds(0.5f);
		new GameObject("Fractal Child").AddComponent<Fractal>().Initialize(this, Vector3.up);
		yield return new WaitForSeconds(0.5f);
		new GameObject("Fractal Child").AddComponent<Fractal>().Initialize(this, Vector3.right);
		yield return new WaitForSeconds(0.5f);
		new GameObject("Fractal Child").AddComponent<Fractal>().Initialize(this, Vector3.left);
	}
	private void Initialize (Fractal parent, Vector3 direction) {
		mesh = parent.mesh;
		material = parent.material;
		maxDepth = parent.maxDepth;
		depth = parent.depth + 1;
		childScale = parent.childScale;
		transform.parent = parent.transform;
		transform.localScale = Vector3.one * childScale;
		transform.localPosition = direction * (0.5f + 0.5f * childScale);
	}
	// Update is called once per frame
	void Update () {

	}
}
