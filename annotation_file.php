<!-- 
@ASSESSME.USERID: ls5273
@ASSESSME.AUTHOR: Lana Sorak
@ASSESSME.ANALYZE: YES
-->

<?php 
    $title1 = "Annotation File";
    $title2 = "Annotation File";
    $style_sheet = "layout.css";
    include('assets/php/header.php');
    include('assets/php/menu.php');
?>

        <div class="main">
            <h2>Additions for the <strong>final project</strong>:</h2>
            <dl>
                <dt><strong>1.✅ Fix deductions from the midterm project - Missing comments in CSS</strong></dt>
                    <dd><strong>•</strong> I added comments to all of my CSS files. <br /> 
                    <strong>•</strong> The comments describe the purpose of the code below.</dd>

                <dt><strong> 2.✅ Build code in parts with PHP, no repeating code</strong></dt>
                    <dd><strong>•</strong> I created header.php and menu.php <br />
                    <strong>•</strong> All other PHP pages include these two PHP files as all of the have the same / similar header and menu. <br />
                    <strong>•</strong> The differences between each page is also correctly implemented. <br />
                    <strong>•</strong> header.php and menu.php are only not included in index.php because of the vast differences between this page and others.<br />
                    <strong>•</strong> There is no footer.php because non of my pages have an atcual footer. <br /><br />

                    <strong>• Location: </strong> assets/php/header.php & assets/php/menu.php </dd>

                <dt><strong> 3.✅ Web site must be responsive</strong></dt>
                    <dd><strong>•</strong> I created media queries for 4 different widths: <br />
                    <strong>•</strong> Desktop (initial) screen size <br />
                    <strong>•</strong> Medium desktop screen size <br />
                    <strong>•</strong> Tablet screen size <br />
                    <strong>•</strong> Mobile screen size </dd>

                <dt><strong> 4.✅ Comments Form</strong></dt>
                    <dd><strong>•</strong> I created a fully functional comment system with client-side and server-side validation that meets all assignment requirements. 
                    The system allows users to submit comments and displays previous submissions from a MySQL database. <br />
                    Comments page: <a href="comments.php">Comments</a> <br /><br />

                    <strong>•</strong> The form accepts two fields: <em>Name</em> and <em>Comment</em>. <br />
                    <strong>•</strong> Both fields are validated with JavaScript before the form is submitted. <br />
                    <strong>•</strong> I added client-side validation using JavaScript to ensure the form does not submit unless all fields are correctly filled in. <br />
                    <strong>•</strong> The form submission is handled on the same comments.php page using PHP. <br />
                    <strong>•</strong> Server-side validation includes trimming input and sanitizing it using htmlspecialchars() and trim(). <br />
                    <strong>•</strong> SQL Injection is prevented using MySQLi prepared statements. <br />
                    <strong>•</strong> Submitted comments are inserted into a MySQL database table called <em>comments</em> using the MySQLi API. <br />
                    <strong>•</strong> The database connection uses error handling to catch failed connections. <br />
                    <strong>•</strong> After form submission, all comments (new and previous) are displayed below the form, ordered by date (most recent first). <br /><br />

                    <strong>• Location: </strong> assets/js/validate.js & <a href="comments.php">comments.php</a></dd>


                <dt><strong> 5. ✅ An original JavaScript element <br />
                             6. ✅ A DHTML component</strong></dt>
                    <dd><strong>• Combined Implementation: </strong> I created an interactive Verona Map Explorer that combines both 
                                                                    the original JavaScript element and DHTML component requirements. <br />
                        Verona Map Explorer page: <a href="map_explorer.php">Map Explorer</a> <br /><br />
                                                             
                        <strong>• JavaScript Element Features:</strong> <br />
                        - Created an image map with clickable areas representing Verona's landmarks <br />
                        - Implemented event listeners to handle user clicks on map areas <br />
                        - Developed a responsive coordinate system that adjusts the image map areas when the window is resized <br />
                        - Created a landmark information display system that shows descriptions of areas when said areas are clicked on the map <br />
                        - Used object literals to store landmark descriptions for efficient data retrieval <br /><br />

                        <strong>• DHTML Component Features:</strong> <br />
                        - Implemented a smooth "pulse" animation (using CSS keyframes) when landmark information appears <br />
                        - Used setTimeout() to automatically remove the animation class after completion <br />
                        - Created dynamic content display that appears/disappears based on user interaction <br />
                        - Combined the animation with the JavaScript functionality to create a cohesive interactive experience <br /><br />

                        <strong>• Technical Implementation:</strong> <br />
                        - Pure JavaScript - no libraries used! <br />
                        - Responsive design that works across different screen sizes <br />
                        - Clean separation of concerns between HTML structure, CSS presentation, and JavaScript behavior <br /><br /> 

                        <strong>• Location: </strong> assets/js/map.js & asstes/css/map_explorer.css & <a href="map_explorer.php">map_explorer.php</a></dd>

                <dt><strong> 7.✅ Validation</strong></dt>
                    <dd><strong>•</strong> All pages VALIDATE <br />
                    <strong>•</strong> CSS Validator: <a href="https://jigsaw.w3.org/css-validator/" target="_blank">https://jigsaw.w3.org/css-validator/</a> <br />
                    <strong>•</strong> PHP Validator: <a href="https://www.bairesdev.com/tools/phpcodechecker/" target="_blank">https://www.bairesdev.com/tools/phpcodechecker/</a></dd>

                <dt><strong> 8. Other</strong></dt>
                    <dd><strong>•</strong> ✅ Appropriate structure <br />
                    <strong>•</strong> ✅ Page displayes well on all major web browsers <br />
                    <strong>•</strong> ✅ Created this Annotation File page </dd>
            </dl>
        </div>
        
    </body>
</html>

