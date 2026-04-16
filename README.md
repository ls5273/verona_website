# 🗺️ VERONA TRAVEL GUIDE WEBSITE

## 📌 Overview:
- The Verona Travel Guide is a comprehensive, multi-page web application dedicated to exploring the historic city of Verona, Italy. The site serves as an ultimate guide for tourists and history enthusiasts, offering rich insights into the city's culture, iconic monuments, and the legendary story of Romeo and Juliet. Beyond historical information, the website provides highly practical travel tips, interactive maps, and a fully functional user comment system backed by a relational database.

## ✨ Key Features:
- **Interactive Map Explorer:** Includes a custom JavaScript-driven image map that dynamically calculates and scales coordinates on window resize, triggering a CSS pulse animation when revealing landmark descriptions.
- **Dynamic Comments System:** Features a fully functional feedback page where users can submit and view comments. Submissions are sanitized using htmlspecialchars() and securely stored in a MySQL database using PHP and prepared statements to prevent SQL injection.
- **Robust Form Validation:** Utilizes custom client-side JavaScript to validate user input before submission, providing immediate visual feedback and alerts for missing or invalid data.
- **Modular Architecture:** Employs PHP includes for core layout components like headers and navigation menus, ensuring a streamlined and easily maintainable code structure across the entire site.
- **Responsive Navigation:** Implements a custom JavaScript toggle menu to ensure seamless navigation across desktop, tablet, and mobile devices.

## 🛠️ Tech Stack:
- **Frontend:** Semantic HTML, CSS, and Vanilla JavaScript for responsive design, interactive DHTML elements, and client-side validation.
- **Backend:** PHP and MySQL for modular layout rendering, server-side validation, and secure database management.
