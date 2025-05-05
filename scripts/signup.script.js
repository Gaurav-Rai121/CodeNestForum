<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Codenest Forum - Where Developers Connect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6c5ce7;
            --primary-dark: #5649c0;
            --secondary: #00cec9;
            --dark: #2d3436;
            --darker: #1e272e;
            --light: #f5f6fa;
            --danger: #d63031;
            --success: #00b894;
            --warning: #fdcb6e;
            --border-radius: 12px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--darker);
            color: var(--light);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(108, 92, 231, 0.15) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(0, 206, 201, 0.15) 0%, transparent 20%);
            overflow-x: hidden;
        }

        .signup-container {
            width: 90%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: rgba(30, 39, 46, 0.9);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .signup-left {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: 
                linear-gradient(135deg, rgba(108, 92, 231, 0.1) 0%, rgba(30, 39, 46, 0.9) 100%),
                url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .signup-left::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(108, 92, 231, 0.7) 0%, rgba(30, 39, 46, 0.9) 100%);
            z-index: 0;
        }

        .signup-left-content {
            position: relative;
            z-index: 1;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .logo-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-right: 1rem;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .signup-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .signup-subtitle {
            font-size: 1rem;
            opacity: 0.8;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .benefits-list {
            list-style: none;
            margin-bottom: 2rem;
        }

        .benefits-list li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .benefits-list i {
            color: var(--secondary);
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .signup-right {
            padding: 3rem;
            background-color: rgba(30, 39, 46, 0.7);
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-title {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .form-subtitle {
            font-size: 0.9rem;
            opacity: 0.7;
        }

        .signup-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
            position: relative;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            color: var(--light);
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(108, 92, 231, 0.3);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 2.3rem;
            cursor: pointer;
            color: rgba(255, 255, 255, 0.5);
            transition: var(--transition);
        }

        .password-toggle:hover {
            color: var(--light);
        }

        .avatar-preview {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin-bottom: 1rem;
            border: 2px solid var(--primary);
        }

        .avatar-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-upload {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .avatar-upload-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .avatar-upload-btn:hover {
            background-color: var(--primary-dark);
        }

        .gender-options {
            display: flex;
            gap: 1rem;
        }

        .gender-option {
            flex: 1;
        }

        .gender-option input {
            display: none;
        }

        .gender-option label {
            display: block;
            padding: 0.8rem 1rem;
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .gender-option input:checked + label {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .interests-select {
            height: 120px;
            resize: none;
        }

        .form-footer {
            grid-column: span 2;
            margin-top: 1rem;
        }

        .terms-check {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .terms-check input {
            margin-right: 0.5rem;
        }

        .terms-check a {
            color: var(--secondary);
            text-decoration: none;
        }

        .terms-check a:hover {
            text-decoration: underline;
        }

        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(108, 92, 231, 0.3);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 92, 231, 0.4);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .login-link a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .signup-container {
                grid-template-columns: 1fr;
            }
            
            .signup-left {
                display: none;
            }
            
            .signup-form {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: span 1;
            }
        }

        /* Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-left">
            <div class="signup-left-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="logo-text">Codenest</div>
                </div>
                <h1 class="signup-title">Join Our Developer Community</h1>
                <p class="signup-subtitle">Connect with thousands of developers worldwide, share knowledge, and grow together in your coding journey.</p>
                
                <ul class="benefits-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Access to exclusive coding resources</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Participate in community challenges</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Get help from expert developers</span>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span>Showcase your projects to the world</span>
                    </li>
                </ul>
                
                <div class="floating" style="text-align: center; margin-top: 2rem;">
                    <i class="fas fa-laptop-code" style="font-size: 5rem; color: rgba(255, 255, 255, 0.1);"></i>
                </div>
            </div>
        </div>
        
        <div class="signup-right">
            <div class="form-header">
                <h2 class="form-title">Create Your Account</h2>
                <p class="form-subtitle">Start your journey with Codenest today</p>
            </div>
            
            <form class="signup-form" id="signupForm">
                <div class="form-group">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
                    <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="••••••••" required>
                    <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Profile Image</label>
                    <div class="avatar-upload">
                        <div class="avatar-preview" id="avatarPreview">
                            <i class="fas fa-user" style="font-size: 2rem; color: rgba(255, 255, 255, 0.5);"></i>
                        </div>
                        <button type="button" class="avatar-upload-btn" id="uploadBtn">Choose Image</button>
                        <input type="file" id="avatar" name="avatar" accept="image/*" style="display: none;">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="+1 234 567 8900">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Gender</label>
                    <div class="gender-options">
                        <div class="gender-option">
                            <input type="radio" id="male" name="gender" value="male" checked>
                            <label for="male">Male</label>
                        </div>
                        <div class="gender-option">
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>
                        <div class="gender-option">
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label for="interests" class="form-label">Coding Interests (Select multiple)</label>
                    <select id="interests" name="interests" class="form-control interests-select" multiple>
                        <option value="webdev">Web Development</option>
                        <option value="mobile">Mobile Development</option>
                        <option value="ai">Artificial Intelligence</option>
                        <option value="datascience">Data Science</option>
                        <option value="gamedev">Game Development</option>
                        <option value="devops">DevOps</option>
                        <option value="cybersecurity">Cyber Security</option>
                        <option value="blockchain">Blockchain</option>
                    </select>
                </div>
                
                <div class="form-group full-width">
                    <label for="bio" class="form-label">Short Bio (Optional)</label>
                    <textarea id="bio" name="bio" class="form-control" rows="3" placeholder="Tell us about yourself and your coding journey..."></textarea>
                </div>
                
                <div class="form-footer">
                    <div class="terms-check">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                    
                    <button type="submit" class="submit-btn">Create Account</button>
                    
                    <div class="login-link">
                        Already have an account? <a href="#">Log in</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Password toggle functionality
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        
        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#confirmPassword');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        toggleConfirmPassword.addEventListener('click', function() {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        // Avatar upload preview
        const uploadBtn = document.querySelector('#uploadBtn');
        const avatarInput = document.querySelector('#avatar');
        const avatarPreview = document.querySelector('#avatarPreview');
        
        uploadBtn.addEventListener('click', function() {
            avatarInput.click();
        });
        
        avatarInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    avatarPreview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                }
                reader.readAsDataURL(file);
            }
        });
        
        // Form submission (you can replace this with your backend handling)
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would typically send the form data to your backend
            console.log('Form submitted!');
            // For demo purposes, we'll just show an alert
            alert('Account created successfully! (This is a demo - backend integration needed)');
        });
    </script>
</body>
</html>