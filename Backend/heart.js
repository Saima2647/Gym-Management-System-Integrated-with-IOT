// Function to check heart rate and trigger alert on the dashboard
function checkHeartRate(heartRate) {
    const alertBox = document.getElementById('heartRateAlert');
    alertBox.style.display = 'none'; // Hide by default

    if (heartRate > 140) {
      alertBox.style.display = 'block';
      alertBox.className = 'alert alert-danger'; // Apply danger styling
      alertBox.innerText = "Warning: Your heart rate is too high! (" + heartRate + " bpm)";
    } else if (heartRate < 60) {
      alertBox.style.display = 'block';
      alertBox.className = 'alert alert-warning'; // Apply warning styling
      alertBox.innerText = "Warning: Your heart rate is too low! (" + heartRate + " bpm)";
    }
  }

  // Function to fetch heart rate data from ThingSpeak API
  function fetchHeartRate() {
    // Replace with your actual ThingSpeak API URL
    const thingspeakUrl = 'https://api.thingspeak.com/channels/2686254/fields/1/last.json?api_key=K2CPZ4TII1V3FAGN';

    fetch(thingspeakUrl)
      .then(response => response.json())
      .then(data => {
        const heartRate = parseInt(data.field1); // Assuming 'field1' is the heart rate
        if (!isNaN(heartRate)) {
          console.log("Current Heart Rate: " + heartRate);
          checkHeartRate(heartRate); // Check the heart rate and show alert if needed
        } else {
          console.error("Invalid heart rate data.");
        }
      })
      .catch(error => {
        console.error("Error fetching heart rate data:", error);
      });
  }

  // Check heart rate every 10 seconds
  setInterval(fetchHeartRate, 100000); // 100 seconds interval