// Set up the scene, camera, and renderer for Three.js
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);

const modelContainer = document.getElementById('model-container');
modelContainer.appendChild(renderer.domElement);

camera.position.z = 5;  // Adjust as needed

// Load the 3D model (replace with your own .glb model URL)
const loader = new THREE.GLTFLoader();
loader.load('path/to/your/model.glb', function (gltf) {
    const model = gltf.scene;
    scene.add(model);

    // Animate the model
    const animate = function () {
        requestAnimationFrame(animate);
        model.rotation.y += 0.01; // Rotate the model continuously
        renderer.render(scene, camera);
    };
    animate();
}, undefined, function (error) {
    console.error(error);
});

// Adjust the renderer on window resize
window.addEventListener('resize', function () {
    const width = window.innerWidth;
    const height = window.innerHeight;
    renderer.setSize(width, height);
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
});
