function addMovie() {
    alert("Add Movie feature coming soon!");
}

function deleteMovie() {
    alert("Delete Movie feature coming soon!");
}

// Simulated user registration analytics
const ctx = document.getElementById('userChart').getContext('2d');
const userChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May"],
        datasets: [{
            label: "New Users",
            data: [10, 20, 30, 40, 50],
            backgroundColor: "#FF5733"
        }]
    }
});