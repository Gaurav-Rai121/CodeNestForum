<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Essentials</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">
    <!-- Header -->
    <header class="bg-gradient-to-r from-green-500 to-blue-600 text-white py-10">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-extrabold">JavaScript Essentials</h1>
            <p class="text-lg mt-4 font-medium">
                Learn JavaScript from scratch and master key concepts like variables, functions, arrays, objects, and more.
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12 space-y-12">
        <!-- Introduction Section -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">What is JavaScript?</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                JavaScript is a high-level programming language used to create interactive and dynamic content on websites.
                It is a core technology of the World Wide Web, alongside HTML and CSS. JavaScript is used for everything from simple
                DOM manipulation to complex web applications.
            </p>
        </section>

        <!-- Core Concepts -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Core JavaScript Concepts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Variables -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Variables & Data Types</h3>
                    <p class="text-gray-700 mb-4">JavaScript has three main ways to declare variables: <strong>let</strong>, <strong>const</strong>, and <strong>var</strong>.</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>let:</strong> Used to declare variables that can be reassigned.</li>
                        <li><strong>const:</strong> Used for values that won't change.</li>
                        <li><strong>var:</strong> The old way of declaring variables, now less used.</li>
                    </ul>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
let name = "John";
const age = 25;
                    </pre>
                    <p class="text-gray-700">Common data types include:</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>String:</strong> Represents text like "Hello"</li>
                        <li><strong>Number:</strong> Integer or floating-point numbers</li>
                        <li><strong>Boolean:</strong> True or False</li>
                        <li><strong>Array:</strong> Ordered collection like [1, 2, 3]</li>
                        <li><strong>Object:</strong> Key-value pairs like {name: "Alice"}</li>
                    </ul>
                </div>

                <!-- Operators -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Operators</h3>
                    <p class="text-gray-700 mb-4">Operators are used to perform operations on variables and values.</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>Arithmetic Operators:</strong> +, -, *, /, %, etc.</li>
                        <li><strong>Comparison Operators:</strong> ==, ===, !=, >, <, etc.</li>
                        <li><strong>Logical Operators:</strong> &&, ||, !</li>
                    </ul>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
let sum = 5 + 10;
let isEqual = (sum === 15);  // true
                    </pre>
                </div>

                <!-- Functions -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Functions</h3>
                    <p class="text-gray-700 mb-4">Functions are blocks of code designed to perform specific tasks.</p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
function greet(name) {
  return `Hello, ${name}`;
}
console.log(greet("John"));  // Hello, John
                    </pre>
                    <p class="text-gray-700">Functions can also accept parameters and return values.</p>
                </div>
            </div>
        </section>

        <!-- Arrays and Objects -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Arrays & Objects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Arrays -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Arrays</h3>
                    <p class="text-gray-700 mb-4">Arrays are used to store multiple values in a single variable.</p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
let colors = ["red", "green", "blue"];
console.log(colors[0]);  // red
                    </pre>
                    <p class="text-gray-700">Common array methods:</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li><strong>push()</strong> - Add an item to the end of the array.</li>
                        <li><strong>pop()</strong> - Remove the last item from the array.</li>
                        <li><strong>shift()</strong> - Remove the first item.</li>
                    </ul>
                </div>

                <!-- Objects -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Objects</h3>
                    <p class="text-gray-700 mb-4">Objects are used to store collections of data in the form of key-value pairs.</p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
let person = {
  name: "John",
  age: 30
};
console.log(person.name);  // John
                    </pre>
                </div>

                <!-- String Methods -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">String Methods</h3>
                    <p class="text-gray-700 mb-4">Strings in JavaScript are powerful and come with many built-in methods:</p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
let greeting = "Hello World";
console.log(greeting.toLowerCase());  // hello world
console.log(greeting.replace("World", "John"));  // Hello John
                    </pre>
                </div>
            </div>
        </section>

        <!-- DOM Manipulation & Events -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">DOM Manipulation & Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- DOM Manipulation -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">DOM Manipulation</h3>
                    <p class="text-gray-700 mb-4">The DOM (Document Object Model) allows you to interact with the HTML structure of a webpage.</p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
