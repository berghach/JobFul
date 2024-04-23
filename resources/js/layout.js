document.addEventListener('DOMContentLoaded', function () {
    const desktopSearchInput = document.querySelector('input[id="desktop-search"]');
    const mobileSearchInput = document.querySelector('input[id="mobile-search"]');
    // Function to handle search input changes
    function handleSearchInputChange(inputElement) {
        // Log the input value to the console
        console.log(inputElement.value);
        // Perform other search-related actions as needed
    }

    // Add event listeners for search input changes
    desktopSearchInput.addEventListener('input', function() {
        handleSearchInputChange(this);
    });

    mobileSearchInput.addEventListener('input', function() {
        handleSearchInputChange(this);
    });

    const mobileSearchContainer = document.getElementById('mobile-search');
    const mobileSearchTrigger = document.getElementById('mobile-search-trigger');
    const mobileSearchClose = document.getElementById('mobile-search-close');

    // Function to manage mobile search visibility
    function toggleMobileSearch() {
        mobileSearchContainer.classList.toggle('hidden');
    }
    function closeMobileSearch() {
        mobileSearchContainer.classList.add('hidden');
    }

    // Add event listeners to manage mobile search visibility
    mobileSearchTrigger.addEventListener('click', toggleMobileSearch);
    mobileSearchClose.addEventListener('click', closeMobileSearch);
});
