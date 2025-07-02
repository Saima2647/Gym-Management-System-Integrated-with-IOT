document.addEventListener('DOMContentLoaded', function () {
  const locationItems = document.querySelectorAll('.location-item');
  const footerAddress = document.getElementById('footerAddress');
  
  // Default address if nothing is selected
  const defaultAddress = 'Address: New Delhi';
  
  // Retrieve saved address from sessionStorage (if any)
  const savedAddress = sessionStorage.getItem('selectedAddress');
  
  // Update footer if saved address is found
  if (savedAddress) {
    if (footerAddress) {
      footerAddress.textContent = `Address: ${savedAddress}`;
    }
  } else {
    if (footerAddress) {
      footerAddress.textContent = defaultAddress;
    }
  }

  // Add event listeners to all location items in the navbar
  locationItems.forEach(item => {
    item.addEventListener('click', function (event) {
      event.preventDefault();  // Prevent the link's default action

      const newAddress = event.target.getAttribute('data-address');  // Get the new address from the clicked item

      // Save the new address in sessionStorage for future use
      sessionStorage.setItem('selectedAddress', newAddress);
      
      // If footer is available, update the address in it
      if (footerAddress) {
        footerAddress.textContent = `Address: ${newAddress}`;
      }
    });
  });

  // If the page does not have a footer, display selected address where needed
  if (!footerAddress) {
    const locationDisplay = document.getElementById('locationDisplay');
    if (locationDisplay && savedAddress) {
      locationDisplay.textContent = savedAddress; // Or apply it elsewhere in the page
    }
  }
});
