<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

<style>
    body {
        font-family: 'Noto Sans KR', sans-serif;
    }
    .slideshow-container {
        position: relative;
        max-width: 100%;
        margin: auto;
    }
    .slides {
        display: none;
        width: 100%;
        height: 600px;
        object-fit: cover;
    }
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    nav ul li a {
        font-size: 1rem;
        font-family: 'Noto Sans KR', sans-serif;
        font-weight: bold;
    }
    nav ul {
        gap: 1.5rem;
    }
    nav ul li a:hover {
        color: #1D4ED8;
        transition: color 0.3s ease-in-out;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    .petition-card:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
    }
    .modal-content {
        background-color: #fff;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        animation: modalOpen 0.5s;
    }
    @keyframes modalOpen {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    .button-edit {
        color: #3b82f6; /* Tailwind text-blue-600 */
        font-weight: 600; /* Tailwind font-semibold */
    }

    .button-edit:hover {
        color: #2563eb; /* Tailwind hover:text-blue-800 */
    }

    .button-delete {
        color: #ef4444; /* Tailwind text-red-600 */
        font-weight: 600; /* Tailwind font-semibold */
    }

    .button-delete:hover {
        color: #dc2626; /* Tailwind hover:text-red-800 */
    }
    .dark-mode {
        background-color: #121212;
        color: #FFFFFF;
    }
    .dark-mode .bg-white {
        background-color: #1E1E1E;
    }
    .dark-mode .text-gray-400 {
        color: #B0B0B0;
    }
    .dark-mode .bg-gray-100 {
        background-color: #2C2C2C;
    }
    .dark-mode .bg-gray-900 {
        background-color: #121212;
    }
    .dark-mode .bg-blue-600 {
        background-color: #1E3A8A;
    }
    .dark-mode .text-gray-600 {
        color: #D1D5DB;
    }
    .dark-mode .text-black {
        color: #F9FAFB;
    }
    .dark-mode input, .dark-mode textarea, .dark-mode select {
        background-color: #374151;
        color: #D1D5DB;
    }
    .dark-mode input::placeholder, .dark-mode textarea::placeholder, .dark-mode select::placeholder {
        color: #9CA3AF;
    }
    .dark-mode .border-gray-300 {
        border-color: #4B5563;
    }
    .dark-mode .text-gray-700 {
        color: #E5E7EB;
    }

    select {
        appearance: none;
        background-color: #374151;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        color: #D1D5DB;
    }
    select:focus {
        border-color: #5b9dd9;
        box-shadow: 0 0 8px rgba(91, 157, 217, 0.6);
        outline: none;
    }
</style>
