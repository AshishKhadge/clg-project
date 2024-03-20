let imgBox = document.getElementById("imgBox")
let qrImage = document.getElementById("qrImage")
let qrText = document.getElementById("qrText")
// Flag to indicate whether the QR code has been generated
let qrCodeGenerated = false;

function generateQR() {
    if (qrText.value.length > 0) {
        qrImage.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrText.value;
        imgBox.classList.add("show-img");
        qrCodeGenerated = true; // Set qrCodeGenerated to true after generating the QR code

    }
    else {
        qrText.classList.add('error');
        setTimeout(() => {
            qrText.classList.remove('error');
        }, 1000)
    }
}


// Function to download QR code
function downloadQR() {
    if (qrCodeGenerated) {
        if (qrImage.src && qrImage.src !== "") {
            // Create a temporary anchor element
            let downloadLink = document.createElement("a");
            downloadLink.href = qrImage.src;
            downloadLink.download = "qrcode.png";

            // Trigger a click event on the anchor element
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        }
    } else {
        // Handle error if QR code is not generated
        alert("Please generate a QR code first.");
    }
}

// Function to reset QR code
function resetQR() {
    qrImage.src = "";
    qrText.value = "";
    imgBox.classList.remove("show-img");
    qrCodeGenerated = false; // Reset qrCodeGenerated flag when QR code is reset
}


function resetQR() {
    qrImage.src = "";
    qrText.value = "";
    imgBox.classList.remove("show-img");
}



async function shortenURL() {
    const url = document.getElementById("url").value;
    const response = await fetch(`https://tinyurl.com/api-create.php?url=${encodeURIComponent(url)}`);
    
    if (response.ok) {
        const data = await response.text();
        
        // Create a div to display the shortened link
        const shortLinkContainer = document.getElementById('shortLinkContainer');
        shortLinkContainer.innerHTML = `
            <div class="short-link">
                <p class="fs-3 text-decoration-none mb-3">Shortened URL: <span class="fs-4 text-danger"> ${data}</span></p>
            </div>`;
        
        // Show the copy icon
        document.getElementById('copyShortLinkIcon').style.display = 'inline-block';
    } else {
        // Display error message if URL shortening fails
        document.getElementById('result').innerHTML = "Error shortening URL";
    }
}

// Function to copy the shortened link to the clipboard
function copyShortLink() {
    const shortLink = document.querySelector('#shortLinkContainer span');
    if (shortLink) {
        const tempInput = document.createElement('input');
        tempInput.value = shortLink.innerText;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        alert('Shortened link copied to clipboard.');
    } else {
        alert('No shortened link available.');
    }
}

// Function to navigate back to the previous page
function goBack() {
    window.history.back();
}

function resetURL() {
    url.value = "";
}


// Logout function
function logout() {
    // Perform logout actions here, such as clearing session data
    
    // Redirect to the login page
    window.location.href = 'login.php';
}

// Execute logout function when the logout button is clicked
document.getElementById('logoutButton').addEventListener('click', logout);

// Prevent accessing previous page after logout
window.addEventListener('popstate', function(event) {
    // Redirect to the login page if the fragment identifier is #logout
    if (window.location.hash === '#logout') {
        window.location.href = 'login.php';
    }
});
