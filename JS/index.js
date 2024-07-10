// Function to load content dynamically
function loadContent(page) {
    fetch(page)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-placeholder').innerHTML = data;
        })
        .catch(error => {
            console.error('Error fetching content:', error);
        });
}

// Call the loadContent function with 'placeorder.php' as the default page
loadContent('placeorder.php');

// Function to scroll to the top of the page
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Attach click event to footer links
document.addEventListener('DOMContentLoaded', function () {
    var footerLinks = document.querySelectorAll('#site-footer a');
    footerLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            scrollToTop(); // Scroll to the top when a link in the footer is clicked
        });
    });

    // Attach submit event to the place order form
    var form = document.getElementById('placeorderform');
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission
        submitForm();
    });
});

// Function to handle form submission
function submitForm() {
    var form = document.getElementById('placeorderform');
    var formData = new FormData(form);

    fetch(form.getAttribute("action"), {
        method: form.getAttribute("method"),
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            swal({
                title: "Good job!",
                text: "Your order has been submitted successfully!",
                icon: "success"
            });
        } else {
            swal({
                title: "Error!",
                text: "Oops... Something went wrong! Please try again later.",
                icon: "error"
            });
        }
    })
    .catch(error => {
        swal({
            title: "Error!",
            text: "Oops... Something went wrong! Please try again later.",
            icon: "error"
        });
    });
}
