function submitBooking() {
    const name = document.getElementById("fullName").value;
    const model = document.getElementById("model").value;
    const date = document.getElementById("date").value;
    const location = document.getElementById("location").value;

    if (name && model && date && location) {
        alert(`✅ Test drive booked for ${model} at ${location} on ${date}.\nThank you, ${name}!`);
    } else {
        alert("⚠️ Please fill all required fields.");
    }
}