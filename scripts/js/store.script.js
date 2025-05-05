   // Page Loader
   window.addEventListener('load', function() {
    setTimeout(function() {
        document.getElementById('pageLoader').classList.add('loaded');
    }, 1000);
});

// Theme Toggle
const themeToggle = document.getElementById('themeToggle');
themeToggle.addEventListener('change', function() {
    if (this.checked) {
        document.body.classList.remove('dark-theme');
        document.body.classList.add('light-theme');
    } else {
        document.body.classList.remove('light-theme');
        document.body.classList.add('dark-theme');
    }
});

// Email notification form
const notifyButton = document.getElementById('notifyButton');
const notification = document.getElementById('notification');
const emailInput = document.getElementById('emailInput');

notifyButton.addEventListener('click', function() {
    if (emailInput.value) {
        notification.classList.add('show');
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
        emailInput.value = '';
    }
});

// Countdown Timer
function updateCountdown() {
    const launchDate = new Date('2025-04-17T00:00:00').getTime();
    const now = new Date().getTime();
    const distance = launchDate - now;
    
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById('days').innerText = days;
    document.getElementById('hours').innerText = hours;
    document.getElementById('minutes').innerText = minutes;
    document.getElementById('seconds').innerText = seconds;
}

setInterval(updateCountdown, 1000);
updateCountdown();

// Create code line elements
const codeSnippets = [
    "import { StoreProvider } from '@coding/store';",
    "const products = await fetchProducts();",
    "export default function StoreComponent() {",
    "<ProductGrid items={filteredItems} />",
    "npm install @coding/ui-components",
    "function handlePurchase(item) {",
    "const [cart, setCart] = useState([]);",
    "git commit -m 'Add store components'",
    "@tailwind base;",
    "docker-compose up -d store-service",
    ".store-container { @apply grid grid-cols-3; }",
    "const router = express.Router();"
];

const codeLines = document.getElementById('codeLines');

for (let i = 0; i < 12; i++) {
    const line = document.createElement('div');
    line.className = 'code-line';
    line.textContent = codeSnippets[i % codeSnippets.length];
    line.style.top = `${Math.random() * 100}%`;
    line.style.left = `${Math.random() * 100}%`;
    line.style.opacity = 0.1 + (Math.random() * 0.1);
    line.style.transform = `rotate(${Math.random() * 6 - 3}deg)`;
    codeLines.appendChild(line);
}

// Activity graph
const activityGraph = document.getElementById('activityGraph');
const activityData = [4, 2, 7, 5, 12, 9, 6, 8, 15, 13, 10, 18, 14, 20];

activityData.forEach(value => {
    const bar = document.createElement('div');
    const height = (value / Math.max(...activityData)) * 100;
    bar.className = 'bg-indigo-500 rounded-sm w-full';
    bar.style.height = `${height}%`;
    bar.style.opacity = 0.5 + (height / 200);
    activityGraph.appendChild(bar);
});

// Lottie Animation - using a modern coding animation
const animationContainer = document.getElementById("lottieAnimation");
lottie.loadAnimation({
    container: animationContainer,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://assets5.lottiefiles.com/packages/lf20_cwqf5i6h.json' // Modern coding animation
});

// Three.js background animation
const container = document.getElementById('canvas-container');
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });

renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setClearColor(0x000000, 0);
container.appendChild(renderer.domElement);

// Create particles
const particles = new THREE.Group();
scene.add(particles);

// Generate particles
for (let i = 0; i <100; i++) {
    const geometry = new THREE.SphereGeometry(0.05, 8, 8);
    const material = new THREE.MeshBasicMaterial({ 
        color: new THREE.Color(0x6366f1),
        transparent: true,
        opacity: Math.random() * 0.2 + 0.1
    });
    
    const particle = new THREE.Mesh(geometry, material);
    
    // Distribute particles in a sphere
    const radius = Math.random() * 10 + 5;
    const theta = Math.random() * Math.PI * 2;
    const phi = Math.random() * Math.PI;
    
    particle.position.x = radius * Math.sin(phi) * Math.cos(theta);
    particle.position.y = radius * Math.sin(phi) * Math.sin(theta);
    particle.position.z = radius * Math.cos(phi);
    
    // Add some random velocity for animation
    particle.userData = {
        velocity: new THREE.Vector3(
            (Math.random() - 0.5) * 0.01,
            (Math.random() - 0.5) * 0.01,
            (Math.random() - 0.5) * 0.01
        ),
        initialPosition: particle.position.clone()
    };
    
    particles.add(particle);
}

camera.position.z = 15;

// Handle window resize
window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
});

// Animation loop
function animate() {
    requestAnimationFrame(animate);
    
    // Rotate the entire particle system
    particles.rotation.y += 0.001;
    particles.rotation.z += 0.0005;
    
    // Update each particle
    particles.children.forEach(particle => {
        // Apply velocity
        particle.position.add(particle.userData.velocity);
        
        // Limit movement from initial position
        const initialPos = particle.userData.initialPosition;
        const distance = particle.position.distanceTo(initialPos);
        
        if (distance > 1) {
            // Return towards initial position
            const direction = new THREE.Vector3().subVectors(initialPos, particle.position).normalize();
            particle.userData.velocity.add(direction.multiplyScalar(0.001));
        }
        
        // Apply some drag to slow particles
        particle.userData.velocity.multiplyScalar(0.99);
    });
    
    renderer.render(scene, camera);
}

animate();