// Set up the scene, camera, and renderer for Three.js
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);

const modelContainer = document.getElementById('model-container');
modelContainer.appendChild(renderer.domElement);

camera.position.z = 5;  // Adjust as needed

// Add lighting to the scene
const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(ambientLight);

const light = new THREE.DirectionalLight(0xffffff, 1);
light.position.set(0, 10, 10);
scene.add(light);

// Load the 3D model
const loader = new THREE.GLTFLoader();
loader.load('./Anelka3D_Animer.glb', function (gltf) {
    console.log("Modèle chargé", gltf);
    const model = gltf.scene;
    scene.add(model);

    // Adjust model's position and scale if needed
    model.position.set(0, 0, 0);
    model.scale.set(0.5, 0.5, 0.5);  // Adjust scale

    // Animate the model
    const animate = function () {
        requestAnimationFrame(animate);
        model.rotation.y += 0.01; // Rotate the model continuously
        renderer.render(scene, camera);
    };
    animate();
}, undefined, function (error) {
    alert("Erreur lors du chargement du modèle.");
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