document.getElementById("myElement").innerText = "Updated Text!";
                    </pre>
                    <p class="text-gray-700">You can access elements by ID, class, or tag name and modify their content or attributes.</p>
                </div>

                <!-- Events -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Event Handling</h3>
                    <p class="text-gray-700 mb-4">Events let you trigger functions based on user interaction, like clicking or typing.</p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
document.querySelector("button").addEventListener("click", function() {
  alert("Button clicked!");
});
                    </pre>
                </div>

                <!-- Closures -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Closures</h3>
                    <p class="text-gray-700 mb-4">Closures are functions that remember the environment in which they were created, allowing access to variables even after the outer function finishes executing.</p>
                    <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
function outer() {
  let outerVar = "I am outer";
  return function inner() {
    console.log(outerVar);
  };
}
let closureFunc = outer();
closureFunc();  // I am outer
                    </pre>
                </div>
            </div>
        </section>

        <!-- Object-Oriented Programming (OOP) -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Object-Oriented Programming (OOP)</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Classes & Objects</h3>
                <p class="text-gray-700 mb-4">OOP in JavaScript is centered around the concept of classes and objects. A class is a blueprint for creating objects, and objects are instances of these classes.</p>
                <pre class="bg-gray-800 text-white rounded-lg p-4 overflow-auto">
class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }
  greet() {
    return `Hello, my name is ${this.name}`;
  }
}
let person1 = new Person("Alice", 28);
console.log(person1.greet());  // Hello, my name is Alice
                </pre>
            </div>
        </section>

                <!-- Redesigned YouTube Channels Section -->
                <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Learn More with YouTube</h2>
            <p class="text-gray-700 text-lg mb-8">
                Take your learning to the next level with tutorials from these top YouTube creators. These channels are packed with beginner-friendly videos and advanced techniques to deepen your knowledge.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Channel Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="Traversy Media Thumbnail" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Traversy Media</h3>
                        <p class="text-gray-600 mt-2">
                            Brad Traversy offers in-depth web development tutorials, including HTML and CSS basics.
                        </p>
                        <a href="https://www.youtube.com/c/TraversyMedia" 
                           class="text-blue-600 mt-4 inline-block hover:underline">Visit Channel</a>
                    </div>
                </div>
                <!-- Channel Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="freeCodeCamp Thumbnail" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">freeCodeCamp</h3>
                        <p class="text-gray-600 mt-2">
                            Learn everything from HTML basics to advanced web development concepts with freeCodeCamp.
                        </p>
                        <a href="https://www.youtube.com/c/Freecodecamp" 
                           class="text-blue-600 mt-4 inline-block hover:underline">Visit Channel</a>
                    </div>
                </div>
                <!-- Channel Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="The Net Ninja Thumbnail" class="w-full">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">The Net Ninja</h3>
                        <p class="text-gray-600 mt-2">
                            The Net Ninja's playlists cover a wide range of web development topics, including HTML and CSS.
                        </p>
                        <a href="https://www.youtube.com/c/TheNetNinja" 
                           class="text-blue-600 mt-4 inline-block hover:underline">Visit Channel</a>
                    </div>
                </div>
            </div>
        </section>


            <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Additional Resources</h2>
            <p class="text-gray-700">
                For further learning, explore these resources:
            </p>
            <ul class="list-disc list-inside text-blue-600 underline mt-3">
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide" >MDN JavaScript Guide</a></li>
                    <li><a href="https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/" class="text-blue-600 hover:underline">FreeCodeCamp JavaScript Curriculum</a></li>
                    <li><a href="https://www.codecademy.com/learn/introduction-to-javascript" class="text-blue-600 hover:underline">Codecademy JavaScript Course</a></li>
                    <li><a href="https://www.w3schools.com/js/" class="text-blue-600 hover:underline" >W3Schools JavaScript Tutorial</a></li>
            </ul>
        </section>

                <!-- Call to Action -->
                <section class="text-center mt-12">
            <h2 class="text-3xl font-semibold text-gray-800">Next Steps</h2>
            <p class="text-gray-700 text-lg mt-4">
                Ready to take your skills to the next level? Explore advanced topics or practice with real-world projects.
            </p>
            <a href="../tutorials.php" class="inline-block bg-blue-600 text-white py-3 px-6 rounded-lg mt-6 hover:bg-blue-700 transition">
                Back to Tutorials
            </a>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 CodeNest Forum. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
