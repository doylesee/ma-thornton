## Project Overview
<pre>
<b>Project:</b>   M.A. Thornton
<b>Role:</b>      Web Developer
<b>Tools:</b>     Photoshop, Wordpress, PHP, MySQL, HTML, CSS, JS/jQuery, Foundation
</pre>
&nbsp;<strong><a href="https://doylesee.github.io/ma-thornton/" rel="noopener noreferrer">View project</a></strong>

<p><a href="https://doylesee.github.io/ma-thornton/" rel="noopener noreferrer"><img src="https://doylesee.github.io/ma-thornton/thumbnail.jpg" /></a></p>
<br />

## The Challenge
M.A. Thornton required a modern web presence to highlight their services and thought leadership. Our internal design team delivered beautiful Photoshop mockups that relied on seamless full-screen content transitions and viewport-triggered animations. The major engineering hurdles included:

**Strict Viewport Section Sizing**<br />
The core design for the Homepage and Services page demanded full-height sections that adapt instantly to different user screen shapes, ensuring content never clips or leaves awkward empty spaces.

**Scroll-Locked Behavior Shifts**<br />
On the Homepage, the design called for a custom layout rule: the very first time a user scrolls down from the main banner, the browser had to cleanly snap down an entire viewport section to bring the next block perfectly into focus.

**On-Demand Vector Animations**<br />
Text blocks, slide decks, and service grids needed to execute distinct animation movements (slid-outs, slow fades, or direction drops) precisely as they crossed into the viewer's focus.

**Separate Layouts for Marketing and Blog pages**<br />
While the main pages were built as a single interactive screen with sections that lock into place, the blog pages needed to act like a normal website, featuring a clean list layout to browse all articles and a simple layout for reading individual blog posts.

<br />

## Core Objectives
🟠 **Make Pages Fit Perfectly**<br />
Write a simple script that measures the user's screen size when a page loads and stretches each section to fit the screen perfectly.

🟠 **Control the Scrolling**<br />
Build a lightweight script that tracks user scrolling and moves the screen cleanly to the next section when they start scrolling down from the top banner.

🟠 **Trigger Animations at the Right Time**<br />
Code a script that watches where a user is scrolling on the page and triggers the visual animations exactly when a section comes into view.

🟠 **Ensure It Works Everywhere**<br />
Make sure the interactive menu and smooth scrolling behave flawlessly on mobile touchscreens, laptop trackpads, computer mouse, and all standard web browsers.

<br />

## My Approach & Implementation
### 1. Translating Mockups into Uniform Systems
Because the project was delivered entirely as Photoshop layers by the internal design team, I worked with the design team to build the technical foundation from scratch to handle how elements would move and scale. I extracted the elements, converting them into clean code variables.

To keep the code clean and give the design team an easy way to choose animations, I created a list of custom animation classes in CSS (`.effects--fade`, `.effects--slide-left`, `.effects--slide-down`). This separated the visual style from the javascript behavior scripts. This meant adding or tweaking animations on a new section could be done directly in the page setup without having to touch or risk breaking the core JavaScript logic.

### 2. Engineering Viewport Math & the Layout Scale Engine<br />
To guarantee that every section perfectly filled the user’s screen when the page loaded or changed size, I wrote a central layout setup function called setters() in JavaScript.

Instead of letting the browser randomly stretch text fields and break background lines, this code measures the exact height of the browser window, forces that height onto each section, and perfectly centers the text inside the section vertically. I hooked this function into a window resize listener loop (`$(window).resize`), ensuring that the design looks flawless even if a user turns their tablet sideways or resizes their desktop browser window.

### 3. Writing the Scroll Interceptor & Debounced Animation Engine
To make sure the animations ran smoothly without slowing down the browser, I designed a multi-part system that runs as the user scrolls:

**The First-Scroll Snapshot Trigger**<br />
To give the Homepage a modern feel, I wrote a piece of code that listens to the user's very first scroll input. By using a state tracker (first_scroll) alongside a 250-millisecond delay timer (scrollTimer), the script captures the user's initial downward scroll. If it detects a genuine scroll while on the main banner, it automatically triggers a click on the second navigation dot item (ul.page-nav li:nth-of-type(2) a), smoothly scrolling the visitor down to the next section.

**Smooth Viewport Class Injection**<br />
Instead of constantly forcing the browser to recalculate heavy styles, the script uses simple math to track scroll positions. As the user scrolls, a loop checks elements that have the .effects tag. If the user passes a specific point on the screen, the engine instantly applies the correct CSS animation class.

**Smooth Jumps for Navigation**<br />
I completely removed sudden jumps when clicking links. I connected all clicks on the main menu, arrow buttons, and right-side navigation dots (ul.page-nav li a) to a smooth animation function. The script stops the browser's default behavior and slides the screen down to the exact section target over a smooth 1-second curve.

### 4. Smart Navigation & Editorial Routing
To make sure the site was easy to explore, I wrote logic that changes the menu's behavior based on where a user is on the website:

**Dynamic Sticky Control**<br />
I coded a feature that watches a specific point on the page. The moment a user scrolls past this marker, the script adds a `.sticky` class to lock the main navigation bar to the top of the screen so it is always accessible.

**Asynchronous Global Link Re-routing**<br />
Because the primary menu links directly to single-page sections (like #contact-me) on the Homepage, those same links would break if clicked from a separate blog page. To fix this, I wrote an automated check script. If it finds that a visitor is on a blog page, it changes the menu link into a full, absolute web address (http://hostname#contact-me), sending the user back home seamlessly.

### 5. Quality Assurance, Responsiveness, and Compatibility
Because interactive scrolling features can easily break on mobile screens, I tested mobile devices and web browsers at every step of the project:

**Mobile Menu Adaptations**<br />
To stop the main header menu from taking up too much screen space on smaller devices, I wired the links into SlickNav. This collapses the desktop menu into a clean mobile hamburger icon that users can easily tap with their thumb.

**Loading Screen Management**<br />
To hide ugly asset loading jumps while the browser downloads heavy images, I wrapped the site in a global loading screen. The site remains hidden until the window fully finishes loading ($(window).load). At that exact moment, the loading screen fades out, the height math runs, and the page appears perfectly initialized.

**Fixing the Footer Position**<br />
On short content pages like a brief blog article, a lack of content can cause the page to end early, making the footer float awkwardly in the middle of the screen. I added a check to compare the window height directly against the blog content height. If the content is too short, the script pins the footer to the absolute bottom of the screen, keeping the layout professional.

<br />

## Results & Impact
✅ **Perfect Layout Matching**<br />
Flawlessly turned the design team's Photoshop concepts into a responsive, interactive web application that looked exactly like their original files.

✅ **Completely Custom Codebase**<br />
Avoided slow, bulky, and restrictive third-party software plugins by engineering a custom scroll tracker, height calculator, and fade system completely from scratch.

✅ **Separate Layouts for Marketing and Blog pages**<br />
While the main pages were built as a single interactive screen with sections that lock into place, the blog pages acted like a normal website, featuring a clean list layout to browse articles and a simple layout for reading individual blog posts.

✅ **Great Mobile Performance**<br />
Delivered a web application that scales down perfectly to any mobile screen size, keeping all text easy to read and all links easy to use without breaking any layouts.

<br /><strong><a href="https://doylesee.github.io/ma-thornton/" rel="noopener noreferrer">View project</a></strong>
