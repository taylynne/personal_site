<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Taylynne's Portfolio</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <php include 'submit.php' ; ?>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Welcome!</h1>
            <h2>I am Taylynne Britton</h2>
            <p class="tagline">Data Analytics & Web Professional</p>
            <p class="intro">Turning data into insights and ideas into websites</p>
        </div>
    </header>

    <main>
        <section id="about" class="section">
            <h2 class="about-title">About Me</h2>
            <div class="about-content">
                <img src="assets/images/selfie.jpg" alt="Picture of me hiking with trees in the background" class="about-image">
                <p>
                    Hey there! My name is <span class="me">Taylynne</span>. I am a data enthusiast, graphic designer, and freelance coder with a background in
                    healthcare technology. On top of my freelance work, I currently work as an Endoscope
                    Technician, where I apply problem-solving, time management, and precision daily.
                    Prior to working in endoscopy, I worked in sterile processing, where attention to detail
                    was critical.
                </p>
                <p>
                    Before working in healthcare, I was an animal control officer for the county I lived in. This job helped
                    me build strong communication and de-escalation skills that have continued to help me throughout my
                    both my professional and personal life.
                </p>
                <p>
                    Somewhere along the way, I discovered a passion for coding and data. I've since completed some small
                    personal projects, taken on freelance web development work, and continue to learn and grow my skills in
                    data analysis and visualization.
                </p>
                <p>
                    Learning is a lifelong passion of mine! I'm excited to continue my foray into the amazing world of
                    data analysis and leverage my diverse background to be more successful & provide a unique insight and
                    creative solutions to every project.
                </p>
            </div>
        </section>

        <section id="skills" class="section">
            <h2>Skills</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>

                        Programming Languages
                    </h3>
                    <ul>
                        <li>Python</li>
                        <li>SQL</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>Laravel & Livewire</li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon-large">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </h3>
                </div>
                <div class="skill-category">
                    <h3>
                        Technical Skills
                    </h3>
                    <ul>
                        <li>Data Analysis</li>
                        <li>Data Cleaning</li>
                        <li>Linux BASH</li>
                        <li>AI Prompt Engineering</li>
                        <li>WHMCS API Integration</li>
                        <li>Microsoft Office</li>
                        <li>Adobe Creative Suite</li>
                        <li>Affinity Suite</li>
                    </ul>
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon-large">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                        </svg>
                    </h3>
                </div>
                <div class="skill-category">
                    <h3>
                        Non-Technical Skills
                    </h3>
                    <ul>
                        <li>Interdepartmental Communication & Collaboration</li>
                        <li>Self-Sufficient</li>
                        <li>Team Collaboration</li>
                        <li>Problem Solving</li>
                        <li>Adaptable</li>
                        <li>Training</li>
                        <li>Leadership</li>
                    </ul>
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon-large">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183 .394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                    </h3>
                </div>
            </div>
        </section>

        <section id="projects" class="section">
            <h2>Recent Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="assets/images/weather_analysis.png" class="project-image" alt="Screenshot of the weather analysis project">
                    <h3>CodeYou Capstone Project</h3>
                    <p><a href="https://github.com/taylynne/code_you_capstone">GitHub</a></br>
                        This is my capstone project I created for the <a href="https://code-you.org/">CodeYou</a>
                        program.
                        </br>
                        I took data available from NOAA to analyze the weather trends for Lexington, KY.
                        I sifted through the data using Python, cleaned it up and saved the data as database.
                        I created some charts with the findings using the SQL database I set up.
                    </p>
                </div>

                <div class="project-card">
                    <img src="assets/images/client_area.png" class="project-image" alt="Screenshot of the client area project">
                    <h3>Webhosting Client Area & Integration</h3>
                    <p>
                        I worked with a web hosting company to update their client area per their specifications, using a TALL stack and WHMCS integrations.
                    </p>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <h2>Let's Connect!</h2>
            <h3 class="contact-title">I'd love to hear from you</h3>
            <div class="contact-content">
                <p class="contact-methods">
                    Connect with me on <a href="https://www.linkedin.com/in/taylynne-britton/">LinkedIn</a>
                    <br>
                    Check out my <a href="https://github.com/taylynne">GitHub</a>
                </p>

                <!-- Contact form with reCAPTCHA -->
                <form id="contact-form" method="post" action="#">
                    <input type="text" name="name" placeholder="Name" class="contact-input" required>
                    <input type="email" name="email" placeholder="Email" class="contact-input" required>
                    <input type="text" name="subject" placeholder="Subject" class="contact-input" required>
                    <textarea name="message" placeholder="Message" class="contact-message" required></textarea>
                    <span id="status-message"></span><br>
                    <button class="contact-btn" type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>Email me <a href="mailto:contact@taylynne.me">here!</a></p>
        <p>&copy; <?php echo date('Y'); ?> Taylynne Britton</p>
    </footer>
</body>

</html>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('submit.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                Toastify({
                    text: "Message sent successfully! I will get back to you as soon as possible.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    close: true,
                    stopOnFocus: true,
                    style: {
                        background: "linear-gradient(to right,#5829a7, #858AE3)",
                    }
                }).showToast();
                document.getElementById('status-message').textContent = "Message sent successfully! I will get back to you as soon as possible.";
                document.getElementById('status-message').style.color = "green";
                this.reset();
            })
            .catch(error => {
                document.getElementById('status-message').textContent = "Message failed to send. Please try again or email me directly.";
                document.getElementById('status-message').style.color = "rgb(124, 14, 14)";
                Toastify({
                    text: "Message failed to send. Please try again or email me directly.",
                    duration: 3000,
                    gravity: "top",
                    position: "left",
                    close: true,
                    stopOnFocus: true,
                    style: {
                        background: "linear-gradient(to right,rgb(124, 14, 14),rgb(199, 19, 19))",
                    }
                }).showToast();
            });
    });
</script>