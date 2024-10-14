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
loader.load('./Anelka3D_Animer.glb', function (gltf) {
    const model = gltf.scene;
    scene.add(model);
    model.scale.set(0.5, 0.5, 0.5); // Ajuste l'échelle si nécessaire
    model.position.set(0, 0, 0);  // Ajuste la position pour être sûr qu'il est dans le champ de la caméra


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
