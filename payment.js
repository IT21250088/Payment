document.getElementById("submitBtn").addEventListener("click", function() {
    var cardNumber = document.getElementById("cardNumber").value;
    var expiryDate = document.getElementById("expiryDate").value;
    var cvv = document.getElementById("cvv").value;

    // Check if all the required fields are filled
    if (cardNumber && expiryDate && cvv) {
       
        var paymentStatus = document.getElementById("paymentStatus");
        paymentStatus.textContent = "Payment successful! ";
        paymentStatus.style.color = "green";

        // Delay the reload by 2 seconds (2000 milliseconds)
        setTimeout(function() {
            location.reload();
        }, 2000);
    } else {
        // If any of the required fields are empty, display an error message
        var paymentStatus = document.getElementById("paymentStatus");
        paymentStatus.textContent = "Please fill out all the fields.";
        paymentStatus.style.color = "red";
    }
});
