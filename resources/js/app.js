import './bootstrap';
// Import jQuery
import $ from 'jquery';

// Import Alpine.js
import Alpine from 'alpinejs';

// Import Axios
import axios from 'axios';

// Import Toastr
import toastr from 'toastr';

import 'toastr/build/toastr.min.css';


// Initialize Alpine.js
window.Alpine = Alpine;
Alpine.start();
// Assign toastr to the global window object so it's accessible in Alpine.js
window.toastr = toastr;


